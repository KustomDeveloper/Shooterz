
</div><!--col-2-3-->
<div class="col-1-3">
   <h1 style="font-size:30px;"> this is my sidebar column </h1>
</div><!--col-1-3-->
</div><!--Grid-->
<div id="footer">
	<div class="footer-logo"><img src="images/final-logo.png" width="150" height="94" /></div>
	
	<div class="footer-nav">
	
	<ul>
	
	<li><a href="index.php">Home</a></li>
	<li class="seperator">|</li>
	<li><a href="register.php">Register</a></li>
	<li class="seperator">|</li>
	<li><a href="about.php">About</a></li>
	<li class="seperator">|</li>
	<li><a href="faq.php">Faq</a></li>
	<li class="seperator">|</li>
	<li><a href="contact.php">Contact</a></li>

	</ul>
	</div><!--END FOOTER NAV-->

</div><!--END FOOTER-->

<div id="copyright"><span id="copy">&copy &nbsp 2012 Shooterz.org | The Online Quarters Game</span></div>
	<script>
	(function($) {//ITS leaving shit streaks across the screen!!!
	 $(".social-tab").css('right','-100px');
		$(".social-tab").hover(
		   function () {
			  $(this).animate({
			   right: '0px'
			  }, 200, function() {
			    //callback function
			  });
			},  
		   function () {
		      $(this).animate({
			   right: '-100px'
			  }, 200, function() {
			    //callback function
			  });
		  });
	})(jQuery);
	</script>
</body>
</html>