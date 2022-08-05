<?php

namespace App\Model;

class SQL
{

  	private $conn;
  	private $stmt;
  	public  $error = [];
  

	/* Create Dbh instance */

	public function __construct(PDO $obj)
	{
		$this->conn = $obj;
	} 

	public function error()
	{
		return $this->error[0];
	}

	/* 
	
	public function fetch() returns the result

	Ex: $this->query($stmt,$data) ? $this->fetch() : $this->error();
	
	*/

	public function fetch()
	{
		return $this->conn->fetch();
	}

	/* 
	
	public function fetchObj() returns all result as an array

	Ex: $this->query($stmt,$data) ? $this->fetchObj() : $this->error();
	
	*/

	public function fetchObj()
	{
		return $this->conn->fetch(\PDO::FETCH_OBJ);
	}

	/* 
	
	public function fetchAll() returns all result as an array

	Ex: $this->query($stmt,$data) ? $this->fetchAll() : $this->error();
	
	*/

	public function fetchAll()
	{
		return $this->conn->fetchAll();
	}

	/* 
	
	public function lastInsertedId() returns last inserted data ID 

	Ex: $this->query($stmt,$data) ? $this->lastInsertedId() : $this->error();
	
	*/

	public function lastInsertId()
	{
		return $this->conn->lastInsertId();
	}

	/* 
	
	public function rows() returns n of affected rows on update for example

	Ex: $this->query($stmt,$data) ? $this->rows() : $this->error();
	
	*/

	public function rows()
	{
		return $this->conn->rowCount();
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
