<?php 
	require_once('config/connection.php');
 
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='user';
		$action='index';
	}
	require_once('./Views/Layouts/User/layout.php');	
 ?>