<?php include("includes/header.inc.php"); ?>

 <h2 style="font-size:28px;margin:100px 0px 30px;font-weight:bold;">Contact Us</h2>

<form name="contact_me" action="" method="post">
  <div class="contactAdmin">
      <ul>
      
      <label for="Name"><span class="contact_glyphs">+</span>Name</label>
      <li>
      	<input type="text"  id="con_name" name="con_name" class="con_name"  size="16" value='<?php echo old("con_name");?>' />
      </li>
      
      <label for="Email"><span class="contact_glyphs">%</span>Email</label>
      <li>
      <input type="email"  id="con_email" name="con_email" class="con_email" size="16" value='<?php echo old("con_email");?>' />
      </li>
      
      <label for="textbox"><span class="contact_glyphs">&</span>Message</label>
      <li>
      <textarea class="con_text" height="90px"></textarea>
  	  </li>
      
      
      <li>
      	<input type="submit" value="Submit &#187" name="con_submit" id="con_submit" class="con_submit" />
      </li>
  	</ul>
    </div><!--CONTACT ADMIN-->

  
  </form><!--End form-->
  <script type="text/javascript">
 
  //hide the login form so it doesnt interfere
  //with my contact form functionality
      $('.login').hide();
      //scroll to bottom of page
      var $elem = $('body');
      $('html, body').animate({scrollTop: $elem.height()}, 800);
  //validate message then send using php mail();   

  //if validation successful do this
      $('form').on('submit', function(e){
        $(this).hide();
          $('h2').html('Thank You.' + '<br/>' + 'Your message has been sent.');
  
          console.log('success!!');
          e.preventDefault();
      });

  </script>

<?php include("includes/footer.inc.php"); ?>   