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
  

  <title>Job Listing</title>
</head>

<body>
<!--Navigation-->
<?php require "../navigation/navigation.php"; ?>


  <div class="job-listing-page-1">
    <div class="explore-jobs">Explore Jobs</div>

    <!-- <img class="arrow-down-circle" src="element/arrow-down-circle0.svg" />-->
    <!-- <button class="rectangle-36"></button> -->
    <table class="rectangle-36">
      <thead><tr><th>Test</th></tr></thead>
      <tbody><tr><td>test</td></tr></tbody>
    </table>
    <div class="finance">Finance</div>
    <!--<div class="_16-open-positions">(16 open positions)</div>
    <img class="ri-coins-line" src="element/ri-coins-line0.svg" />
    <div class="rectangle-37"></div>
    <div class="_13-open-positions">(13 open positions)</div>
    <div class="design">Design</div>
    <img
      class="fluent-design-ideas-20-filled"
      src="element/fluent-design-ideas-20-filled0.svg"
    />
    <div class="rectangle-39"></div>
    <div class="_2-open-positions">(2 open positions)</div>
    <div class="development">Development</div>
    <img class="material-symbols-web" src="element/material-symbols-web0.svg" />
    <div class="rectangle-38"></div>
    <div class="_3-open-positions">(3 open positions)</div>
    <div class="agriculture">Agriculture</div>
    <img class="ri-plant-line" src="element/ri-plant-line0.svg" />-->
    <!-- <div class="rectangle-34"></div> -->
    <!-- <div class="search">Search</div> -->
    <img class="rectangle-35" src="element/rectangle-350.svg" />
   <input type="text" placeholder="Jobs, Positions, Company" class="jobs-positions-company-input"/>
   
  </div>
  </div>
</body>

<!-- Footer-->
<?php require "../navigation/footer.php"; ?>

</html>