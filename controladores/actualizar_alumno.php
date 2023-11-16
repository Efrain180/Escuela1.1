<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'], $_POST['nombre'], $_POST['apellido_p'], $_POST['apellido_m'], $_POST['fecha_nac'], $_POST['correo'], $_POST['contrasena'], $_POST['grupo'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido_p = $_POST['apellido_p'];
        $apellido_m = $_POST['apellido_m'];
        $fecha_nac = $_POST['fecha_nac'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $grupo = $_POST['grupo'];

        $db = new Database();
        $query = $db->connect()->prepare("UPDATE login1 SET nombrea = :nombre, apellido1 = :apellido_p, apellido2 = :apellido_m, fechana = :fecha_nac, correo = :correo, contrasena = :contrasena, id_grupo = :grupo WHERE id = :id");
        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':apellido_p', $apellido_p);
        $query->bindParam(':apellido_m', $apellido_m);
        $query->bindParam(':fecha_nac', $fecha_nac);
        $query->bindParam(':correo', $correo);
        $query->bindParam(':contrasena', $contrasena);
        $query->bindParam(':grupo', $grupo);
        $query->bindParam(':id', $id);

        if ($query->execute()) {
            header("Location: ../vistas/administradoresreal/grupos.php");
            exit();
        } else {
            echo "Error al actualizar el estudiante.";
        }
    } else {
        echo "Todos los campos son requeridos.";
    }
} else {
    echo "Acceso denegado.";
}
?>
