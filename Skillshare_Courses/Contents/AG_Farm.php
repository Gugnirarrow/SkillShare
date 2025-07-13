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
    <title>Farm Management - SkillShare Hub</title>
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
                    <h2>Farm Management</h2>
                    <p>Master the essentials of operating a successful farm, from financial planning to resource optimization and regulatory compliance.</p>
                </div>
                <div class="course-image">
        <img src="Images/afarm.webp" alt="Profile" class="course-image" />
      </div>
            </div>
        </section>

        <div class="container course-details">
            <section class="about-course course-section">
                <h3>About the Course</h3>
                <p>This comprehensive course provides a holistic understanding of farm operations and management. You will learn about financial planning, labor management, risk assessment, supply chain logistics, and the application of technology to enhance farm productivity and profitability.</p>
            </section>

            <section class="what-you-learn course-section">
                <h3>What You'll Learn</h3>
                <ul class="learn-list">
                    <li>Financial planning and budgeting for farms</li>
                    <li>Effective labor and resource management</li>
                    <li>Agricultural policy and regulations</li>
                </ul>
            </section>
        </div>

        <div class="container course-details">
            <section class="curriculum-section">
                <div class="section-header">
                    <h3>Curriculum</h3>
                    <span class="lessons-count">7 Lessons</span>
                </div>
                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Farm Business Planning</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Develop robust business plans, including goal setting, market analysis, and strategic positioning for your agricultural enterprise.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Agricultural Economics</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Understand key economic principles that influence agricultural markets, pricing, and profitability.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Labor and Human Resources</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Learn best practices for recruiting, managing, and retaining farm labor, as well as ensuring workplace safety and compliance.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Risk Management in Farming</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Identify and mitigate various risks associated with farming, including weather, market fluctuations, and disease outbreaks.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Supply Chain and Logistics</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Optimize the flow of products from farm to market, covering aspects like transportation, storage, and distribution channels.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Farm Technology and Automation</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Explore the latest agricultural technologies, including smart farming systems, IoT devices, and automation for improved efficiency.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Legal Aspects of Farm Ownership</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Gain insights into land ownership, environmental regulations, labor laws, and other legal considerations relevant to farm operations.</p>
                </div>
            </section>
        </div>

        <div class="container instructor-section">
            <h3>Let's Start Learning!</h3>
            <div class="instructor-card">
                <div class="instructor-avatar">
                    <img src="images/AS_INS.jpeg" alt="Instructor Image">
                </div>
                <div class="instructor-info">
                    <h4>Michael Reed</h4>
                    <p>Michael Reed brings over 30 years of practical experience in managing diverse agricultural enterprises. He is known for his pragmatic approach to farm economics and his ability to adapt to changing market conditions.</p>
                    <ul class="instructor-stats">
                        <li>38 Videos</li>
                        <li>9 Quizzes</li>
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