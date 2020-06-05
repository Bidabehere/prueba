<?php
require_once('../database/Database.php');
require_once('../interface/iProducto.php');


class Producto extends Database implements iProducto {

	public function all_productos(){
		$sql = "SELECT *
				FROM productos 
				";

		return $this->getRows($sql);	
	
	}

	public function get_producto($id_producto){
	
		$sql = "SELECT *
				FROM productos
				WHERE id_producto = ?";
		
		return $this->getRow($sql, [$id_producto]);

	}

	public function edit_producto($id_producto, $iCant, $iName)
	{
		$sql = " UPDATE `productos` 
		SET `nombre_producto` = ? , 
		`total_producto` = ? 
		WHERE `productos`.`id_producto` = ?";
		
	return $this->updateRow($sql, [$iName, $iCant, $id_producto]);
	}
	
	public function add_producto($iCant, $iName){

		$sql = "INSERT  INTO productos(nombre_producto, total_producto)
				VALUES(?, ?)";
	
		return $this->insertRow($sql, [$iName, $iCant]);
	}

}

$producto = new Producto();



