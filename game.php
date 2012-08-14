<?php    //session start   

?>

<?php include("header.php"); ?>

<?php include ("nav.php");?>

    <div id="adspace-one">Place Your Ad Here.</div>

<video id="camera"></video>

        <div class="video-controls">
  	    	<button id="play"><img src="images/play-button.png"/></button>
        	<button id="pause"><img src="images/pause-button.png"/></button>
          <button id="stop"></button <!--Causes error in script-->

       </div><!--video controls-->  

       <div class="opponent">
       
       <video id="camera"></video>

        <div class="video-controls">
  	    	<button id="play"><img src="images/play-button.png"/></button>
        	<button id="pause"><img src="images/pause-button.png"/></button>
            <button id="stop"></button <!--Causes error in script-->
        </div><!--video controls-->    
    
       </div><!--Opponent class-->  

        <span id="drink-count">Shot Count</span>

		<div id="score-box">

			<span class="my-score">0</span>
			<button class="plus">+</button>
			<button class="minus">-</button>
		
		</div><!--End scorebox-->

		<span id="reset-counter">Reset Counter</span>


<?php include ("comment.php");?>
 

<?php include ("footer-nav.php");?>
  

<?php include("footer.php"); ?>