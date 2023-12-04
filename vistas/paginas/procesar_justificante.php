<?php
require '../../controladores/conexion.php';
// Configuración para la API de Google Drive
require __DIR__ . '../../../vendor/autoload.php'; // Asegúrate de tener Composer instalado
putenv('GOOGLE_APPLICATION_CREDENTIALS=../../sistema-escolar-406404-85a3ed8fd562.json'); // Ruta de tus credenciales

// Función para verificar la conexión a internet
function checkInternetConnection() {
    $connected = @fsockopen("www.google.com", 80); 
    if ($connected){
        fclose($connected);
        return true; // Está conectado a internet
    } else {
        return false; // No hay conexión a internet
    }
}

// Verificar la conexión a internet antes de proceder con la subida del archivo
if (checkInternetConnection()) {
    // Procesar el formulario de subida de archivos y realizar la inserción en la base de datos
    $id_materia = $_POST['id_materia'] ?? null;
    $id_alumno = $_POST['id_alumno'] ?? null;

    if ($id_materia !== null && $id_alumno !== null && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['justificante'])) {
        $nombreArchivo = $_FILES['justificante']['name'];
        $rutaTemporal = $_FILES['justificante']['tmp_name'];

        $rutaDestinoLocal = '../../justificantes/' . $nombreArchivo;
        move_uploaded_file($rutaTemporal, $rutaDestinoLocal);

        // Subir el archivo a Google Drive
        $client = new Google\Client();
        $client->useApplicationDefaultCredentials();
        $client->setScopes([Google_Service_Drive::DRIVE]);
        $service = new Google_Service_Drive($client);

        $fileMetadata = new Google_Service_Drive_DriveFile(array('name' => $nombreArchivo));
        $content = file_get_contents($rutaDestinoLocal);
        $file = $service->files->create($fileMetadata, array(
            'data' => $content,
            'uploadType' => 'multipart',
            'fields' => 'id'
        ));

        $fileId = $file->id;
        $database = new Database();
        $db = $database->connect();

        $query_insert = $db->prepare('INSERT INTO justificante (id_alumno, id_materia, archivo_nombre, archivo_ruta, archivo_drive_id) VALUES (:id_alumno, :id_materia, :archivo_nombre, :archivo_ruta, :archivo_drive_id)');
        $query_insert->execute(array(':id_alumno' => $id_alumno, ':id_materia' => $id_materia, ':archivo_nombre' => $nombreArchivo, ':archivo_ruta' => $rutaDestinoLocal, ':archivo_drive_id' => $fileId));

        // Mostrar una alerta de justificante enviado
        echo '<script>alert("Justificante enviado"); window.location.href = "mostrar_asistencias.php?id_materia=' . $id_materia . '&id_alumno=' . $id_alumno . '";</script>';
    }
} else {
    echo "No hay conexión a internet. Por favor, verifica tu conexión.";
}
?>
