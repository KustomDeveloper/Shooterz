<?php

/*=====================================================================
		PDO MYSQL DATABASE CONNECTION
======================================================================*/

$config['db'] = array(           //================================================
    'host'     => 'localhost',  //====NEED TO WRAP ALL CODE IN TRY BLOCKS==============
    'username' => 'root',       //=================================================
    'password' => '',
    'dbname'   => 'registered_users',
);
  $conn = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'], 
      $config['db']['username'], $config['db']['password']);
  
//try {
$sql  = "INSERT INTO PLAYERS (player_name, player_password, player_email) 
          VALUES (?, ?, ?)";
$db = $conn->prepare($sql);

$db->bindParam(1, $username);
$db->bindParam(2, $pass);
$db->bindParam(3, $email);

/*=====================================================================
    DATA I NEED TO INSERT
======================================================================*/

$username = "lueytyer";//$_POST['user_name'];
$pass     = "lueyueysspass";//$_POST['password'];
$email    = "stuey@gmail.com";//$_POST['email'];
        
$db->execute();

/*=====================================================================
		CONNECTIONS
======================================================================*/








?>