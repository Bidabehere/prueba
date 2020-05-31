<?php 
require_once('../class/Producto.php');
if(isset($_POST['id_producto'])){

	$id_producto = $_POST['id_producto'];
	$productoDetails = $producto->get_producto($id_producto);
	
	$return['titulo'] = "Editar Producto";
	$return['evento'] = "edit";
	if($productoDetails > 0){
		$return['nombre'] = $productoDetails['nombre_producto'];
		$return['cantidad'] = $productoDetails['total_producto'];
		$return['id_producto'] = $productoDetails['id_producto'];
		
	}
	echo json_encode($return);	
	
}//end isset

$producto->Disconnect();

