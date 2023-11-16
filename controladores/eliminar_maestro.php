<?php
require_once("conexion.php"); // Asegúrate de incluir el archivo que contiene la clase Database

$database = new Database();
$pdo = $database->connect(); // Obtenemos la conexión PDO

if ($pdo) {
    // Verificamos si se recibió un ID válido a través de $_GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        try {
            // Preparamos la consulta con parámetros para evitar SQL injection
            $statement = $pdo->prepare("DELETE FROM maestros WHERE id = :id");
            $statement->bindParam(':id', $id);
            $statement->execute();

            header('Location: ../vistas/administradoresreal/registro_maestros.php?m=1');
            exit();
        } catch (PDOException $e) {
            echo "Error al eliminar el registro: " . $e->getMessage();
        }
    } else {
        echo "ID no proporcionado o inválido.";
    }
} else {
    echo "Error de conexión a la base de datos.";
}
?>
