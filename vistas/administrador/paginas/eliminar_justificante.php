<?php
require('../../../controladores/conexion.php');

$id_materia = $_GET['id_materia'] ?? null;
$id_grupo = $_GET['id_grupo'] ?? null;
$id_profesor = $_GET['id_profesor'] ?? null;

// Verifica si se envió el ID del justificante a eliminar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_justificante'])) {
    $id_justificante = $_POST['id_justificante'];

    // Realiza la conexión a la base de datos
    $database = new Database();
    $db = $database->connect();

    // Prepara y ejecuta la consulta para eliminar el justificante por su ID
    $query_delete = $db->prepare('DELETE FROM justificante WHERE id = :id_justificante');
    $query_delete->execute(array(':id_justificante' => $id_justificante));

    // Redirecciona a una página o realiza alguna acción después de eliminar el justificante
    header('Location: tabla_asistencias.php?id_materia=' . $id_materia. '&id_grupo=' . $id_grupo . 'id_profesor=' . $id_profesor . '');
    exit();
} else {
    // Manejo de error si no se proporcionó el ID del justificante a eliminar
    echo "No se proporcionó el ID del justificante a eliminar.";
}
?>
