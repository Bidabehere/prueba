<?php 
require_once('../class/Guia.php');

if(isset($_POST['iName'])){

	$iCant = $_POST['iCant'];
	$iName = $_POST['iName'];
	
	$saveEdit = $producto->add_producto($iCant, $iName);
	
	$return['valid'] = false;

	if($saveEdit){
		$return['valid'] = true;
		$return['msg'] = "Agregado correctamente!";
	}
	
	echo json_encode($return);

}//end isset
$producto->Disconnect();

$valor = rand(0,9999);
echo 'P'.str_pad($valor, 4, '0', STR_PAD_LEFT);