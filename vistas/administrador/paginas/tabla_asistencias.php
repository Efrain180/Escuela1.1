<?php
session_start();


if (!isset($_SESSION['rol'])) {

    header('location: ../../../Login/index.php');
} else {
    if ($_SESSION['rol'] != 1) {
        header('location: ../../../Login/index.php');
    }
}

require('../../../controladores/conexion.php');

$sesion = $_SESSION['rol'];
$sesionna = $_SESSION['nombres'];
$sesionid = $_SESSION['id'];



$db = new Database;


$query =  $db->connect()->prepare('SELECT * FROM maestros WHERE rol = :sesion AND nombre = :sesionna AND id = :sesionid');
$query->execute(array(':sesion' => $sesion, ':sesionna' => $sesionna, 'sesionid' => $sesionid));
$row = $query->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTMIR | Tus clases </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://www.facebook.com/utmineral" target="_blank" class="nav-link" class="btn-red-social"><i class="fab fa-facebook-f"> Facebook</i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://www.instagram.com/ut_mineral_de_la_reforma/?hl=es" target="_blank" class="nav-link" class="btn-red-social"><i class="fab fa-instagram"> Instagram</i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://twitter.com/ut_mineral" target="_blank" class="nav-link" class="btn-red-social"><i class="fab fa-twitter"> Twitter</i></a>
                </li>
                <li class="nav-item  d-sm-inline-block">
                    <p class="nav-link">WE ARE RAPTORS</p>
                </li>
                <li>
                    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                        <div class="image">
                            <img src="../../../imagenes/raptor.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                    </div>
                </li>
                <li class="nav-item px-3 d-sm-inline-block">
                    <a href="../../../Login/index.php" class="nav-link">Cerrar sesion</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->



                <!-- Notifications Dropdown Menu -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="http://www.utmirbis.org/" target="_blank" class="brand-link">
                <img src="../../../imagenes/utmir.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">UTMIR</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../../imagenes/Efrain.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="perfil.php"  class="d-block"><?php print('MTR. ' . $row['nombre'] . ' ' . $row['apellido1']) ?></a>
                        
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="../admin.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Menu
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Clases
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="calificacion.php" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Agregar calificacion
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Informacion.php" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Informacion
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div class="col-md-12">
                <div class="card card-orange">
                    <div class="card-header">
                        <h3 class="card-title" class="text-center"> Clases</h3>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row ">


                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>


            <div class="content">
                <div class="container-fluid">

                        <div class="container">
                        <div class="card">
              </div>

              

              <div class="card-body">
                <div class="table-responsive">

                <?php
// Obtener el ID de la materia (puedes pasarlo por GET, POST, etc.)
$id_materia = $_GET['id_materia'] ?? null;

if ($id_materia !== null) {
    $database = new Database();
    $db = $database->connect();

    // Consulta para obtener los justificantes enviados por los alumnos de esa materia
    $query = $db->prepare('SELECT login1.nombrea AS nombre_alumno, apellido1 AS apellidos1, apellido2 AS apellidos2, justificante.id AS id_justificante, justificante.archivo_nombre, justificante.archivo_ruta, materias.materia AS nombre_materia
                            FROM justificante
                            INNER JOIN login1 ON justificante.id_alumno = login1.id
                            INNER JOIN materias ON justificante.id_materia = materias.id
                            WHERE justificante.id_materia = :id_materia');
    $query->execute(array(':id_materia' => $id_materia));

    // Verificar si se encontraron justificantes
    if ($query->rowCount() > 0) {
        // Mostrar los resultados en una tabla con estilos similares al otro bloque
        echo '<table class="table table-bordered">';
        echo '<thead class="thead-dark"><tr><th>Alumno</th><th>Materia</th><th>Archivo del Justificante</th><th>Acciones</th></tr></thead>';
        echo '<tbody>';
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $nombreArchivo = $row['archivo_nombre'];
            $rutaArchivo = $row['archivo_ruta'];
            $nuevaRuta = '../' . $rutaArchivo; // Añade una carpeta más a la ruta
            $idJustificante = $row['id_justificante'];

            echo '<tr>';
            echo '<td>' . $row['nombre_alumno'] . ' ' . $row['apellidos1'] . ' ' . $row['apellidos2'] .'</td>';
            echo '<td>' . $row['nombre_materia'] . '</td>';
            echo '<td><a href="' . $nuevaRuta . '" target="_blank">' . $nombreArchivo . '</a></td>';
            echo '<td><form method="post" action="eliminar_justificante.php">
            <input type="hidden" name="id_justificante" value="' . $idJustificante . '">
            <input type="submit" value="Eliminar" class="btn btn-danger">
            </form></td>';
            echo '</tr>';
            $hayJustificantes = true; // Se encontraron justificantes
        }
        echo '</tbody>';
        echo '</table>';

        // Notificación si se encontraron justificantes
        if ($hayJustificantes) {
            echo '<div class="alert alert-success" role="alert">Se encontraron nuevos justificantes.</div>';
        }
    } else {
        echo 'No se encontraron justificantes.';
    }
} else {
    echo "Falta el ID de materia.";
}
?>








              </div>

                           

                        </div>

                    </div>





                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>