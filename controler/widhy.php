<?php
 
 /**
  * 
  */
 class widhy {

 	public function index() {
 	  $widhy = new Widhyf();
 	  $widhy->load_model('johnson');
 	  $johnson = new johnson();
 	  $widhy->load('index');
 	}
 }
 
?>