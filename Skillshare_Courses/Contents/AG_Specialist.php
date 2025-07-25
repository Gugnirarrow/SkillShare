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
    <title>Agriculture Specialist</title>
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
                    <h2>Agriculture Specialist</h2>
                    <p>Become an expert in advanced agricultural techniques, crop management, and sustainable farming practices.</p>
                </div>
                <div class="course-image">
                    <img src="Images/AgriSpecialist.png">
                </div>
            </div>
        </section>

        <div class="container course-details">
            <section class="about-course course-section">
                <h3>About the Course</h3>
                <p>This course is designed for aspiring and current agricultural professionals seeking to deepen their knowledge in specialized areas. You will explore cutting-edge farming technologies, integrated pest management, soil science, and advanced hydroponics systems to optimize yield and sustainability.</p>
            </section>

            <section class="what-you-learn course-section">
                <h3>What You'll Learn</h3>
                <ul class="learn-list">
                    <li>Advanced crop cultivation methods</li>
                    <li>Sustainable resource management</li>
                    <li>Precision agriculture technologies</li>
                </ul>
            </section>
        </div>

        <div class="container course-details">
            <section class="curriculum-section">
                <div class="section-header">
                    <h3>Curriculum</h3>
                    <span class="lessons-count">6 Lessons</span>
                </div>
                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Modern Farming Techniques</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Explore modern farming innovations including vertical farming, aeroponics, and aquaponics, and understand their applications in various environments.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Soil Health and Nutrient Management</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Delve into the complexities of soil composition, nutrient cycles, and effective strategies for maintaining soil fertility and plant health.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Integrated Pest Management (IPM)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Learn about eco-friendly and effective methods for controlling pests and diseases in agricultural settings, minimizing chemical use.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Water Management in Agriculture</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Understand efficient irrigation systems, water conservation techniques, and water quality management crucial for sustainable agriculture.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Data Analytics for Crop Optimization</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Discover how to use data-driven insights from sensors and drones to optimize crop yields, monitor plant health, and predict harvests.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Sustainable Agriculture Certification</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Gain knowledge about different sustainable agriculture certifications and the process of achieving them for your farm or products.</p>
                </div>
            </section>
        </div>

        <div class="container instructor-section">
            <h3>Let's Start Learning!</h3>
            <div class="instructor-card">
                <div class="instructor-avatar">
                    <img src="Images/chen.png">
                </div>
                <div class="instructor-info">
                    <h4>Dr. Chen Wei</h4>
                    <p>Dr. Chen Wei is a leading agricultural scientist specializing in sustainable farming and biotechnologies. With a Ph.D. in Agronomy, he has published numerous papers and consults for international organizations on food security.</p>
                    <ul class="instructor-stats">
                        <li>40 Videos</li>
                        <li>10 Quizzes</li>
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
                    <button><img src="/Users/amirahali/Documents/SEM 6/Course Page - Contents/Images/search_icon.png" alt="Subscribe"></button>
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
            <img src="/Users/amirahali/Documents/SEM 6/Course Page - Contents/Images/logo.png" alt="SkillShare Hub Logo">
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