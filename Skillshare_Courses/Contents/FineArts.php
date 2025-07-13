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
    <title>Fine Arts - SkillShare Hub</title>
    <link rel="stylesheet" href="CourseContentStyle.css">
</head>
<body>
    <!-- Navigation Bar -->
  <header class="navbar">
    <div class="navbar-left">
      <img src="Images/logo.png" alt="SkillShare Hub Logo" class="logo" />
    </div>
    <ul class="nav-links">
      <li><a href="../../Homepage/">Home</a></li>
      <li><a href="../">Courses</a></li>
      <li><a href="../../AboutUs/">About Us</a></li>
      <li><a href="../../Skillshare_Contact/">Contact</a></li>
      <li><a href="../../JobListing/">Job Listings</a></li>
      <li><a href="../../Community/">Community</a></li>
    </ul>
    <div class="navbar-right">
      <div class="search-bar">
        <img src="Images/search_icon.png" alt="Search" class="search-icon" />
        <input type="text" placeholder="Search For Courses" />
      </div>
      <a href="../../logout.php"><button class="btn login">Log Out</button></a>
      <!-- <button class="btn signin">Sign In</button> -->
      <a href="../../Skillshare_Profile/"></a><img src="Images/profile_icon.png" alt="Profile" class="profile-icon" />
    </div>
  </header>

    <main>
        <section class="course-hero">
            <div class="course-hero-content">
                <div class="course-info">
                    <h2>Fine Arts</h2>
                    <p>Explore traditional and contemporary art forms, develop your artistic style, and master various mediums.</p>
                </div>
                <div class="course-image">
        <img src="Images/finearts.jpg" alt="Profile" class="course-image" />
      </div>
            </div>
        </section>

        <div class="container course-details">
            <section class="about-course course-section">
                <h3>About the Course</h3>
                <p>This course offers an immersive journey into the world of fine arts. From classical drawing and painting techniques to modern abstract art and sculpture, you will gain a deep understanding of art history, theory, and practical skills across a range of artistic expressions.</p>
            </section>

            <section class="what-you-learn course-section">
                <h3>What You'll Learn</h3>
                <ul class="learn-list">
                    <li>Drawing and sketching fundamentals</li>
                    <li>Painting techniques (oil, acrylic, watercolor)</li>
                    <li>Art history and critical analysis</li>
                </ul>
            </section>
        </div>

        <div class="container course-details">
            <section class="curriculum-section">
                <div class="section-header">
                    <h3>Curriculum</h3>
                    <span class="lessons-count">8 Lessons</span>
                </div>
                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Foundations of Drawing</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Learn observational drawing, perspective, shading, and composition using various drawing tools.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Introduction to Oil Painting</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Techniques for working with oil paints, including color mixing, layering, and brushwork.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Acrylic and Mixed Media</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Explore versatile acrylic paints and learn how to combine different materials for mixed media art.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Watercolor Techniques</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Master the delicate art of watercolor, including washes, glazes, and dry brush techniques.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Sculpture and 3D Art</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Introduction to sculpting principles, materials (clay, plaster), and basic three-dimensional design.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Art History: Renaissance to Modern</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Journey through significant art movements, influential artists, and their impact on visual culture.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Developing Your Artistic Voice</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Exercises and guidance to help you discover and refine your unique artistic style and vision.</p>
                </div>

                <div class="curriculum-item" onclick="toggleCurriculum(this)">
                    <span>Art Exhibition and Presentation</span>
                    <span class="arrow">↓</span>
                </div>
                <div class="curriculum-content">
                    <p>Learn how to photograph, present, and exhibit your artwork effectively, including framing and gallery etiquette.</p>
                </div>
            </section>
        </div>

        <div class="container instructor-section">
            <h3>Let's Start Learning!</h3>
            <div class="instructor-card">
                <div class="instructor-avatar">
                    <img src="images/FM_INS.jpeg" alt="Instructor Image">
                </div>
                <div class="instructor-info">
                    <h4>Elara Vance</h4>
                    <p>Elara is a renowned contemporary artist and art educator, known for her expressive mixed-media works. She believes in nurturing individual artistic potential and has exhibited her work globally.</p>
                    <ul class="instructor-stats">
                        <li>55 Videos</li>
                        <li>10 Assignments</li>
                        <li>Full lifetime access</li>
                        <li>Certificate of Completion</li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn join-course-btn">Join Course</a>
        </div>
    </main>

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
                <p>168, Jalan Bukit Bintang,<br> Bukit Bintang,<br> 55100<br>Kuala Lumpur,<br>Wilayah Persekutuan Kuala Lumpur.</p>
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
            <img src="Images/footerlogo.png" alt="SkillShare Hub Logo">
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 The SkillShare Company. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function toggleCurriculum(element) {
            element.classList.toggle('expanded');
            const content = element.nextElementSibling;
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
        }
    </script>
</body>
</html>