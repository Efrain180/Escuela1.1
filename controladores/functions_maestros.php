<?php
require_once 'conexion.php'; // Reemplaza 'ruta_a_tu_database.php' con la ruta correcta de tu archivo Database.php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion'])) {
    // Verificar si la acción es para editar_alum
    if ($_POST['accion'] === 'editar_maestro') {
        // Obtener los datos del formulario
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido_p = $_POST['apellido_p'];
        $apellido_m = $_POST['apellido_m'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        try {
            // Crear una instancia de la clase Database
            $db = new Database();
            // Obtener la conexión
            $pdo = $db->connect();

            // Preparar la consulta para actualizar el registro del alumno
            $query = $pdo->prepare("UPDATE maestros SET nombre = ?, apellido1 = ?, apellido2 = ?, correo = ?, contrasena = ?  WHERE id = ?");
            
            // Ejecutar la consulta con los datos proporcionados
            $query->execute([$nombre, $apellido_p, $apellido_m, $correo, $contrasena, $id]);

            // Verificar si se realizó la actualización correctamente
            if ($query->rowCount() > 0) {
                // La actualización se realizó con éxito
                echo json_encode("correcto");
            } else {
                // No se pudo actualizar (puede que no haya cambios)
                echo json_encode("sin cambios");
            }
        } catch (PDOException $e) {
            // Manejar cualquier error de la base de datos
            echo json_encode("error_db");
        }
    }
}
?>