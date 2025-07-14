<?php
require "../connection.php";
session_start();

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];


$query = "insert into contact (firstName,lastName,email,message) values ('$fname','$lname','$email','$message')";

if(mysqli_query($conn,$query)){
    echo "
    <script>
        alert('Message has been received! Thank You for helping to improve SkillShare');
        window.location.href='./';
    </script>";
}
else{
        echo "
    <script>
        alert('Error in receing message, appreciate if use is able to resend it. We apologise for the inconvenience.');
        window.location.href='./';
    </script>";
}

?>