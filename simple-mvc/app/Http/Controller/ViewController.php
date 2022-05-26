<?php

 namespace App\Http\Controller;


 class ViewController extends Controller
 {


   public function home()
   {
        $data = [
          "date"         => NOW,
          "title"       => 'Simple MVC – PHP Framework (Home)',
          "description" => 'This is a Simple MVC framework for PHP developers',
          "keywords"    => 'simple mvc framework',
          "snip_img"    => DIRIMG."simple-mvc.png"
        ];
        
        $this->render("home", "index", $data);   
   }

  
   public function privacy($data = NULL)
   {

    if(isset($data->params)){var_dump($data->params);}

        
        $data = [
          "date"         => NOW,
          "title"       => 'Simple MVC – PHP Framework (Privacy)',
          "description" => 'This is a Simple MVC framework for PHP developers',
          "keywords"    => 'simple mvc framework',
          "snip_img"    => DIRIMG."simple-mvc.png"
        ];
        
        $this->render("privacy", "index", $data);
   }

   public function about($data = NULL)
   {

    if(isset($data->params)){var_dump($data->params);}

        $data = [
          "date"         => NOW,
          "title"        => 'Simple MVC – PHP Framework (About)',
          "description"  => 'This is a simple mvc framework for PHP developers',
          "keywords"     => 'simple mvc framework',
          "snip_img"    => DIRIMG."simple-mvc.png"
        ];
        
        $this->render("about", "index", $data);
   }


   public function contact($data = NULL)
   {

    if(isset($data->params)){var_dump($data->params);}

        $data = [
          "date"         => NOW,
          "title"       => 'Simple MVC – PHP Framework (Contact)',
          "description" => 'This is a simple mvc framework for PHP developers',
          "keywords"    => 'simple mvc framework',
          "snip_img"    => DIRIMG."simple-mvc.png"

        ];
        
        $this->render("contact", "form", $data);
    }





}
