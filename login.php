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
  //read from database
  $query = "select * from sign_up where student_email = '$student_email' limit 1";

  $result = mysqli_query($con, $query);

  if($result)
  {
    if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
    
        }

  }

}else
{

}

}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
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
            <label for="chk" aria-hidden="true">Log in</label>
            <input type="email" name="student_email" placeholder="Email" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="Signup">Log in</button>
            <div class="error-message"> 
            <a href="signup.php">Sign in</a>
          </form>
        </div>
  
    </div>
  </body>
  </html>

    
     