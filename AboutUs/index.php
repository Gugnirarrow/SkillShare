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
<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<!--Header-->
<?php require "../navigation/navigation.php"; ?>

<!-- about top-->
<div class="about">
<h1>About Us</h1>
<h3 style="font-size: 22px;">Empower yourself and contribute to a better future. Choose SkillShare Hub.</h2>
<img class="about-main" src="img/gather.jpg"/>
<h2>Hi! Welcome to the heart of 
    <br> <img src="img/skillshare_hub-footer.png" class="logo-text2" alt="Logo Text"/>
</h2>
<h4 style="display:flex;">A visionary project developed right here in Subang Jaya, <br> Selangor, Malaysia. At its core, SkillShare is an innovative <br> online platform meticulously crafted to directly address<br> and contribute to the achievement of<br> United Nations Sustainable Goals.</h4>


<!-- about middle-->
 <br>
 <h2 style="font-weight: 700;">Our Vision</h2>
 <div class="vision-box">
    <h3 style="text-align: center;">At <b>Skillshare</b> our vision is simple yet profound: <br>a world where poverty is eradicated <br>through the power of <b>accessible knowledge</b> <br>and <b>practical skills.</b> <br><br>We envision a future where every individual, <br>regardless of their background or location, <br>has the opportunity to <b>learn, grow, and build <br> a sustainable livelihood.</b></h3>
 </div>
  <div class="img-box">
    <img src="img/activity1.png" alt="Activity 1">
  </div>
  <div class="img-box">
    <img src="img/activity2.png" alt="Activity 2">
  </div>
  <div class="img-box">
    <img src="img/activity3.png" alt="Activity 3">
  </div>
</section>


<!--slide middles-->
<div class="green-rect">
    <h1 style="color:#f2f7a5;">About Us</h1><br><h2 style="color:#f2f7a5; text-align:center;">Here is more to know about us!</h2>
</div>
<h4 style="font-weight:600; font-size: larger; text-align:center;">Why choose us?</h3>
<div class="green-section">
    <h3>In a world brimming with information, <b>SkillShare</b> stands out as more than just another online 
learning platform.<br>Developed with a clear purpose right here in <b>Subang Jaya, Selangor, 
Malaysia</b>, we are uniquely positioned to <br>deliver tangible impact in the <b>fight against poverty</b>.</h3>
</div>

<div class="about-sections">
  <div class="our-story">
    <h4 style="color:#f2f7a5;">Our Story</h4>
    <h5>We began with a question: How can we empower individuals to break the cycle of poverty through skills? The answer—accessible, relevant, and community-driven learning. We envisioned a space where knowledge flows freely, connecting skill-givers with eager learners.</h5>
    <img src="img/ourstory.png" class="about2img"/>
  </div>

  <div class="our-team">
    <h4 style="color:#f2f7a5;">Our Team</h4>
    <h5>SkillShare is powered by a passionate team of educators and changemakers, united by a vision of equal access to learning and sustainable growth. We’re driven to equip individuals with the skills to overcome economic barriers.</h5>
    <img src="img/ourteam.png" class="about2img"/>
  </div>
</div>

</div>
<!--Footer-->
<?php require "../navigation/footer.php"; ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".about-main, .logo-text2, .vision-box, .green-rect, .green-section, .our-story, .our-team");

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, {
      threshold: 0.1
    });

    images.forEach(img => {
      observer.observe(img);
    });
  });
</script>
</body>