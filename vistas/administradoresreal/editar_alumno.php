<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Alumno</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm<?php echo $fila['id']; ?>" method="POST" enctype="multipart/form-data">

                    <div class="row mb-3">
                        <div class="col-md-4 sm-col-12">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nombrea']; ?>" autofocus required>
                        </div>

                        <div class="col-md-4 sm-col-12">
                            <label for="apellido_p" class="form-label">Apellido paterno</label>
                            <input type="text" class="form-control" id="apellido_p" name="apellido_p" value="<?php echo $fila['apellido1']; ?>" required>
                        </div>

                        <div class="col-md-4 sm-col-12">
                            <label for="apellido_m" class="form-label">Apellido materno</label>
                            <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="<?php echo $fila['apellido2']; ?>" required>
                        </div>

                        <div class="col-md-4 sm-col-12">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $fila['correo']; ?>" required>
                        </div>

                        <div class="col-md-4 sm-col-12">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?php echo $fila['contrasena']; ?>" required>
                        </div>

                        <div class="col-md-4 sm-col-12">
                            <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="<?php echo $fila['fechana']; ?>" required>
                        </div>

                        <div class="col-md-4 sm-col-12">
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
                                        echo '<option value="'.$rowe['id'].'" >'.$rowe['nombre']. ' cuatrimestre '.$rowe['cuatrimestre']. '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-4 sm-col-12">
                            <label for="nueva_foto" class="form-label">Nueva Foto Alumno</label>
                            <input type="file" class="form-control" id="nueva_foto" name="nueva_foto" accept="image/*">
                        </div>
                    </div>

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
</div>

<script>
    function editForm(id) {
        var formData = new FormData($("#editForm" + id)[0]);
        formData.append("nueva_foto", $("#nueva_foto")[0].files[0]);

        $.ajax({
            url: "../../controladores/functions.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "text",
            success: function(response) {
                console.log("Respuesta del servidor:", response);
                var jsonResponse = response.split('"')[1]; // Obtenemos solo el estado de la actualización

                if (jsonResponse.trim() === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        location.assign('grupos.php');
                    }, 2000);
                } else {
                    alert("Ha ocurrido un error al actualizar el registro");
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert("Error de comunicación con el servidor: " + error);
            }
        });
    }
</script>
