<?php

echo"

<!-- Navigation Bar -->
  <header class='navbar'>
    <div class='navbar-left'>
      <img src='../navigation/Images/logo.png' alt='SkillShare Hub Logo' class='logo'>
    </div>

    <ul class='nav-links'>
      <li><a href='../Homepage/'>Home</a></li>
      <li><a href='../Skillshare_Courses/'>Courses</a></li>
      <li><a href='../AboutUs/'>About Us</a></li>
      <li><a href='../Skillshare_Contact/'>Contact</a></li>
      <li><a href='../JobListing/'>Job Listings</a></li>
      <li><a href='../Community/'>Community</a></li>
    </ul>

    <div class='navbar-right'>
      <div class='search-bar'>
        <img src='../navigation/Images/search_icon.png' alt='Search' class='search-icon' />
        <input type='text' placeholder='Search For Courses' />
      </div>
      <a href='../logout.php'><button class='btn login'>Log Out</button></a>
      <button class='btn signin'>Sign In</button>
      <a href='../Skillshare_Profile/index.php'><img src='../navigation/Images/profile_icon.png' alt='Profile' class='profile-icon' /></a>
    </div>
  </header>";
?>