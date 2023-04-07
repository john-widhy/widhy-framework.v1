<?php
  class Widhyf {
  // Properties
  public $query;
  public $file;
  public $q;
  public $session_name;
  public $session;
  public $model;

  // Methods
  function base_url($query) {
    global $base_url;
    echo $base_url.$query;
  }

  function load($file) {
    if (file_exists("view/".$file.".php")) {
       require_once "view/".$file.".php";
     } else {
        $error = array(
          'tipe' => 'require_once',
          'msg' => 'File Gak ada'
        );
        print_r($error);
     }
  } function query($q){
  	  global $conn;
      $query_row = mysqli_query($conn,$q);
      $fetch = mysqli_fetch_assoc($query_row);
      return $fetch;
  } function create_session($session_name,$session) {
       $_SESSION[$session_name] = $session;
  } function unset_session($session_name) {
      unset($session_name);
  } function read_session($session_name) {
      return $_SESSION[$session_name];
  } function load_model($model) {
    if(file_exists("model/".$model.".php")){
       require_once "model/".$model.".php";
    } else{
    	echo 'Model Tidak Di Temukan';
    }
  }
}

function data_controler($controler = ''){
   $widhy->index(); // memanggil method index()
} function the_controler($the = '') {
    global $data_routes;
    $controlers =  $data_routes['controler'];
    if($the == $controlers){
       $status = 'true';
    } else{
    	$status = 'false';
    }
    return $status;
} function execute_function($controlerp = '',$method = '') {
	require_once 'config/function.php';
	require_once 'controler/'.$controlerp.".php";
	$kontroler = new $controlerp();
    $kontroler->$method();
}

  $widhy = new Widhyf();
?>