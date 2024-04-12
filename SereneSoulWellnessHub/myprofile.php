<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
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

        .profile-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-details {
            margin-left: 20px;
        }

        .profile-details h2 {
            margin: 0;
            color: #0d452f;
            font-size: 24px;
        }

        .profile-details p {
            margin: 5px 0;
            color: #777;
        }

        .edit-bio {
            background-color: #0d452f;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .edit-bio:hover {
            background-color: #0d452f;
            color: white;
        }

        .bio-form {
            display: none;
            margin-top: 20px;
        }

        .bio-form textarea {
            width: calc(100% - 16px);
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .save-bio {
            background-color: #0d452f;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .save-bio:hover {
            background-color: #0d452f;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="topnav">
        <h1>Dashboard</h1>
    </div>

    <div class="sidenav" style="width: 15%;">
        <div class="topnav-centered">
            <img src="logo.png" alt="Logo" style="height: 80px; margin-bottom: 20px; margin-top: 0;">
        </div>

    <div class="sidenav" style="width: 15%;">
        <div class="topnav-centered">
          <img src="logo.png" alt="Logo" style="height: 80px; margin-bottom: 20px; margin-top: 0;">
        </div>
        <a class="active" href="provider_dashboard.php"><i class="fas fa-home"></i> Overview</a>
        <li><a href="bookappointment.php"><i class="fas fa-calendar-alt"></i> Book Appointments</a></li>
        <li><a href="chatbox.php"><i class="fas fa-user-md"></i> Community Chat</a></li>
        <li><a href="wellness_assess.php"><i class="fas fa-user-md"></i> Personalized Wellness Assessment</a></li>
        <li><a href="Feedbacksupport.php"><i class="fas fa-comment-dots"></i> User Feedback</a></li>
        <li><a href="myprofile.php"><i class="fas fa-user-edit"></i> Edit My Profile</a></li>
        <li><a href="Blog&News.php"><i class="fas fa-newspaper"></i> News and Blog</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
</div>


        <div class="main">
            <div class="profile-card">
                <img src="profile_icon.png" alt="Profile Picture">
                <div class="profile-details">
                    <h2><?php echo $fullName; ?></h2>
                    <p><?php echo $gender; ?></p>
                    <p><?php echo $maritalStatus; ?></p>
                    <p><?php echo $birthdate; ?></p>
                    <p><?php echo $phoneNumber; ?></p>
                    <p><?php echo $email; ?></p>
                </div>
            </div>

            <div class="bio">
                <h2>Bio</h2>
                <p>Your bio content here...</p>
                <button class="edit-bio">Edit Bio</button>
                <form class="bio-form" action="#" method="post">
                    <textarea name="bio" rows="4" placeholder="Enter your bio..."></textarea>
                    <button type="submit"class="save-bio">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle bio form visibility
        const editBioBtn = document.querySelector('.edit-bio');
        const bioForm = document.querySelector('.bio-form');

        editBioBtn.addEventListener('click', () => {
            bioForm.style.display = 'block';
            editBioBtn.style.display = 'none';
        });
    </script>
</body>

</html>
