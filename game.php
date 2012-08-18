<?php    //session start   

?>

<?php include("header.php"); ?>

<?php include ("nav.php");?>

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

  
<?php include ("comment.php");?>
 
<?php include ("footer-nav.php");?>
  
<?php include("footer.php"); ?>