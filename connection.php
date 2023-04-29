<?php

$host = "localhost";
$student_email = "root";
$password = "";
$dbname = "project";

if(!$con = mysqli_connect($host,$student_email,$password,$dbname))
{
   
   
    die("Failed to connect!");
}
