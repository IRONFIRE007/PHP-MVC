<div class="container">
	<h2>Actualizar Usuario</h2>
	<form action="?controller=user&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $user->getId() ?>" >
		<div class="form-group">
			<label for="text">Nombres</label>
			<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $user->getNombre() ?>">
		</div>
		<div class="form-group">
			<label for="text">Apellidos</label>
			<input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $user->getApellido(); ?>">
		</div>
         
		<div class="form-group">
			<label for="text">Correo</label>
			<input type="text" name="correo" id="correo" class="form-control" value="<?php echo $user->getCorreo(); ?>">
		</div>
		
		<button type="submit" class="btn btn-primary">Actualizar</button>
 
	</form>
</div>