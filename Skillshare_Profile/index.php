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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Profile - View</title>
    <!-- Link to Google Fonts for 'Inter' -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
    <!-- Link to Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Link to Tailwind CSS CDN for basic utilities and reset -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- Link to your custom stylesheet for view profile -->
    <link rel="stylesheet" href="view.css">
</head>
<body>

    <!--Header-->
    <?php require "../navigation/navigation.php"; ?>

    <main class="profile-container">
        <?php echo "<h1 class='page-title'>{$result['type']} Profile</h1>"; ?>
        <!-- <h1 class="page-title">Instructor Profile</h1> -->

        <div class="profile-content">
            <div class="profile-sidebar">
                <!-- Profile image -->
                <!-- <img src="Images/profile_icon.png" alt="Sue Anne Marie" class="profile-picture"> -->
                <?php
                    if($result['profilePicture'] == "" || $result['profilePicture'] == null)
                    echo "<img src='Images/profile_icon.png' alt='Profile' class='profile-picture' />";
                    else
                    echo "<img src='{$result['profilePicture']}' alt='Profile' class='profile-picture' />";
                ?>
                <?php echo " <p class='info-label'>{$result['name']}</p>"; ?>
                <!-- <button class="btn-upload-image">Upload Image</button> -->
            </div>
            <?php echo "
            <div class='profile-info-card'>
                <h2 class='card-title'>My Profile ({$result['type']})</h2>
                <div class='info-group'>
                    <p class='info-label'>{$result['name']}</p>
                </div>
                <div class='info-group'>
                    <p class='info-label'>E-mail: <span class='info-value'>{$result['email']}</span></p>
                </div>
                <div class='info-group'>
                    <p class='info-label'>ID: <span class='info-value'>{$result['code']}</span></p>
                </div>
                <div class='info-group'>
                    <p class='info-label'>Course: <span class='info-value'>{$result['programme']}</span></p>
                </div>
                <div class='info-group'>
                    <p class='info-label'>About: <span class='info-value'>{$result['about']}</span></p>
                </div>
                " ?>
                <a href="edit_profile.php"><button class="btn-edit-profile">Edit Profile</button></a>
            </div>
        </div>

    </main>
    <!--Footer-->
    <?php require "../navigation/footer.php"; ?>
</body>
</html>
