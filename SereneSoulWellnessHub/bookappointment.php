<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment -SereneSoul Wellness</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 90px; 
        }
        header {
            background-color: #0d452f;
            border-bottom: 2px solid black; 
            z-index: 2; 
            position: fixed; 
            width: 100%; 
        }

        .container {
            width: 65%;
            margin: 5px auto 20px auto; 
            background-color: #fff;
            margin-right: 150px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #0d452f;
            text-align: center;
            background-color: #d8c2db;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #0d452f; 
            border-radius: 5px;
            background-color: white;
            color: #0d452f; 
        }

        textarea {
            height: 100px; 
        }

        .action-buttons {
            text-align: center;
        }

        .action-buttons button {
            background-color: #d8c2db;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .action-buttons button:hover {
            background-color: #0d452f;
            color: white;
        }

       h1 {
            color: #0d452f;
            text-align: center;
            background-color: #d8c2db;
            z-index: 2; 
            top: 0; 
            left: 0; 
            width: 100%; 
            background-attachment: fixed; 
            margin-top:-50px;
        }

        .feedback-form {
            margin-top: 30px;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 5px;
            color: #0d452f;
            font-size:16px;
        }

        .feedback-form input[type="text"],
        .feedback-form textarea,
        .feedback-form input[type="date"],
        .feedback-form input[type="time"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .feedback-form textarea {
            height: 100px;
        }

        .feedback-form input[type="submit"] {
            background-color: #0d452f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .feedback-form input[type="submit"]:hover {
            background-color: #09311f;
        }

        .logo {
            position: fixed;
            top: 20px;
            left: 20px;
            height: 70px; 
            width: auto;
            z-index: 2; 
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
        
        .nav-links {
        height: 100%;
        width: 15%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: white;
        padding-top: 80px;
        padding-left: 10px;
        margin-top: 0;
        border-right: 2px solid green; 
        }


        .nav-links a {
            padding: 20px 8px 6px 16px;
            text-decoration: none;
            font-size: 15 px;
            color: #0d452f;
            display: block;
            margin-bottom: 10px;
        }

        .nav-links a:hover {
            color:#0d452f;
            background-color:  #d8c2db;
            border-radius: 10px;
            padding: 12px 20px;
        }

            .action-buttons {
                margin-top: 10px;
                display: flex;
                justify-content: space-between;
            }

            .action-buttons button {
                padding: 8px 16px;
                background-color: #0d452f;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .action-buttons button:hover {
                background-color: #09311f;
            }

        .appointment-table {
            margin-top: 30px;
            display: block; 
            overflow-x: auto; 
        }

        .appointment-table h2 {
            margin-bottom: 10px;
        }

        .appointment-table table {
            width: 80%; 
            border-collapse: collapse;
            font-size: 14px; 
            margin-left:250px;
        }

        .appointment-table th, .appointment-table td {
            border: 1px solid #ccc;
            padding: 8px; 
            text-align: left;
        }

        .appointment-table th {
            background-color: #0d452f;
            color: #fff;
        }

        .appointment-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-actions button {
            background-color: #0d452f;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 3px; 
        }

        .table-actions button.delete-button {
            background-color: grey;
        }

        .overlay {
        display: none;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        }


        .popup {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        color: black;
        max-width: 400px;
        width: 80%;
        }

        .popup label {
        display: block;
        margin-bottom: 10px;
        color: #368983;
        font-weight: bold;
        }

        .popup input[type="text"],
        .popup input[type="number"] {
        width: calc(100% - 20px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #368983;
        border-radius: 5px;
        }

        .popup button {
        width: calc(50% - 5px);
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #368983;
        color: white;
        cursor: pointer;
        }

        #cancel {
        margin-top :10px;
        background-color: #ff6666;
        }

    </style>
</head>
<body>
    <img class="logo" src="logo.png" alt="Logo">
    <h1>Dashboard</h1>
    <ul class="nav-links">
        <li><a href="patient_dash.php"><i class="fas fa-home icon"></i> Home</a></li>
        <li><a href="bookappointment.php"><i class="fas fa-calendar-alt"></i> Book Appointments</a></li>
        <li><a href="chatbox.php"><i class="fas fa-user-md"></i> Community Chat</a></li>
        <li><a href="Feedbacksupport.php"><i class="fas fa-comment-dots"></i> User Feedback</a></li>
        <li><a href="myprofile.php"><i class="fas fa-user-edit"></i> Edit My Profile</a></li>
        <li><a href="Blog&News.php"><i class="fas fa-newspaper"></i> News and Blog</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
    

    <div class="container">
    <h2>Book Appointments</h2>
    <p>Book appointments here and Get consulted!</p>
    <form class="appointment_form" action="saveappointment.php" method="post">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="professional">Select Professional</label>
       
            <input type='hidden' value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>" id="user_id" name="user_id">
            <select id="professional" name="professional" required>
            <?php
            // Include the professionals_list.php file
            include 'professionals_list.php';

            // Check if any professionals were fetched
            if (!empty($professionalList)) {
                foreach ($professionalList as $professional) {
                    echo "<option value='" . $professional['user_id'] . "'>" . $professional['full_name'] . "</option>";
                }
            } else {
                echo "<option value=''>No professionals found</option>";
            }
            ?>
        </select>

        </div>
        <div class="form-group">
            <label for="reason">Reason For Appointment</label>
            <textarea id="reason" name="reason" required></textarea>
        </div>
        <div class="form-group">
            <label for="date">Appointment Date</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Appointment Time</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div class="action-buttons">
            <button type="submit"><i class="fas fa-save"></i> Book appointment</button>
        </div>
    </form>
</div>

<div class="appointment-table">
    <h2>Appointment Information</h2>
    <table>
        <thead>
            <tr>            
                <th>FullName</th>
                <th>SelectedProfessional</th>
                <th>ReasonForAppointment</th>
                <th>AppointmentDate</th>
                <th>AppointmentTime</th>
                <th>Action</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Isabelle Moreau</td>
                <td>Coach Isabelle Moreau</td>
                <td>Sex Life </td>
                <td>2024-04-11</td>
                <td>10:00 AM</td>
                <td class="table-actions">
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Sarah Leblanc</td>
                <td>Counselor Sarah Leblanc</td>
                <td>Mental Wellness checkup</td>
                <td>2024-04-13</td>
                <td>12:00 AM</td>
                <td class="table-actions">
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Delete</button>
                </td>
            </tr>
            <?php
            include 'db_connection.php';
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $user_id = $_SESSION['user_id'] ?? null;
            if ($user_id !== null) {
                $sql = "SELECT * FROM appointments WHERE User_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result !== false) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['FullName']); ?></td>
                                <td><?php echo htmlspecialchars($row['SelectedProfessional']); ?></td>
                                <td><?php echo htmlspecialchars($row['ReasonForAppointment']); ?></td>
                                <td><?php echo htmlspecialchars($row['AppointmentDate']); ?></td>
                                <td><?php echo htmlspecialchars($row['AppointmentTime']); ?></td>
                                <td class="table-actions">
                                    <button style="background-color: #0d452f; color:white;margin-bottom:10px;" onclick="popUp('<?php echo htmlspecialchars($row['AppointmentID']); ?>', '<?php echo htmlspecialchars($row['FullName']); ?>','<?php echo htmlspecialchars($row['ReasonForAppointment']); ?>', '<?php echo htmlspecialchars($row['AppointmentDate']); ?>', '<?php echo htmlspecialchars($row['AppointmentTime']); ?>')">Update</button>
                                    <button style="background-color: grey; color:white;"><a href="delete_appointment.php?appointment_id=<?php echo htmlspecialchars($row['AppointmentID']); ?>">Delete</a></button>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "No appointments found.";
                    }
                } else {
                    echo "Error executing query: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "User ID not found.";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

    </div>
</body>
<script>
    function popUp(appointmentID, fullName, reasonForAppointment, appointmentDate, appointmentTime) {
    var container = document.querySelector("body"); 
    var popup = document.createElement("div");
    popup.classList.add("overlay");
    popup.style.display = "flex";
    popup.innerHTML =
    `<div class='popup'>
        <form id='feedback-form' action='update_appointment.php' method='post'>
            <input type="hidden" id="appointment_id" name="AppointmentID" value="${appointmentID}">
            <label for='fullName'>Full Name </label>
            <input type='text' id='fullName' name='fullName' value='${fullName}' required>

            <label for='reasonForAppointment'>Reason For Appointment </label>
            <textarea id='reasonForAppointment' name='reasonForAppointment' required>${reasonForAppointment}</textarea>

            <label for='appointmentDate'>Appointment Date:</label>
            <input type='date' id='appointmentDate' name='appointmentDate' value='${appointmentDate}' required>

            <label for='appointmentTime'>Appointment Time:</label>
            <input type='time' id='appointmentTime' name='appointmentTime' value='${appointmentTime}' required>

            <button type='submit'>Update</button>
        </form>

        <button id='cancel' onclick='closePopup()'>Cancel</button>
    </div>`;

    container.appendChild(popup);
}



    function closePopup() {
        var popup = document.querySelector('.overlay');
        popup.parentNode.removeChild(popup); 
    }
</script>
</html>