<?php

namespace App\Model;

class SQL
{

  	private $conn;
  	private $stmt;
  	public  $error = [];
  
	/* Create Dbh instance */

	public function __construct($obj = NULL)
	{
		$this->conn = $obj;
	} 

	public function error()
	{
		return $this->error[0];
	}

	public function fetch($callback = NULL)
	{
		return $this->stmt->fetch($callback);
	}

	public function fetchAll($callback = NULL)
	{
		return $this->stmt->fetchAll($callback);
	}

	public function lastInsertedId()
	{
		return $this->stmt->lastInsertId();
	}

	public function rows()
	{
		return $this->stmt->rowCount();
	}

	/* Query */

	public function query($stmt, $data)
	{
			$this->stmt = $this->conn->prepare($stmt);
					/* execute prepared statement */
					if(!$this->stmt->execute($data)) {
							array_push($this->error, $this->stmt->errorInfo());
							return false;
					}		   
	}


}
