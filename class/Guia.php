<?php
require_once('../database/Database.php');
require_once('../interface/iGuia.php');

class Guia extends Database implements iGuia {

	public function all_guias(){
	
		$sql = "SELECT id_guia, descripcion, numero_guia
				FROM guia 
				";
		return $this->getRows($sql);	
	}

	public function check_guia($guia){
	
		$sql = "SELECT *
				FROM guia
				WHERE numero_guia = ?";
		
		return $this->existRow($sql, [$guia]);
	}
					
	public function	add_guia($nro_guia, $iCant, $idProducto, $iDetalle){
		$sql = "INSERT  INTO guia(id_producto, cantidad_producto, descripcion, numero_guia)
		VALUES(?, ?,?,?)";

		return $this->insertRow($sql, [$idProducto, $iCant, $iDetalle, $nro_guia]);

	}
	
}//end 

$guia = new Guia();



