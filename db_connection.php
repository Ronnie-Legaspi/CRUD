<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

// CONNECTION ACCESSING THE DATABASE
$conn = mysqli_connect($server, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed! " . mysqli_connect_error());
} 
?>
