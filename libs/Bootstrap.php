<?php




  class Bootstrap {
   public function __construct() {
    // $url = $_GET['url'];
    $url = isset($_GET['url']) ? $_GET['url'] : null;

    $url = rtrim($url, '/');
     $url = explode('/', $url);
     if(empty($url[0])) {
   require 'controllers/index.php';
   $controller = new Index();
   $controller->index();
   return false;
  }

    // if (!empty($url)) { 
    //     $url = rtrim($url, '/'); 
    //     $url = explode('/', $url); 
    // } 
  

        // else $url[0] = 'index';
  

    $file = 'controllers/'.$url[0].'.php';

    if(isset($url[2])) {
  if(method_exists($controller, $url[1])) {
   $controller->{$url[1]}($url[2]);
  } else {
   echo 'Error!';
  }
} else {
  if(isset($url[1])) {
   $controller->{$url[1]}();
  } 
  else {
   $controller->index();
  }
}

    // if(file_exists($file)) {
    //  require $file;
    // } 
    //     else {
    //  require 'controllers/error.php';
    //  $controller = new Error();
    //  return false;
    // }
    // $controller = new $url[0];

    // if(isset($url[2])) {
    //  $controller->$url[1]($url[2]);
    // } 
    //     else {
    //          if(isset($url[1])) {
    //           $controller->$url[1]();
    //          }
    // }
   }
  }

//  class Bootstrap {
//     public function __construct() {


//             $url = isset($_GET['url']) ? $_GET['url'] : null;
//             // $url = explode('/', $url);

//                   if(!empty($url)) {
//                      $url = rtrim($url, '/');
//                      $url = explode('/', $url);
//                  }else  $url[1] = 'index';
//                   $file = 'controllers/' . $url[0] . '.php';

//                    require 'controllers/index.php';
//                    $controller = new Index();
//                    return false;
//   }
// }








   //      $url = isset($_GET['url']) ? $_GET['url'] : null;

   //      $url = explode('/', $url);


   // if (!empty($url)) {$url = rtrim($url, '/');
   //  $url = explode('/', $url); } 
   //  else $url[0] = 'index';
   //  $file = 'controllers/' . $url[0] . '.php';
   //          return false;

    
   

