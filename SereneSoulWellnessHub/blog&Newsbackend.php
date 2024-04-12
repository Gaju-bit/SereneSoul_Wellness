<?php
include("db.connection.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author']; 
    $publish_date = $_POST['publish_date']; 

    // Check if all required fields are provided
    if (!empty($title) && !empty($content) && !empty($author)) {
        // Prepare and bind the INSERT statement
        $stmt = $conn->prepare("INSERT INTO newsandblog (title, content, author, publish_date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $content, $author, $publish_date);


        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to Blog&News.php
            header("Location: Blog&News.php");
            exit(); 
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Required fields are missing.";
    }
}

// Close the connection
$conn->close();
?>
