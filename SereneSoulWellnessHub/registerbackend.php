<?php
// Start the session
session_start();

// Include the database connection file
require_once "db_connection.php";

// Initialize error message variable
$errorMsg = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $gender = $_POST['gender'];
    $maritalStatus = $_POST['familyRole'];
    $birthdate = $_POST['birthdate'];
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $userType = $_POST['userType'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    // Concatenate first_name and last_name into full_name
    $fullName = $firstName . ' ' . $lastName;

    // Check if passwords match
    if ($password != $confirmPassword) {
        $errorMsg = "Passwords do not match.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement to insert user data into the database
        $sql = "INSERT INTO users (first_name, last_name, full_name, gender, marital_status, birthdate, phone_number, email, password, role_id) VALUES ('$firstName', '$lastName', '$fullName', '$gender', '$maritalStatus', '$birthdate', '$phoneNumber', '$email', '$hashedPassword', ";

        // Determine role_id based on user type
        if ($userType == 'Patient') {
            $sql .= "(SELECT role_id FROM user_roles WHERE role_name = 'Patient')";
        } else if ($userType == 'Professional') {
            $sql .= "(SELECT role_id FROM user_roles WHERE role_name = 'Professional')";
        }

        $sql .= ")";

        // Execute SQL statement
        if (mysqli_query($conn, $sql)) {
            // Registration successful, redirect to login page
            header("Location: login.php");
            exit();
        } else {
            // If an error occurred while executing SQL statement
            $errorMsg = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// Close database connection
mysqli_close($conn);
?>
