<?php

namespace App\Model;
use App\Model\Dbh;

class SQL
{

  	private $conn;
  	private $stmt;
  	public  $error = [];
  

	/* Create Dbh instance */

	public function __construct()
	{
		$dbh = new Dbh;
		$this->conn = $dbh->conn();
	} 

	public function error()
	{
		return $this->error[0] ?? NULL;
	}

	/* 
	
	public function fetchObj() returns all result as an array
	
	*/

	public function fetchObj($stmt,$data)
	{
		return $this->query($stmt,$data) ? $this->stmt->fetch(\PDO::FETCH_OBJ) : NULL;
	}

	/* 
	
	public function fetchAll() returns all result as an array
	
	*/

	public function fetchAll($stmt,$data = NULL)
	{
		return $this->query($stmt,$data) ? $this->stmt->fetchAll() : NULL;
	}

	/* 
	
	public function lastInsertedId() returns last inserted data ID 
	
	*/

	public function lastInsertId($stmt,$data)
	{
		return $this->query($stmt,$data) ? $this->conn->lastInsertId() : NULL;
	}

	/* 
	
	public function rows() returns n of affected rows on update for example

	*/

	public function rows($stmt,$data)
	{
		return $this->query($stmt,$data) ? $this->stmt->rowCount() : NULL;
	}

	/* Query */

	public function query($stmt, $data = NULL)
	{
			$this->stmt = $this->conn->prepare($stmt);
					/* execute prepared statement */
					if(!$this->stmt->execute($data)) {
							array_push($this->error, $this->stmt->errorInfo());
							return false;
					}		
					return true;
	}


}
