<?php
require 'conexion.php';

$json = file_get_contents('php://input');
$datos = json_decode($json, true);

if (is_array($datos)) {
    $id_transaccion = $datos['detalles']['id'];
    $cantidad = $datos['detalles']['purchase_units'][0]['amount']['value'];
    $fecha = $datos['detalles']['update_time'];
    $status = $datos['detalles']['status'];
    $fecha_nueva = date('Y-m-d H:i:s', strtotime($fecha)); // Corrección: 'Y' en mayúsculas
    $correo = $datos['detalles']['payer']['email_address'];
    $id_cliente = $datos['detalles']['payer']['payer_id'];
    
    $db = new Database();

    $query = $db->connect()->prepare("INSERT INTO pagos (id_transaccion, correo, fecha, status, cantidad)
    VALUES (?, ?, ?, ?, ?)");

    $query->execute([$id_transaccion, $correo, $fecha_nueva, $status, $cantidad]);

    echo "Datos de pago guardados exitosamente.";
} else {
    echo "Error al procesar los datos.";
}
?>



