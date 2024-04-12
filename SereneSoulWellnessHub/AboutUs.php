<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - SereneSoul Wellness Hub</title>
  <style>

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #d8c2db;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .header {
      position: fixed;
      top: 10px;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: #d8c2db; 
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 1000;
    }
    
    .logo {
      width: 130px;
      height: auto;
      margin-right: 3000px;
      margin-top:-18px;
      margin-bottom: 10px;
    }

    .navigation {
      display: flex;
      align-items: center;
      margin-left: 600px;
      margin-top: -50px;
    }

    .navigation a {
      color:#0d452f;
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
    }

    
    .about-section {
      background-color: #fff;
      padding: 50px 0;
    }

    .about-section h2 {
      font-size: 30px;
      text-align: center;
      margin-bottom: 30px;
      color: #0d452f; 
    }

    .about-content {
      display: flex;
      justify-content: space-between;
      text-align: justify;
    }

    .about-img {
      flex: 1;
      text-align: center;
      margin-top: 50px;
    }

    .about-img img {
      width: 100%;
      max-width: 500px;
      border-radius: 2px;
    }

    .about-text {
      flex: 1;
      padding: 0 20px;
    }

    .team-section {
      background-color: #9bbdbb;
      padding: 50px 0;
    }

    .team-section h2 {
      font-size: 30px;
      text-align: center;
      margin-bottom: 30px;
      color: #0d452f; 
    }

    .team-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .team-member {
      width: 300px;
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .team-member img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .team-member h3 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #0d452f; 
    }

    .team-member p {
      font-size: 16px;
      line-height: 1.6;
      color: #0d452f; 
    }

    footer {
      background-color: #d8c2db;
      color: #0d452f;
      padding: 20px 0;
      text-align: center;
    }

    footer p {
      font-size: 16px;
    }
  </style>
</head>
  <header>
    <div class="container">
        <img class="logo" src="logo.png" alt="Logo">
        <div class="navigation">
          <a href="Index.php"> Home</a>
          <a href="aboutUs.php">About Us</a>
          <a href="ourservices.php">Our Services</a>
          <a href="Blog&News.php">Blog</a>
          <a href="contactUs.php">Contact Us</a>
    </div>
  </header>

  <div class="about-section">
    <div class="container">
      <h2>About Us</h2>
      <div class="about-content">
        <div class="about-img">
          <img src="Founder.jpg" alt="About Us Image">
        </div>
        <div class="about-text">
          <p>Welcome to SereneSoul Wellness Hub, where holistic wellness meets accessible healthcare solutions. Founded in 2017 by Dr. Malikah Davis, a dedicated Women's Health Educator and Consultant, our platform embodies a vision to bridge the gap between wellness resources and those in need. Dr. Davis brings a wealth of expertise and passion for wellness, backed by years of experience in empowering individuals to prioritize their health and well-being.</p>
          <p>At SereneSoul, we recognize the significance of holistic wellness in fostering a balanced and fulfilling life. Our mission is to provide convenient access to expert guidance and support, ensuring that individuals have the tools they need to thrive. Whether you're seeking personalized wellness assessments or virtual consultations with experienced professionals, our range of services is designed to meet your diverse needs.</p>
          <p>We believe that everyone deserves the opportunity to embark on a journey to optimal health. That's why we're committed to offering comprehensive wellness solutions that empower individuals to take control of their well-being. Join us at SereneSoul Wellness Hub and embark on a path towards a healthier, happier you.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="team-section">
    <div class="container">
      <h2>Meet Our Team</h2>
      <div class="team-container">
        <div class="team-member">
          <img src="specialist.jpg" alt="Team Member 1">
          <h3>Dr. Isabelle Moreau </h3>
          <p>Founder & Women's Wellness Specialist</p>
        </div>
        <div class="team-member">
          <img src="practitioner.jpg" alt="Team Member 2">
          <h3>Sarah Leblanc</h3>
          <p>Women's Health Practitioner</p>
        </div>
        <div class="team-member">
          <img src="coach.png" alt="Team Member 3">
          <h3>Marie-Claire Dubois</h3>
          <p> Women's Wellness Coach</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <p>&copy; 2024 SereneSoul Wellness Hub. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
