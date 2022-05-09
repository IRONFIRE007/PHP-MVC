<div class="container">
	<h2>Actualizar Usuario</h2>
	<form action="?controller=acta&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $acta->getId() ?>" >
        <input type="hidden" name="idUser" value="<?php echo $acta->getIdUser() ?>" >
		<div class="form-group">
			<label for="text">Asunto</label>
			<input type="text" name="asunto" id="nombre" class="form-control" value="<?php echo $acta->getAsunto();?>">
		</div>
		<div class="form-group">
			<label for="text">Responsable</label>
			<input type="text" name="responsable"  class="form-control" value="<?php echo $acta->getResponsable(); ?>">
		</div>
         
		<div class="form-group">
			<label for="text">Asistentes</label>
			<input type="text" name="asistentes"  class="form-control" value="<?php echo $acta->getAsistentes();?>">
		</div>
		

        <div class="form-group">
			<label for="text">Compromiso</label>
			<input type="text" name="compromisos"  class="form-control" value="<?php echo $acta->getCompromisos();?>">
		</div>
		

		<button type="submit" class="btn btn-primary">Actualizar</button>
 
	</form>
</div>