<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog & News</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin-top: 20px;
      background-color: #dedab6;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: White;
      display: flex;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 1000;
    }

    .logo {
      width: 150px;
      height: auto;
      margin-right: 5px;
    }

    .navigation {
      display: flex;
      align-items: center;
      margin-right: 5px;
    }

    .navigation a {
      color: #0d452f;
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
    }

    .blog-container {
      margin-top: 150px;
    }

    .blog-post {
      margin-bottom: 50px;
      margin-left: 60px;
      margin-right: 60px;
    }

    .blog-post h2 {
      color: #0d452f;
      margin-top: 20px;
    }

    .blog-post p {
      color: #333;
      margin-top: 20px;
      text-align: justify;

    }

    .blog-post .author {
      color: #777;
      margin-top: 10px;
      text-align: left;
    }

    .blog-post .date {
      color: #777;
      margin-top: 5px;
      text-align: left;
    }

    .blog-post .category {
      color: #777;
      margin-top: 5px;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="header">
    <img class="logo" src="logo.png" alt="Logo">
    <div class="navigation">
      <a href="Index.php"> Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="ourservices.php">Our Services</a>
      <a href="Blog&News.php">Blog & News</a>
      <a href="contactUs.php">Contact Us</a>
    </div>
  </div>

  <div class="blog-container">
    <div class="blog-post">
      <h2>5 Ways to Improve Your Mental Wellness</h2>
      <p>It's essential to prioritize mental wellness in our daily lives. Here are five simple yet effective ways to
        enhance your mental well-being:</p>
      <ol>
        <li>Practice mindfulness meditation daily</li>
        <li>Engage in regular physical exercise</li>
        <li>Connect with loved ones and friends</li>
        <li>Limit screen time and take digital detox breaks</li>
        <li>Seek professional help if needed</li>
      </ol>
      <p class="author">Published by SereneSoul Wellness Hub</p>
      <p class="date">Published on April 11, 2024</p>
    </div>
    <div class="blog-post">
      <h2>The Importance of Sleep for Overall Wellness</h2>
      <p>Sleep plays a crucial role in maintaining overall wellness. Adequate and quality sleep contributes to physical,
        mental, and emotional well-being. Here's why sleep is essential:</p>
      <ul>
        <li>Restores energy levels and enhances productivity</li>
        <li>Supports immune function and aids in healing and repair</li>
        <li>Regulates mood and reduces stress</li>
        <li>Improves cognitive function and memory</li>
        <li>Enhances creativity and problem-solving abilities</li>
      </ul>
      <p class="author">Published by SereneSoul Wellness Hub</p>
      <p class="date">Published on April 12, 2024</p>
    </div>
  </div>
</body>

</html>
