<?php

namespace App\Model;
use App\Model\SQL;


class Dbh
{

    private $pdo;

    public function __construct(){}

    public function getPDO()
    {
                /* Set instance (if not set) */

                if ($this->pdo === NULL) {

                        $this->pdo = new \PDO("mysql:host=".HOST.";dbname=".DB.";","".USER."","".PASS."");

                        $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);

                        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                        /* Set DB collation */

                        $this->pdo->exec("set names utf8mb4");

                } 

                /* Return instance */

                return $this->pdo;
    } 


    /* Connect */

    public function conn()
    {
        return new SQL($this->getPDO());
    }




} /* Class Dbh */
