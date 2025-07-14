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
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Profile</title>
  <link rel="stylesheet" href="style.css" />
	<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>

</head>
<body>

  <!-- Navigation Bar -->
   <?php require "../navigation/navigation.php";?>
  <!-- <header class="navbar">
    <div class="navbar-left">
      <img src="Images/logo.png" alt="SkillShare Hub Logo" class="logo">
    </div>

    <ul class="nav-links">
      <li><a href="../Homepage/index.php">Home</a></li>
      <li><a href="../Skillshare_Courses/index.html">Courses</a></li>
      <li><a href="../about-us/about.html">About Us</a></li>
      <li><a href="../Skillshare_Contact/index.html">Contact</a></li>
      <li><a href="../Job Listing Page 1/index.html">Job Listings</a></li>
      <li><a href="../Community page 1/index.html">Community</a></li>
    </ul>

    <div class="navbar-right">
      <div class="search-bar">
        <img src="Images/search_icon.png" alt="Search" class="search-icon" />
        <input type="text" placeholder="Search For Courses" />
      </div>
      <a href="../logout.php"><button class="btn login">Log Out</button></a>
      <button class="btn signin">Sign In</button>
      <img src="Images/profile_icon.png" alt="Profile" class="profile-icon" />
    </div>
  </header> -->

  <!-- Profile Page -->
  <main class="profile-page">
    <h1>Student Profile</h1>
    <hr />

    <div class="profile-container">
      <!-- Left Image Upload -->
      <div class="profile-image-card">
        <form action="upload_picture.php" method="post" enctype="multipart/form-data">
          <?php
            if($result['profilePicture'] == "" || $result['profilePicture'] == null)
              echo "<img src='Images/joe.jpg' alt='Profile' class='profile-photo' />";
            else
              echo "<img src='{$result['profilePicture']}' alt='Profile' class='profile-photo' />";
          ?>
          &nbsp;<input type="file" name="fileToUpload" id="fileToUpload">
          <button type="submit" class="upload-btn">Upload Image</button>
        </form>
      </div>

      <!-- Right Form -->
      <div class="profile-form-card">
        <h2>My Profile Information</h2>
        <hr class="form-divider" />

        <form class="profile-form" action="update_profile.php" method="post" onsubmit="check_confirm()">
          <div class="input-row">
            <div class="input-group">
              <label for="username">Username:</label>
              <?php echo "
                <input type='text' id='username' name='name' value='{$result['name']}'/>"
              ?>
            </div>
            <div class="input-group">
              <label for="npassword">New Password:</label>
              <input type="password" id="npassword" name='npassword'/>
            </div>
            <div class="input-group">
              <label for="cpassword">Confirm New Password:</label>
              <input type="password" id="cpassword" name='cpassword'/>
            </div>
          </div>

          <div class="input-row">
            <div class="input-group">
              <label for="email">E-mail:</label>
              <?php echo "
                <input type='text' id='email' name='email' value='{$result['email']}'/>"
              ?>
            </div>
            <div class="input-group">
              <label for="programme">Programme:</label>
              <?php echo "
                <input type='text' id='programme' name='programme' value='{$result['programme']}'/>"
              ?>
            </div>
          </div>

          <div class="input-row">
            <div class="input-group">
              <label for="about">About Me:</label>
              <?php echo "
                <textarea id='about' rows='3' name='about'>{$result['about']}</textarea>"
              ?>
            </div>
            <div class="input-group">
              <label for="idCode">ID - Code:</label>
              <?php echo "
                <input type='text' id='code' name='code' value='{$result['code']}'/>"
              ?> 
            </div>
          </div>
          <div class="input-group">
              <label for="password">Enter Password to confirm:</label>
              <input type="password" id="password" name='password'/>
			    </div>
          <button type="submit" class="update-btn">Update Profile</button>
        </form>
      </div>
    </div>
	  <!-- <div class="social-media-links">
            <div class="social-link-item">
                <i class="fab fa-facebook-f social-icon"></i>
                <span>Add Facebook +</span>
            </div>
            <div class="social-link-item">
                <i class="fab fa-instagram social-icon"></i>
                <span>Add Instagram +</span>
            </div>
            <div class="social-link-item">
                <i class="fab fa-twitter social-icon"></i>
                <span>Add Twitter +</span>
            </div>
        </div> -->
	  <!-- Learning Dashboard Section -->
<!-- <section class="learning-section">
  <h1>My Learning Journey</h1>
  <hr />

  <div class="dashboard-card">
    <h2>Learning Dashboard</h2>

    Graphic Design Course
    <div class="course-progress">
      <div class="course-info">
        <p><strong>Digital Skills</strong> | Graphic Design Course</p>
        <span class="progress-label">Progress</span>
        <div class="progress-bar">
          <div class="progress-fill" style="width: 45%;"></div>
        </div>
      </div>
      <div class="course-status">
        <p><strong>Status:</strong> In-Progress</p>
        <p class="not-available">Not Available</p>
      </div>
    </div>

    <Farm Management Course>
    <div class="course-progress">
      <div class="course-info">
        <p><strong>Agriculture</strong> | Farm Management Course</p>
        <span class="progress-label">Progress</span>
        <div class="progress-bar">
          <div class="progress-fill" style="width: 100%;"></div>
        </div>
      </div>
      <div class="course-status">
        <p><strong>Status:</strong> Completed</p>
        <a href="#" class="view-cert">View Cert</a>
      </div>
    </div>
  </div>
</section> -->
  </main>
		<!-- Footer -->
      <?php require "../navigation/footer.php";?>

</body>
    <script>
        function check_confirm(){
            var pass = document.getElementById('npassword').value.trim();
            var cpass = document.getElementById('cpassword').value.trim();

            if(pass != cpass){
                alert('Password and Confirm Password does not match');
                event.preventDefault();
            }
            event.returnValue=true;
        }
    </script>
</html>

