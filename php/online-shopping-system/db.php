<?php

$servername = "database.cmqaetb0osxr.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$db = "database";

// Create connection
$con = mysqli_connect($servername,$username,$password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
