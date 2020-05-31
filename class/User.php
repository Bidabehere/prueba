<?php
require_once('../database/Database.php');
require_once('../interface/iUser.php');
class User extends Database implements iUser {

	public function all_user(){
		
		$sql = "SELECT *
				FROM usuarios 
				";
		return $this->getRows($sql);	
	}
	
	public function check_dni($iDNI){
	
		$sql = "SELECT *
				FROM usuarios
				WHERE documento = ?";
		
		return $this->existRow($sql, [$iDNI]);

	}

	public function add_user($iDNI, $iNombre, $iApellido){
		
		$sql = "INSERT  INTO usuarios(nombre, apellido, documento)
				VALUES(?, ?, ?)";
	
		return $this->insertRow($sql, [$iNombre, $iApellido, $iDNI]);

	}
	
	public function get_user($id_usuarios){
	
		$sql = "SELECT *
				FROM usuarios
				WHERE id_usuarios = ?";
		
		return $this->getRow($sql, [$id_usuarios]);

	}

	public function edit_user($id_usuario, $iDNI, $iNombre, $iApellido){
			
		$sql = " UPDATE IGNORE `usuarios` 
				SET `nombre` = ? , `apellido` = ? ,
				`documento` = ? 
				WHERE `usuarios`.`id_usuarios` = ?";
				
		return $this->updateRow($sql, [$iNombre, $iApellido, $iDNI, $id_usuario]);
	}


	//

}//en class User

$user = new User();


