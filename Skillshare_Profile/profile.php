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
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
    </head>
    <body>
        <!--HTML Update user profile form-->
        <form action="update_profile.php" method="post" onsubmit="check_confirm()">
        <?php    echo"
            <label for='name'>Username:</label>
            <input type='text' id='name' name='name' value='".$result['name']."'>
            <label for='email'>Email:</label>
            <input type='text' id='email' name='email' value='".$result['email']."'><br>
            <label for='npassword'>New Password:</label>
            <input type='password' id='npassword' name='npassword'><br>
            <label for='cpassword'>Confirm New Password:</label>
            <input type='password' id='cpassword' name='cpassword'><br>
            <label for='programme'>Programme:</label>
            <input type='text' id='programme' name='programme' value='".$result['programme']."'>
            <label for='code'>ID - Code:</label>
            <input type='text' id='code' name='code' value='".$result['code']."'>
            <label for='about'>About</label>
            <input type='textarea' id='about' name='about' value='".$result['about']."'><br><br>

            <label for='cpassword'>Enter Password To Confirm:</label>
            <input type='password' id='password' name='password' required><br>
        "?>
            <button type="submit" onclick="return confirm('Confirm update profile?')">Update Profile</button>
        </form>
    
        <a href="../logout.php"><button>Logout</button></a>
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