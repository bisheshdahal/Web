<?php
// Database configuration
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success_message = "";
$error_message   = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name)) {
        $error_message = "Name is required!";
    } elseif (empty($email)) {
        $error_message = "Email is required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Please enter a valid email address!";
    } elseif (empty($subject)) {
        $error_message = "Subject is required!";
    } elseif (empty($message)) {
        $error_message = "Message is required!";
    } else {
        // Use a prepared statement to avoid SQL injection
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message, date_created) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        if ($stmt->execute()) {
            $success_message = "Your message has been sent successfully! We will get back to you soon.";
            $name = $email = $subject = $message = "";
        } else {
            $error_message = "Something went wrong. Please try again.";
        }
        $stmt->close();
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">MyPortfolio</div>
            <button class="menu-toggle" aria-label="Open menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="skills.html">Skills</a></li>
                <li><a href="project.html">Projects</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1 class="page-title">Contact Me</h1>
        <div class="contact-form">
            <?php if (!empty($success_message)): ?>
                <div class="success-message"><?php echo $success_message; ?></div>
            <?php endif; ?>
            <?php if (!empty($error_message)): ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" value="<?php echo $subject; ?>" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required><?php echo $message; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Send Message</button>
                </div>
            </form>
            <hr style="margin: 30px 0;">
            <h3 style="color: #2c3e50;">Other Ways to Reach Me</h3>
            <p><strong>Email:</strong> you@example.com</p>
            <p><strong>Phone:</strong> +your-phone-number</p>
            <p><strong>Address:</strong> Your City, Your Country</p>
        </div>
    </div>
    <footer>
        <p>&copy; <span data-year></span> Bishesh Dahal. All rights reserved.</p>
        <div class="social-links">
            <a href="https://github.com/bisheshdahal/ai-ml-portfolio">GitHub</a>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
