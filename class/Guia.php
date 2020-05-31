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

	

}//end 

$guia = new Guia();



