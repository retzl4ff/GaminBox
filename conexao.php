<?php

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";     
$db = "gaminbox";

$mysqli = new mysqli($servername, $username, $password, $db);
  
if(!$mysqli) {
    die("Connection failed " . mysqli_connect_error());
}
?>