<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | SereneSoul Wellness Hub</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }

    .topnav a {
        float: left;
        color: #0d452f;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .topnav a:hover {
        background-color: #ebdfd3;
        color: #555;
    }

    .topnav a.active {
        background-color: #0d452f;
        color: white;
        border-radius: 16px;
    }

    .topnav a.signup {
        float: right;
        background-color: #0d452f;
        color: whitesmoke;
        border-radius: 16px;
    }

    .topnav a.signup:hover {
        color: whitesmoke;
        background-color: #0d452f;
    }

    .topnav a.split {
        float: right;
        background-color: #ebdfd3;
        color: #333;
    }

    .topnav a.split:hover {
        color: #555;
    }

    .topnav-centered a.title {
        float: left;
        position: absolute;
        font-family: 'Roboto', sans-serif;
        font-weight: lighter;
        top: 0%;
        color: black;
    }

    .topnav-centered a.title:hover {
        background-color: white;
    }

    .topnav a.title {
        font-family: 'Roboto', sans-serif;
        font-size: x-large;
        font-weight: bold;
    }

    .container {
        display: flex;
        width: 85%;
        flex-direction: column;
        height: 100vh;
        margin-left: 150px;
        margin-right: 0;
    }

    .topnav {
        background-color: #ffffff;
        color: #0d452f;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        margin-left: 50px;
        padding: 20px 10px;
        position: fixed;
        width: 100%;
        overflow: hidden;
    }

    .topnav h1 {
        margin: 0;
        font-weight: bolder;
        font-size: large;
        margin-left: 50px;
    }

    .topnav-centered {
        margin-top: -80px;
    }

    .sidenav.topnav-centered a {
        float: none;
        position: relative;
        left: 50%;
    }

    .dashboard {
        margin-top: 50px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: 100px;
        padding: 20px 20px;
    }

    .welcome {
        width: 50%;
        background-color: #f5e1da;
        color: #0d452f;
        margin-top: 30px;
        padding-right: 60px;
    }

    .welcome h1 {
        padding-left: 40px;
        padding-top: 20px;
        margin-bottom: 40px;
        font-size:20px;
    }

    .welcome p {
        padding-left: 40px;
        font-weight: bolder;
        font-size: 15px;
        color: #818181;
    }
    

    button {
        background-color: #d8c2db;
        color: black;
        padding: 20px;
        border: none;
        border-radius: 34px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 18px;
        margin-bottom: 20px;
        margin-left:30px
    }

    .activity-overview {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 10px 10px rgba(1, 1, 1, 0.1);
        padding: 30px;
        margin-top: 20px;
        width: 30%;
        display: block;
        height:75%;
        font-size:15px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: 16px;
    }

    .activity-overview h2 {
        width: 100%;
        padding:30px;
        margin-top: 0px;
        padding-top: 20px;
        font-size:15px;
    }

    .activity-overview a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 15px;
    }

    .appointment-activity {
        background-color: white;
        border-radius: 12px;

        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-bottom: 20px;
        width: 40%;
        display: block;
        height: 48%;
        justify-content: space-between;
        margin-left: 16px;
    }

    .appointment-activity a {
        text-decoration: none;
        color: #333;
        font-weight: bolder;
    }

    .card {
        background-color: white;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        width: 30%;
    }

    .card h3 {
        padding: 10%;
        margin: 0;
        font-weight: bold;
        font-size: large;
        color: #555;
        font-size:15px;
    }

    .card p {
        padding-left: 10%;
        font-weight: 900;
        font-size: medium;
        font-size:15px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #0d452f;
        color: white;
    }

    tr:hover {
        background-color: #e6e3cd;
    }

    li {
        list-style-type: none;
    }

    .logo {
        position: absolute;
        top: 50px;
        left: 20px;
        width: 60px;
        height: 70px;
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

    .main {
        margin-left: 160px;
        padding: 0px 10px;
    }

    a.active {
        background-color: #0d452f;
        color: white;
        border-radius: 4px;
        font-weight: 900;
    }

    td.upcoming {
        background-color: rgba(255, 255, 0, 0.5);
    }

    td.Healthm_metrics {
        background-color: rgba(255, 0, 0, 0.5);
    }

    td.wellness_goals {
        background-color: rgba(172, 255, 47, 0.5);
    }

    td.medication_reminders {
        background-color: rgba(0, 255, 13, 0.815);
    }

    td.health {
        background-color: rgba(0, 255, 13, 0.815);
    }


    .active a {
        background-color: #0d452f;
        color: white;
        border-radius: 4px;
    }

    .active a {
        color: white;
    }
</style>

<div class="container">
    <div class="topnav">
        <h1>Dashboard</h1>
    </div>

    <div class="sidenav" style="width: 15%;">
        <div class="topnav-centered">
            <img src="logo.png" alt="Logo" style="height: 80px; margin-bottom: 20px; margin-top: 0;">
        </div>
        <a class="active" href="provider_dashboard.php"><i class="fas fa-home"></i> Overview</a>
        <li><a href="bookappointment.php"><i class="fas fa-calendar-alt"></i> Book Appointments</a></li>
        <li><a href="chatbox.php"><i class="fas fa-user-md"></i> Community Chat</a></li>
        <li><a href="Feedbacksupport.php"><i class="fas fa-comment-dots"></i> User Feedback</a></li>
        <li><a href="myprofile.php"><i class="fas fa-user-edit"></i> Edit My Profile</a></li>
        <li><a href="Blog&News.php"><i class="fas fa-newspaper"></i> News and Blog</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </div>

        <div class="dashboard">
            <div class="welcome">
            <h1>Welcome, Angel <?php echo isset($firstName) ? $firstName : ''; ?> :) </h1>
            <p>We appreciate your dedication to wellness.</p>
            <p>Explore our wellness solutions tailored to meet your needs.</p>
            <button onclick="document.location='bookappointment.php'">Book An Appointment Today!</button>
            <img src="patients.png" alt="Patients" style="margin-left: 10%; margin-top:5%; width: 80%;">
        </div>
        <div class="activity-overview">
            <h2><a href="#">Report Overview</a></h2>
            <div class="card">
                <h3>Upcoming Appointments</h3>
                <p>7</p>
            </div>
            <div class="card">
                <h3>Health Metrics</h3>
                <p>Blood pressure: 120/80, Weight: 70 kg, Blood sugar: 90 mg/dL</p> 
            </div>
            <div class="card">
                <h3>Wellness Goals</h3>
                <p>Exercise 30 minutes daily, Drink 8 glasses of water per day, Reduce stress levels.</p>
            </div>
            <div class="card">
                <h3>Medication Reminders</h3>
                <p>Take medication X at 8:00 AM, Take medication Y at 12:00 PM</p>
            </div>
            <div class="card">
                <h3>Health History</h3>
                <p>Visited cardiologist on 25-03-2024, Had flu vaccination on 01-04-2024</p>
            </div>
        </div>

        <div class="appointment-activity">
            <h2><a href="#">Appointment Activity</a></h2>
            <table>
                <thead>
                    <tr>
                        <th>Personnel</th>
                        <th>Specialization</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dr. Sarah</td>
                        <td>Coach</td>
                        <td>25-02-24</td>
                        <td class="cancelled">Cancelled</td>
                    </tr>
                    <tr>
                        <td>Dr. Isabelle</td>
                        <td>Practitioner</td>
                        <td>25-02-24</td>
                        <td class="upcoming">Upcoming</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
</body>
</html>
