<?php
namespace App\Model;





class SQL
{

  private $dbh;

  public $error = [];

   # Create Dbh instance

   public function __construct($obj = NULL){

              $this->dbh = $obj;

    } # Create Dbh instance



    public function error(){
          return $this->error[0];

    }

     # select, insert, update, delete




            public function create($query,$data){


                      $stmt = $this->dbh->prepare($query);

                            /* execute prepared statement */

                              if(!$stmt->execute($data)) {

                                    array_push($this->error, $stmt->errorInfo());
                                    return false;
                              }

                        return $this->dbh->lastInsertId() ?? false;


            }



            public function read($query,$data){

                      $stmt = $this->dbh->prepare($query);

                            /* execute prepared statement */

                              if(!$stmt->execute($data)) {

                                    array_push($this->error, $stmt->errorInfo());
                                    return false;

                              }

                        return $stmt->fetchAll(\PDO::FETCH_OBJ);

            }


            public function find($query,$data){

                      $stmt = $this->dbh->prepare($query);

                            /* execute prepared statement */

                              if(!$stmt->execute($data)) {

                                    array_push($this->error, $stmt->errorInfo());
                                    return false;

                              }

                        return $stmt->fetch();

            }


            public function update($query,$data){


                    $stmt = $this->dbh->prepare($query);

                          /* execute prepared statement */

                            if(!$stmt->execute($data)) {

                              array_push($this->error, $stmt->errorInfo());
                              return false;

                            }

                      return $stmt->rowCount();


            } # insert update delete





            public function delete($query,$data){


                      $stmt = $this->dbh->prepare($query);

                            /* execute prepared statement */

                              if(!$stmt->execute($data)) {

                                    array_push($this->error, $stmt->errorInfo());
                                    return false;

                              }

                        return $stmt->rowCount();

            }


            public function sql($query,$data){


                    $stmt = $this->dbh->prepare($query);

                          /* execute prepared statement */

                            if(!$stmt->execute($data)) {

                                    array_push($this->error, $stmt->errorInfo());
                                    return false;

                            }


                  return $stmt->fetch(\PDO::FETCH_OBJ);




            } # insert update delete




}
