<?php 
require_once('../class/Producto.php');

if(isset($_POST['id_producto'])){

	$id_producto = $_POST['id_producto'];
	$iCant = $_POST['iCant'];
	$iName = $_POST['iName'];
	
	$saveEdit = $producto->edit_producto($id_producto, $iCant, $iName);
	
	$return['valid'] = false;

	if($saveEdit){
		$return['valid'] = true;
		$return['msg'] = "Editado correctamente!";
	}
	
	echo json_encode($return);

}//end isset
$producto->Disconnect();
