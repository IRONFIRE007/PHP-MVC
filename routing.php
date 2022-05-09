<?php 
 
$controllers=array(
	'user'=>['index','register','save','show','updateshow','update','delete','search','error']
);


if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('user','error');
	}		
}else{
	call('user','error');
}
 
function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');
 
	switch ($controller) {
		case 'user':
		require_once('Model/User.php');
		$controller= new UserController();
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}
 
?>