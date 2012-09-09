<?php session_start();

/**** redirect player to game page
/****  aftergetting and setting 
/**** session username 
****/

$username = 'sess_id';//session_Username
header("Location: game.php?p=$username"); 

?>

