<?php

namespace App\Core;


class Request
{
      public $view;

      public function __construct($obj = NULL){
         
            $this->view = $obj;
      }


      /*
      *   Get first param of URL ( set route path )
      */

      public function getRoutePath()
      {
             $params = explode("/",filter_var(rtrim($_GET['url'],"/"), FILTER_SANITIZE_URL));

             $path = $params[0] ?? NULL;

             if(count($params) > 1){

                  $path = $params[0].'/'.$params[1];
             }

             return DIR_ROOT.'/'.$path;
      }



      /*
      *   Methods post, get...
      */

      public function method(){

            return strtolower($_SERVER['REQUEST_METHOD']);
      }

      public function isGet(){

            return $this->method() === 'get';
      }

      public function isPost(){

            return $this->method() === 'post';
      }



      /*
      *   Check URL params is exist
      */

      public function getUrlParams()
      {

              $params = explode("/",filter_var(rtrim($_GET['url'],"/"), FILTER_SANITIZE_URL));

              $countParams = count($params);

                if($countParams > 2)
                {
      
                  $this->params = [];

                      foreach($params as $key => $value){

                        // if key > 1 it means 3 or more params because key starts from 0

                            if($key > 1){
                                $this->params += [$key => $value];
                            }
                      }

                  return $this->params;

                  } # end if

      }


      /*
      *   Incomming Data from $_POST $_GET methods
      */

      public function incomingData()
      {

              $data = [];

              if($this->method() == 'get'){

                  foreach($_GET as $key => $value){

                    $data[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);

                  }
              }

              if($this->method() == 'post'){

                  foreach($_POST as $key => $value){

                    $data[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);

                  }
              }


              return $data;

      }






} 
