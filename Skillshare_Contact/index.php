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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SkillShare Hub</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

   <!-- Navigation Bar -->
   <?php require "../navigation/navigation.php"; ?>
  
    <!-- <header class="navbar">
    <div class="navbar-left">
      <img src="Images/logo.png" alt="SkillShare Hub Logo" class="logo" />
    </div>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">Courses</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Job Listings</a></li>
      <li><a href="#">Community</a></li>
    </ul>
    <div class="navbar-right">
      <div class="search-bar">
        <img src="Images/search_icon.png" alt="Search" class="search-icon" />
        <input type="text" placeholder="Search For Courses" />
      </div>
      <button class="btn login">Log In</button>
      <button class="btn signin">Sign In</button>
      <img src="Images/profile_icon.png" alt="Profile" class="profile-icon" />
    </div>
  </header> -->
																		   
	<section class="contact-section">
  <div class="contact-left">
    <h1>Contact Us</h1>
    <p>
      Use our contact form for all information requests or contact us directly using the contact information below.
      All information is treated with complete confidentiality and in accordance.
    </p>
    <ul class="contact-links">
      <li><strong>Help Centre</strong></li>
      <li><strong>Customer Service</strong></li>
      <li><strong>ICT Helpdesk</strong></li>
    </ul>
    <p class="contact-note">Feel free to get in touch with us via Email or phone:</p>
    <div class="contact-info">
      <a href="mailto:SkillshareHubMY@gmail.com">SkillshareHubMY@gmail.com</a>
      <span>+603-7883690</span>
    </div>
  </div>

  <div class="contact-right">
    <h3>Fill in this Form:</h3>
    <form class="contact-form">
      <div class="name-fields">
        <input type="text" placeholder="First name" required />
        <input type="text" placeholder="Last name" required />
      </div>
      <input type="email" placeholder="Email Address" required />
      <textarea placeholder="Message" rows="4" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
</section>
		<!-- Footer -->
     <?php require "../navigation/footer.php"; ?>
  <!-- <footer class="footer">
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
                <p>168, Jalan Bukit<br>Bintang, Bukit<br>Bintang, 55100<br>Kuala Lumpur,<br>Wilayah Persekutuan<br>Kuala Lumpur.</p>
            </div>
            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Help Centre</a></li>
                    <li><a href="#">Help Centre</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Socials</h4>
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">TikTok</a></li>
                </ul>
            </div>
        </div>
        <div class="logo-bottom">
            <img src="Images/footerlogo 1.png" alt="SkillShare Hub Logo">
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 The SkillShare Company. All rights reserved.</p>
        </div>
    </footer> -->


</body>
</html>