<?php
class Model
{
	private $serverName = "localhost";
	private $userName = "root";
	private $password = "";
	private $dbName = "student";
	private $conn;


    function __construct()
    {
    	$this->conn = $this->connectDB();
    }


	/**
    * connectDB function return connection if successfully connected
    */
	
	function connectDB()
	{
		// Create connection
		$connection = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);

		// Check connection
		if ($connection->connect_error) {
  			die("Connection failed: " . $connection->connect_error);
		}else{
			return $connection;
		} 
	}

	/**
    * executeQuery is for get Data 
    * Return type association array
    */

	function executeQuery($sql)
	{
		$data = $this->conn->query($sql);
		while($row=mysqli_fetch_assoc($data)){
			$dataSet[] = $row;
		}		
		if(!empty($dataSet)){
			return $dataSet;
		}
		else{
			return array();
		}
	}





	/**
    * executeNonQuery is for Update/Delete/Insert 
    * Return type true/false
    */

	function executeNonQuery($sql)
	{
		return $this->conn->query($sql);
	}


	/**
    * disconnect the connection when object is clear
    */

	function __destruct()
	{
		$this->conn->close();
	}

}

?>