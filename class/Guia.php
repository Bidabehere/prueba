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
					
	public function	add_guia($iCant, $idProducto, $iDetalle){
		$sql = "INSERT  INTO guia(id_producto, cantidad_producto, descripcion)
		VALUES(?,?,?)";

		return $this->insertRow($sql, [$idProducto, $iCant, $iDetalle]);

	}

	public function add_nro_guia($nro_guia, $ultimo){
		
		$sql = " UPDATE `guia` 
		SET `numero_guia` = ? 
		WHERE `guia`.`id_guia` = ?";
		
	return $this->updateRow($sql, [$nro_guia, $ultimo]);
	}
	
}//end 

$guia = new Guia();



