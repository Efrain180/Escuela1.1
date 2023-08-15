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
$sesionna= $_SESSION['nombres'];

$db = new Database;


$query =  $db->connect()->prepare('SELECT * FROM login1 WHERE rol_id = :sesion AND nombrea = :sesionna ');
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
              <h1 class="text-center">INFORMACION PAGOS</h1>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="content">
        <div class="container-fluid">
        <?php
// Asignar un valor a la variable $pago antes de la línea 191
$pago = 10; // Por ejemplo, aquí le estoy asignando el valor 100

// Resto de tu código aquí

// Línea 191 donde utilizas la variable $pago
echo "<h2>El pago es de " . $pago . "</h2>";
?>
          <div class="row">
            <div class="col-md-12">
            <div class="tab-pane active" id="pago">

        



<script src="https://www.paypal.com/sdk/js?client-id=ASOd9M3cj2Qy9nKCuGomPwP1hKN_yRPyy05GrV8_mp98wGRJfMODDowLJ-WU1kb9HgTVtfExBWAJH7QW"></script>
<div id="paypal-button-container"></div>
 <script>
                paypal.Buttons({
                  style:{

                  },

                  createOrder: function(data, actions){
                    return actions.order.create({
                      purchase_units: [{
                        amount: {
                          value: <?php echo $pago ?>
                         }
                      }]
                    });

                  },

                  onApprove: function(data, actions) {
                    let url = '../../controladores/captura.php'
                    actions.order.capture().then(function(detalles){
                      window.location.href = "procesado.php";

                      return fetch(url, { 
                        method: 'POST',
                        headers: {
                          'content-type': 'application/json'
                        },

                        body: JSON.stringify({
                          detalles: detalles
                        })
                      })


                    });


                  },



                  
                  onCancel: function(data){
                    alert('Pago Cancelado');
                    console.log(data);
                  }

                }).render('#paypal-button-container');
 </script>




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