<?php

 namespace App\Http\Controller;

 use App\Core\ViewRender;


 class Controller 
 {

      private $view;

      public function render($dir, $view, $data = [])
      {

         if($this->view === NULL){ $this->view = new ViewRender; }
         
         return $this->view->renderView($dir, $view, $data);

      }

      public function load($data)
      {
              foreach($data as $key => $value):

                  ///  firstname, lastname...
                    if(property_exists($this, $key)):

                        $this->{$key} = $value;

                    endif;

              endforeach;

      } // end method



     


 }
