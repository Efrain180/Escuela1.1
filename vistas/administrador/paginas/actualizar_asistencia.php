<?php
require_once '../../../controladores/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_guardar'])) {
    // Verificar la existencia y validez de los datos recibidos
    if (
        isset($_POST['id_materia'], $_POST['id_grupo'], $_POST['estado_alumno'], $_POST['fecha_asistencia']) &&
        is_array($_POST['estado_alumno']) &&
        !empty($_POST['id_materia']) &&
        !empty($_POST['id_grupo']) &&
        !empty($_POST['fecha_asistencia'])
    ) {

        $id_materia = $_POST['id_materia'];
        $id_grupo = $_POST['id_grupo'];
        $fecha_asistencia = $_POST['fecha_asistencia'];
        $estados_alumnos = $_POST['estado_alumno'];

        try {
            $db = new Database();
            $pdo = $db->connect();

            // Preparar la consulta para actualizar
            $query = $pdo->prepare('UPDATE asistencias SET estado = ? WHERE id_alumno = ? AND id_materia = ? AND fecha_asistencia = ?');

            foreach ($estados_alumnos as $id_alumno => $estado) {
                // Ejecutar la consulta para cada alumno
                if ($query->execute([$estado, $id_alumno, $id_materia, $fecha_asistencia])) {
                    echo "Actualización exitosa para el alumno $id_alumno<br>";
                } else {
                    echo "Error al actualizar el alumno $id_alumno<br>";
                }
            }

            // Redireccionar después de guardar los datos
            header("Location: editar_asistencia.php?id_materia=$id_materia&id_grupo=$id_grupo");
            exit();
        } catch (PDOException $e) {
            // Manejar errores de base de datos aquí
            echo "Error en la base de datos: " . $e->getMessage();
        }
    } else {
        // Mostrar un mensaje indicando qué datos están faltando o son incorrectos
        $missing_data = [];

        if (empty($_POST['id_materia'])) {
            $missing_data[] = "ID de materia";
        }

        if (empty($_POST['id_grupo'])) {
            $missing_data[] = "ID de grupo";
        }

        if (empty($_POST['fecha_asistencia'])) {
            $missing_data[] = "Fecha de asistencia";
        }

        if (!is_array($_POST['estado_alumno']) || empty($_POST['estado_alumno'])) {
            $missing_data[] = "Datos de estado de alumno";
        }

        echo "Datos incorrectos o faltantes para guardar la asistencia. Faltan: " . implode(', ', $missing_data);
    }
}
?>
