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
if (isset($_GET['id_materia']) && isset($_GET['id_grupo'])) {
    $id_materia = $_GET['id_materia'];
    $id_grupo = $_GET['id_grupo'];

    echo '<td><a href="lista_alumnos.php?id_materia=' . $id_materia . '&id_grupo=' . $id_grupo . '" class="btn btn-primary">Regresar</a></td><br><br>';

    echo '<form method="post" action="">'; // Mantenemos action="" para enviar a la misma página
    echo '<input type="hidden" name="id_materia" value="' . $id_materia . '">'; // Campo oculto para id_materia
    echo '<input type="hidden" name="id_grupo" value="' . $id_grupo . '">'; // Campo oculto para id_grupo

    echo '<div>';
    echo '<label for="fecha_asistencia" class="form-label"> Fecha Asistencia</label>';
    echo '<input type="date" class="form-control" id="fecha_asistencia" name="fecha_asistencia" placeholder="Fecha Asistencia" required>';
    echo '<input type="submit" name="submit_filtrar" value="Filtrar por Fecha">';
    echo '</div>';
    echo '</form>';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_filtrar'])) {
        $fecha_asistencia = $_POST['fecha_asistencia'];

        // Consulta para obtener las asistencias de esa fecha específica sin duplicados
        $query_asistencias = $db->connect()->prepare('SELECT DISTINCT a.id, l.id AS id_alumno, l.nombrea AS nombre_alumno, a.estado
        FROM login1 l
        JOIN grupos g ON l.id_grupo = g.id
        JOIN materias m ON m.id_grupos = g.id
        INNER JOIN asistencias a ON l.id = a.id_alumno
        WHERE a.id_materia = :id_materia AND a.fecha_asistencia = :fecha_asistencia');

        $query_asistencias->execute(array(
            ':id_materia' => $id_materia,
            ':fecha_asistencia' => $fecha_asistencia
        ));

        if ($query_asistencias->rowCount() > 0) {
            // Mostrar tabla con registros de asistencia sin duplicados
            echo '<form method="post" action="actualizar_asistencia.php?id_materia=' . $id_materia . '&id_grupo=' . $id_grupo . '">'; // Nueva acción para el segundo formulario
            echo '<input type="hidden" name="id_materia" value="' . $id_materia . '">'; // Campo oculto para id_materia
            echo '<input type="hidden" name="id_grupo" value="' . $id_grupo . '">'; // Campo oculto para id_grupo
            echo '<input type="hidden" name="fecha_asistencia" value="' . $fecha_asistencia . '">'; // Campo oculto para id_grupo   
            echo '<table class="table table-bordered">';
            echo '<thead><tr><th>Nombre del Alumno</th><th>Estado</th></tr></thead>';
            echo '<tbody>';

            // Mostrar los alumnos y sus asistencias
            while ($row_alumno = $query_asistencias->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . $row_alumno['nombre_alumno'] . '</td>';
                echo '<td>';
                echo '<select name="estado_alumno[' . $row_alumno['id_alumno'] . ']">';
                echo '<option value="asistio" ' . ($row_alumno['estado'] === 'asistio' ? 'selected' : '') . '>Asistió</option>';
                echo '<option value="no_vino" ' . ($row_alumno['estado'] === 'no_vino' ? 'selected' : '') . '>No vino</option>';
                echo '<option value="retardo" ' . ($row_alumno['estado'] === 'retardo' ? 'selected' : '') . '>Retardo</option>';
                echo '</select>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '<input type="submit" name="submit_guardar" value="Guardar Asistencia">'; // Botón para enviar los datos del segundo formulario
            echo '</form>'; // Cierre del segundo formulario
        } else {
            echo 'No hay registros de asistencia para la fecha seleccionada.';
        }
    } else {
        echo 'No se proporcionó una fecha válida para filtrar.';
    }
} else {
    echo 'No se proporcionó un ID de materia o grupo válido.';
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