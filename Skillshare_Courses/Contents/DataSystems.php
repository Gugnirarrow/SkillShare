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
    <title>Data Systems - SkillShare Hub</title>
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
                    <h2>Data Systems</h2>
                    <p>Learn to design, implement, and manage robust data systems for efficient data storage, processing, and analysis.</p>
                </div>
                <div class="course-image">
                    <img src="Images/DataaProfile.png">
                </div>
            </div>
        </section>

        <div class="container course-details">
            <section class="about-course course-section">
                <h3>About the Course</h3>
                <p>This course dives deep into the architecture and management of modern data systems. You will gain expertise in relational databases, NoSQL databases, data warehousing, and big data technologies, preparing you for roles in data engineering and database administration.</p>
            </section>

            <section class="what-you-learn course-section">
                <h3>What You'll Learn</h3>
                <ul class="learn-list">
                    <li>Database design and normalization</li>
                    <li>SQL and NoSQL database management</li>
                    <li>Data warehousing and ETL processes</li>
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
                    <span>Relational Database Fundamentals</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Understand the concepts of relational databases, SQL queries, schema design, and normalization.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Advanced SQL and Optimization</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Master complex SQL queries, stored procedures, indexing, and performance tuning techniques.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>NoSQL Databases (MongoDB, Cassandra)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Explore the architecture and use cases of popular NoSQL databases like MongoDB (document-oriented) and Cassandra (column-family).</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Data Warehousing and OLAP</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Learn about data warehouse design, ETL (Extract, Transform, Load) processes, and Online Analytical Processing (OLAP) for business intelligence.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Big Data Technologies (Hadoop, Spark)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Introduction to big data ecosystems, including Apache Hadoop for distributed storage and Apache Spark for large-scale data processing.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Cloud Data Platforms (AWS, Azure)</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Overview of cloud-based data services from AWS (e.g., Redshift, DynamoDB) and Azure (e.g., Data Lake, Cosmos DB).</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Data Governance and Security</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Best practices for ensuring data quality, privacy, compliance, and security in data systems.</p>
                </div>
            </section>
        </div>

        <div class="container instructor-section">
            <h3>Let's Start Learning!</h3>
            <div class="instructor-card">
                <div class="instructor-avatar">
                    <img src="Images/sarah.png">
                </div>
                <div class="instructor-info">
                    <h4>Sarah Lee</h4>
                    <p>Sarah is a seasoned data architect with over 10 years of experience in building and optimizing complex data systems for Fortune 500 companies. Her expertise lies in big data solutions and cloud infrastructure.</p>
                    <ul class="instructor-stats">
                        <li>45 Videos</li>
                        <li>11 Quizzes</li>
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