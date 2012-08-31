

<div class="login">
	<form name="user_login" action="" method="post">
    <ul>
      <li class='signIn'><span class="webicons">+</span>Sign In: </li>
      <li><input type="text" name="login_name" id="login_name" size="13" placeholder="Username"></li>
      <li><input type="password" name="login_pass" id="login_pass" size="13" placeholder="Password"></li>
      <li><input type="submit" name="sendlogin" class="sendlogin" value="Log In"></li>
    </ul>
	</form>
</div><!--End login-->

<?php

if ( isset($_POST['login_name']) || isset($_POST['login_pass']) ) {

	$login_name = strip_tags(trim($_POST['login_name']));
	$login_pass = strip_tags(trim($_POST['login_pass']));
	$login_errors = array();

	if ( empty($login_name) || empty($login_pass) ) {
    	  $login_errors[]  = "Please try to sign in again"; 
    }
    if (!empty($login_errors)) {
      echo "<div class='wrong'>";     
        foreach ($login_errors as $errors) {
      	    echo  " * " . $errors;
        }       
      echo "</div>";
  	
  	} else {
      
      //CLEAN USER DATA
      $login_name =  htmlEncode($login_name);
      $login_pass =  htmlEncode($login_pass);

      //CONNECT TO DB & CHECK NAME & PW THEN REDIRECT TO FIND MATCH 
      validate_login($login_name, $login_pass);
    }
}


?>
