<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - SereneSoul Wellness Hub</title>
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
            text-align: center;
            padding: 10px;
        }

        .container {
            width: 40%;
            margin: 50px auto;
            background-color: #ffffff;
            position: relative;
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

        .logo img {
            width: 100px;
            margin-top: 10px;
        }

        .logout-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #09311f;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #0d452f;
        }

        .return-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #0d452f;
            text-decoration: none;
        }

        .return-link:hover {
            color: #09311f;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
    </header>
    <div class="container">
        <h1>Logout</h1>
        <p>Are you sure you want to log out?</p>
        <form class="logout-form" action="Index.php" method="post">
            <input type="hidden" name="logout" value="true">
            <input type="submit" class="logout-btn" value="Logout">
        </form>
        <a href="Index.php" class="return-link"><i class="fas fa-arrow-left"></i> Return to Welcome Page</a>
    </div>
</body>
</html>
