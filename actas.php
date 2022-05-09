<?php 
	require_once('config/connection.php');
 
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='acta';
		$action='actas';
	}
	require_once('./Views/Layouts/Acta/layout-acta.php');	
 ?>