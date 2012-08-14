<?php
/*========================================================================
			Sticky Forms function
=========================================================================*/
 

 function old($key) {
  	if ( !empty($_REQUEST[$key]) ) {
  		return htmlspecialchars($_REQUEST[$key]);
  	}
  	return '';
 }


/*========================================================================
			Uses built in PHP Email validation function
=========================================================================*/
 

 function valid_email($email) {
  	return filter_var($email, FILTER_VALIDATE_EMAIL);
 }


/*========================================================================
			Add registered users to mailing_list.php
=========================================================================*/


function add_registered_user($username, $email, $pass) { 
	$order = "username: " .  $username . "\n" . "Email: " .  $email . "\n" . "Password: " .  $pass . "\n\n" ;
    file_put_contents('mailing_list.php', "$order\n", FILE_APPEND);
}


/*========================================================================
			Redirect function
=========================================================================*/


function redirect_user($location) {
	 $redirect = "<script type='text/javascript'>
      window.location = '$location.php';
      </script>";
      echo $redirect;

}


/*========================================================================
			My next function
=========================================================================*/

/*========================================================================
			My next function
=========================================================================*/
?>





