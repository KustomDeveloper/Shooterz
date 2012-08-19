<?php include("includes/header.inc.php"); ?>

<form name="contact_me" action="" method="post">
 
	<div class="contactAdmin">
      
      <h1 style="font-size:32px;"><span class="contact_glyphs_headline">!</span>&nbspContact Us</h1>

      <ul>
      
      <label for="Name"><span class="contact_glyphs">+</span>&nbsp Name?</label>
      <li>
      	<input type="text"  id="con_name" name="con_name" class="con_name"  size="16" value='<?php echo old("con_name");?>' />
      </li>
      
      <label for="Email"><span class="contact_glyphs">%</span>&nbsp Email?</label>
      <li>
      <input type="email"  id="con_email" name="con_email" class="con_email" size="16" value='<?php echo old("con_email");?>' />
      </li>
      
      <label for="textbox"><span class="contact_glyphs">&</span>&nbsp What do you want to say?</label>
      <li>
      <textarea class="con_text" height="90px"></textarea>
  	  </li>
      
      
      <li>
      	<input type="submit" value="SUBMIT" name="con_submit" id="con_submit" class="con_submit" />
      </li>
  	</ul>
    </div><!--CONTACT ADMIN-->

  
  </form><!--End form-->




<?php include("includes/footer.inc.php"); ?>   