<?php    //session start   

?>

<?php include("includes/header.inc.php"); ?>


    <div id="adspace-one">Place Your Ad Here.</div>

      <div class="opponent-1">
      <video class="camera"></video>

        <div class="video-controls">
  	    	<button id="play">{</button>
        	<button id="pause">|</button>
          <button id="stop"></button <!--Causes error in script-->

       </div><!--video controls-->  
       </div><!--Opponent-1 class-->
       
       <div class="opponent-2">
       
       <video class="camera"></video>

        <div class="video-controls">
  	    	<button id="play">{</button>
        	<button id="pause">|</button>
          <button id="stop"></button <!--Causes error in script-->
        </div><!--video controls-->    
    
       </div><!--Opponent-2 class-->  

       <?php add_gameui(); ?>

  
<?php include ("includes/comment.inc.php");?>


<script type="text/javascript">
/**************************************************
/*****Chatbox Script
/***************************************************/
var $s = jQuery.noConflict();
  $s('form').on('submit', function(e){
     // console.log(  );
     var message = $s(this).find('#textform').val();
     $s('#chatbox').prepend(message + "<br/>");
      e.preventDefault();
      //highlight text after message is sent
      //make enter send message when input field is in focus

  });
/**************************************************
/*****Shotcup Script
/***************************************************/
//hold Shift then press ctrl to increase shot count
//USB teensy controller hooked into event 
var $j = jQuery.noConflict(),
score = 0;

$j(document).on('keydown', function(event) {       
  if( event.which === 17 && event.shiftKey ) {         
     $j(".my-score").text(++score);
    }
}); 
</script>
 
<?php include("includes/footer.inc.php"); ?>