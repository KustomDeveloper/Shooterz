<?php
/*========================================================================
			Sticky Forms Function
=========================================================================*/
 

 function old($key) {
  	if ( !empty($_REQUEST[$key]) ) {
  		return htmlspecialchars($_REQUEST[$key], ENT_QUOTES, 'UTF-8');
  	}
  	return '';
 }


/*========================================================================
			Uses Built In PHP Email Validation Function
=========================================================================*/
 

 function valid_email($email) {
  	return filter_var($email, FILTER_VALIDATE_EMAIL);
 }


/*========================================================================
      XSS Protection Filter Function
=========================================================================*/

function htmlEncode($input) {
   $input = strip_tags($input);
   return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}


/*========================================================================
			Add registered Users To Mailing_list.php
=========================================================================*/


function add_registered_user($username, $email, $pass) { 
	$order = "username: " .  $username . "\n" . "Email: " .  $email . "\n" . "Password: " .  $pass . "\n\n" ;
    file_put_contents('mailing_list.php', "$order\n", FILE_APPEND);
}


/*========================================================================
			Redirect Function
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





