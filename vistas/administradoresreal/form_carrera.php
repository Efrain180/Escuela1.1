<div class="card-body ">

<form id="registro" name="registro" method="POST" action="../../controladores/guarda_carrera.php" autocomplete="off" class=" row g-3">

  <div class="row mb-3">
    <div class="col-md-4 sm-col-12">
      <label for="Nombre" class="form-label"> Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la carrera" autofocus required>

    </div>

    


    <div class="col-md-4 sm-col-12 ">
                                            <label for="cuatri" class="form-label"></label>
                                            <select id="cuatri" name="cuatri" class="form-control" required>
                                                <option value="">Elije el cuatrimestre</option>
                                                <?php


$bda = new Database;

$queryyy = $bda->connect()->prepare("SELECT c.id, c.cuatrimestre 
FROM cuatrimestre c");
$queryyy->execute(array());
while ($rowe = $queryyy->fetch(PDO::FETCH_ASSOC)) {
    echo '
<option value="'.$rowe['id'].'" >'.$rowe['cuatrimestre']. '</option>


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