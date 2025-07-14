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
    <form class="contact-form" action="contact.php" method="post">
      <div class="name-fields">
        <input type="text" placeholder="First name" name="firstName" required />
        <input type="text" placeholder="Last name" name="lastName"required />
      </div>
      <input type="email" placeholder="Email Address" name="email" required />
      <textarea placeholder="Message" rows="4" name="message" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
</section>
		<!-- Footer -->
     <?php require "../navigation/footer.php"; ?>

</body>
</html>