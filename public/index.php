<?php

//require '../App/Controllers/Post.php';
//require '../Core/Router.php';
//composer 
require '../vendor/autoload.php'; 
// Twig_Autoloader::register();


// spl_autoload_register(function ($class){
// $root = dirname(__Dir__);
// $file = $root . '/' . str_replace('\\','/',$class) . '.php';
// if (is_readable(($file))) {
//     require  $root . '/' . str_replace('\\','/',$class) . '.php';
// }
// });


$router = new Core\Router();

//$router->add('',['controller' =>'Home','action'=> 'index']);
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('{controller}/{action}/{id:\d+}');
$router->add('admin/{controller}/{action}',['namespace'=>'Admin']);

echo '<pre>';
var_dump($router->getRoutes());  
echo '<pre/>';





//  echo 'request url = "'.$_SERVER['QUERY_STRING'].'"';
// $url = $_SERVER['QUERY_STRING'];

// if ($router->match($url)) {
//  echo '<pre>';
//  var_dump($router->getParams());
//  echo '<pre/>';
// }
// else{
//     echo "match no found";
// }


$router->dispatch($_SERVER['QUERY_STRING']);


?>