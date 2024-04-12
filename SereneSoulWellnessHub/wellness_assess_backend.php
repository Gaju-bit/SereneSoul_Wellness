<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include_once "db_connection.php";
    // Initialize an empty array to store validation errors
    $errors = [];

    // Sanitize and validate form inputs
    $name = trim($_POST["name"]);
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    $age = intval($_POST["age"]);
    if ($age <= 0) {
        $errors[] = "Age must be a positive number";
    }

    $gender = $_POST["gender"];

    $energyLevels = intval($_POST["energyLevels"]);
    if ($energyLevels < 1 || $energyLevels > 10) {
        $errors[] = "Energy levels must be between 1 and 10";
    }

    $sleepHours = intval($_POST["sleepHours"]);
    if ($sleepHours < 0) {
        $errors[] = "Sleep hours must be a positive number";
    }

    $fruitVeggieServings = intval($_POST["fruitVeggieServings"]);
    if ($fruitVeggieServings < 0) {
        $errors[] = "Fruit and veggie servings must be a positive number";
    }

    $exerciseFrequency = $_POST["exerciseFrequency"];

    $stressLevels = intval($_POST["stressLevels"]);
    if ($stressLevels < 1 || $stressLevels > 10) {
        $errors[] = "Stress levels must be between 1 and 10";
    }

    $healthConcerns = trim($_POST["healthConcerns"]);
    if (empty($healthConcerns)) {
        $errors[] = "Health concerns field cannot be empty";
    }

    $relaxationTechniques = $_POST["relaxationTechniques"];

    $currentDiet = trim($_POST["currentDiet"]);
    if (empty($currentDiet)) {
        $errors[] = "Current diet field cannot be empty";
    }

    $digestiveIssues = $_POST["digestiveIssues"];

    $wellnessGoals = trim($_POST["wellnessGoals"]);
    if (empty($wellnessGoals)) {
        $errors[] = "Wellness goals field cannot be empty";
    }

    // If there are no validation errors, process the form data
    if (empty($errors)) {
    
        echo "<h2>Thank you for submitting the wellness assessment!</h2>";
        echo "<h3>Here is the information you provided:</h3>";
        echo "<ul>";
        echo "<li>Name: $name</li>";
        echo "<li>Age: $age</li>";
        echo "<li>Gender: $gender</li>";
        echo "<li>Energy Levels: $energyLevels</li>";
        echo "<li>Sleep Hours: $sleepHours</li>";
        echo "<li>Fruit and Veggie Servings: $fruitVeggieServings</li>";
        echo "<li>Exercise Frequency: $exerciseFrequency</li>";
        echo "<li>Stress Levels: $stressLevels</li>";
        echo "<li>Health Concerns: $healthConcerns</li>";
        echo "<li>Relaxation Techniques: $relaxationTechniques</li>";
        echo "<li>Current Diet: $currentDiet</li>";
        echo "<li>Digestive Issues: $digestiveIssues</li>";
        echo "<li>Wellness Goals: $wellnessGoals</li>";
        echo "</ul>";
    } else {
        // If there are validation errors, display them to the user
        echo "<h2>Oops! There were some errors with your submission:</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
} else {
    // If form is not submitted, redirect user to the form page
    header("Location: patient_dash.php");
    exit();
}

?>
