<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        body {
            background-color: #c9d1d9; 
            color: #0e6341; 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .signup-container {
            max-width: 750px;
            margin: 10px auto;
            padding: 20px;
            background-color: #f5e1da;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 2, 1, 0.5); 
            position: relative;
        }

        .signup-container h2 {
            color: rgba(0, 2, 1, 0.5); ; 
            margin: 20px;
            text-align: center;
            background-color:  #d8c2db; 
            padding: 10px;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: calc(700px - 20px);
            padding: 10px;
            border: 1px solid #0d452f; 
            border-radius: 5px;
            background-color: white;
            color: #0d452f; 
        }

        .form-group button {
            width: 40%;
            padding: 10px;
            font-size: 17px;
            border: 5px;
            border-radius: 5px;
            background-color: #d8c2db; 
            color: #0d452f; 
            cursor: pointer;
            margin-left: 200px;;
        }

        .form-group button:active {
            background-color: rgb(75, 140, 145); 
        }

        .error-message {
            color: red;
            margin-top: 5px;
            text-align: center;
        }

        p a {
            color: #0d452f;
        }

        .logo {
            display: block;
            margin: 0 auto;
            width: 150px; 
            margin-top: 20px; 
        }

    </style>
</head>
<body>
    <header>
        <img class="logo" src="logo.png" alt="SereneSoul Logo">
    </header>

    <div class="signup-container">
        <h2>Welcome to SereneSoul, Please, Sign Up Here!</h2>
       
        <?php if (!empty($errorMsg)) : ?>
            <p class="error-message"><?php echo $errorMsg; ?></p>
        <?php endif; ?>
        
        <form action="registerbackend.php" method="post" name="signupForm" id="signupForm">
            
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" pattern="[A-Za-z]+" title="Only letters allowed" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" pattern="[A-Za-z]+" title="Only letters allowed" placeholder="Enter your last name" required>
            </div>
            
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <div class="form-group">
                <label for="familyRole">Marital Status:</label>
                <select id="familyRole" name="familyRole" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
           
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" title="10 digits allowed" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
                <label for="userType">Register as:</label>
                <select id="userType" name="userType" required>
                    <option value="Patient">Patient</option>
                    <option value="Professional">Professional</option>
                </select>
            </div>
           
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" title="Minimum 8 characters, at least one letter and one digit" placeholder="Enter your password" required>
            </div>
          
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" title="Minimum 8 characters, at least one letter and one digit">

            </div>
        

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        
        <p style="text-align: center;">Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
