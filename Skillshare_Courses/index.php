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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Courses</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Navigation Bar -->
  <?php require "../navigation/navigation.php"; ?>

  <!-- Hero Section -->
  <section class="main-split">  
  <section class="course-hero">
    <h1>Our Courses</h1>
    <p>We offer a wide range of courses</p>
  </section>

  <!-- Categories -->
  <section class="course-container">
    <div class="category-title">
      <h2>All<br>Categories</h2>
    </div>
    <div class="category-columns">
      <div class="category-column">
        <h3>Digital Skills</h3>
        <ul>
          <li><a href="Contents/SoftwareDevelopement.html">Software Development</a></li>
          <li><a href="Contents/DataSystems.php">Data Systems</a></li>
          <li><a href="Contents/GraphicDesign.php">Graphic Design</a></li>
        </ul>
      </div>
      <div class="category-column">
        <h3>Creative Arts</h3>
        <ul>
          <li><a href="Contents/Pottery.php">Pottery</a></li>
          <li><a href="Contents/FineArts.php">Fine Arts</a></li>
          <li><a href="Contents/Sewing.php">Sewing</a></li>
          <!-- <li><a href="Contents/">Illustration</a></li> -->
        </ul>
      </div>
      <div class="category-column">
        <h3>Agriculture</h3>
        <ul>
          <li><a href="Contents/AG_Sales&Marketing.php">Agriculture Sales and Marketing</a></li>
          <li><a href="Contents/AG_Specialist.php">Agriculture Specialist</a></li>
          <li><a href="Contents/AG_Farm.php">Farm Management</a></li>
        </ul>
      </div>
    </div>
  </section>
	  
  <!-- Space -->
	<section class="space">
	  </section>

  <!-- Stats -->
  <section class="stats-section">
  <div class="stat-box">
    <h3>30.9K</h3>
    <p>Members enrolled in<br>Courses</p>
  </div>
  <div class="divider"></div>
  <div class="stat-box">
    <h3>64%</h3>
    <p>Students complete their<br>first course</p>
  </div>
  <div class="divider"></div>
  <div class="stat-box">
    <h3>88K</h3>
    <p>Monthly active users</p>
  </div>
  <div class="divider"></div>
  <div class="stat-box text-left">
    <h4>Learn from the best!</h4>
    <p>Our global community of instructors brings real-world experience and actionable knowledge directly to you.</p>
  </div>
</section>


  <section class="testimonials">
  <h2>What our students are saying</h2>
  <div class="testimonial-track" id="testimonialTrack">
    <!-- Testimonial Card -->
    <div class="testimonial-card">
      <div class="testimonial-content">
        <h4>Laura Tan</h4>
        <p><em>"What I loved about the Skillshare Hub's Graphic Design course is how it pushed me beyond just theory, giving me the tools and confidence to create impactful designs that actually work in the real world."</em></p>
        <p><strong>Course:</strong> Graphic Design</p>
      </div>
      <img src="Images/Image1.jpg" alt="Laura">
    </div>
	  <div class="testimonial-card">
      <div class="testimonial-content">
        <h4>Joshua Basset</h4>
        <p><em>"To be able to take courses at my own pace and rhythm has been an amazing experience. I can learn whenever it fits my schedule and mood."</em></p>
        <p><strong>Course:</strong> Agriculture Specialist</p>
      </div>
      <img src="Images/Image2.jpg" alt="Joshua">
    </div>
	  <div class="testimonial-card">
      <div class="testimonial-content">
        <h4>Chaitanya A.</h4>
        <p><em>"Learning isn't just about being better at your job: it's so much more than that. SkillHub allows me to learn without limits."</em></p>
        <p><strong>Course:</strong> Data Systems</p>
      </div>
      <img src="Images/Image3.webp" alt="Chaitanya">
    </div>
	  <div class="testimonial-card">
      <div class="testimonial-content">
        <h4>Aria Candace</h4>
        <p><em>“What I loved about the Skillshare Hub's Graphic Design course is how it pushed me beyond just theory, giving me the tools and confidence to create impactful designs that actually work in the real world.”</em></p>
        <p><strong>Course:</strong>Graphic Design</p>
      </div>
      <img src="Images/Image4.jpg" alt="Aria">
    </div>
  </div>

  <!-- Scroll Indicator -->
  <div class="scroll-indicator">
    <div class="scroll-thumb" id="scrollThumb"></div>
  </div>
</section>


  <!-- Footer -->
  <?php require "../navigation/footer.php"; ?>
	</section>
	</body>
</html>

