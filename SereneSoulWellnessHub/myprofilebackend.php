<?php
// Start the session
session_start();

// Include the database connection file
require_once "db_connection.php";

// Initialize error message variable
$errorMsg = '';

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Get user ID from session
$user_id = $_SESSION["user_id"];

// Retrieve user data from the database
$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);

// Check if user data is found
if (mysqli_num_rows($result) == 1) {
    // Fetch user data
    $row = mysqli_fetch_assoc($result);
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $fullName = $row['full_name'];
    $gender = $row['gender'];
    $maritalStatus = $row['marital_status'];
    $birthdate = $row['birthdate'];
    $phoneNumber = $row['phone_number'];
    $email = $row['email'];

    // Free result set
    mysqli_free_result($result);
} else {
    // If user data is not found, display error message
    $errorMsg = "User data not found.";
}

// Close database connection
mysqli_close($conn);
?>
