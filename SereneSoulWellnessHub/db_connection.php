<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sereneSoul_wellness_hub";
// $password = "cs341webtech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo " "; 
?>
