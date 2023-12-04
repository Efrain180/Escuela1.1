<?php
require 'conexion.php';

$id_alumno = $_POST['alumno']; // Obtiene el ID del alumno desde el formulario
$id_materia = $_GET['id_materia']; // Obtiene el ID de la materia desde el parámetro GET
$id_maestro = $_GET['id_maestro']; // Obtiene el ID del maestro desde el parámetro GET
$numero_unidad = $_POST['unidad']; // Obtiene el número de unidad desde el formulario
$calificacion = $_POST['calificacion']; // Obtiene la calificación desde el formulario
$id_grupo = $_GET['id_grupo'];


$db = new Database();

$query = $db->connect()->prepare("INSERT INTO alumno_clase (id_alumno, id_materia, id_maestro, numero_unidad, calificacion)
VALUES (:id_alumno, :id_materia, :id_maestro, :numero_unidad, :calificacion)");

$query->bindParam(':id_alumno', $id_alumno);
$query->bindParam(':id_materia', $id_materia);
$query->bindParam(':id_maestro', $id_maestro);
$query->bindParam(':numero_unidad', $numero_unidad);
$query->bindParam(':calificacion', $calificacion);

if ($query->execute()) {
    echo '<script type="text/javascript">
        alert("Calificación agregada con éxito");
        window.location.href="../vistas/administrador/paginas/agregar_calificacion.php?id_materia=' . $id_materia . '&id_grupo=' . $id_grupo . '&id_maestro=' . $id_maestro . '"; // Ruta a donde redirigir después de guardar la calificación
    </script>';
} else {
    echo '<script type="text/javascript">
        alert("Error al agregar la calificación");
        window.location.href="../vistas/administrador/paginas/agregar_calificacion.php?id_materia=' . $id_materia . '&id_grupo=' . $id_grupo . '&id_maestro=' . $id_maestro . '"; // Ruta a donde redirigir si hay un error
    </script>';
}
?>
