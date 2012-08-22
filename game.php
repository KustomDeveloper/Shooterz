<?php    //session start   ?>

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

<?php include ("includes/comment.inc.php");?>
<?php add_gameui(); ?>
<div style="clear: both;"></div>
<script type="text/javascript">
/**************************************************
/*****Chatbox Script
/***************************************************/
var $j = jQuery.noConflict();
var score = '0';

  $j('.login').hide();
  $j('form').on('submit', function(e){
     var message = $j(this).find('#textform').val();
     $j('#chatbox').prepend(message + "<br/>");
      e.preventDefault();
      $j('#textform').val('').focus();
  });

/**************************************************
/*****Shotcup Script
/***************************************************/
//hold Shift then press ctrl to increase shot count
//USB teensy controller hooked into event 

$j(document).on('keydown', function(event) {       
  if( event.which === 17 && event.shiftKey ) {         
     $j(".my-score").text(++score);
    }
}); 

/**************************************************
/*****FUNCTION THAT WILL
/**** RESET THE SCORE TO 0
/***************************************************/

$j('.counter').on('click', function(){
  //console.log('clicked!');
   var currScore = $j('.my-score');
   currScore.empty();
   score = '0';
   currScore.text('0');
})

/**************************************************
/*****ADD A POINT
/***************************************************/

//$j('.minus').on('click', function(){
//  var myScore = score.text().value();
//  console.log(myScore);

//});




/**************************************************
/*****REMOVE A POINT
/***************************************************/
</script>
 
<?php include("includes/footer.inc.php"); ?>