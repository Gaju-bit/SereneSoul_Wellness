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
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Prepare SQL statement to retrieve user data from the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User found, verify password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role_id'] = $row['role_id'];

            // Redirect user based on role
            if ($row['role_id'] == 1) {
                // Patient dashboard
                header("Location: patient_dash.php");
                exit();
            } elseif ($row['role_id'] == 2) {
                // Professional dashboard
                header("Location: professional_dash.php");
                exit();
            }
        } else {
            // Password is incorrect
            $errorMsg = "Incorrect password.";
        }
    } else {
        // User not found
        $errorMsg = "User not found.";
    }
}

// Close database connection
mysqli_close($conn);
?>
