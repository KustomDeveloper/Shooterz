<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'registered_users';

$mysqli = new mysqli($server, $user, $pass, $db);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Success... ' . $mysqli->host_info . "\n";

$mysqli->close();














?>