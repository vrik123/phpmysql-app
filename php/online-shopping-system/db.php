<?php

$servername = "100.26.111.239";
$username = "admin";
$password = "admin123";
$db = "database1";

// Create connection
$con = mysqli_connect($servername,$username,$password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
