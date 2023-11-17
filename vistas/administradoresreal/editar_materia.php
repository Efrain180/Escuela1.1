<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Alumno</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editForm<?php echo $fila['id']; ?>" method="POST">

    <div class="row mb-3">
    <div class="col-md-4 sm-col-12">
      <label for="Nombre" class="form-label"> Nombre</label>
      <input type="text" class="form-control" id="materia" name="materia" value="<?php echo $fila['materia']; ?>" autofocus required>

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
<option value="'.$rowe['id'].'" >'.$rowe['nombre'] .$rowe['apellido1']. $rowe['apellido2']. '</option>


';
}

?>
                                            </select>

                                        </div>




    <div class="col-md-4 sm-col-12 ">
                      <label for="Fecha de nacimiento" class="form-label"> Fecha de inicio</label>
                      <input type="date" class="form-control" id="fecha_ini" name="fecha_ini" value="<?php echo $fila['per_ini']; ?>" required>

                    </div>
                     <div class="col-md-4 sm-col-12 ">
                      <label for="Fecha de nacimiento" class="form-label"> Fecha Final</label>
                      <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="<?php echo $fila['per_fin']; ?>" required>

                    </div>


  </div>


 
                    <br>
                    <input type="hidden" name="accion" value="editar_alum">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="editForm(<?php echo $fila['id']; ?>)">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<script>
    function editForm(id) {
        var datosFormulario = $("#editForm" + id).serialize();

        $.ajax({
            url: "../../controladores/functions_materias.php",
            type: "POST",
            data: datosFormulario,
            dataType: "json",
            success: function(response) {
                if (response === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        location.assign('registro_materias.php');
                    }, 2000);
                } else {
                    alert("Ha ocurrido un error al actualizar el registro");
                }
            },
            error: function() {
                alert("Error de comunicacion con el servidor");
            }
        });
    }
</script>