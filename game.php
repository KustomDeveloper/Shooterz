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
 
<?php include("includes/footer.inc.php"); ?>