<?php 
 
$controllers=array(
	'acta'=>['index','register','save','show','updateshow','update','delete','search','error']
);


if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('acta','error');
	}		
}else{
	call('acta','error');
}
 
function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');
 
	switch ($controller) {
		case 'acta':
		require_once('Model/Acta.php');
		$controller= new ActaController();
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}
 
?>