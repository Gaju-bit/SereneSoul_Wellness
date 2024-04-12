<?php
// Database connection parameters
$servername = "qzkp8ry756433yd4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "ezaj80deks9t1y8z";
$password = "wwvrykhj37ygdn11";
$dbname = "nh92y6zjsy62tkt3";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo " ";

?>