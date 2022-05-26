<?php


namespace App\Model;

use App\Model\SQL;


class Dbh
{


    private $pdo;

    public function __construct() {}

    public function getDB()
    {

                # set instance (if not yet)

                if ($this->pdo === NULL) {

                        $this->pdo = new \PDO("mysql:host=".HOST.";dbname=".DB.";","".USER."","".PASS."");

                        $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);

                        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                        $this->pdo->exec("set names utf8mb4");

                } # set instance

                return $this->pdo;

    } # getPDO


    public function conn(){
       return new SQL($this->getDB());
    }




} /* Class Dbh */
