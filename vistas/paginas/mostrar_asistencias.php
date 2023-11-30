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
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
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
              <a href="#" class="nav-link">
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
              <h1 class="text-center">ASISTENCIAS</h1>
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
// Obtener los IDs de materia y alumno desde los parámetros
$id_materia = $_GET['id_materia'] ?? null;
$id_alumno = $_GET['id_alumno'] ?? null;

// Validar parámetros
if ($id_materia !== null && $id_alumno !== null) {
    $query_fechas = $db->connect()->prepare('SELECT fecha_asistencia, estado FROM asistencias WHERE id_alumno = :id_alumno AND id_materia = :id_materia ORDER BY fecha_asistencia');
    $query_fechas->execute(array(':id_alumno' => $id_alumno, ':id_materia' => $id_materia));

    // Verificar si hay registros
    if ($query_fechas->rowCount() > 0) {
        // Array para almacenar fechas y estados
        $fechas = array();
        $estados = array();

        // Llenar los arrays con fechas y estados
        while ($row = $query_fechas->fetch(PDO::FETCH_ASSOC)) {
            $fechas[] = $row['fecha_asistencia'];
            $estados[] = $row['estado'];
        }

        // Cálculo de valores
        $total_clases = count($fechas);
        $asistencias = 0;
        $faltas = 0;
        $retardos = 0;

        // Conteo de asistencias, faltas y retardo restante
        foreach ($estados as $estado) {
            if ($estado == 'asistio') {
                $asistencias++;
            } elseif ($estado == 'no_vino') {
                $faltas++;
            } elseif ($estado == 'retardo') {
                $retardos++;
            }
        }

        // Si hay más de 2 retardos, se convierten a asistencias y una falta
        while ($retardos >= 3) {
            $asistencias += 2;
            $faltas += 1;
            $retardos -= 3;
        }

        // Generar la tabla principal con ajuste en el ancho y manejo de fechas
        echo '<div class="table-responsive">';
        echo '<table class="table table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Fecha</th>';

        // Mostrar fechas con un máximo de 10 caracteres para evitar deformación
        foreach ($fechas as $fecha) {
            echo '<td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">' . $fecha . '</td>';
        }
        echo '<td><b>Total Clases</b></td><td><b>Asistencias</b></td><td><b>% Asistencias</b></td><td><b>Faltas</b></td><td><b>Retardos</b></td></tr>';
        echo '</thead>';
        echo '<tbody>';

        // Mostrar estados y resultados de cálculos
        echo '<tr><th>Estado</th>';
        foreach ($estados as $estado) {
            if ($estado == 'asistio') {
                echo '<td style="background-color: lightgreen;">A</td>';
            } elseif ($estado == 'no_vino') {
                echo '<td style="background-color: #FFC0CB;">F</td>';
            } elseif ($estado == 'retardo') {
                echo '<td style="background-color: yellow;">R</td>';
            } else {
                echo '<td>' . $estado . '</td>';
            }
        }
        echo '<td><b>' . $total_clases . '</b></td>';
        echo '<td><b>' . $asistencias . '</b></td>';
        echo '<td><b>' . ($total_clases > 0 ? round(($asistencias / $total_clases) * 100, 2) : 0) . '%</b></td>';
        echo '<td><b>' . $faltas . '</b></td>';
        echo '<td><b>' . $retardos . '</b></td></tr>';
        
// Cálculo de valores para el porcentaje considerando los retardos como asistencias acumuladas
$asistencias_reales = $asistencias + $retardos;
$porcentaje_asistencias_reales = ($asistencias_reales / $total_clases) * 100;

// Generar tabla para porcentaje de asistencias reales con mensaje y color según el porcentaje
echo '<br><br>';
echo '<div class="table-responsive" style="width: 50%;">'; // Modificación del estilo para limitar el ancho al 50%
echo '<table class="table table-bordered">';
echo '<tbody>';
if ($porcentaje_asistencias_reales >= 80) {
    echo '<tr><th>Porcentaje de Asistencias</th><td class="text-success">Con derecho a examen</td></tr>';
    echo '<tr><th>%</th><td class="text-success">' . round($porcentaje_asistencias_reales, 2) . '%</td></tr>';
} else {
    echo '<tr><th>Porcentaje de Asistencias</th><td class="text-danger">Sin derecho a examen</td></tr>';
    echo '<tr><th>%</th><td class="text-danger">' . round($porcentaje_asistencias_reales, 2) . '%</td></tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';
echo '<br><br>';

        

        echo '<form action="procesar_justificante.php" method="post" enctype="multipart/form-data">';
        echo '<h3>Subir justificante:</h3>';
        echo '<input type="file" name="justificante" id="justificante" required>';
        echo '<input type="hidden" name="id_materia" value="' . $id_materia . '">';
        echo '<input type="hidden" name="id_alumno" value="' . $id_alumno . '">';
        echo '<input type="submit" value="Subir Justificante" name="submit">';
        echo '</form>';

    } else {
        echo "No hay registros de asistencias para este alumno en esta materia.";
    }

    
} else {
    echo "Falta el ID de materia o el ID de alumno.";
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
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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