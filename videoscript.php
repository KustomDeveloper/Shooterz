<script>
/*==========================================
          VIDEOSCRIPT
===========================================*/  
 window.addEventListener("load", function() {
      var camera = document.getElementById("camera");
      var play = document.getElementById("play");
      var pause = document.getElementById("pause");
      var stop = document.getElementById("stop");
      var headerTag = document.getElementById("warningMsg");
      var firstMessage = "<span class='web-glyphs'>c</span>" + "Your browser does not support this video stream." + "<br/>";
      var secondMessage = "Please download Opera 12 or higher here: ";
      var thirdMessage = '<a href="http://opera.com">Opera</a>';

    
      var constraints = {video:true, audio:true};
      function success(stream) {
        camera.src = stream;
        camera.play();
        disableButtons(true, false, false);
      }
      function failure(error) {
        alert("Is your Camera connected?" + JSON.stringify(error));
      }
      function disableButtons(disPlay, disPause, disStop) {
        play.disabled = disPlay;
        pause.disabled = disPause;
        stop.disabled = disStop;
      }
      disableButtons(true, true, true);
      if (navigator.getUserMedia){
        navigator.getUserMedia(constraints, success, failure);
      }
      if (navigator.webkitGetUserMedia){
        navigator.webkitGetUserMedia(constraints, success, failure);
      }
      else{
        headerTag.innerHTML = firstMessage + secondMessage + thirdMessage;
      }
      // alert("Your browser does not support getUserMedia()");
       play.addEventListener("click", function() {
       disableButtons(true, false, false);
       camera.play();
       }, false);
       pause.addEventListener("click", function() {
       disableButtons(false, true, false);
       camera.pause();
       }, false);
       stop.addEventListener("click", function() {
       disableButtons(true, true, true);
       camera.pause();
       camera.src = "";
       }, false);
    }, false);

/*==========================================
          
===========================================*/  
  </script>