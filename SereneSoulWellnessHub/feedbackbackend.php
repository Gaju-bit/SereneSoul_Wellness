<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include_once "db_connection.php";

    // Define variables and initialize with empty values
    $name = $email = $subject = $message = "";
    $full_name_err = $email_err = $subject_err = $message_err = "";

    // Validate full name
    if (isset($_POST["name"])) {
        $full_name = trim($_POST["name"]);
        if (empty($name)) {
            $full_name_err = "Please enter your full name.";
        }
    } else {
        $full_name_err = "Full name is required.";
    }

    // Validate email
    if (isset($_POST["email"])) {
        $email = trim($_POST["email"]);
        if (empty($email)) {
            $email_err = "Please enter your email.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format.";
        }
    } else {
        $email_err = "Email is required.";
    }

    // Validate subject
    if (isset($_POST["subject"])) {
        $subject = trim($_POST["subject"]);
        if (empty($subject)) {
            $subject_err = "Please enter a subject.";
        }
    } else {
        $subject_err = "Subject is required.";
    }

    // Validate message
    if (isset($_POST["message"])) {
        $message = trim($_POST["message"]);
        if (empty($message)) {
            $message_err = "Please enter your message.";
        }
    } else {
        $message_err = "Message is required.";
    }

    // Check input errors before inserting into database
    if (empty($full_name_err) && empty($email_err) && empty($subject_err) && empty($message_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO feedback (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssss", $param_name, $param_email, $param_subject, $param_message, $param_created_at);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_subject = $subject;
            $param_message = $message;
            $param_created_at = date("Y-m-d H:i:s");

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to success page
                header("location: feedback_success.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $conn->close();
}
?>
