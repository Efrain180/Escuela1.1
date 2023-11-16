<div class="card-body ">

<form id="registro" name="registro" method="POST" action="../../controladores/guarda_maestros.php" autocomplete="off" class=" row g-3">

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

  
  </div>



  <div class="col-md-12 sm-col-12">
    <button id="guarda" name="guarda" class="btn btn-success" type="submit">Guardar</button>
  </div>



</form>
</div>