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
        color: #f5e1da;
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
        font-family: Longhaul;
        font-weight: lighter;
        top: 0%;
        color: black;
    }

    .topnav-centered a.title:hover {
        background-color: white;
    }

    .topnav a.title {
        font-family: Longhaul;
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
        margin-left: 160px;
        padding: 20px 10px;
        position: fixed;
        width: 100%;
        overflow: hidden;
    }

    .topnav h1 {
        margin: 0;
        font-weight: bolder;
        font-size: large;
        margin-left: 100px;
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
        margin-top: 80px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: 160px;
        padding: 20px 20px;
    }

    .welcome {
        width: 100%;
        background-color: #f5e1da; 
        color: #0d452f;
    }

    .welcome h1 {
        padding-left: 40px;
    }

    .welcome p {
        padding-left: 40px;
        font-weight: bolder;
        color: #818181;
    }

    .intro {
        padding: 40px;
        text-align: left;
        background: #f5e1da;
        color: #0d452f;;
        font-size: 30px;
        margin-bottom: 40px;
        border-radius: 40px;
        margin-left: 60px;
        width: 100%;
        height: 15%;
        margin: 0 auto;
    }

    .intro h1 {
        margin: 0;
        font-weight: bolder;
        font-size: larger;
    }

    .intro p {
        font-size: large;
        width: 48%;
    }

    .intro img {
        float: right;
        margin-top: -30px;
        width: 32%;
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
    }

    .activity-overview {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-bottom: 20px;
        width: 40%;
        display: block;
        height: 48%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: 16px;
    }

    .activity-overview h2 {
        width: 100%;
    }

    .activity-overview a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
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
    }

    .card p {
        padding-left: 10%;
        font-weight: 900;
        font-size: large;
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
        background-color: #f2f2f2;
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
            width:70px;
            height: 60px;
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

    td.pending {
        background-color: rgba(255, 255, 0, 0.5);
    }

    td.cancelled {
        background-color: rgba(255, 0, 0, 0.5);
    }

    td.upcoming {
        background-color: rgba(172, 255, 47, 0.5);
    }

    td.completed {
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
        <a class="active" href="professional_dash.php"><i class="fas fa-home"></i> Overview</a>
        <li><a href="manageappointment.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a></li>
        <li><a href="userfeedback.php"><i class="fas fa-comment-dots"></i> Patient Feedback</a></li>
        <li><a href="myprofile.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
        <li><a href="Blog&Newsview.php"><i class="fas fa-newspaper"></i> News and Blog</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </div>

    <div class="dashboard">
        <div class="welcome">
            <h1>Welcome Professional!</h1>
            <p>We appreciate your dedication to wellness.</p>
        </div>

        <div class="intro">
            <img src="patients.png" alt="Patients" width="40%" style="border-radius: 20px; margin-bottom: 100 px;">
            <h1>Provide Professional Services</h1>
            <p>Offer your specialized services to those in need of wellness solutions.</p>
            <button onclick="document.location='manageappointments.php'">Manage Appointments</button>
        </div>
        <div class="activity-overview">
            <h2><a href="#">Report Overview</a></h2>
            <div class="card">
                <h3>Upcoming Appointments</h3>
                <p><a href="view_appointments.php">3</a></p>
            </div>
            <div class="card">
                <h3>Cancelled Appointments</h3>
                <p><a href="view_appointments.php">2</a></p>
            </div>
            <div class="card">
                <h3>Wellness Assessments</h3>
                <p><a href="view_assessments.php">7</a></p>
            </div>
            <div class="card">
                <h3>Community Chat</h3>
                <p><a href="chatbox.php">500</a></p>
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
                        <td>Dr. Jabari</td>
                        <td>Coach</td>
                        <td>25-02-24</td>
                        <td class="cancelled">Cancelled</td>
                    </tr>
                    <tr>
                        <td>Dr. Lartey</td>
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
                   