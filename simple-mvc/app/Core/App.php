<?php

namespace App\Core;

use App\Core\ViewRender;

class App
{
    public $router;
    public $request;
    public $response;
    public $view;
    
    public function __construct()
    {
        $this->request    = new Request(new ViewRender());
        $this->response   = new Response();
        $this->router     = new Router($this->request, $this->response);
    }

    public function run(){
        return $this->router->resolve();
    }

}
