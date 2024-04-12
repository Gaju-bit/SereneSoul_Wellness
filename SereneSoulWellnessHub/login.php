<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-color: #c9d1d9; 
            color: #0d452f; 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .login-container {
            max-width: 650px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5e1da;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(13, 69, 47, 0.5); 
            position: relative;
        }

        .login-container h2 {
            color: rgba(13, 69, 47, 0.5); ; 
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

        .form-group input {
            width: calc(100% - 20px);
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
            margin-left: 200px;
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
            height: auto;
            margin-top: 30px; 
        }

    </style>
</head>
<body>
    <header>
        <img class="logo" src="logo.png" alt="SereneSoul Logo">
    </header>

    <div class="login-container">
        <h2>Welcome back to SereneSoul, Please, Log In Here!</h2>
       
        <?php if (!empty($errorMsg)) : ?>
            <p class="error-message"><?php echo $errorMsg; ?></p>
        <?php endif; ?>
        
        <form action="login_backend.php" method="post" name="loginForm" id="loginForm">
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
        
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
        
        <p style="text-align: center;">Don't have an account yet? <a href="register.php">Sign up here</a></p>
    </div>
</body>
</html>
