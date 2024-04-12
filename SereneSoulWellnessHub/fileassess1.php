<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SereneSoul Wellness Hub - Personalized Wellness Assessment</title>

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

        .assessment-container {
            max-width: 750px;
            margin: 0 auto;
            background-color: #ffffff; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(13, 69, 47, 0.5); 
            padding: 20px;
        }

        .assessment-container h1 {
            color: #0d452f; 
            margin-bottom: 10px;
        }

        .assessment-container p {
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
        .form-group input[type="number"],
        .form-group select {
            width: 600px;
            padding: 10px;
            border: 1px solid #0d452f; 
            border-radius: 5px;
            background-color: #ffffff; 
            color: #0d452f; 
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
            <img src="logo.png" alt="SereneSoul Wellness Hub Logo">
        </div>
    </header>
    <main>
        <div class="assessment-container">
            <h1>Personalized Wellness Assessment</h1>
            <p>Complete the form below to assess your wellness and receive personalized information and recommendations.</p>
            <form action="assessment.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="energy-levels">How would you rate your overall energy levels on a scale of 1 to 10?</label>
                    <input type="number" id="energy-levels" name="energyLevels" min="1" max="10" required>
                </div>
                <div class="form-group">
                    <label for="sleep-hours">How many hours of sleep do you typically get per night?</label>
                    <input type="number" id="sleep-hours" name="sleepHours" min="0" required>
                </div>
                <div class="form-group">
                    <label for="fruit-veggie-servings">On average, how many servings of fruits and vegetables do you consume per day?</label>
                    <input type="number" id="fruit-veggie-servings" name="fruitVeggieServings" min="0" required>
                </div>
                <div class="form-group">
                    <label for="exercise-frequency">How often do you engage in physical activity or exercise?</label>
                    <select id="exercise-frequency" name="exerciseFrequency" required>
                        <option value="daily">Daily</option>
                        <option value="several-times-week">Several times a week</option>
                        <option value="once-week">Once a week</option>
                        <option value="rarely">Rarely</option>
                        <option value="never">Never</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="stress-levels">How would you rate your stress levels on a scale of 1 to 10?</label>
                    <input type="number" id="stress-levels" name="stressLevels" min="1" max="10" required>
                </div>
                <div class="form-group">
                    <label for="health-concerns">Do you currently have any health concerns or conditions?</label>
                    <textarea id="health-concerns" name="healthConcerns" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="relaxation-techniques">How often do you practice relaxation techniques such as meditation or deep breathing?</label>
                    <select id="relaxation-techniques" name="relaxationTechniques" required>
                        <option value="daily">Daily</option>
                        <option value="several-times-week">Several times a week</option>
                        <option value="once-week">Once a week</option>
                        <option value="rarely">Rarely</option>
                        <option value="never">Never</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="current-diet">How would you describe your current diet? (e.g., balanced, high in processed foods, vegetarian, etc.)</label>
                    <input type="text" id="current-diet" name="currentDiet" required>
                </div>
                <div class="form-group">
                    <label for="digestive-issues">How often do you experience digestive issues such as bloating or indigestion?</label>
                    <select id="digestive-issues" name="digestiveIssues" required>
                        <option value="daily">Daily</option>
                        <option value="several-times-week">Several times a week</option>
                        <option value="once-week">Once a week</option>
                        <option value="rarely">Rarely</option>
                        <option value="never">Never</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="wellness-goals">Do you have any specific wellness goals you would like to achieve?</label>
                    <textarea id="wellness-goals" name="wellnessGoals" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Next</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
