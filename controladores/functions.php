<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion'])) {
    if ($_POST['accion'] === 'editar_alum') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido_p = $_POST['apellido_p'];
        $apellido_m = $_POST['apellido_m'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $fecha_nac = $_POST['fecha_nac'];
        $grupo = $_POST['grupo'];

        // Procesar la imagen si se sube una nueva foto
        if (isset($_FILES['nueva_foto']) && $_FILES['nueva_foto']['error'] === UPLOAD_ERR_OK) {
            $nombre_archivo = $_FILES['nueva_foto']['name'];
            $archivo_temporal = $_FILES['nueva_foto']['tmp_name'];
            $ruta_foto = '../Fotos_alumnos/' . $nombre_archivo;

            echo "Nombre del archivo: " . $nombre_archivo . "<br>";
            echo "Ruta temporal: " . $archivo_temporal . "<br>";
            echo "Ruta destino: " . $ruta_foto . "<br>";

            if (move_uploaded_file($archivo_temporal, $ruta_foto)) {
                try {
                    $db = new Database();
                    $pdo = $db->connect();

                    // Actualizar la ruta de la foto en la base de datos
                    $query_foto = $pdo->prepare("UPDATE login1 SET ruta_foto = ? WHERE id = ?");
                    $query_foto->execute([$ruta_foto, $id]);
                } catch (PDOException $e) {
                    echo json_encode(["mensaje" => "error_db_imagen", "detalle" => $e->getMessage()]);
                    exit;
                }
            } else {
                echo json_encode("error_subida_imagen");
                exit;
            }
        }

        try {
            $db = new Database();
            $pdo = $db->connect();

            // Actualizar otros datos del alumno en la base de datos
            $query = $pdo->prepare("UPDATE login1 SET nombrea = ?, apellido1 = ?, apellido2 = ?, correo = ?, contrasena = ?, fechana = ?, id_grupo = ? WHERE id = ?");
            $query->execute([$nombre, $apellido_p, $apellido_m, $correo, $contrasena, $fecha_nac, $grupo, $id]);

            // Respuesta JSON
            if ($query->rowCount() > 0) {
                echo json_encode("correcto");
            } else {
                echo json_encode("sin_cambios");
            }
        } catch (PDOException $e) {
            echo json_encode(["mensaje" => "error_db", "detalle" => $e->getMessage()]);
        }
    }
}
?>
