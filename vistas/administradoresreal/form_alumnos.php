<div class="card-body ">

<form id="registro" name="registro" method="POST" action="../../controladores/guarda.php" autocomplete="off" class=" row g-3">

  <div class="row mb-3">
    <div class="col-md-4 sm-col-12">
      <label for="Nombre" class="form-label"> Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" autofocus required>

    </div>

    <div class="col-md-4 sm-col-12 ">
      <label for="Apellido paterno" class="form-label" class="bi bi-emoji-smile-upside-down"> Apellido paterno</label>
      <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Tu apellido paterno" required>

    </div>

    <div class="col-md-4 sm-col-12 ">
      <label for="Apellido materno" class="form-label"> Apellido materno</label>
      <input type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Tu apellido materno" required>

    </div>
  </div>


  <div class=" row mb-3 ">

  <div class="col-md-4 sm-col-12">
      <label for="correo" class="form-label"> Correo electronico</label>
      <input type="email" class="form-control" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>

    </div>

  <div class="col-md-4 sm-col-12">
      <label for="correo" class="form-label"> Contraseña</label>
      <input type="text" class="form-control" id="contrasena" name="contrasena" placeholder="tu contraseña" required>

    </div>

    <div class="col-md-4 sm-col-12 ">
                      <label for="Fecha de nacimiento" class="form-label"> Fecha de nacimiento</label>
                      <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Tu fecha de nacimiento" required>

                    </div>

    <div class="col-md-4 sm-col-12 ">
                                            <label for="materia" class="form-label">Grupo</label>
                                            <select id="grupo" name="grupo" class="form-control" required>
                                                <option value="">Elije el grupo</option>
                                                <?php


$bda = new Database;

$queryyy = $bda->connect()->prepare("SELECT g.id, g.nombre, c.cuatrimestre 
FROM grupos g
INNER JOIN cuatrimestre c ON g.id_cuatri = c.id");
$queryyy->execute(array());
while ($rowe = $queryyy->fetch(PDO::FETCH_ASSOC)) {
    echo '
<option value="'.$rowe['id'].'" >'.$rowe['nombre']. ' catrimestre '.$rowe['cuatrimestre']. '</option>


';
}

?>
                                            </select>

                                        </div>

  </div>



  <div class="col-md-12 sm-col-12">
    <button id="guarda" name="guarda" class="btn btn-success" type="submit">Guardar</button>
  </div>



</form>


</div>