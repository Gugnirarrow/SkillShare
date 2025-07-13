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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partners - SkillShare Hub</title>
    <link rel="stylesheet" href="PartnerStyle.css">
</head>
<body class="bg-dark-green font-inter">

    <!--Navigation Bar-->
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

    <main>
        <section class="community-hero">
            <div class="container">
                <h2>Partners</h2>
                <p>We collaborate with the following companies and organisations for this website.</p>
                <div class="partner-search-bar">
                    <img src="images/search_icon.png" alt="Search">
                    <input type="text" placeholder="Search partners">
                </div>
            </div>
        </section>

        <div class="container partners-content">
            <section class="partners-main">
                <!-- Example Partner Listings - You can expand this section with actual partner logos/details -->
                <div class="partner-list">
                    <p style="text-align: center; color: #555; margin-top: 50px;">More information about our partners coming soon!</p>
                </div>
            </section>

            <aside class="faq-section">
                <h3>Frequently Asked Questions</h3>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <span>What is a SkillShare Hub Partner?</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>SkillShare Hub partners are organizations and companies that collaborate with us to provide high-quality educational content, job opportunities, or resources to our users. They help us expand our offerings and reach.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <span>How can my organization become a partner?</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We are always open to new collaborations. If your organization is interested in partnering with SkillShare Hub, please visit our 'Contact Us' page and send us a detailed proposal. Our team will review it and get back to you.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <span>What are the benefits of partnering with SkillShare Hub?</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Partners gain access to our extensive community of learners, increased visibility for their brand, opportunities to contribute to skill development, and potential for joint marketing initiatives. Specific benefits depend on the nature of the partnership.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <span>Do partners offer exclusive content or discounts?</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Some of our partners may offer exclusive courses, workshops, or discounts to SkillShare Hub members. Details on such offers are usually announced on our platform or directly by the partner.</p>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    
 <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Want to know more?</h3>
                <div class="logo">
                   <img src="/Users/amirahali/Documents/SEM 6/Course Page Home page/Images/logo.png" alt="SkillShare Hub Logo" class="logo-icon">
                </div>
            </div>
            <div class="footer-section links">
                <h4>Office</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Partnerships</a></li>
                    <li><a href="#">Press</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Community</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 SkillShare Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
