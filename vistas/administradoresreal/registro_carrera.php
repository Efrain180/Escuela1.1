<?php
session_start();

if (!isset($_SESSION['rol'])) {

  header('location: ../../Login/index.php');
} else {
  if ($_SESSION['rol'] != 3) {
    header('location: ../../Login/index.php');
  }
}

require('../../controladores/conexion.php');

$sesion = $_SESSION['rol'];
$sesionna = $_SESSION['nombres'];

$db = new Database;


$query =  $db->connect()->prepare('SELECT * FROM admini WHERE rol = :sesion AND nombre = :sesionna ');
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
  <title>UTMIR | Registros de Carrera </title>

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
              <a href="administradores.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Menu
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="grupos.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                Registro Alumnos
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="registro_maestros.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                Registro Maestros
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                Registro Carrera
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="registro_materias.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                Registro Materias
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
            <h3 class="card-title" class="text-center"> Registro Carrera</h3>
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
            <button type="button" class="btn btn-success" id="mostrarFormulario">
                    <span class="glyphicon glyphicon-plus"></span> Agregar carrera <i class="fa fa-plus"></i> </a></button>
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

            <?php include "form_carrera.php"; ?>
              </div>

              

              <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cuatrimestre</th>
                                <th>Fecha</th>


                            </tr>
                        </thead>

                        <tbody>
                        <?php
    require_once("../../controladores/conexion.php");
    $db = new Database;

    $query = $db->connect()->prepare('SELECT g.*, g.id_cuatri AS cuatrimestre, c.cuatrimestre 
    FROM grupos g 
    LEFT JOIN cuatrimestre c ON g.id_cuatri = c.id');
    $query->execute();
    while ($fila = $query->fetch(PDO::FETCH_ASSOC)) :
    ?>
        <tr>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['cuatrimestre']; ?></td>
            <td><?php echo $fila['fecha']; ?></td>

                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo $fila['id']; ?>">
                                            <i class="fa fa-edit "></i>
                                        </button>

                                    </td>
                                </tr>
                                <?php include "editar_carrera.php"; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <script>
    function confirmarEliminacion() {
        return confirm("¿Estás seguro de que deseas eliminar este registro?");
    }
</script>

                    </script>


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