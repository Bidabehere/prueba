<?php 

include_once('Connection.php'); //my connection is here

class Database extends Connection{


	public function __construct(){

		parent::__construct();//put this if naay default constructor and class na iya ge extendnan para ma apil sad diri
		//above code copy the default constructor of the class extended
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();//start session if session not start
		}
	}//endDefaultConstructor

	//disconnect is in the parent class in connection.php

	//get row
	public function getRow($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetch();	
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());	
		}


	}//end getRow

	//exist row
	public function existRow($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->rowCount();	
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());	
		}


	}//end getRow

	//get rows
	public function getRows($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchAll();	
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());	
		}
	}//end getRows

	//insert row
	public function insertRow($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return TRUE;	
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());	
		}

	}//end insertRow

	//update row
	public function updateRow($query, $params = []){
		$this->insertRow($query, $params);
		return true;
	}//end updateRow



	//get the last inserted ID
	public function lastID(){
		$lastID = $this->datab->lastInsertId(); 
		return $lastID;
	}//end lastID func

}


 ?>