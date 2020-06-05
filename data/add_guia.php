<?php 
require_once('../class/Guia.php');

if(isset($_POST['idProducto'])){
	
	$iCant = $_POST['iCant'];
	$idProducto = $_POST['idProducto'];
	$iDetalle = $_POST['iDetalle'];

		$bandera = true;
		$vuelta = 0; 

		while($bandera){
			$valor = rand(0,9999);
			$nro_guia = 'P'.str_pad($valor, 4, '0', STR_PAD_LEFT);
			$existe_guia = $guia-> check_guia($nro_guia);
				
				if((int)$existe_guia == 0){
					$bandera = false;
				}
				
				//Si llega al maximo de guias no deja cargar mas.
				if($vuelta > 9999){
					$return['valid'] = false;
					$return['msg'] = "La nueva guia no se agrego correctamente porque se exedio!";
					echo json_encode($return);
					return;
				}	
			 
			$vuelta++;
		} // fin del while, si pasa ya tenemos nuestro nro de guia
	

	
	$saveEdit = $guia->add_guia($nro_guia, $iCant, $idProducto, $iDetalle);
	
	$return['valid'] = false;

	if($saveEdit){
		$return['valid'] = true;
		$return['msg'] = "La nueva guia se agrego correctamente! su numero es $nro_guia ";
	}
	
echo json_encode($return);

}//end isset
$guia->Disconnect();

