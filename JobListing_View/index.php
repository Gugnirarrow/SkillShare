<?php
session_start();
require "../connection.php";
if($_SESSION['session'] != 1){
    header("Location: ../../login/login.html");
    exit;
}

$jobname = $_POST['jobname'];
$jobcomp = $_POST['jobcompany'];
$query = "select * from jobs where jobName ='{$jobname}' and jobCompany='{$jobcomp}'";
$fetch  = mysqli_fetch_assoc(mysqli_query($conn,$query));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listing</title>
    <link rel="stylesheet" href="ListingStyle.css">
</head>
<body class="bg-dark-green font-inter">

    <!--Navigation Bar-->
    <header class="navbar">
        <div class="navbar-left">
        <img src="Images/logo.png" alt="SkillShare Hub Logo" class="logo">
        </div>

        <ul class="nav-links">
            <li><a href="../Homepage/">Home</a></li>
            <li><a href="../Skillshare_Courses/">Courses</a></li>
            <li><a href="../AboutUs/">About Us</a></li>
            <li><a href="../Skillshare_Contact/">Contact</a></li>
            <li><a href="../JobListing/">Job Listings</a></li>
            <li><a href="../Community/">Community</a></li>
        </ul>

        <div class="navbar-right">
            <div class="search-bar">
                <img src="Images/search_icon.png" alt="Search" class="search-icon" />
                <input type="text" placeholder="Search For Courses" />
            </div>
            <a href="../logout.php"><button class="btn login">Log Out</button></a>
            <!-- <button class="btn signin">Sign In</button> -->
            <a href="../Skillshare_Profile/"><img src="Images/profile_icon.png" alt="Profile" class="profile-icon" /></a>
        </div>
    </header>

    <main>
        <section class="community-hero">
            <div class="container">
                <h2>Job Information</h2>
            </div>
        </section>

        <div class="container partners-content">
            <section class="partners-main">
                <!-- Example Partner Listings - You can expand this section with actual partner logos/details -->
                <div class="partner-list">
                    <!-- <p style="text-align: center; color: #555; margin-top: 50px;">More information about our partners coming soon!</p> -->
                     <p>
                        <h3>Company</h3><?php echo " {$fetch['jobCompany']} ";?>
                        <h3>Job Title</h3><?php echo " {$fetch['jobName']} ";?>
                        <h3>Job Requirement</h3><?php echo " {$fetch['jobRequirement']} ";?>
                        <h3>Job Description</h3><?php echo " {$fetch['jobDescription']} ";?>
                        <h3>Salary Range</h3><?php echo " {$fetch['jobSalary']} ";?>    
                     </p>
                </div>
                <div style="float: right">
                    <input type="button" id="apply" class="btn signin" value="Apply Now!" onclick="notice()">
                </div>
            </section>
        </div>
    </main>

    
 <!-- Footer Section -->
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
                    <li><a href="../AboutUs/">About us</a></li>
                    <li><a href="../Skillshare_Contact/">Contact</a></li>
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
            <img src="Images/logo.png" alt="SkillShare Hub Logo">
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 SkillShare Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
<script>
    function notice(){
        alert("Thank You For Applying! The respective company will get in touch with you please check your email from time to time.");
        window.location.href="../JobListing/";
    }
</script>
</html>
