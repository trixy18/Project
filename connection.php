<?php

$host = "localhost";
$student_email = "root";
$password = "";
$dbname = "project";

if(!$con = mysqli_connect($host,$student_email,$password,$dbname));
if (!$connection) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
} else {
    echo 'Connection successful!';
}

mysqli_close($connection);
?>


