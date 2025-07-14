<?php
session_start();
if($_SESSION['session'] != 1){
    header("Location: ../login/login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Development - SkillShare Hub</title>
    <link rel="stylesheet" href="CourseContentStyle.css">
</head>
<body>
     <!-- Navigation Bar -->
  <header class="navbar">
    <div class="navbar-left">
      <img src="Images/logo.png" alt="SkillShare Hub Logo" class="logo">
    </div>

    <ul class="nav-links">
      <li><a href="../../Homepage/">Home</a></li>
      <li><a href="../">Courses</a></li>
      <li><a href="../../AboutUs/">About Us</a></li>
      <li><a href="../../Skillshare_Contact/">Contact</a></li>
      <li><a href="../../JobListing/">Job Listings</a></li>
      <li><a href="../../Community/">Community</a></li>
    </ul>
    <div class="navbar-right">
      <div class="search-bar">
        <img src="Images/search_icon.png" alt="Search" class="search-icon" />
        <input type="text" placeholder="Search For Courses" />
      </div>
      <a href="../../logout.php"><button class="btn login">Log Out</button></a>
      <!-- <button class="btn signin">Sign In</button> -->
      <a href="../../Skillshare_Profile/"><img src="Images/profile_icon.png" alt="Profile" class="profile-icon" /></a>
    </div>
  </header>

    <main>
        <section class="course-hero">
            <div class="course-hero-content">
                <div class="course-info">
                    <h2>Software Development</h2>
                    <p>Learn to design, build, and deploy robust software applications across various platforms, from web to mobile.</p>
                </div>
                <div class="course-image">
                    <img src="Images/DataProfile.png">
                </div>
            </div>
        </section>

        <div class="container course-details">
            <section class="about-course course-section">
                <h3>About the Course</h3>
                <p>This comprehensive course covers the full software development lifecycle, from foundational programming concepts to advanced architectural design and deployment. You will gain hands-on experience with popular programming languages, frameworks, and tools used in the industry.</p>
            </section>

            <section class="what-you-learn course-section">
                <h3>What You'll Learn</h3>
                <ul class="learn-list">
                    <li>Core programming languages (Python, Java, JavaScript)</li>
                    <li>Web and mobile application development</li>
                    <li>Software testing and deployment</li>
                </ul>
            </section>
        </div>

        <div class="container course-details">
            <section class="curriculum-section">
                <div class="section-header">
                    <h3>Curriculum</h3>
                    <span class="lessons-count">8 Lessons</span>
                </div>
                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Introduction to Programming</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Fundamentals of programming, variables, data types, control structures, and basic algorithms using Python.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Object-Oriented Programming (OOP)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Concepts of classes, objects, inheritance, polymorphism, and encapsulation using Java.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Web Development Basics (Frontend)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>HTML, CSS, and JavaScript for building interactive and responsive user interfaces.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Backend Development with Node.js</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Server-side programming, APIs, and database integration using Node.js and Express.js.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Database Management (SQL/NoSQL)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Designing and managing relational databases (SQL) and NoSQL databases like MongoDB.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Mobile App Development (React Native)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Building cross-platform mobile applications for iOS and Android using React Native.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Software Testing and Debugging</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Strategies for unit testing, integration testing, and effective debugging techniques.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Deployment and Version Control</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Learn about Git, GitHub, and deployment processes to cloud platforms like Heroku or AWS.</p>
                </div>
            </section>
        </div>

        <div class="container instructor-section">
            <h3>Let's Start Learning!</h3>
            <div class="instructor-card">
                <div class="instructor-avatar">
                   <img src="Images/Amira.png">
                </div>
                <div class="instructor-info">
                    <h4>Amira Othman</h4>
                    <p>Amira is a passionate software engineer with a decade of experience in building scalable web applications. She has a strong focus on clean code architecture and agile methodologies, having worked with several tech startups.</p>
                    <ul class="instructor-stats">
                        <li>50 Videos</li>
                        <li>12 Quizzes</li>
                        <li>Full lifetime access</li>
                        <li>Certificate of Completion</li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn join-course-btn">Join Course</a>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Want to know more?</h4>
                <p>Subscribe to our mail and receive updates on our courses!</p>
                <div class="newsletter-form">
                    <input type="email" placeholder="Email address">
                    <button><img src="images/search_icon.png" alt="Subscribe"></button>
                </div>
            </div>
            <div class="footer-section">
                <h4>Office</h4>
                <p>Our Headquarters:</p>
                <p>168, Jalan Bukit Bintang,<br> Bukit Bintang,<br> 55100<br>Kuala Lumpur,<br>Wilayah Persekutuan Kuala Lumpur.</p>
            </div>
            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="../../AboutUs/">About us</a></li>
                    <li><a href="../../Skillshare_Contact/">Contact</a></li>
                    <li><a href="#">Help Centre</a></li>
                </ul>
            </div>
            <!-- <div class="footer-section">
                <h4>Socials</h4>
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">TikTok</a></li>
                </ul>
            </div> -->
        </div>
        <div class="logo-bottom">
            <img src="images/logo.png" alt="SkillShare Hub Logo">
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 The SkillShare Company. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function toggleCurriculum(element) {
            element.classList.toggle('expanded');
            const content = element.nextElementSibling;
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
        }
    </script>
</body>
</html>