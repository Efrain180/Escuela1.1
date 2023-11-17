<?php

require 'conexion.php';

$nombre = $_POST ['nombre'];
$cuatri = $_POST ['cuatri'];


$db = new Database();

$query = $db->connect()->prepare("INSERT INTO grupos (nombre, id_cuatri )
Values (:nombre, :cuatri)");


$query->bindParam(':nombre',$nombre);
$query->bindParam(':cuatri',$cuatri);



if ($query->execute()){
    echo'<script type="text/javascript">
    alert("Registro agregado con exito");
    window.location.href="../vistas/administradoresreal/registro_carrera.php";
    </script>';

}
else {
    echo'<script type="text/javascript">
    alert("Error al agregarv el registro");
    window.location.href="../vistas/administradoresreal/registro_carrera.php";
    </script>';
};




?> 