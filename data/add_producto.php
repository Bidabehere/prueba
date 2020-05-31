<?php 
require_once('../class/Producto.php');

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
