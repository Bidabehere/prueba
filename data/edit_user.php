<?php 
require_once('../class/User.php');

if(isset($_POST['id_usuario'])){

    $iName = $_POST['iName'];
	$iApe = $_POST['iApe'];
	$iDNI = $_POST['iDNI'];
	$id_usuario = $_POST['id_usuario'];



	$saveUser = $user->edit_user($id_usuario, $iDNI, $iName, $iApe);
	
	if($saveUser){
		$return['valid'] = true;
		$return['msg'] = "Nuevo usuario editado con éxito!";
	}else{
		$return['valid'] = false;
	}
        


echo json_encode($return);

}//end si existe 

$user->Disconnect();