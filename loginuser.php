<?php//session start here!?>

<?php include("includes/header.inc.php"); ?>


<div style="margin-top:30%;"></div>

<?php include ("includes/login.inc.php"); ?>

<script> 

(function($){
	var userInput = $('form input');
	$('form').first().hide();
	$('.signIn').hide();
	$('span.webicons').hide();
	userInput.addClass('resizeInput');
	userInput.last().addClass('buttonResize');
	//console.log('success!!');
})(jQuery);

</script>


<?php include("includes/footer.inc.php");?>