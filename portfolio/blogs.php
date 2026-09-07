<?php
// Database configuration
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all blog posts from the database
$sql = "SELECT id, title, category, image, content, date_created FROM blogs ORDER BY date_created DESC";
$result = $conn->query($sql);

$blogs = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blogs[] = $row;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Portfolio</title>
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
                <li><a href="blogs.php" class="active">Blogs</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1 class="page-title">My Blog</h1>
        <div class="blog-list">
            <?php if (empty($blogs)): ?>
                <p>No blog posts yet. Add rows to the <code>blogs</code> table to see them here.</p>
            <?php else: ?>
                <?php foreach ($blogs as $blog): ?>
                    <div class="blog-post">
                        <h3><?php echo htmlspecialchars($blog['title']); ?></h3>
                        <div class="blog-meta">
                            <span><strong>Category:</strong> <?php echo htmlspecialchars($blog['category']); ?></span> |
                            <span><strong>Date:</strong> <?php echo htmlspecialchars($blog['date_created']); ?></span>
                        </div>
                        <?php if (!empty($blog['image'])): ?>
                            <img src="images/<?php echo htmlspecialchars($blog['image']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" class="blog-image">
                        <?php endif; ?>
                        <p><?php echo nl2br(htmlspecialchars($blog['content'])); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
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
