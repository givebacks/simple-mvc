<?php

namespace App\Core;

class ViewRender
{

		/*
		* Views Views Views Views
		*/

		 public function renderView($dir, $view, $data)
		 {
			   $this->view($dir, $view, $data);
		 }

		  protected function view($dir, $view, $data)
		  {
			  include_once DIRREQ."app/view/".$dir."/".$view.".php";
		  }


}
