

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

if ( isset($_POST['login_name']) || isset($_POST['login_pass']) ) {

	$login_name = strip_tags(trim($_POST['login_name']));
	$login_pass = strip_tags(trim($_POST['login_pass']));
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
      
      //CLEAN USER DATA
      $login_name =  htmlEncode($login_name);
      $login_pass =  htmlEncode($login_pass);

      // CONNECT TO DATABASE & CHECK IF USER AND PASS EXIST USING PREPARED STATEMENTS
      validate_login($login_name, $login_pass);
      
      //CLOSE DATABASE CONNECTION
          //DONE
      //IF PASS EXISTS REDIRECT USER
      //header('Location:find_match.php');
      //IF IT DOESNT EXIST->REPORT ERROR
         //DONE

    }
}


?>
