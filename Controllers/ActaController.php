<?php 
require_once('Model/User.php');
/**
* 
*/
class ActaController
{
	
	function __construct()
	{
		
	}
 
	function index(){
		require_once('Views/Acta/home-acta.php');
	}
 
	function register(){
	    $listaUsers=User::All();
		require_once('Views/Acta/register-acta.php');
	}
 
	function save(){
		$acta= new Acta(null, $_POST['idUser'],$_POST['asunto'],$_POST['responsable'],$_POST['asistentes'],$_POST['compromisos']);
		Acta::save($acta);
		$this->show();
	}
 
	function show(){
		$listaUsers=User::All();
		$listaActa=Acta::all();
		require_once('Views/Acta/show-acta.php');
	}
 
	function updateshow(){
		$idActa=$_GET['id'];
		$acta=Acta::searchById($idActa);
		require_once('Views/Acta/updateshwo-acta.php');
	}
 
	function update(){
		$acta= new Acta($_POST['id'], $_POST['idUser'],$_POST['asunto'],$_POST['responsable'],$_POST['asistentes'],$_POST['compromisos']);
		Acta::update($acta);
		$this->show();
	}


	function delete(){
		$id=$_GET['id'];
		Acta::delete($id);
		$this->show();
	}
 
	function search(){
		if (!empty([$_POST['id']])) {
			$id=$_POST['id'];
			$acta=Acta::searchById($id);
			$listaActa[]=$acta;
			require_once('Views/Acta/show-acta.php');
		} else {
			$listaActa=Acta::all();
			require_once('Views/Acta/show-acta.php');
		}
		
		
	}
 
	function error(){
		require_once('./Views/error.php');
	}
 
}
 
?>