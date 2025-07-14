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
  <title>SkillShare Hub – Fundraising</title>
  <link rel="stylesheet" href="sstyle.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
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
  <!-- <div class="navbar">
  <div class="top-rectangle">
    <div class="logo">
      <img src="SkillShareHub Logo.png" />
    </div>

    <div class="logo-text">
      <img src="skillshare hub logo.png" />
    </div>

    <nav class="main-nav">
      <ul class="nav-group">
        <li><a href="#">Home</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Job Listings</a></li>
        <li><a href="#">Community</a></li>
      </ul>
    </nav>

    <div class="actions">
      <div class="search-bar">
        <input type="text" placeholder="Search For Courses">
        <span class="search-icon">🔍</span>
      </div>
      <button class="login-btn">Log In</button>
      <button class="sign-btn">Sign In</button>
      <a href="profile.html" class="profile-icon">👤</a>
    </div>
  </div>
</div> -->

  <!-- Fundraising Modal -->
          <h1 style="text-align:center;">Fundraising</h1>
  <div class="fundraising-container">
    <div class="fundraising-box" id="donateBox">
      <h2>Interested in donating to our cause?</h2>
      <p>Every donation made to SkillShare Hub will go back to the community, educating those who need it to elevate their skills and knowledge to higher standards.</p>

      <form id="donationForm">
        <label class="donation-option">
          <input type="radio" name="payment" value="card" checked />
          <span class="icon">💳</span>
          <span>Credit/Debit Card</span>
        </label>

        <label class="donation-option">
          <input type="radio" name="payment" value="bank" />
          <span class="icon">$</span>
          <span>Online Banking (FPX, DuitNow)</span>
        </label>

        <button type="submit" class="donate-btn">Continue</button>
      </form>
       <div class="confirmation-message" id="confirmationMessage" style="display:none;">
      <h3>🎉 Thank you for your fundraising!</h3>
      <p>Proceeding to payment shortly...</p>
    </div>
    </div>
  </div>

  <script>
  window.addEventListener('DOMContentLoaded', () => {
    const donateBox = document.getElementById('donateBox');
    const form = document.getElementById('donationForm');
    const confirmation = document.getElementById('confirmationMessage');

    donateBox.classList.add('visible');

    form.addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent form submission

      form.style.display = 'none';              // Hide form
      confirmation.style.display = 'block';     // Show confirmation message
      setTimeout(() => confirmation.classList.add('show'), 10);

      // After 2 seconds, show the form again
      setTimeout(() => {
        confirmation.style.display = 'none';
        form.style.display = 'block';
      }, 2000); // 2000ms = 2 seconds
    });
  });
</script>
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
