<?php


 class Bootstrap {
    public function __construct() {


            $url = isset($_GET['url']) ? $_GET['url'] : null;
            // $url = explode('/', $url);

                  if(!empty($url)) {
                     $url = rtrim($url, '/');
                     $url = explode('/', $url);
                 }else  $url[1] = 'index';
                  $file = 'controllers/' . $url[0] . '.php';

                   require 'controllers/index.php';
                   $controller = new Index();
                   return false;
  }
}








   //      $url = isset($_GET['url']) ? $_GET['url'] : null;

   //      $url = explode('/', $url);


   // if (!empty($url)) {$url = rtrim($url, '/');
   //  $url = explode('/', $url); } 
   //  else $url[0] = 'index';
   //  $file = 'controllers/' . $url[0] . '.php';
   //          return false;

    
   

