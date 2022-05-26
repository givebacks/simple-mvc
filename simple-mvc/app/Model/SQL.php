<?php
namespace App\Models;





class SQL
{

  private $dbh;

   # Create Dbh instance

   public function __construct($obj){


              $this->dbh = $obj;


    } # Create Dbh instance





            # select, insert, update, delete




            public function create($query,$data){


                      $stmt = $this->dbh->prepare($query);

                            /* execute prepared statement */

                              if(!$stmt->execute($data)) {

                                    //print_r($stmt->errorInfo());
                                    return false;

                              }

                        return $this->dbh->lastInsertId() ?? false;


            }



            public function read($query,$data){

                      $stmt = $this->dbh->prepare($query);

                            /* execute prepared statement */

                              if(!$stmt->execute($data)) {

                                    //print_r($stmt->errorInfo());
                                    return false;

                              }

                        return $stmt->fetchAll(\PDO::FETCH_OBJ);

            }


            public function find($query,$data){

                      $stmt = $this->dbh->prepare($query);

                            /* execute prepared statement */

                              if(!$stmt->execute($data)) {

                                    //print_r($stmt->errorInfo());
                                    return false;

                              }

                        return $stmt->fetch();

            }


            public function update($query,$data){


                    $stmt = $this->dbh->prepare($query);

                          /* execute prepared statement */

                            if(!$stmt->execute($data)) {

                                  print_r($stmt->errorInfo());
                                  return false;

                            }

                      return $stmt->rowCount();


            } # insert update delete





            public function delete($query,$data){


                      $stmt = $this->dbh->prepare($query);

                            /* execute prepared statement */

                              if(!$stmt->execute($data)) {

                                    //print_r($stmt->errorInfo());
                                    return false;

                              }

                        return $stmt->rowCount();

            }


            public function sql($query,$data){


                    $stmt = $this->dbh->prepare($query);

                          /* execute prepared statement */

                            if(!$stmt->execute($data)) {

                                  //print_r($stmt->errorInfo());
                                  return false;

                            }


                  return $stmt->fetch(\PDO::FETCH_OBJ);




            } # insert update delete




}
