<?php
require '../../../controladores/conexion.php';

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fecha_asistencia']) && isset($_POST['estado_alumno']) && isset($_POST['id_materia'])&& isset($_POST['id_grupo'])) {
    $fecha_asistencia = $_POST['fecha_asistencia'];
    $estados_alumnos = $_POST['estado_alumno'];
    $id_materia = $_POST['id_materia']; // Obtener el id_materia enviado desde el formulario
    $id_grupo = $_POST['id_grupo']; // Obtener el id_materia enviado desde el formulario


    $db = new Database();

    try {
        // Iniciar una transacción para realizar múltiples inserciones
        $db_conn = $db->connect();
        $db_conn->beginTransaction();

        foreach ($estados_alumnos as $id_alumno => $estado) {
            $query = $db_conn->prepare("INSERT INTO asistencias (id_alumno, id_materia, fecha_asistencia, estado) VALUES (:id_alumno, :id_materia, :fecha_asistencia, :estado)");
            $query->bindParam(':id_alumno', $id_alumno);
            $query->bindParam(':id_materia', $id_materia);
            $query->bindParam(':fecha_asistencia', $fecha_asistencia);
            $query->bindParam(':estado', $estado);
            $query->execute();
        }

        // Confirmar la transacción si todas las inserciones fueron exitosas
        $db_conn->commit();

        echo '<script type="text/javascript">
            alert("Asistencia registrada correctamente");
            window.location.href="lista_alumnos.php?id_materia=' . $id_materia . '&id_grupo=' . $id_grupo . '";
            </script>';
    } catch (PDOException $e) {
        // Revertir la transacción si hubo algún error
        $db_conn->rollBack();
        echo '<script type="text/javascript">
            alert("Error al registrar la asistencia");
            window.location.href="lista_alumnos.php?id_materia=' . $id_materia . '&id_grupo=' . $id_grupo . '";
            </script>';
    }
} else {
    // Manejo de error si no se enviaron correctamente los datos desde el formulario
    echo '<script type="text/javascript">
        alert("Error en los datos de asistencia");
        window.location.href="lista_alumnos.php?id_materia=' . $id_materia . '&id_grupo=' . $id_grupo . '";
        </script>';
}
?>
