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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>News Layout</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	 <!-- Navigation Bar -->
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

  <!-- Section 1: Today's News -->
 <section class="todays-news-section">
  <h2>Today's News</h2>
  <div class="todays-news">
    <div class="main-news">
      <img src="images/newspaper.png" alt="Newspaper" />
    </div>
    <div class="side-news">
      <img src="images/meeting.png" alt="Meeting" />
      <img src="images/tech.png" alt="Tech" />
    </div>
  </div>
</section>



  <!-- Section 2: News Highlights -->
 <section class="news-highlights-section">
  <div class="news-content">
    <h2>News Highlights</h2>
    <div class="highlight-cards">
      <div class="highlight-card">
        <img src="images/studentspng.jpg" alt="Job Fair" />
        <h3>Monthly Job Fair – June Highlights</h3>
        <p><em>Over 100+ attendees, 20 employers, and 15 hired on the spot at this month’s virtual job fair!</em></p>
      </div>

      <div class="highlight-card">
        <img src="images/sewingg.png" alt="Art Workshop" />
        <h3>Artistic Skills Workshops this month</h3>
        <p><em>Join our upcoming virtual workshops in watercolor, digital painting, and storytelling through art.<br>Free slots available :)</em></p>
      </div>
    </div>
  </div>

  <div class="topics-content">
    <h2>Topics</h2>
    <ul class="topics-list">
      <li><img src="images/gaming.png" alt="Gaming" />Gaming Skills</li>
      <li><img src="images/skills.png" alt="Skills" />Skills Improvement</li>
      <li><img src="images/creative.png" alt="Creativity" />Creativity Skills</li>
    </ul>
  </div>
</section>
	

</body>
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
            <img src="Images/footerlogo 1.png" alt="SkillShare Hub Logo">
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 The SkillShare Company. All rights reserved.</p>
        </div>
    </footer>
</html>