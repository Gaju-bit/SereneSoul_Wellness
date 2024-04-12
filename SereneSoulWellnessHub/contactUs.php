<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SereneSoul Wellness Hub - Contact Us</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #c9d1d9;
        }

        header {
            background-color: #f5e1da;
            padding: 20px;
            text-align: center;
        }

        .logo img {
            max-width: 100px;
        }

        main {
            padding: 20px;
        }

        .contact-container {
            max-width: 750px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(13, 69, 47, 0.5);
            padding: 20px;
        }

        .contact-container h1 {
            color: #0d452f;
            margin-bottom: 10px;
        }

        .contact-container p {
            color: #0d452f;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #0d452f;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group textarea {
            width: 90%;
            padding: 10px;
            border: 1px solid #0d452f;
            border-radius: 5px;
            background-color: #ffffff;
            color: #0d452f;
        }

        .form-group textarea {
            height: 100px;
        }

        .form-group button {
            padding: 10px 30px;
            font-size: medium;
            font-weight: bolder;
            border: none;
            border-radius: 5px;
            background-color: #d8c2db;
            color: #0d452f;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #c9d1d9;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="Logo.png" alt="SereneSoul Wellness Hub Logo">
        </div>
    </header>
    <main>
        <div class="contact-container">
            <h1>Contact Us</h1>
            <p>Have questions or feedback? Reach out to us using the form below.</p>
            <form action="submit_contact_form.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
