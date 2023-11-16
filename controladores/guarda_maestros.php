<?php

require 'conexion.php';

$nombre = $_POST ['nombre'];
$apellido_p = $_POST ['apellido_p'];
$apellido_m = $_POST ['apellido_m'];
$correo = $_POST ['correo'];
$contrasena = $_POST ['contrasena'];

$db = new Database();

$query = $db->connect()->prepare("INSERT INTO maestros (nombre, apellido1, apellido2, correo, contrasena, rol)
Values (:nombre, :apellido_p, :apellido_m, :correo, :contrasena, 1 )");


$query->bindParam(':nombre',$nombre);
$query->bindParam(':apellido_p',$apellido_p);
$query->bindParam(':apellido_m',$apellido_m);
$query->bindParam(':correo',$correo);
$query->bindParam(':contrasena',$contrasena);



if ($query->execute()){
    echo'<script type="text/javascript">
    alert("Registro agregado con exito");
    window.location.href="../vistas/administradoresreal/registro_maestros.php";
    </script>';

}
else {
    echo'<script type="text/javascript">
    alert("Error al agregarv el registro");
    window.location.href="../vistas/administradoresreal/registro_maestros.php";
    </script>';
};




?> 