<!DOCTYPE html>
<html>
<head>
  <title>User Feedback | SereneSoul Wellness</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3f4f6;
    }

    .container {
      margin-left: 180px;
    }

    .topnav {
      background-color: #0d452f;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80px;
      text-align: center;
    }

    .sidenav {
      height: 100%;
      width: 20%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #dedab6;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #0d452f;
      display: block;
      transition: 0.3s;
      margin-bottom: 20px;
    }

    .sidenav a:hover {
      background-color: #0d452f;
      color: white;
    }

    .main {
      margin-left: 250px;
      margin-top: 20px;
      padding: 15px;
      font-size: 15px;
    }

    table {
      border-collapse: collapse;
      width: 95%;
      margin-top: 20px;
      margin-left: -10px;
    }

    th, td {
      text-align: left;
      padding: 10px;
      font-size: 14px;
    }

    th {
      background-color: #0d452f;
      color: white;
      padding: 20px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e6e3cd;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="topnav">
    <h1 style="margin-left:-500px; font-size:25px;">User Feedback | SereneSoul Wellness</h1>
  </div>

  <div class="sidenav">
    <div class="topnav-centered">
      <img src="logo.png" alt="SereneSoul Wellness Logo" style="height: 80px; margin-bottom:20px; margin-top:0;">
    </div>
    <a href="professional_dash.php"><i class="fas fa-home"></i> Overview</a>
    <a href="manageappointment.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a>
    <a class="active" href="userfeedback.php"><i class="fas fa-comment-dots"></i> User Feedback</a>
    <a href="myprofile.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="Blog&News.php"><i class="fas fa-newspaper"></i> News and Blog</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="main">
    <h2>User Feedback | SereneSoul Wellness</h2>
    <table>
      <thead>
        <tr>
          <th>Patient</th>
          <th>Feedback</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Angel Gaju</td>
          <td>Really impressed with the mindfulness sessions. Feeling much more relaxed and focused!</td>
          <td>2024-04-12</td>
        </tr>
        <tr>
          <td>Dana Ishimwe</td>
          <td>The nutrition advice provided here has been invaluable. Thank you!</td>
          <td>2024-04-11</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
