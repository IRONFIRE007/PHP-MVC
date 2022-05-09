<div class="container">
  <h2>Registro Acta</h2>
  <form action="?controller=acta&&action=save" method="POST">
    <div class="form-group">

    <select name="idUser" >
   
<?php foreach ($listaUsers as$user) {?>
 		 <option value=" <?php echo $user->getId(); ?>"> <?php echo $user->getNombre(); ?></option> 
 <?php } ?>

   </select>

   
    <br>
    <br>
      <label for="text">Asunto</label>
      <input type="text" class="form-control" placeholder="Ingrese su Nombre" name="asunto">
    </div>
      

    <div class="form-group">
      <label for="text">Responsable</label>
      <input type="text" name="responsable" class="form-control" placeholder="Ingrese su Correo">
    </div>

    <div class="form-group">
      <label for="text">Asistentes</label>
      <input type="text" name="asistentes" class="form-control" placeholder="Ingrese su Correo">
    </div>

    <div class="form-group">
      <label for="text">Compromisos</label>
      <input type="text" name="compromisos" class="form-control" placeholder="Ingrese su Correo">
    </div>


    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>



