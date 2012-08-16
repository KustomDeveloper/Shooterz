

<div class="login">
	<form name="user_login" action="" method="post">
    <ul>
      <li><span class="webicons">+</span>Sign In: </li>
      <li><input type="text" name="login_name" id="login_name" size="13" placeholder="Username"></li>
      <li><input type="password" name="login_pass" id="login_pass" size="13" placeholder="Password"></li>
      <li><input type="submit" name="sendlogin" class="sendlogin" value="Log In"></li>
    </ul>
	</form>
  </div><!--End login-->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$login_name = trim($_POST['login_name']);
	$login_pass = trim($_POST['login_pass']);
	$login_errors = array();

	if ( empty($login_name) || empty($login_pass) ) {
    	  $login_errors[]  = "All fields are required."; 
    }
    if (!empty($login_errors)) {
      
      echo "<ul class='error-messages'>";     
        foreach ($login_errors as $errors) {
      	    echo "<li>" . "*" . $errors . "</li>";
        }
      echo "</ul>";
  	
  	} else {
  		//*****FIND A WAY TO *NOT* INCLUDE LOGIN.PHP ON REGISTRATION PAGE
  		//CLEAN USER DATA
      	//CONNECT TO DATABASE
      	// CHECK IF USER AND PASS EXIST USING PREPARED STATEMENTS
      	//CLOSE DATABASE CONNECTION
      	//IF PASS EXISTS REDIRECT USER
      	//IF IT DOESNT EXIST->REPORT ERROR

    }
}


?>
