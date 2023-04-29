<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
//something was posted
$student_email = $_POST['student_email'];
$password = $_POST['password'];

if(!empty($student_email) && !empty($password) && !is_numeric($student_email))
{
  //save to database
  $user_id = random_num(20);
  $query = "insert into sign_up (user_id,student_email,password) values ('$user_id','$student_email','$password')";

  mysqli_query($con, $query);

  header("Location: login.php");
  die;


}else
{
  echo "Please enter some valid information!";

}

}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="sign.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<html>
  <head>
  <style>
    body  {
      background-image: url("https://media.giphy.com/media/Q34Q46x7bUUKJfbn0s/giphy.gif");
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
    </head>
  <html>
  <head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <div class="main">  	
      <input type="checkbox" id="chk" aria-hidden="true">
  
        <div class="signup">
          <form method="POST">
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="email" name="student_email" placeholder="Email" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="Signup">Sign up</button>
            <div class="error-message"> 
            <a href="login.php" class="">Log in</a>
          </form>
        </div>
  
    </div>
  </body>
  </html>

    
     