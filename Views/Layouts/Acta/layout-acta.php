<!DOCTYPE html>
<html lang="es">
<head>
	<title>Actas CRUD</title>
	<meta charset="utf-8">
  
   <!-- Boostrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>





</head>
<body>
	<header>
		<?php 
			require_once('header-acta.php');
		 ?>
		
	</header>
	<section>
	<?php require_once('routing-acta.php'); ?>
	</section>
 
</body>
</html>