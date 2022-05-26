<?php

namespace App\Model;
use App\Core\ViewRender;



abstract class Model
{

  private $view;

  public function render($dir, $view, $data = [])
  {
     if($this->view === NULL){ $this->view = new ViewRender; }

     return $this->view->renderView($dir, $view, $data);
     
  }


  public function loadData($data)
  {
          foreach($data as $key => $value):

              ///  firstname, lastname...
                if(property_exists($this, $key)):

                    $this->{$key} = $value;

                endif;

          endforeach;

  } // end method



} // end Class
