<?php
session_start();
if($_SESSION['session'] != 1){
  header("Location: ../../login/login.html");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forums - SkillShare Hub</title>
    <link rel="stylesheet" href="ForumStyle.css">
</head>
<body class="bg-dark-green font-inter">

<!--Navigation Bar-->
    <header class="navbar">
    <div class="navbar-left">
      <img src="Images/logo.png" alt="SkillShare Hub Logo" class="logo">
    </div>

    <ul class="nav-links">
      <li><a href="../../Homepage/">Home</a></li>
      <li><a href="../../Skillshare_Courses/">Courses</a></li>
      <li><a href="../../AboutUs/">About Us</a></li>
      <li><a href="../../Skillshare_Contact/">Contact</a></li>
      <li><a href="../../JobListing/">Job Listings</a></li>
      <li><a href="../">Community</a></li>
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
        <section class="community-hero">
            <div class="container">
                <h2>Forums</h2>
                <p>Share your ideas and experience with other users</p>
                <div class="forum-filters">
                    <button class="forum-filter-btn active">Most Popular</button>
                    <button class="forum-filter-btn">Recents</button>
                </div>
            </div>
        </section>

        <div class="container forum-posts">
            <div class="forum-card">
                <div class="forum-card-avatar">
                    <img src="Images/image 15.png" alt="User Avatar">
                </div>
                <h4>Upskilling</h4>
                <p>How SkillShare Hub has helped me upskill my artistic skills through free trainings!</p>
            </div>

            <div class="forum-card">
                <div class="forum-card-avatar">
                    <img src="Images/image 16.png" alt="User Avatar">
                </div>
                <h4>Balancing work and study</h4>
                <p>Juggling part-time work and online learning - here's what's been working for me.</p>
            </div>

            <div class="forum-card">
                <div class="forum-card-avatar">
                    <img src="Images/image 17.png" alt="User Avatar">
                </div>
                <h4>Skill-Swap Partners</h4>
                <p>I offered help with CV writing and got free design feedback - let's skill-swap together!</p>
            </div>

            <!-- Add more forum cards as needed -->
            <div class="forum-card">
                <div class="forum-card-avatar">
                    <img src="Images/image 17.png" alt="User Avatar">
                </div>
                <h4>Career Change Journey</h4>
                <p>Sharing my experience transitioning from finance to software development with SkillShare Hub.</p>
            </div>

            <div class="forum-card">
                <div class="forum-card-avatar">
                    <img src="Images/image 15.png" alt="User Avatar">
                </div>
                <h4>Best Practices for Online Learning</h4>
                <p>Tips and tricks for staying motivated and focused while taking online courses.</p>
            </div>

            <div class="forum-card">
                <div class="forum-card-avatar">
                    <img src="Images/image 16.png" alt="User Avatar">
                </div>
                <h4>Creative Block Solutions</h4>
                <p>Looking for inspiration to overcome creative blocks in graphic design. Any ideas?</p>
            </div>
        </div>
    </main>

 <!-- Footer Section -->
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
                <p>168, Jalan Bukit Bintang,<br> 
                Bukit Bintang,<br> 
                55100<br>
                Kuala Lumpur,<br>
                Wilayah Persekutuan Kuala Lumpur.</p>
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
            <img src="Images/logo.png" alt="SkillShare Hub Logo">
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 SkillShare Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
