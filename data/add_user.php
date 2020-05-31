<?php 
require_once('../class/User.php');

if(isset($_POST['iName'])){

    $iName = $_POST['iName'];
	$iApe = $_POST['iApe'];
	$iDNI = $_POST['iDNI'];


    $existDNI = $user->check_dni($iDNI);
	
    if((int)$existDNI == 1){
        $return['valid'] = false;
        $return['msg'] = "Verificar el Documento, no puede ser repetido";
    }
    else{
            $saveUser = $user->add_user($iDNI, $iName, $iApe);
            if($saveUser){
                $return['valid'] = true;
                $return['msg'] = "Nuevo usuario agregado con éxito!";
            }else{
                $return['valid'] = false;
            }
        
        }


	echo json_encode($return);
}//end isset

$user->Disconnect();