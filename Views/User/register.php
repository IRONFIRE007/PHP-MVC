<div class="container">
  <h2>Registro de Usuario</h2>
  <form action="?controller=user&&action=save" method="POST">
    <div class="form-group">
      <label for="text">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese su Nombre" name="nombre">
    </div>
 
    <div class="form-group">
      <label for="text">Apellido</label>
      <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido">
    </div>
      

    <div class="form-group">
      <label for="text">Correo</label>
      <input type="text" name="correo" class="form-control" placeholder="Ingrese su Correo">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>