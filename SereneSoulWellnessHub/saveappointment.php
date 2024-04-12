<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db_connection.php';

    // Prepare and bind the parameters
    $stmt = $conn->prepare("INSERT INTO appointments (full_name, email_address, phone_number, user_id, reason_for_appointment, appointment_date, appointment_time) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiss", $fullName, $email, $phone, $userId, $reasonForAppointment, $appointmentDate, $appointmentTime);

    // Set parameters and execute
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    // Check if user_id is set in the session
    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
    } else {
        // If user_id is not set, handle the error or provide a default value
        // For example, you can redirect the user to a login page or display an error message
        echo "Error: User ID not found.";
        exit(); // Terminate script execution
    }

    $reasonForAppointment = $_POST['reason'];
    $appointmentDate = $_POST['date'];
    $appointmentTime = $_POST['time'];

    if ($stmt->execute()) {
        // Appointment booked successfully
        header("Location: bookappointment.php"); // Redirect to the booking page
        exit();
    } else {
        // Error occurred while booking appointment
        echo "Error: " . $conn->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}

// Include the professionals_list.php file
include 'db_connection.php';
include 'professionals_list.php';

?>
