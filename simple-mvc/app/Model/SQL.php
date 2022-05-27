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

	/* 
	
	public function fetch() returns the result

	Ex: $this->query($stmt,$data) ? $this->fetch() : $this->error();
	
	*/

	public function fetch($callback = NULL)
	{
		return $this->stmt->fetch($callback);
	}

	/* 
	
	public function fetchAll() returns all result as an array

	Ex: $this->query($stmt,$data) ? $this->fetchAll() : $this->error();
	
	*/

	public function fetchAll($callback = NULL)
	{
		return $this->stmt->fetchAll($callback);
	}

	/* 
	
	public function lastInsertedId() returns last inserted data ID 

	Ex: $this->query($stmt,$data) ? $this->lastInsertedId() : $this->error();
	
	*/

	public function lastInsertedId()
	{
		return $this->stmt->lastInsertId();
	}

	
	/* 
	
	public function rows() returns n of affected rows on update for example

	Ex: $this->query($stmt,$data) ? $this->rows() : $this->error();
	
	*/

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
