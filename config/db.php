<?php
  // Framework ini di buat oleh WIDHY-SPACE

  if($db == 'mysqli'){
     $data_db = array(
        'db_server' => 'localhost', // sesuaikan dengan server db anda
        'db_user' => 'root', // silahkan sesuaikan username db anda
        'db_password' => '', // silahkan sesuaikan dengan password db anda
        'db_name' => 'youre database name'  // silahkan sesuaikan dengan nama db anda

     );

     $db_server = $data_db['db_server'];   // jangan di edit
     $db_user = $data_db['db_user'];  //jangan di edit
     $db_password = $data_db['password'];  //jangan di edit
     $db_name = $data_db['db_name'];  //jangan di edit

     $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);   // jangan di edit

  }

?>
