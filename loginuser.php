<?php//session start here!?>

<?php include("includes/header.inc.php"); ?>

<div style="margin-top:25%;"></div>

<h1 style="border-radius:15px;width:80%;font-size:28px;text-indent:80px;color:#D76532;background:#333;padding:10px;">
	Login &#187
</h1>

<?php include ("includes/login.inc.php"); ?>

<h1 style="border-radius:15px;font-size:28px;text-indent:80px; color:#D76532; background: #333; padding:10px;width:80%;margin-top:15%;text-indent:-9999px;">l</h1>

<script> 

(function($){
	var userInput = $('form input');
	//hide unwanted stuff
	$('form').first().hide();
	$('.signIn').hide();
	$('span.webicons').hide();
	//add and remove classes to style form
	userInput.addClass('resizeInput');
	userInput.last().removeClass('sendlogin').addClass('buttonResize');
})(jQuery);

</script>


<?php include("includes/footer.inc.php");?>