<?php include("header.php"); ?>

<div id="wrapper">
  
  <div class="login">
    <ul>
      <li><span class="webicons"><img src="images/webicons/glyphicons_003_user.png"></span>Sign In: </li>
      <li><input type="text" id="username" size="13" value="Username"></li>
      <li><input type="text" id="password" size="13" value="Password"></li>
    </ul>
  </div><!--End login-->
	
  <?php include ("nav.php");?>
	
 <div class="logo"><img src="images/shooterz-comic-logo.png" width="250px"height="143px"/></div>
  
	<div class="register">
    <table>
    <tr>
      <td width="170px">Choose a username:</td>
      <td class="regi-input"><input type="text" id="username" size="16" value=""></td>
    </tr>
    </table>

    <table>
    <tr>
      <td width="170px">Enter your e-mail:</td>
      <td class="regi-input"><input type="email" id="email" size="16" value=""></td>
    </tr>
    </table>

    <table>
    <tr>
      <td width="170px">Choose a password:</td>
      <td class="regi-input"><input type="password" id="password" size="16" value=""></td>
    </tr>
    </table>

    <table>
    <tr>
      <td width="170px">Retype password:</td>
      <td class="regi-input"><input type="password" id="password" size="16" value=""></td>
    </tr>
    </table>

    <table>
    <tr>
      <td width="170px">"What is 3 + 4 + 1?"</td>
      <td class="regi-input"><input type="text" id="secret" size="16" value=""></td>
    </tr>
    </table>

    
    <button id="regi-button">Submit</button>
    


  </div><!--End login-->
  
    <?php include ("footer-nav.php");?>
    <div class="footer-logo"><img src="images/shooterz-comic-logo-footer.png"/></div>
</div><!--Wrapper-->

<?php include("footer.php"); ?>