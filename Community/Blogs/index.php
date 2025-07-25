<?php
session_start();
if($_SESSION['session'] != 1){
  header("Location: ../../login/login.html");
  exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Blogs Layout</title>
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
	
	<section class="blogs-section">
  <h2>Blogs</h2>
  <div class="blogs-container">

    <div class="blog-card">
      <img src="images/surf.jpg" alt="Mentorship" />
      <h3>How Mentorship<br>Changed My Life</h3>
      <button class="btn grey">Enter</button>
    </div>

    <div class="blog-card">
      <span class="label">News</span>
      <img src="images/convo.JPG" alt="Online Courses" />
      <h3>How I Landed My First Job<br>With Just Online Courses</h3>
      <button class="btn green">Enter</button>
    </div>

    <div class="blog-card">
      <img src="images/studentspng.jpg" alt="In-Demand Skills" />
      <h3>Top 5 In-Demand Skills<br>Employers Are Looking For in 2025</h3>
      <button class="btn grey">Enter</button>
    </div>

  </div>
</section>
	<section class="featured-blogs-section">
  <h2>Featured Blogs</h2>
  <div class="featured-blogs-container">

    <!-- LEFT: Featured blog card -->
    <div class="featured-card">
      <img src="images/girlStudying.JPG" alt="Burnout Blog" />
      <h3>Dealing with burnout<br>while learning a new skill</h3>
      <button class="select-btn">Select</button>
    </div>

    <!-- RIGHT: Blog list -->
    <div class="blog-preview-list">

  <!-- 1. Painter -->
  <div class="blog-preview">
    <img src="images/girlPainting.WEBP" alt="Painter" />
    <div class="preview-box">
      <p><strong>Painter</strong><br>
      “Creativity runs in my veins. Thanks to Skillshare, I turned my passion for painting into a daily practice—and now, I get to color outside the lines every day.”</p>
    </div>
  </div>
  <hr />

  <!-- 2. Student with headphones -->
  <div class="blog-preview">
    <img src="images/writing.WEBP" alt="Student" />
    <div class="preview-box">
      <p><strong>Student</strong><br>
      “From notebooks to new skills—Skillshare made it easy to learn at my own pace, anywhere, anytime. Now I’m studying smarter, not harder.”</p>
    </div>
  </div>
  <hr />

  <!-- 3. Award-winning executive -->
  <div class="blog-preview">
    <img src="images/ceo.JPG" alt="Executive" />
    <div class="preview-box">
      <p><strong>Executive</strong><br>
      “From leadership lessons to business breakthroughs, Skillshare sharpened my edge. What started with a course ended with a trophy.”</p>
    </div>
  </div>

</div>


  </div>
</section>
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

</body>
</html>
