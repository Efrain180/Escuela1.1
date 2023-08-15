<?php
session_start();

if(!isset($_SESSION['rol'])){

    header('location: ../../Login/index.php');
    
}else{
    if($_SESSION['rol']!=1){
        header('location: ../../Login/index.php');
    }
}

require('../../controladores/conexion.php');

$sesion = $_SESSION['rol'];
$sesionna= $_SESSION['nombres'];

$db = new Database;


$query =  $db->connect()->prepare('SELECT * FROM maestros WHERE rol = :sesion AND nombre = :sesionna ');
$query->execute(array(':sesion'=> $sesion, ':sesionna' => $sesionna));
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
  <title>UTMIR | Menu</title>

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
        <li class="nav-item d-sm-inline-block">
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
          <a href="../../Login/index.php"  class="nav-link">Cerrar sesion</a>
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
            <a href="paginas/perfil.php"  class="d-block"><?php  print('ADM. '.$row['nombre'].' '.$row['apellido1']) ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="paginas/grupos.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                Registrar alumno
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="paginas/calificacion.php" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Agregar calificacion
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="paginas/Informacion.php" class="nav-link">
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
      <!-- Content Header (Page header) -->
      <div class="col-md-12">
        <div class="card card-orange">
          <div class="card-header">
            <h3 class="card-title" class="text-center"> Menu</h3>
          </div>
        </div>
      </div>

      <div class="content-header">
        <div class="container-fluid">
          <div class="row ">
            <div class="col-md-12">
              <h1 class="text-center">¿QUIENES SOMOS?</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-6">
              <div class="card card-green card-outline">
                <div class="card-body">
                  <h5 class="card-title " >
                    MISION
                  </h5>

                  <p class="card-text">
                    Ofrecer un entorno favorable donde las alumnas y los alumnos egresadas y egresados de la educación media superior, desarrollen bajo el contexto del modelo Técnico Superior Universitario, las competencias que les permitan aplicar lo aprendido, ser flexibles y adaptables a los diversos cambios del entorno socioeconómico de la zona de influencia, introduciendo una novedosa oferta educativa con sentido humano e integral, desarrollando el aspecto profesional y personal enfocado en valores y capacidad de análisis y resolución de problemas basada en un conocimiento incluyente que facilite la inserción en el ámbito laboral y el respeto activo al medio ambiente.
                  </p>
                  <div clas="row">
                    <div class="col-md-4">
                      <img src="../../imagenes/gal_5.jpg" class="img-fluid" >
                    </div>

                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="card card-green card-outline">
                <div class="card-body">
                  <h5 class="card-title">
                    VISION
                  </h5>

                  <p class="card-text">
                  En el año 2019, la Universidad Tecnológica de Mineral de la Reforma será una de las mejores referencias en educación superior en la zona, mediante consolidación institucional y la constante búsqueda de formar profesionales integrales y competentes quienes una vez egresados al siempre cambiante mundo laboral, logren enfrentar satisfactoriamente cualquier tarea como un reto de mejora, comprendiendo no solo el proceso para resolver un problema sino ser conscientes de los efectos, denotando la calidad humana y el compromiso social como los pilares adquiridos durante su preparación en esta Universidad, necesarios para mejorar las condiciones sociales del entorno inmediato y reducir las adversidades propias de los retos mundiales actuales.
                  </p>
                </div>
              </div>
            </div>

            <!-- /.col -->
          </div> <!-- /.row -->
          
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
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>

