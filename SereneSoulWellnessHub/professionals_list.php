<?php
// Include the database connection file
include 'db_connection.php';

// Initialize the array to store professionals
$professionalList = array();

// Query to retrieve professionals list
$sql = "SELECT * FROM users WHERE role_id = (SELECT role_id FROM user_roles WHERE role_name = 'Professional')";
$result = $conn->query($sql);

// Check if any professionals were fetched
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Store each professional in the array
        $professionalList[] = $row;
    }
} 

// Close the database connection
$conn->close();
?>
