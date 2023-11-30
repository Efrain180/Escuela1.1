<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$fecha_nac = $_POST['fecha_nac'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$grupo = $_POST['grupo'];

// Procesar la imagen
if(isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $nombre_archivo = $_FILES['foto']['name'];
    $archivo_temporal = $_FILES['foto']['tmp_name'];
    $ruta_foto = '../Fotos_alumnos/' . $nombre_archivo;

    // Mover el archivo temporal a la ubicación deseada
    if(move_uploaded_file($archivo_temporal, $ruta_foto)) {
        $db = new Database();

        $query = $db->connect()->prepare("INSERT INTO login1 (nombrea, apellido1, apellido2, fechana, correo, contrasena, rol_id, id_grupo, ruta_foto)
        Values (:nombre, :apellido_p, :apellido_m, :fecha_nac, :correo, :contrasena, 2, :grupo, :ruta_foto)");

        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':apellido_p', $apellido_p);
        $query->bindParam(':apellido_m', $apellido_m);
        $query->bindParam(':fecha_nac', $fecha_nac);
        $query->bindParam(':correo', $correo);
        $query->bindParam(':contrasena', $contrasena);
        $query->bindParam(':grupo', $grupo);
        $query->bindParam(':ruta_foto', $ruta_foto);

        if ($query->execute()) {
            echo '<script type="text/javascript">
                alert("Registro agregado con éxito");
                window.location.href="../vistas/administradoresreal/grupos.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
                alert("Error al agregar el registro");
                window.location.href="../vistas/administradoresreal/grupos.php";
            </script>';
        }
    } else {
        echo "Error al mover el archivo";
    }
} else {
    echo "Error al cargar la imagen. Por favor, verifica que seleccionaste un archivo.";
}
?>
