<?php
session_start();
require "../connection.php";
if($_SESSION['session'] != 1){
    header("Location: ../login/login.html");
    exit;
}
else{
    $sql = "select * from accounts where email like '".$_SESSION['email']."'";
    $result = mysqli_fetch_assoc(mysqli_query($conn,$sql));

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
  <?php require "../navigation/navigation.php";?>
  <!-- <header class="navbar">
    <div class="navbar-left">
      <img src="elements/logo.png" alt="SkillShare Hub Logo" class="logo">
    </div>

    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="../Skillshare_Courses/index.html">Courses</a></li>
      <li><a href="../about-us/about.html">About Us</a></li>
      <li><a href="../Skillshare_Contact/index.html">Contact</a></li>
      <li><a href="../Job Listing Page 1/index.html">Job Listings</a></li>
      <li><a href="../Community page 1/index.html">Community</a></li>
    </ul>

    <div class="navbar-right">
      <div class="search-bar">
        <img src="elements/element_magnifying_glass.png" alt="Search" class="search-icon" />
        <input type="text" placeholder="Search For Courses" />
      </div>
      <a href="../logout.php"><button class="btn login">Log Out</button></a>
      <button class="btn signin">Sign In</button>
      <a href="../Skillshare_Profile/index.php"><img src="elements/element_profile.png" alt="Profile" class="profile-icon" /></a>
    </div>
  </header> -->

  <!-- Section 1: Today's News -->
 <section class="todays-news-section">
  <h2>Study Smarter</h2>
  <div class="todays-news">
    <div class="main-news">
      Attain skills, acquire and take over the world!
    </div>
    <img src="elements/image_success.png" alt="Success">
    <!-- <div class="side-news">
      <img src="elements/image_success.png" alt="Success" />
    </div> -->
  </div>
 </section>



  <!-- Section 2: News Highlights -->
 <section class="news-highlights-section">
     <div class="highlight-card-side"></div>

    <div class="highlight-cards">
      <div class="highlight-card">
        <img src="elements/element_handshake.png" alt="Job Fair" />
        <h3>Our courses allows you to connect with people all over the world</h3>
      </div>

      <div class="highlight-card">
        <img src="elements/element_reading.png" alt="Art Workshop" />
        <h3>We help individuals sharpen their critical thinking</h3>
      </div>

      <div class="highlight-card">
        <img src="elements/element_smart.png" alt="Art Workshop" />
        <h3>Our students have achieved succsss academically and have also proven themselves in practical settings</h3>
      </div>
    </div>
    <div class="highlight-card-side"></div>
  <!-- </div> -->
 </section>
	

</body>
<?php require "../navigation/footer.php";?>
	<!-- <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Want to know more?</h4>
                <p>Subscribe to our mail and receive updates on our courses!</p>
                <div class="newsletter-form">
                    <input type="email" placeholder="Email address">
                    <button><img src="elements/element_magnifying_glass.png" alt="Subscribe"></button>
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
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Help Centre</a></li>
                </ul>
            </div>
        </div>
        <div class="logo-bottom">
            <img src="elements/skillshare_hub-footer.png" alt="SkillShare Hub Logo">
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 The SkillShare Company. All rights reserved.</p>
        </div>
    </footer> -->
</html>