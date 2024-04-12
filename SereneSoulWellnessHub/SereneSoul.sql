-- Create the database
CREATE DATABASE serenesoul_wellness_hub;

-- Use the created database
USE serenesoul_wellness_hub;

-- Table for user roles
CREATE TABLE user_roles (
    role_id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(50) NOT NULL
);

-- Insert user roles data
INSERT INTO user_roles (role_name) VALUES ('Patient'), ('Professional');

-- Table for users
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    gender ENUM('Female', 'Male', 'Others') NOT NULL,
    marital_status ENUM('Single', 'Married') NOT NULL,
    birthdate DATE NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (role_id) REFERENCES user_roles(role_id)
);

-- Add full_name column to users table
ALTER TABLE users ADD COLUMN full_name VARCHAR(100) NOT NULL;

-- Update full_name column with concatenation of first_name and last_name
UPDATE users SET full_name = CONCAT(first_name, ' ', last_name);

-- Table for professionals list
CREATE VIEW professionals_list AS
SELECT user_id, full_name, email, phone_number
FROM users
WHERE role_id = 2;



-- Table for news and blog posts
CREATE TABLE news_blog (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    author VARCHAR(100) NOT NULL,
    publish_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for appointments
CREATE TABLE appointments (
    appointment_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    professional_id INT,
    full_name VARCHAR(100) NOT NULL,
    email_address VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    reason_for_appointment TEXT NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    status ENUM('Scheduled', 'Completed', 'Canceled') NOT NULL DEFAULT 'Scheduled',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (patient_id) REFERENCES users(user_id),
    FOREIGN KEY (professional_id) REFERENCES users(user_id)
);


-- Table for contact us messages
CREATE TABLE contact_us (
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    sender_name VARCHAR(100) NOT NULL,
    sender_email VARCHAR(100) NOT NULL,
    message_subject VARCHAR(255) NOT NULL,
    message_content TEXT NOT NULL,
    message_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for feedback
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
	full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Table for wellness assessments
CREATE TABLE wellness_assessments (
    assessment_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    assessment_date DATE NOT NULL,
    -- Include additional assessment fields here as needed
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Table for community groups
CREATE TABLE community_groups (
    group_id INT AUTO_INCREMENT PRIMARY KEY,
    group_name VARCHAR(100) NOT NULL,
    description TEXT,
    created_by INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(user_id)
);

-- Table for group messages
CREATE TABLE group_messages (
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    group_id INT NOT NULL,
    sender_id INT NOT NULL,
    message_content TEXT NOT NULL,
    message_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (group_id) REFERENCES community_groups(group_id),
    FOREIGN KEY (sender_id) REFERENCES users(user_id)
);

-- Table for dashboard preferences
CREATE TABLE dashboard_preferences (
    user_id INT PRIMARY KEY,
    dashboard_type ENUM('Patient', 'Professional') NOT NULL,
    -- Include additional dashboard preferences fields here as needed
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
-- Table for user-dashboard relation
CREATE TABLE user_dashboard_relation (
    user_id INT NOT NULL,
    dashboard_id INT NOT NULL AUTO_INCREMENT,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    PRIMARY KEY (user_id, dashboard_id)
);

-- Table for professional-patient relation
CREATE TABLE professional_patient_relation (
    professional_id INT NOT NULL,
    patient_id INT NOT NULL,
    FOREIGN KEY (professional_id) REFERENCES users(user_id),
    FOREIGN KEY (patient_id) REFERENCES users(user_id),
    PRIMARY KEY (professional_id, patient_id)
);

-- Alter table for users to include a dashboard preference
ALTER TABLE users ADD COLUMN dashboard_preference ENUM('Patient', 'Professional') NOT NULL DEFAULT 'Patient';

-- Alter table for appointments to include status
ALTER TABLE appointments ADD COLUMN status ENUM('Scheduled', 'Completed', 'Canceled') NOT NULL DEFAULT 'Scheduled';
