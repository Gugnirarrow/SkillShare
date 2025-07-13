<?php
require "../connection.php";

session_start();
if($_SESSION['session'] != 1)
    header('Location: login.php');

$name      = $_POST['name'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$newpass   = $_POST['npassword'];
$programme = $_POST['programme'];
$code      = $_POST['code'];
$about     = $_POST['about'];
$hash  = $conn->real_escape_string(password_hash($newpass,PASSWORD_DEFAULT));


$sql = "select * from accounts where email like '".$_SESSION['email']."'";
$result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
$check = "select * from accounts where email like '".$email."'";
$count = mysqli_num_rows(mysqli_query($conn,$check));


if($email != $_SESSION['email'] && $count >0){
    echo"
    <script>
        alert('Email is in used by other account');
        window.location.href='index.php'
    </script>
    ";
}
elseif(password_verify($password,$result['password'])){
    //$update = "update accounts set email=:value1,name=:value2,password=:value3,programme=:value4,code=:value5,about:=value6 where email=:value7";
    $update="update accounts set email='$email',name='$name',password='$hash',programme='$programme',code='$code',about='$about' where email ='".$_SESSION['email']."'";
    mysqli_query($conn,$update);
    $_SESSION['email'] = $email;
    echo"
    <script>
        alert('Profile details updated');
        window.location.href='index.php'
    </script>
    ";
}
else{
        echo"
    <script>
        alert('Wrong confirmation password');
        window.location.href='index.php'
    </script>
    ";
}

?>