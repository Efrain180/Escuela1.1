<?php

require 'conexion.php';

$nombre = $_POST ['nombre'];
$apellido_p = $_POST ['apellido_p'];
$apellido_m = $_POST ['apellido_m'];
$fecha_nac = $_POST ['fecha_nac'];
$correo = $_POST ['correo'];
$contrasena = $_POST ['contrasena'];
$grupo = $_POST ['grupo'];

$db = new Database();

$query = $db->connect()->prepare("INSERT INTO login1 (nombrea, apellido1, apellido2, fechana, correo, contrasena, rol_id, id_grupo)
Values (:nombre, :apellido_p, :apellido_m, :fecha_nac, :correo, :contrasena, 2, :grupo )");


$query->bindParam(':nombre',$nombre);
$query->bindParam(':apellido_p',$apellido_p);
$query->bindParam(':apellido_m',$apellido_m);
$query->bindParam(':fecha_nac',$fecha_nac);
$query->bindParam(':correo',$correo);
$query->bindParam(':contrasena',$contrasena);
$query->bindParam(':grupo',$grupo);



if ($query->execute()){
    echo'<script type="text/javascript">
    alert("Registro agregado con exito");
    window.location.href="../vistas/administradoresreal/grupos.php";
    </script>';

}
else {
    echo'<script type="text/javascript">
    alert("Error al agregarv el registro");
    window.location.href="../vistas/administradoresreal/grupos.php";
    </script>';
};




?> 