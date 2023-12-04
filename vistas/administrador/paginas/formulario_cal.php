<?php

$id_materia = $_GET['id_materia'] ?? null;
$id_grupo = $_GET['id_grupo'] ?? null;
$id_maestro = $_GET['id_maestro'] ?? null;



?>

<div class="card-body">
    <form id="registro" name="registro" method="POST" action="../../../controladores/guarda_cal.php?id_materia=<?php echo $id_materia ?>&id_grupo=<?php echo $id_grupo ?>&id_maestro=<?php echo $id_maestro ?>" enctype="multipart/form-data" autocomplete="off" class="row g-3">
        <div class="row mb-3">
            <div class="col-md-4 sm-col-12">
                <?php
                if ($id_grupo) {
                    $bda = new Database;

                    $queryyy = $bda->connect()->prepare("SELECT l.id, l.nombrea, l.apellido1 
                    FROM login1 l 
                    INNER JOIN grupos g ON l.id_grupo = g.id 
                    WHERE g.id = ?");
                    
                    $queryyy->execute(array($id_grupo));

                    echo '<label for="alumno" class="form-label">Alumno</label>
                    <select id="alumno" name="alumno" class="form-control" required>
                        <option value="">Elije el alumno</option>';

                    while ($rowe = $queryyy->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="'.$rowe['id'].'" >'.$rowe['nombrea']. ' ' .$rowe['apellido1']. '</option>';
                    }

                    echo '</select>';
                }
                ?>
            </div>
            <div class="col-md-4 sm-col-12">
                <label for="unidad" class="form-label"> Unidad</label>
                <input type="number" class="form-control" id="unidad" name="unidad" placeholder="Número de unidad" autofocus required>
            </div>
            <div class="col-md-4 sm-col-12">
                <label for="calificacion" class="form-label">Calificación</label>
                <input type="text" class="form-control" id="calificacion" name="calificacion" placeholder="La calificación" required>
            </div>
        </div>
        <div class="col-md-12 sm-col-12">
            <button id="guarda" name="guarda" class="btn btn-success" type="submit">Guardar</button>
        </div>
    </form>
</div>