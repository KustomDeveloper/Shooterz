<?php include("header.php"); ?>


<!--FUNCTIONS.PHP INCLUDED IN HEADER.PHP-->
<?php require("submitForm.php"); ?>
  
  <form action="" method="post">
 
	<div class="register">
      <h1 style="font-size:24px;">New user registration form</h1><br/><br/><br/>

      <label for="username">Choose a username:</label>
      <input type="text" class="regi-input" id="username" name="username"  size="16" value='<?php echo old("username");?>' />
      <span class="invalid_field"></span> <br/>
      <label for="email">Enter your e-mail:</label>
      <input type="email" class="regi-input" id="email" name="email" size="16" value='<?php echo old("email");?>' />
      <span class="invalid_field"></span> <br/>
      <label for="password">Choose a password:</label>
      <input type="password" class="regi-input" id="password" name="pass" size="16" value='<?php echo old("pass");?>' />
      <span class="invalid_field"></span> <br/>
      <label for="pass_mem">Retype password:</label>
      <input type="password" class="regi-input" id="pass_mem" name="pass_mem" size="16" value='<?php echo old("pass_mem");?>' />
      <span class="invalid_field"></span> <br/>
      <label for="secret">"What is 3 + 4 + 1?"</label>
      <input type="text" class="regi-input" id="secret" name="secret" size="16" value='<?php echo old("secret");?>' />
      <span class="invalid_field"></span> <br/><br/>
      <input type="checkbox" style="margin:20px 20px 20px 5px ;" class="regi-input" id="tos" name="tos" value="true" /><span class="terms">Do you agree to the:<a href="terms.php"> Terms Of Service </a> ? </span><br/>
      
      <div class="buttonwrap"><label for="submit"></label> <button id="regi-button" type="submit">Submit</button></div>
      
  </div>
  
  </form><!--End form-->

<?php include ("footer-nav.php");?>

<?php include("footer.php"); ?>   
  
