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
  <link rel="stylesheet" href="vars.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

  <!--Navigation-->
  <?php require "../navigation/navigation.php"; ?>
  <div class="community-page">
    <img class="rectangle-95" src="element/rectangle-950.svg" />
    <img class="rectangle-96" src="element/rectangle-960.svg" />
    <div class="welcome-to-the-community">Welcome to the community!</div>
    <div class="rectangle-58"></div>
 
    <div class="rectangle-582"></div>
    <div class="rectangle-583"></div>

    <div class="rectangle-584"></div>

    <div class="rectangle-585"></div>
 
    <a href="Blogs/"><img class="image-3" src="element/image-30.png" />
    <div class="blogs">Blogs</div></a>
    <a href="Forum/"><img class="image-4" src="element/image-40.png" />
    <div class="forum">Forum</div></a>
    <a href="Partners/"><img class="image-5" src="element/image-50.png" />
    <div class="partners">Partners</div></a>
    <a href="Fundraising/"><img class="image-6" src="element/image-60.png" />
    <div class="fundraising">Fundraising</div></a>
    <a href="News/"><img class="image-7" src="element/image-70.png" />
    <div class="news">News</div></a>
    </div>
  </div>
  
  <!--Footer-->
  <?php require "../navigation/footer.php"; ?>
</body>
</html>