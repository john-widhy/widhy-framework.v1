<?php
  // Framework ini di buat oleh WIDHY-SPACE
   
   error_reporting(0);
   session_start();

  require_once 'config/config.php';  
  require_once 'config/db.php';
  require_once 'error.php';
  require_once 'routes/default.php';
  require_once 'config/function.php';


  
  // index.php

if (isset($_GET['url'])) {
  require_once 'config/function.php';
  $url = $_GET['url'];
  $url = rtrim($url, '/');
  $url = explode('/', $url);

  // $url[0] adalah nama controller
  // $url[1] adalah nama method
  // $url[2], $url[3], ... adalah parameter yang dikirimkan

  $controler = $url[0];
  $method = $url[1];
  execute_function($controler,$method);
}

 if($data_routes['role'] == 'index'){
 	require_once "controler/".$data_routes['controler'].".php";
    $kontrols = new $data_routes['controler'];
    $kontrols->index();
  }

?>