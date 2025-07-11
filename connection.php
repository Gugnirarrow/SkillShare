<?php

$db_server = "localhost";
$db_name = "skillshare";
$db_user = "root";
$db_pass = "";
$db_port = "3306";

$conn = new mysqli($db_server,$db_user,$db_pass,$db_name);

if(!$conn)
    die("Connection failed");
?>