<?php
class DataBase{

	public $host = "localhost";
	public $db_name = "register";
	public $username = "root";
	public $password = "";
	private $conn;

	public function dbConnection()
	{
		$this->conn = null;

		try
		{

			$this->conn = new PDO ("mysql:host =" . $this->host . ";dbname=". $this->db_name , $this->username ,$this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				
				$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		}
		catch(PDOException $exception){
			echo "Connection error :" . $exception->getMessage();
		}
		return $this->conn;
		   }
}





?>