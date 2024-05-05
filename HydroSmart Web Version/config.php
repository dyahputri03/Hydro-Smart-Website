<?php
$servername = "localhost";
$database = "hydro_smart";
$username = "root";
$password = "123";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}