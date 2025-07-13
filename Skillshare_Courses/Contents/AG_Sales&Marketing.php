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
    <title>Agriculture Sales & Marketing - SkillShare Hub</title>
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
      <a href="../../Skillshare_Profile/"></a><img src="Images/profile_icon.png" alt="Profile" class="profile-icon" />
    </div>
  </header>

    <main>
        <section class="course-hero">
            <div class="course-hero-content">
                <div class="course-info">
                    <h2>Agriculture Sales and Marketing</h2>
                    <p>Develop skills to promote and sell agricultural products efficiently through market analysis and strategy.</p>
                </div>
                <div class="course-image">
                    <img src="Images/AgriSalesProfile.png">
                </div>
            </div>
        </section>

        <div class="container course-details">
            <section class="about-course course-section">
                <h3>About the Course</h3>
                <p>Agriculture Sales and Marketing can help with agriculture businesses between farmers and consumers. Our in-depth course covers how to market agricultural produce and promote agricultural products, and develop persuasive communication strategies to boost farm profitability in local and global markets.</p>
            </section>

            <section class="what-you-learn course-section">
                <h3>What You'll Learn</h3>
                <ul class="learn-list">
                    <li>Learn how to position your product</li>
                    <li>Understanding market supply chain and consumers' needs</li>
                    <li>Gain knowledge in strategizing in marketing</li>
                </ul>
            </section>
        </div>

        <div class="container course-details">
            <section class="curriculum-section">
                <div class="section-header">
                    <h3>Curriculum</h3>
                    <span class="lessons-count">4 Lessons</span>
                </div>
                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Introduction to Agriculture</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>This module covers the basic concepts of modern agriculture, its history, and its importance in global food supply. You will learn about various farming methods and their environmental impacts.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Marketing Strategy</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Dive into effective marketing strategies for agricultural products, including branding, market segmentation, and digital marketing techniques tailored for the agriculture sector.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Promotion Pricing</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Learn about various pricing models and promotional activities that can be used to maximize sales and profitability of agricultural goods, considering market dynamics and consumer behavior.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Agriculture Sales</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Teaching sellers how to pitch products to buyers, and write a sales proposal to increase prospects to grow a profit in sales.</p>
                </div>
            </section>
        </div>

        <div class="container instructor-section">
            <h3>Let's Start Learning!</h3>
            <div class="instructor-card">
                <div class="instructor-avatar">
                    <img src="Images/hadi.png">
                </div>
                <div class="instructor-info">
                    <h4>Rizal Hadi</h4>
                    <p>Rizal is a seasoned agriculture expert with over 15 years of experience in agribusiness development and market analysis. He has successfully launched several agricultural startups and provides consultancy to large farming cooperatives.</p>
                    <ul class="instructor-stats">
                        <li>34 Videos</li>
                        <li>8 Quizzes</li>
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