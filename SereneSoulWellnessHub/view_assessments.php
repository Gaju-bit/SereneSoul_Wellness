<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assessments | SereneSoul Wellness Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            display: flex;
            width: 85%;
            flex-direction: column;
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

        .sidenav {
            height: 100%;
            width: 15%;
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
            color: #0d452f;
            background-color: #d8c2db;
            border-radius: 10px;
            padding: 12px 20px;
        }

        .main {
            margin-left: 160px;
            padding: 0px 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 120px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #0d452f;
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .trend {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="topnav">
            <h1>View Assessments</h1>
        </div>

        <div class="sidenav">
            <div class="topnav-centered">
                <img src="logo.png" alt="Logo" style="height: 80px; margin-bottom: 20px; margin-top: 0;">
            </div>
            <a href="professional_dash.php"><i class="fas fa-home"></i> Overview</a>
            <<li><a href="patients_to_attend.php"><i class="fas fa-user-md"></i> Patients to Attend</a></li>
            <li><a href="userfeedback.php"><i class="fas fa-comment-dots"></i> Patient Feedback</a></li>
            <li><a href="my_profile.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
            <li><a href="Blog&News.php"><i class="fas fa-newspaper"></i> News and Blog</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </div>

        <div class="main">
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dana</td>
                        <td>Ishimwe</td>
                    </tr>
                    <tr>
                        <td>Angel</td>
                        <td>Gaju</td>
                    </tr>
                </tbody>
            </table>

            <div class="trend">
                <h2>Wellness Deficiency Trend</h2>
                <p>Through the wellness assessments, it's evident that there's a concerning rise in wellness deficiencies. These include heightened stress levels, insufficient physical activity, poor nutrition, and inadequate sleep. Addressing these issues is crucial for improving overall health and well-being.</p>
            </div>
        </div>
    </div>

</body>

</html>
