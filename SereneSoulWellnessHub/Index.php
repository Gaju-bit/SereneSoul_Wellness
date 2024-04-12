<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SereneSoul Wellness Hub</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      /* Remove overflow: hidden; to make the page scrollable */
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: White;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 1000;
    }

    .logo {
      width: 100px;
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

    .landing-container {
      position: relative;
      height: 100vh;
      overflow: hidden;
      margin-top: 80px;
    }

    .slide {
      width: 100%;
      height: 100%;
      position: absolute;
      transition: opacity 1s ease-in-out;
      opacity: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .slide.active {
      opacity: 1;
    }

    .video-container {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: -1;
    }

    .video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .content {
      color: #fff;
      text-align: center;
      z-index: 1;
    }

    .button-container {
      margin-top: 20px;
    }

    .button {
      padding: 10px 20px;
      background-color: #65426a;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-right: 10px;
    }

    /* Footer Styles */
    .footer {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #0d452f;
      color: #fff;
      text-align: center;
      padding: 10px 0;
    }
  </style>
</head>

<body>
  <div class="header">
    <img class="logo" src="logo.png" alt="Logo">
    <div class="navigation">
      <a href="Index.php">Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="ourservices.php">Our Services</a>
      <a href="Blog&News.php">Blog & News</a>
      <a href="contactUs.php">Contact Us</a>
    </div>
  </div>

  <div class="landing-container">
    <div class="slide active">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="video.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(129, 79, 133, 0.5);"><strong>Welcome to SereneSoul Wellness Hub</strong></h1>
        <p style="background-color: rgba(129, 79, 133, 0.5);">Explore our holistic approach to wellness For Women.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='login.php'">Login</button>
          <button class="button" onclick="window.location.href='register.php'">Register</button>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    &copy; 2024 SereneSoul Wellness Hub. All rights reserved.
  </div>

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });
    }

    function autoChangeSlide() {
      setInterval(() => {
        nextSlide();
      }, 53000); // Change slide every 5 seconds
    }

    showSlide(currentSlide);
    autoChangeSlide();
  </script>
</body>

</html>
