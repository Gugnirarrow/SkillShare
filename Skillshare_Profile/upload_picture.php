<?php
session_start();
require "../connection.php";
$id=$_SESSION['email'];
$target_dir = "../Profile_Pictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

  if($check !== false) {
    echo "
        <script>
            alert('File is an image'".$check["mime"].".');
            window.location.href='index.php';
        </script>
    ";
    $uploadOk = 1;
  } else {
    echo "
        <script>
            alert('File is NOT an image');
            window.location.href='index.php';
        </script>
    ";
    $uploadOk = 0;
  }
}

//Check file size
if($_FILES["fileToUpload"]["size"] > 500000){
    echo "
        <script>
            alert('Sorry file is too large');
            window.location.href='index.php';
        </script>
    ";
    $uploadOk=0;
}

//Check file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "
        <script>
            alert('Sorry, only JPG, PNG, JPEG and GIF file are allowed.');
            window.location.href='index.php';
        </script>
    ";
    $uploadOk=0;
}

//Check if $uploadOk is set to 0
if ($uploadOk == 0) {
  echo "
        <script>
            alert('Sorry, your file was not uploaded');
            window.location.href='index.php';
        </script>
    ";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $query = "update accounts set profilePicture='$target_file' where email='$id'";
    mysqli_query($conn,$query);
    header("Location: index.php");
  } else {
    echo "
        <script>
            alert('Sorry, there was an error uploading your file.');
            window.location.href='index.php';
        </script>
    ";
  }
}
?>