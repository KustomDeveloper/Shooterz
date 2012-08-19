<?php

/*========================================================================
			My registration validation
=========================================================================*/

if ( isset($_POST['username']) || isset($_POST['email']) || isset($_POST['pass'])
|| isset($_POST['pass_mem']) || isset($_POST['secret']) ) {

  $status = array();
	
	$username  = trim($_POST['username']);
	$email     = trim($_POST['email']);
	$pass      = trim($_POST['pass']);
	$pass_mem  = trim($_POST['pass_mem']);
	$secret    = trim($_POST['secret']);
	$terms     = (!empty($_POST['tos']) ? $_POST['tos'] : null);
	
      if ( empty($username) || empty($email) || empty($pass) || empty($pass_mem) || empty($secret) ) {
    	  $status[]  = "All fields are required"; 
      } else {
      
      if (strlen($username) < 5 || strlen($username) > 25) {
        $status[] = "Username must be 5-25 characters";
      }
      if ( !valid_email($email) ) {
      	$status[] = "Please provide a valid email address";	
      }	
      if (strlen($pass) < 5 || strlen($pass) > 25) {
        $status[] = "Password must be 5-25 characters long";
      }
      if ($pass != $pass_mem) {
      	$status[] = "Your passwords do not match" . "<br/>";
      }
      if ( $secret != 8 ) {
      	$status[] = "Please provide a valid answer to the math question";
      } 
      if ( !isset($terms) && $terms != 'true' ) {
        $status[] = "You must agree to the Terms of Service";
      }
    
    }
  
  if (!empty($status)) {
      echo "<ul class='error-messages'>";
      
      foreach ($status as $error) {
        
        echo "<li>" . " * " . $error . "</li>";
      }

      echo "</ul>";
  
  } else {
      //$salt     = "ywkNmUrJlEqQfhdUnTr";
      $username = htmlEncode($username);
      $email    = htmlEncode($email); 
      $pass     = /*md5(*/htmlEncode($pass);//) . $salt;  
      $pass_mem = htmlEncode($pass_mem); 
      $secret   = htmlEncode($secret);  
      
      $ap_username = $username;//"first try";
      $ap_pass     = $pass;//"JOHNNY";
      $ap_email    = $email;//"stuey@yahoo.com";

      add_player($ap_username, $ap_pass, $ap_email);
      
      redirect_user(thank_you);
     
      }
      

} /*========================================================================
      End my registration validation
=========================================================================*/







?><!--CLOSE PHP BLOCK-->

