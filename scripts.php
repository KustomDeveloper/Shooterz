
<script type="text/javascript">

/*==========================================
    CHAT BOX SCRIPT
===========================================*/  

//BROKEN CHAT SCRIPT
function chatboxScript(){
  	  
  var $j = jQuery.noConflict();
  //var textVal = document.forms[0].textform.value,
  //  cleanOut = $j('#textform');
  //add a new message to chatbox
  $j('#shout').on('click', function(e){
    e.preventdefault;
    var $j = jQuery.noConflict();
    var textVal = document.forms[0].textform.value,
    var cleanOut = $j('#textform');
    e.preventdefault;
    $j('#chatbox').prepend(textVal + "<br/>");

  });
    
  //select old text and set focus in textbox
    cleanOut.select().focus();
}

/*====================================================================
    CHATBOX SUBMIT MESSAGE WITH ENTER BUTTON
/*===================================================================*/

function enterMessage() {
  //createfunction to enter message when enter is pressed
  //must trigger same button that is clicked
  var $j = jQuery.noConflict();
}

/*==========================================
    SHOT CUP SCRIPT
===========================================*/    

//hit Shift then press ctrl to increase shot count
//USB teensy controller hooked into event
	
var $j = jQuery.noConflict(),
score = 0;

$j(document).on('keydown', function(event) {       
  if( event.which === 17 && event.shiftKey ) {         
     $j(".my-score").text(++score);
    }
}); 
  

/*==========================================
      SCRIPT
===========================================*/  


</script>