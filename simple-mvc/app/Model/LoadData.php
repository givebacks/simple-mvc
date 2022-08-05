<?php

namespace App\Model;

class LoadData
{

	
public function load($data)
{
		foreach($data as $key => $value){

				/*  firstname, lastname... */
				if(property_exists($this, $key)){

					$this->{$key} = $value;

				} 
		}

} 


}