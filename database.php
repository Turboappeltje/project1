<?php
//Database class aan met private properties
class database{

	private $host;
	private $username;
	private $database; 
	private $password;
	private $charset;
	private $db;

	//Database connectie en initialiseert de class variables. 
	function __construct($host, $username, $database, $password, $charset){
		$this->host = $host;
		$this->username = $username;
		$this->database = $database;
		$this->password = $password;
		$this->charset = $charset;
		
		try{
			$dsn = "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";
			$this->db = new PDO($dsn, $this->username, $this->password);
			echo("Database connection successfully established");

		}catch(PDOException $e){
			echo $e->getMessage();
			exit("An error occurred");
		}
	}
}


