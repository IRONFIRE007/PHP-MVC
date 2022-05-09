<div class="container">
	<h2>Actas</h2>
	<form class="form-inline" action="?controller=acta&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary ml-5"><span class="glyphicon glyphicon-search"> </span> Buscar</button>
			</div>
		</div>

	</form>
	<br />
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>User</th>
					<th>Asunto</th>
					<th>Description</th>
					<th>responsable</th>
					<th>asistentes</th>
					<th>compromisos</th>
					<th>Action</th>
				</tr>
			<tbody>
				<?php foreach ($listaActa as $acta) { ?>


					<tr>
						<td> <a href="?controller=acta&&action=updateshow&&id=<?php echo $acta->getId() ?>"> <?php echo $acta->getId(); ?></a> </td>
						<td>
							<?php foreach ($listaUsers as $user) { ?>
								<?php if ($acta->getIdUser() == $user->getId()) {
									echo $user->getNombre();
								} ?>

							<?php } ?>
						</td>
						<td><?php echo $acta->getAsunto(); ?></td>
						<td><?php echo $acta->getAsunto(); ?></td>
						<td><?php echo $acta->getResponsable(); ?></td>
						<td><?php echo $acta->getAsistentes(); ?></td>
						<td><?php echo $acta->getCompromisos(); ?></td>
						<td><a href="?controller=acta&&action=delete&&id=<?php echo $acta->getId() ?>">Eliminar</a> </td>

					</tr>
				<?php } ?>
			</tbody>

			</thead>
		</table>

	</div>

</div>