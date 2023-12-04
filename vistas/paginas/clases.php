<?php


session_start();

if(!isset($_SESSION['rol'])){

    header('location: ../../Login/index.php');
    
}else{
    if($_SESSION['rol']!=2){
        header('location: ../../Login/index.php');
    }
}

require('../../controladores/conexion.php');

$sesion = $_SESSION['rol'];
$sesionna = $_SESSION['nombres'];
$sesionid = $_SESSION['id'];
$sesiongrupo = $_SESSION['grupo'];

$db = new Database;


$query =  $db->connect()->prepare('SELECT * FROM login1 WHERE rol_id = :sesion AND nombrea = :sesionna AND id = :sesionid AND id_grupo = :sesiongrupo');
$query->execute(array(':sesion'=> $sesion, ':sesionna' => $sesionna, ':sesionid' => $sesionid, ':sesiongrupo' => $sesiongrupo ));
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
  <title>UTMIR | Pago </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">                                                                    
<link rel="stylesheet" href="../css/css_personal.css">
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
              <img src="../../imagenes/raptor.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
          </div>
        </li>
        <li class="nav-item px-3 d-sm-inline-block">
          <a href="../../Login/index.php" class="nav-link">Cerrar sesion</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->



        <!-- Notifications Dropdown Menu -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary1 elevation-4">
      <!-- Brand Logo -->
      <a href="http://www.utmirbis.org/" target="_blank" class="brand-link">
        <img src="../../imagenes/utmir.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">UTMIR</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../imagenes/Efrain.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="perfil.php" class="d-block"><?php  print('EST. '.$row['nombrea'].' '.$row['apellido1']) ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="../../index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Menu
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="grupos.php" class="nav-link">
               <i class="nav-icon fas fa-copy"></i>
                <p>
                  Calificaciones
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
              <a href="Informacion.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Informacion
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pago.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Pagos
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
        <div class="card card-green">
          <div class="card-header">
            <h3 class="card-title" class="text-center"> Informacion</h3>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row ">
            <div class="col-md-12">
              <h1 class="text-center">CLASES</h1>
            </div>
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
// ... (código anterior)

// Obtener dinámicamente el ID del grupo al que pertenece el alumno
$id_alumno = $_SESSION['id']; // Suponiendo que el ID del alumno está en la sesión
$id_grupo = $_SESSION['grupo']; // Suponiendo que el ID del grupo está en la sesión

// Consulta para obtener las materias asignadas al alumno en el grupo específico
$query_materias_alumno = $db->connect()->prepare('
    SELECT m.materia AS nombre_materia, CONCAT(ma.nombre, " ", ma.apellido1) AS nombre_profesor, g.nombre AS nombre_grupo, c.cuatrimestre, g.id AS id_grupo, m.id AS id_materia
    FROM materias m
    INNER JOIN grupos g ON m.id_grupos = g.id
    INNER JOIN cuatrimestre c ON g.id_cuatri = c.id
    INNER JOIN maestros ma ON m.id_profesor = ma.id
    WHERE m.id_grupos = :id_grupo AND m.id_profesor = ma.id
');



$query_materias_alumno->execute(array(':id_grupo' => $id_grupo));

// Mostrar las materias en una tabla si se encontraron materias asignadas al alumno en ese grupo
if ($query_materias_alumno->rowCount() > 0) {
    echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre de la Materia</th>
                    <th>Profesor</th>
                    <th>Grupo</th>
                    <th>Cuatrimestre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>';
    
    // Imprimir las materias encontradas en forma de tabla
    while ($row_materia_alumno = $query_materias_alumno->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
                <td>' . $row_materia_alumno['nombre_materia'] . '</td>
                <td>' . $row_materia_alumno['nombre_profesor'] . '</td>
                <td>' . $row_materia_alumno['nombre_grupo'] . '</td>
                <td>' . $row_materia_alumno['cuatrimestre'] . '</td>
                <td><a href="mostrar_asistencias.php?id_materia=' . $row_materia_alumno['id_materia'] . '&id_alumno=' . $id_alumno . '"" class="btn btn-success"      >Ver asistencias</a></td>
            </tr>';
    }

    echo '</tbody></table>';
} else {
    echo 'No se encontraron materias asignadas al alumno en ese grupo.';
}
?>


</div>
            </div>



</div> 
            </div>



            <!-- /.col -->
          </div> <!-- /.row -->

        </div>
      </div>

      <!-- /.content-header -->

      <!-- Main content -->

      <!-- /.content -->
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
        Efrain Garcia Vargas                                         
      </div>
      <!-- Default to the left -->
<strong>Universidad Tecnologica de Mineral de la Reforma</strong>                                             
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>