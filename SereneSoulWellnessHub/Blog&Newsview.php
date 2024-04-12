<!DOCTYPE html>
<html>
<head>
  <title>News and Blog | SereneSoul Wellness</title>
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

    .action-buttons button {
      background-color: #0d452f;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-bottom: 20px;
    }

    .action-buttons button:hover {
      background-color: #0d452f;
      color: white;
    }

    .add-post-form {
      margin-bottom: 20px;
    }

    .add-post-form input[type="text"],
    .add-post-form textarea,
    .add-post-form select {
      width: calc(100% - 16px);
      padding: 8px;
      margin-top: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .add-post-form button[type="submit"] {
      background-color: #0d452f;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-bottom: 20px;
    }

    .add-post-form button[type="submit"]:hover {
      background-color: #0d452f;
      color: white;
    }

    table td.content {
    text-align: justify;
    }

  </style>
</head>
<body>

<div class="container">
  <div class="topnav">
    <h1 style="margin-left:-500px; font-size:25px;">News and Blog</h1>
  </div>

  <div class="sidenav">
    <div class="topnav-centered">
      <img src="logo.png" alt="Logo" style="height: 80px; margin-bottom:20px; margin-top:0;">
    </div>
    <a href="professional_dash.php"><i class="fas fa-home"></i> Overview</a>
    <a class="active" href="manageappointment.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a>
    <a href="Patients_to_attend.php"><i class="fas fa-user-md"></i> Patients to Attend</a>
    <a href="user_feedback.php"><i class="fas fa-comment-dots"></i> User Feedback</a>
    <a href="profiledoctor.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="Blog&Newsview.php"><i class="fas fa-newspaper"></i> News and Blog</a>
    <a href="doctor_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="main">
    <h2>News and Blog</h2>
    <div class="add-post-form">
      <form action="blog&Newsbackend.php" method="POST">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title" placeholder="Enter title" required>
        </div>
        <div class="form-group">
          <label for="content">Content:</label>
          <textarea id="content" name="content" rows="4" placeholder="Enter content" required></textarea>
        </div>
        <div class="form-group">
          <label for="author">Author:</label>
          <select id="author" name="author" required>
            <?php
            // Include the doctor_list.php file
            include 'professionals_list.php';

            // Check if any doctors were fetched
            if (isset($professionalList) && !empty($professionalList)) {
              foreach ($professionalList as $professional) {
                echo "<option value='" . $professional['Username'] . "'>" . $professional['Username'] . "</option>";
              }
            } else {
              echo "<option value=''>No professionals found</option>";
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="publish_date">Publish Date:</label>
          <input type="date" id="publish_date" name="publish_date" required>
        </div>
        <button type="submit">Add Post</button>
      </form>
    </div>

    <table>
      <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Publish Date</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php"); 

    $sql = "
