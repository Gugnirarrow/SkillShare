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
    <title>Sewing - SkillShare Hub</title>
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
                    <h2>Sewing</h2>
                    <p>From basic stitches to advanced garment construction, learn the art of sewing and create your own textiles.</p>
                </div>
                <div class="course-image">
        <img src="Images/sewing.jpg" alt="Profile" class="course-image" />
      </div>
            </div>
        </section>

        <div class="container course-details">
            <section class="about-course course-section">
                <h3>About the Course</h3>
                <p>This comprehensive sewing course takes you from beginner to confident seamster. You will learn how to operate a sewing machine, understand fabric properties, read patterns, and execute a variety of stitches to construct clothing, accessories, and home decor items.</p>
            </section>

            <section class="what-you-learn course-section">
                <h3>What You'll Learn</h3>
                <ul class="learn-list">
                    <li>Sewing machine operation and maintenance</li>
                    <li>Fabric types and handling</li>
                    <li>Basic garment construction</li>
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
                    <span>Sewing Machine Basics</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Learn to thread your machine, wind a bobbin, and perform basic stitches like straight stitch and zigzag.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Fabric Fundamentals</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Understanding different fabric types, their properties, and how to choose the right fabric for your projects.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Hand Stitching and Mending</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Essential hand sewing stitches for repairs, finishing, and decorative purposes.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Reading Patterns and Cutting Fabric</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>How to interpret sewing patterns, lay out fabric correctly, and cut pieces precisely for successful projects.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Basic Garment Components</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Constructing collars, cuffs, waistbands, and zippers, fundamental for making clothing.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Introduction to Dressmaking</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Guidance on sewing simple garments like skirts or tops, including fitting and finishing techniques.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Sewing for Home Decor</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Create pillows, curtains, and other household items, applying your sewing skills to interior design.</p>
                </div>
            </section>
        </div>

        <div class="container instructor-section">
            <h3>Let's Start Learning!</h3>
            <div class="instructor-card">
                <div class="instructor-avatar">
                    <img src="images/SD_INS.jpeg" alt="Instructor Image"> </div>
                <div class="instructor-info">
                    <h4>Ms. Eleanor Vance</h4>
                    <p>Eleanor has a lifelong passion for textiles and design, bringing decades of experience in bespoke tailoring and fashion. She delights in sharing her expertise and helping students bring their creative visions to life.</p>
                    <ul class="instructor-stats">
                        <li>35 Videos</li>
                        <li>7 Projects</li>
                        <li>Full lifetime access</li>
                        <li>Certificate of Completion</li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn join-course-btn">Join Course</a>
        </div>
    </main>

   <!-- Footer -->
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