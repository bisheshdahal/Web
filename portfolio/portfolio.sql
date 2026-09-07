-- Create database
CREATE DATABASE IF NOT EXISTS portfolio;
USE portfolio;

-- Contacts table (stores messages from the contact form)
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Blogs table
CREATE TABLE IF NOT EXISTS blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    image VARCHAR(255),
    content LONGTEXT NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample blog posts (5, as required by the assignment)
INSERT INTO blogs (title, category, image, content, date_created) VALUES
('Building My Personal Portfolio Website', 'Web Development', 'blog1.jpg',
 'I designed and developed my personal portfolio website using HTML, CSS, JavaScript, and PHP. The site includes Home, About, Skills, Projects, Gallery, Blog, and Contact pages.',
 '2026-08-10 10:00:00'),
('Exploratory Data Analysis of a Sample Dataset', 'Data Analysis', 'blog2.jpg',
 'Using Python and Pandas, I cleaned and analyzed a sample dataset, exploring key trends and visualizing results with Matplotlib and Seaborn.',
 '2026-08-18 10:00:00'),
('Creating Visualizations with R and ggplot2', 'R Programming', 'blog3.jpg',
 'This project demonstrates how R can be used for statistical analysis and professional data visualization using ggplot2 and dplyr.',
 '2026-08-25 10:00:00'),
('Lessons Learned from My Development Projects', 'Project Reflection', 'blog4.jpg',
 'Working on web development and data projects improved my problem-solving skills and gave me practical experience designing interfaces and communicating insights.',
 '2026-09-01 10:00:00'),
('Getting Started with Responsive Web Design', 'Web Development', 'blog5.jpg',
 'A look at how CSS media queries, flexible grids, and mobile-first design help a website look great on any screen size.',
 '2026-09-05 10:00:00');
