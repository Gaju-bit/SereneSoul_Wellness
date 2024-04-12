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
      padding: 0;
      background-color: #c9d1d9; 
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      position: relative;
    }

    header {
      position: relative;
      bottom: auto;
      left: 0;
      width: 100%;
      height: 120px;
      background-color: #f5e1da; 
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 25px;
      z-index: 1000;
    }
    
    .logo {
      width: 120px;
      height: auto;
      margin-right: 5000px;
    }

    .navigation {
      display: flex;
      align-items: center;
      margin-left: 600px;
      margin-top: -70px;
    }

    .navigation a {
      color: #0d452f; 
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
      margin-top: 50px;
    }

    h1, h2, h3 {
      margin-bottom: 20px;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 15px;
    }

  
    .service-category h1,
    .testimonial-section h2 {
      padding: 30px 0;
      margin: auto;
      width: fit-content;
      text-align: center;
    }

    .service-category h2 {
      text-align: center;
    }

    .service-list {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 40px;
    }

    .service-item {
      width: 30%;
      padding: 70px 70px;
      margin-bottom: 5px;
      margin-top: 20px;
      background-color: #ffffff; 
      border-radius: 8px;
      text-align: center;
      transition: transform 0.3s ease-in-out;
    }

    .service-item:hover {
      transform: scale(1.05);
    }

    .service-item img {
      width: 300px;
      margin-bottom: 50px;
    }

   
    .testimonial-section {
      background-color: #ffffff; 
      padding: 40px 0;
    }

    .testimonial-container {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
    }

    .testimonial {
      padding: 20px;
      background-color: #f5e1da; 
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .testimonial p {
      font-style: italic;
      color: #0d452f; 
    }

    .cta-section {
      background-color: #f5e1da;
      color: #0d452f;
      padding: 50px 0;
      text-align: center;
    }

    .cta-section p {
      font-size: 18px;
    }

    .cta-btn {
      background-color: #d8c2db; 
      color: #0d452f; 
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .cta-btn:hover {
      background-color: #c9d1d9;
    }
  </style>
</head>
<header>
  <div class="container">
      <img class="logo" src="Logo.png" alt="Logo">
      <div class="navigation">
        <a href="Index.php"> Home</a>
        <a href="AboutUs.php">About Us</a>
        <a href="ourservices.php">Our Services</a>
        <a href="Blog&News.php">News</a> 
        <a href="contactUs.php">Contact Us</a>
  </div>
</header>

<body>
  <div class="container">
    <div class="service-category">
      <h1>Our Services</h1>
      <div class="service-list">
        <div class="service-item">
          <img src="newsblog.png" alt="News and Blog">
          <h3>News and Blog</h3>
          <p>In our dedicated wellness section, we strive to offer engaging and enlightening content that covers a wide array of health-related topics. From practical tips for maintaining a healthy lifestyle to in-depth explorations of emerging wellness trends, our articles and blog posts are designed to inform, inspire, and empower you on your journey to optimal well-being.</p>
        </div>
        <div class="service-item">
          <img src="assessment.jpg" alt="Personalized Wellness Assessment">
          <h3>Personalized Wellness Assessment</h3>
          <p>Users have access to a feature form to assess their wellness, receiving personalized information and recommendations based on their responses.</p>
        </div>
        <div class="service-item">
          <img src="virtualconsult.jpg" alt="Virtual Wellness Consultations">
          <h3>Virtual Wellness Consultations</h3>
          <p>Our platform offers virtual consultations with seasoned wellness experts, ensuring you receive personalized guidance and support from the comfort of your home. Whether you're aiming to improve your fitness, manage stress, or enhance your overall well-being, our experts are dedicated to helping you achieve your goals with tailored advice and practical strategies.</p>
        </div>
        <div class="service-item">
          <img src="communitychat.jpg" alt="Community Groups Chatbox">
          <h3>Community Groups Chatbox</h3>
          <p>Users are able to engage with each other through chatboxes within community groups, fostering a supportive and interactive environment.</p>
        </div>
      </div>
    </div>

    <div class="testimonial-section">
      <h2>What Our Clients Say</h2> 
      <div class="testimonial-container">
        <div class="testimonial">
          <p>"SereneSoul Wellness Hub has transformed my approach to health and well-being. The personalized assessments and expert consultations have guided me towards a healthier lifestyle."</p>
          <p>- Emily Watson</p>
        </div>
        <div class="testimonial">
          <p>"I've found a supportive community and valuable resources on SereneSoul Wellness Hub. It's helped me prioritize self-care and make positive changes in my life."</p>
          <p>- David Rodriguez</p>
        </div>
      </div>
    </div>

    <div class="cta-section">
      <h2>Ready to Experience Our Services?</h2>
      <p>Take the first step towards better health today.</p>
      <button class="cta-btn">Contact Us</button>
    </div>
  </div
</body>
</html>