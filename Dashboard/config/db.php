<?php

/**
 * 
 */
session_start();
require_once('functions.php');
class Config{

	public $connection;
	
	public function __construct(){

		$this->db_connect();
		# code...
	}

	public function db_connect(){

		$this->connection = mysqli_connect("localhost", "root", "", "real_estate");

		if (mysqli_connect_error()) {

			die("Failed to connect to database!");
			# code...
		}

		
	}

	 	//Prevention against SQLINJECTION for form input
		public function check($a){

			$check = mysqli_real_escape_string($this->connection, $a);
			return $check;
		}

}


?>