<?php
  $data = array($db_server,$db_user,$db_password,$db_name);
  if(empty($data[0])){
      $error  = array(
         'type' => 'db',
         'msg' => 'Server Database Kosong'
      );
  } else if(empty($data[1])){
      $error = array(
         'type' => 'db',
         'msg' => 'User Database Kosong'
      );
  } else if(empty($data[3])){
     $error = array(
        'type' => 'db',
        'msg' => 'Nama Database Kosong'
     );
  }
  if(isset($error)){
     print_r($error);
  }
?>