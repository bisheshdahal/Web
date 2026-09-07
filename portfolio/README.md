# My Portfolio Website — Setup Guide

## What's included
- `index.html`, `about.html`, `skills.html`, `project.html`, `gallery.html` — static pages
- `blogs.php`, `contact.php` — dynamic pages (need PHP + MySQL)
- `style.css`, `script.js` — shared styling and interactivity
- `portfolio.sql` — creates the database, tables, and 5 sample blog posts
- `images/` — put your photos here (see filenames below)

## 1. Personalize the content (fastest path)
Open each `.html`/`.php` file and replace:
- `YOUR NAME` → your actual name
- placeholder text in About/Skills/Projects sections
- social links (`yourhandle`) and contact info in `contact.php`

Tip: in VS Code, use "Find in Folder" (Ctrl+Shift+F) to replace `YOUR NAME` across all files at once.

## 2. Add your images
Drop these files into the `images/` folder (or rename yours to match, or update the `src=` paths in the HTML):
- `profile.jpg` — your headshot (used on Home)
- `project1.jpg`, `project2.jpg`, `project3.jpg` — one per project
- `gallery1.jpg` … `gallery4.jpg` — gallery photos
- `blog1.jpg` … `blog5.jpg` — optional blog post images (referenced in `portfolio.sql`)

## 3. Set up PHP + MySQL locally (needed for Blogs & Contact pages)
1. Install **XAMPP** (Windows/Mac/Linux) or **MAMP** (Mac) — includes Apache, PHP, and MySQL.
2. Copy this whole `portfolio` folder into `htdocs` (XAMPP) or `htdocs`/`www` (MAMP).
3. Start Apache and MySQL from the XAMPP/MAMP control panel.
4. Open `http://localhost/phpmyadmin`, click **Import**, and select `portfolio.sql`. This creates the `portfolio` database with `blogs` and `contacts` tables plus 5 sample posts.
5. Visit `http://localhost/portfolio/index.html` in your browser.

If your MySQL has a different username/password, update the top of `blogs.php` and `contact.php`:
```php
$username = "root";
$password = "";
```

## 4. Test it
- Click through every nav link.
- Submit the contact form with an empty field — you should see a validation error.
- Submit it correctly — it should say "sent successfully" and add a row to the `contacts` table (check via phpMyAdmin).
- Confirm the 5 blog posts show up on the Blogs page.

## 5. For submission
- Take screenshots of every page (desktop + one mobile-width screenshot for responsiveness).
- Export the database again from phpMyAdmin if you added your own blog posts, so your submitted `.sql` file matches what graders see.
- Zip the whole folder (or just the source files) alongside your report.

## Notes
- The contact form uses a prepared SQL statement to prevent SQL injection — a good thing to mention in your report.
- Everything is responsive via the CSS media query in `style.css` (`@media (max-width: 768px)`), and the mobile nav collapses into a hamburger menu (`script.js`).
