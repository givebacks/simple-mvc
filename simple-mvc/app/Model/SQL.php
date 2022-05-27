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

	public function select()
	{
		return $this->stmt->fetch();
	}

	public function selectAllObj()
	{
		return $this->stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function selectObj()
	{
		return $this->stmt->fetch(\PDO::FETCH_OBJ);
	}

	public function lastId()
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
