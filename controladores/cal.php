<?php

require 'conexion.php';

$alumno = $_POST ['alumno'];
$materia = $_POST ['materia'];
$periodo = $_POST ['periodo'];
$maestro = $_POST ['maestro'];
$calificacion = $_POST ['calificacion'];


$db = new Database();

$query = $db->connect()->prepare("INSERT INTO alumno_clase (id_alumno, id_materia, id_periodo, id_maestro, calificacion)
Values (:alumno, :materia, :periodo, :maestro, :calificacion)");


$query->bindParam(':alumno',$alumno);
$query->bindParam(':materia',$materia);
$query->bindParam(':periodo',$periodo);
$query->bindParam(':maestro',$maestro);
$query->bindParam(':calificacion',$calificacion);


if ($query->execute()){
    echo'<script type="text/javascript">
    alert("calificacion agregada con exito");
    window.location.href="../vistas/administrador/paginas/calificacion.php";
    </script>';

}
else {
    echo'<script type="text/javascript">
    alert("Error al agregar la calificacion");
    window.location.href="../vistas/administrador/paginas/calificacion.php";
    </script>';
};




?> 