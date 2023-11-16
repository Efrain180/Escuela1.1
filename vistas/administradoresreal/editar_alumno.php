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
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nombrea']; ?>" autofocus required>

    </div>

    <div class="col-md-4 sm-col-12 ">
      <label for="Apellido paterno" class="form-label" class="bi bi-emoji-smile-upside-down"> Apellido paterno</label>
      <input type="text" class="form-control" id="apellido_p" name="apellido_p" value="<?php echo $fila['apellido1']; ?>" required>

    </div>

    <div class="col-md-4 sm-col-12 ">
      <label for="Apellido materno" class="form-label"> Apellido materno</label>
      <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="<?php echo $fila['apellido2']; ?>" required>

    </div>
  </div>


  <div class=" row mb-3 ">

  <div class="col-md-4 sm-col-12">
      <label for="correo" class="form-label"> Correo electronico</label>
      <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $fila['correo']; ?>" required>

    </div>

  <div class="col-md-4 sm-col-12">
      <label for="correo" class="form-label"> Contraseña</label>
      <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?php echo $fila['contrasena']; ?>" required>

    </div>

    <div class="col-md-4 sm-col-12 ">
                      <label for="Fecha de nacimiento" class="form-label"> Fecha de nacimiento</label>
                      <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="<?php echo $fila['fechana']; ?>" required>

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
            url: "../../controladores/functions.php",
            type: "POST",
            data: datosFormulario,
            dataType: "json",
            success: function(response) {
                if (response === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        location.assign('grupos.php');
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