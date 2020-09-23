<?php

class database{

	private $host = "127.0.0.1";
	private $database_name = "project1";
	private $user = "Jari";
	private $password = "12345";
	private $charset = "utf8mb4";
	private $DB;

		function __construct(){
			try {
            $this->DB = new PDO('mysql:host='.$this->host.';dbname='.$this->database_name.';charset='.$this->charset, $this->user, $this->password);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

			
		};


}