<?php

namespace App\Core;

class Router
{
	
	private $routes = [];
	private $request;
	private $response;

	/*
	*
	*  It injects the instances from requests.php and response.php as soon as the Router is instantiated
	*
	*/

	public function __construct($request, $response)
	{
		$this->request  = $request;
		$this->response = $response;
	}

	public function get($path, $callback)
	{
		$path = DIR_ROOT . $path;
		$this->routes['get'][$path] = $callback;
	}

	public function post($path, $callback)
	{
		$path = DIR_ROOT . $path;
		$this->routes['post'][$path] = $callback;
	}


	/*
	*
	*  this method is called in the App.php run() method;
	*
	*/

	public function resolve()
	{
		  /*
		  *   Get route path, method name and URL params
		  */

		  $path   = $this->request->getRoutePath();
		  $method = $this->request->method();
		  $params = $this->request->getUrlParams();

		  /*
		  *
		  *  ( it checks if the route exist and isset on web.php file )
		  *
		  *  if the route is not set sends it to 404
		  *
		  *  how ?? works => https://www.php.net/manual/pt_BR/language.operators.comparison.php
		  *
		  */


		  $callback = $this->routes[$method][$path] ?? false;


		  if($callback === false){

				  $this->response->setStatusCode(404);

				  $data = [
					"date"        => NOW,
					"title"       => "404",
					"description" => 'This is a simple mvc framework for PHP',
					"keywords"    => 'simple mvc framework'
				  ];
				
				  return $this->request->view->renderView("errorView", "index", $data);
				  
		  }


		  if(is_string($callback)){
			  
				return $this->renderView($callbacks,$params);
		  }


		  if(is_array($callback)){

				$callback[0] = new $callback[0]();
		  }

		  return call_user_func($callback, $this->request);


	}



} #class
