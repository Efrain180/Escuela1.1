<div class="card-body ">

<form id="registro" name="registro" method="POST" action="../../controladores/guarda_materias.php" autocomplete="off" class=" row g-3">

  <div class="row mb-3">
    <div class="col-md-4 sm-col-12">
      <label for="materia" class="form-label"> Materia</label>
      <input type="text" class="form-control" id="materia" name="materia" placeholder="nombre de la materia" autofocus required>

    </div>

    <div class="col-md-4 sm-col-12 ">
                                            <label for="profesor" class="form-label">Profesor</label>
                                            <select id="profesor" name="profesor" class="form-control" required>
                                                <option value="">Elije el profesor</option>
                                                <?php


$bda = new Database;

$queryyy = $bda->connect()->prepare("SELECT * FROM maestros");
$queryyy->execute(array());
while ($rowe = $queryyy->fetch(PDO::FETCH_ASSOC)) {
    echo '
    <option value="'.$rowe['id'].'">'.$rowe['nombre'].' '.$rowe['apellido1'].' '.$rowe['apellido2'].'</option>



';
}

?>
                                            </select>

                                        </div>






    <div class="col-md-4 sm-col-12 ">
                      <label for="Fecha de nacimiento" class="form-label"> Fecha de inicio</label>
                      <input type="date" class="form-control" id="fecha_ini" name="fecha_ini" placeholder="Fecha de inicio" required>

                    </div>
                     <div class="col-md-4 sm-col-12 ">
                      <label for="Fecha de nacimiento" class="form-label"> Fecha Final</label>
                      <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" placeholder="Fecha Final" required>

                    </div>


                    <div class="col-md-4 sm-col-12 ">
                                            <label for="grupo" class="form-label">Grupo</label>
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
<option value="'.$rowe['id'].'" >'.$rowe['nombre']. ' cuatrimestre '.$rowe['cuatrimestre']. '</option>


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