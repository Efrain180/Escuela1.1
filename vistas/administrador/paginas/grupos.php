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

$db = new Database;


$query =  $db->connect()->prepare('SELECT * FROM maestros WHERE rol = :sesion AND nombre = :sesionna ');
$query->execute(array(':sesion' => $sesion, ':sesionna' => $sesionna));
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
  <title>UTMIR | Registros</title>

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
            <a href="perfil.php"  class="d-block"><?php print('ADM. ' . $row['nombre'] . ' ' . $row['apellido1']) ?></a>
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
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Registrar alumno
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
        <div class="card card-green">
          <div class="card-header">
            <h3 class="card-title" class="text-center"> Registros</h3>
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

              <div class="card-header bg-orange">
                <h1 class="text-center">Alumnos</h1>
              </div>

              <div class="card-body ">

                <form id="registro" name="registro" method="POST" action="../../../controladores/guarda.php" autocomplete="off" class=" row g-3">

                  <div class="row mb-3">
                    <div class="col-md-4 sm-col-12">
                      <label for="Nombre" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-upside-down" viewBox="0 0 16 16">
                          <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm0-1a8 8 0 1 1 0 16A8 8 0 0 1 8 0z" />
                          <path d="M4.285 6.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5z" />
                        </svg> Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" autofocus required>

                    </div>

                    <div class="col-md-4 sm-col-12 ">
                      <label for="Apellido paterno" class="form-label" class="bi bi-emoji-smile-upside-down"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z" />
                        </svg> Apellido paterno</label>
                      <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Tu apellido paterno" required>

                    </div>

                    <div class="col-md-4 sm-col-12 ">
                      <label for="Apellido materno" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                          <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                        </svg> Apellido materno</label>
                      <input type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Tu apellido materno" required>

                    </div>
                  </div>


                  <div class=" row mb-3 ">

                  <div class="col-md-4 sm-col-12">
                      <label for="correo" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                        </svg> Correo electronico</label>
                      <input type="email" class="form-control" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>

                    </div>

                  <div class="col-md-4 sm-col-12">
                      <label for="correo" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                        </svg> Contraseña</label>
                      <input type="text" class="form-control" id="contrasena" name="contrasena" placeholder="tu contraseña" required>

                    </div>

                    <div class="col-md-4 sm-col-12 ">
                      <label for="Fecha de nacimiento" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                          <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg> Fecha de nacimiento</label>
                      <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Tu fecha de nacimiento" required>

                    </div>


                  </div>



                  <div class="col-md-12 sm-col-12">
                    <button id="guarda" name="guarda" class="btn btn-success" type="submit">Guardar</button>
                  </div>



                </form>
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