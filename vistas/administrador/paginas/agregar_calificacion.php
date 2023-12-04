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
    <title>UTMIR | Agregar Calificacion</title>

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
                <a href="clases.php" class="nav-link">
                   <i class="nav-icon fas fa-copy"></i>
                      <p>
                          Clases
                      </p>
                  </a>
            </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
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
                        <h3 class="card-title" class="text-center"> Calificacion</h3>
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

                            <div class="card-header bg-green">
                                <h1 class="text-center">Calificacion</h1>
                            </div>

                            <div class="card-body ">

                            <div class="card-body">
                <div class="table-responsive">
                <button type="button" class="btn btn-success" id="mostrarFormulario">
                    <span class="glyphicon glyphicon-plus"></span> Agregar Calificacion<i class="fa fa-plus"></i> </a></button>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Esconder el formulario al principio
        $("#registro").hide();

        // Mostrar el formulario al hacer clic en el botón "Agregar"
        $("#mostrarFormulario").click(function(){
            $("#registro").toggle(); // Alternar la visibilidad del formulario
        });
    });
</script>

            <?php 
             include "formulario_cal.php"; ?>
              </div>



              
<?php

$db = new Database;

$id_grupo = $_GET['id_grupo'] ?? null;
$id_maestro = $_GET['id_maestro'] ?? null;


if ($id_grupo !== null) {
    $query = "SELECT l.nombrea AS 'Nombre del Alumno', ";
    
    // Obtener las unidades disponibles
    $query_unidades = $db->connect()->prepare("SELECT DISTINCT numero_unidad FROM alumno_clase");
    $query_unidades->execute();
    $unidades = $query_unidades->fetchAll(PDO::FETCH_COLUMN);

    $query .= implode(', ', array_map(function($unidad) {
        return "IFNULL(MAX(CASE WHEN ac.numero_unidad = $unidad THEN ac.calificacion END), 'S/C') AS 'Unidad $unidad'";
    }, $unidades));

    // Agregar columna para la calificación final
    $query .= ", IFNULL(ROUND(AVG(IF(ac.numero_unidad IN (" . implode(', ', $unidades) . "), ac.calificacion, NULL)), 2), 'S/C') AS 'Calificación Final'";

    $query .= " FROM login1 l
               LEFT JOIN alumno_clase ac ON l.id = ac.id_alumno AND ac.id_materia = :id_materia
               WHERE l.id_grupo = :id_grupo
               GROUP BY l.id";

    $stmt = $db->connect()->prepare($query);
    $stmt->bindValue(':id_materia', $id_materia, PDO::PARAM_INT);
    $stmt->bindValue(':id_grupo', $id_grupo, PDO::PARAM_INT);
    $stmt->execute();
}
?>

<!-- ... (código PHP existente) ... -->

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre del Alumno</th>
                <?php foreach ($unidades as $unidad) : ?>
                    <th>Unidad <?php echo $unidad; ?></th>
                <?php endforeach; ?>
                <th>Calificación Final</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td><?php echo $row['Nombre del Alumno']; ?></td>
                    <?php foreach ($unidades as $unidad) : ?>
                        <?php $calificacion = $row["Unidad $unidad"] !== 'S/C' ? number_format($row["Unidad $unidad"], 2) : $row["Unidad $unidad"]; ?>
                        <td><?php echo $calificacion; ?></td>
                    <?php endforeach; ?>
                    <?php 
                        $calif_final = $row['Calificación Final'] !== 'S/C' ? number_format($row['Calificación Final'], 2) : $row['Calificación Final']; 
                        $color = $calif_final < 8 ? 'red' : 'green'; // Determinar el color
                    ?>
                    <td style="color: <?php echo $color; ?>"><?php echo $calif_final; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>



              </div>

                           

                        </div>

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