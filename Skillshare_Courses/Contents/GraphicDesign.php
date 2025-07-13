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
    <title>Graphic Design - SkillShare Hub</title>
    <link rel="stylesheet" href="CourseContentStyle.css">
</head>
<body>
    <!-- Navigation Bar -->
  <header class="navbar">
    <div class="navbar-left">
      <img src="Images/logo.png" alt="SkillShare Hub Logo" class="logo" />
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
      <a href="../../Skillshare_Profile/"></a><img src="Images/profile_icon.png" alt="Profile" class="profile-icon" />
    </div>
  </header>

    <main>
        <section class="course-hero">
            <div class="course-hero-content">
                <div class="course-info">
                    <h2>Graphic Design</h2>
                    <p>Unleash your creativity and master the tools and principles of visual communication to create stunning designs.</p>
                </div>
                <div class="course-image">
        <img src="Images/gdesign.jpg" alt="Profile" class="course-image" />
      </div>
            </div>
        </section>

        <div class="container course-details">
            <section class="about-course course-section">
                <h3>About the Course</h3>
                <p>This course provides a comprehensive foundation in graphic design, covering everything from design theory and color psychology to practical application using industry-standard software like Adobe Photoshop, Illustrator, and InDesign. You'll develop a strong portfolio through hands-on projects.</p>
            </section>

            <section class="what-you-learn course-section">
                <h3>What You'll Learn</h3>
                <ul class="learn-list">
                    <li>Design principles and visual hierarchy</li>
                    <li>Proficiency in Adobe Creative Suite</li>
                    <li>Branding and identity design</li>
                </ul>
            </section>
        </div>

        <div class="container course-details">
            <section class="curriculum-section">
                <div class="section-header">
                    <h3>Curriculum</h3>
                    <span class="lessons-count">9 Lessons</span>
                </div>
                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Introduction to Graphic Design</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Overview of graphic design history, key concepts, and its role in modern communication.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Color Theory and Typography</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Understanding the impact of color and the art of selecting and combining typefaces for effective communication.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Adobe Photoshop Essentials</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Mastering image manipulation, retouching, and composition techniques using Photoshop.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Adobe Illustrator for Vector Graphics</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Creating scalable vector illustrations, logos, and icons using Adobe Illustrator.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Layout and Print Design (InDesign)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Designing multi-page layouts for brochures, magazines, and books using Adobe InDesign.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Branding and Logo Design</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Develop compelling brand identities, including logo creation, brand guidelines, and visual consistency.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>UI/UX Design Principles</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Introduction to user interface (UI) and user experience (UX) design for digital products.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Portfolio Development</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Guidance on creating a professional design portfolio to showcase your skills and projects.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Freelancing for Designers</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Tips and strategies for starting a freelance graphic design career, including pricing and client management.</p>
                </div>
            </section>
        </div>

        <div class="container instructor-section">
            <h3>Let's Start Learning!</h3>
            <div class="instructor-card">
                <div class="instructor-avatar">
                    <img src="Images/GD_INS.jpeg" alt="Instructor Image">
                </div>
                <div class="instructor-info">
                    <h4>Jessica Chen</h4>
                    <p>Jessica is an award-winning graphic designer with a passion for visual storytelling. She has worked with global brands creating captivating campaigns and has a knack for inspiring creativity in her students.</p>
                    <ul class="instructor-stats">
                        <li>60 Videos</li>
                        <li>15 Projects</li>
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
            <img src="Images/footerlogo.png" alt="SkillShare Hub Logo">
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