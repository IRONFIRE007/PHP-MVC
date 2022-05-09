<?php 
/**
* 
*/
class UserController
{
	
	function __construct()
	{
		
	}
 
	function index(){
		require_once('Views/User/home.php');
	}
 
	function register(){
		require_once('Views/User/register.php');
	}
 
	function save(){
		
		$user= new User(null, $_POST['nombre'],$_POST['apellido'],$_POST['correo']);
		User::save($user);
		$this->show();
	}
 
	function show(){
		$listaUsers=User::all();
		require_once('Views/User/show.php');
	}
 
	function updateshow(){
		$id=$_GET['idUser'];
		$user=User::searchById($id);
		require_once('Views/User/updateshwo.php');
	}
 
	function update(){
		$user = new User($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['correo']);
		User::update($user);
		$this->show();
	}


	function delete(){
		$id=$_GET['id'];
		User::delete($id);
		$this->show();
	}
 
	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$user=User::searchById($id);
			$listaUsers[]=$user;
			//var_dump($id);
			//die();
			require_once('Views/User/show.php');
		} else {
			$listaUsers=User::all();
 
			require_once('Views/User/show.php');
		}
		
		
	}
 
	function error(){
		require_once('./Views/error.php');
	}
 
}
 
?>