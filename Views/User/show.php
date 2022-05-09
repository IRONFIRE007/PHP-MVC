<div class="container">
	<h2>Users</h2>
	<form class="form-inline" action="?controller=user&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary ml-5" ><span class="glyphicon glyphicon-search"> </span> Buscar</button>
			</div>
		</div>
		
	</form>
	<br/>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Correo</th>
					<th>Accion</th>
				</tr>
				<tbody>
					<?php foreach ($listaUsers as$user) {?>
 
					
					<tr>
						<td> <a href="?controller=user&&action=updateshow&&idUser=<?php  echo $user->getId()?>"> <?php echo $user->getId(); ?></a> </td>
						<td><?php echo $user->getNombre(); ?></td>
						<td><?php echo $user->getApellido(); ?></td>
						<td><?php echo $user->getCorreo(); ?></td>
						<td><a href="?controller=user&&action=delete&&id=<?php echo $user->getId() ?>">Eliminar</a> </td>
						<td>
						</td>
					</tr>
					<?php } ?>
				</tbody>
 
			</thead>
		</table>
 
	</div>	
 
</div>