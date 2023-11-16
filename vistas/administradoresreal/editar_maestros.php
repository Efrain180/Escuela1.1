<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Maestros</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editForm<?php echo $fila['id']; ?>" method="POST">

                <div class="row mb-3">
    <div class="col-md-4 sm-col-12">
      <label for="Nombre" class="form-label"> Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nombre']; ?>" autofocus required>

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

    



                    <br>
                    <input type="hidden" name="accion" value="editar_maestro">
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
            url: "../../controladores/functions_maestros.php",
            type: "POST",
            data: datosFormulario,
            dataType: "json",
            success: function(response) {
                if (response === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        location.assign('registro_maestros.php');
                    }, 2000);
                } else {
                    alert("Ha ocurrido un error al actualizar el registro");
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
            alert("Error de comunicacion con el servidor: " + textStatus);
            console.log("Detalles del error:", errorThrown);
            console.log("Respuesta del servidor:", jqXHR.responseText);
            }
        });
    }
</script>