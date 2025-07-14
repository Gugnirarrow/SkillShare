Application was run using XAMPP

If running using XAMPP please store the codes under <xampp installation directory>/htdocs
//Default directory for Windows is C:\xampp\htdocs


Import the skillshare.sql into the MySQL on XAMPP.


When running XAMPP if your MySQL is using besides port 3306 please change in the connection.php file:

<?php

$db_server = "localhost";
$db_name = "skillshare";
$db_user = "root"; //Change if your MySQL is using different authentication
$db_pass = "";    //Change if your MySQL is using different authentication
$db_port = "3306"; //Change this value to match actual port MySQL on XAMPP

$conn = new mysqli($db_server,$db_user,$db_pass,$db_name);

if(!$conn)
    die("Connection failed");
?>
