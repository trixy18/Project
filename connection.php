<?php
$n=$_POST['txt'];
$c=$_POST['email'];
$d=$_POST['pswd'];
$con=mysqli_connect("localhost","root","","Project");
$sql="INSERT INTO Sign_up (student_name,student_email,password) values ('$n','$c','$d')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "WELCOME TO ATTENDANCE TRACKER";
}
else
{
    echo "ERROR";
}
?>