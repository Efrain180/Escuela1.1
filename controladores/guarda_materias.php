<?php

require 'conexion.php';

$materia = $_POST ['materia'];
$profesor = $_POST ['profesor'];
$fecha_ini = $_POST ['fecha_ini'];
$fecha_fin = $_POST ['fecha_fin'];

$db = new Database();

$query = $db->connect()->prepare("INSERT INTO materias (materia, id_profesor, per_ini, per_fin)
Values (:materia, :profesor, :fecha_ini, :fecha_fin )");


$query->bindParam(':materia',$materia);
$query->bindParam(':profesor',$profesor);
$query->bindParam(':fecha_ini',$fecha_ini);
$query->bindParam(':fecha_fin',$fecha_fin);




if ($query->execute()){
    echo'<script type="text/javascript">
    alert("Registro agregado con exito");
    window.location.href="../vistas/administradoresreal/registro_materias.php";
    </script>';

}
else {
    echo'<script type="text/javascript">
    alert("Error al agregarv el registro");
    window.location.href="../vistas/administradoresreal/registro_materias.php";
    </script>';
};




?> 