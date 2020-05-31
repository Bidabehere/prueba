<?php 
require_once('../class/User.php');
if(isset($_POST['id_usuario'])){

	$id_usuario = $_POST['id_usuario'];
	$userDetails = $user->get_user($id_usuario);
	
	$return['titulo'] = "Editar Usuario";
	$return['evento'] = "edit";
	if($userDetails > 0){
		$return['nombre'] = $userDetails['nombre'];
		$return['apellido'] = $userDetails['apellido'];
		$return['documento'] = $userDetails['documento'];
		$return['id_usuarios'] = $userDetails['id_usuarios'];
		
	}
	echo json_encode($return);	
	
}//end isset

$user->Disconnect();