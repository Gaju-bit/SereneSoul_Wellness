<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Support - SereneSoul Wellness Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #c9d1d9;
        }
        header {
            background-color: #f5e1da;
            border-bottom: 2px solid black; 
        }

        .container {
            width: 65%;
            margin: 70px auto;
            background-color: #ffffff;
            margin-right:20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(13, 69, 47, 0.5);
        }

        h1 {
            color: #0d452f;
            text-align: center;
            background-color: #d8c2db;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 5px;
            color: #0d452f;
        }

        .feedback-form input[type="text"],
        .feedback-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #0d452f;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .feedback-form textarea {
            height: 100px;
        }

        .feedback-form input[type="submit"] {
            padding: 10px 30px;
            font-size: medium;
            font-weight: bolder;
            border: none;
            border-radius: 5px;
            background-color: #d8c2db;
            color: #0d452f;
            cursor: pointer;
        }

        .feedback-form input[type="submit"]:hover {
            background-color: #9ac7b2;
        }

        .logo {
            position: absolute;
            top: 50px;
            left: 20px;
            width:70px;
            height: 40px;
        }

        .sidenav {
        height: 100%;
        width: 23%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: white;
        overflow-x: hidden;
        padding-top: 80px;
        padding-left: 10px;
        margin-top: 0;
    }

    .sidenav a {
        padding: 20px 8px 6px 16px;
        text-decoration: none;
        font-size: 15 px;
        color: #0d452f;
        display: block;
        margin-bottom: 10px;
    }

    .sidenav a:hover {
        color:#0d452f;
        background-color:  #d8c2db;
        border-radius: 10px;
        padding: 12px 20px;
    }
    </style>
</head>
<body>
    <h1>Feedback and Support</h1>
    </header>
    <div class="sidenav" style="width: 15%;">
        <div class="topnav-centered">
            <img src="logo.png" alt="Logo" style="height: 80px; margin-bottom: 5px; margin-top: -80px;">
        </div>
        <a class="active" href="professional_dash.php"><i class="fas fa-home"></i> Overview</a>
        <li><a href="bookappointment.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a></li>
        <li><a href="patients_to_attend.php"><i class="fas fa-user-md"></i> Patients to Attend</a></li>
        <li><a href="Feedbacksupport.php"><i class="fas fa-comment-dots"></i> User Feedback</a></li>
        <li><a href="myprofile.php"><i class="fas fa-user-edit"></i> Edit My Profile</a></li>
        <li><a href="Blog&News.php"><i class="fas fa-newspaper"></i> News</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </div>

    <div class="container">
        <p>We value your feedback and are here to assist you. Please fill out the form below.</p>
        <form class="feedback-form" action="feedbackbackend.php" method="post">
            <label for="name">Your Full Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Your Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
