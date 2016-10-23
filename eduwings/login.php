<!DOCTYPE html>
<html class="full" lang="en">
<head>
<meta charset="utf-8">
<title>EduWings</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='assets/css/font.css' rel='stylesheet' type='text/css'>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" >
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


<?php

	include("php/config.php");
  error_reporting(0);
    $uname=" ";
  $email = mysql_real_escape_string($_POST["email"]);
  $password = mysql_real_escape_string($_POST["password"]);
  $role = mysql_real_escape_string($_POST["role"]);

  session_start();          
  $_SESSION["name_3"] = $_POST["email"];

  if(isset($_SESSION["name_3"]))
  {

  if($email && $password)
  {
    $query = mysql_query("SELECT * FROM $role WHERE email='$email'");
    $numrows = mysql_num_rows($query);
    if($numrows!=0)
    {
      while($row = mysql_fetch_assoc($query))
      {
        $dbemail = $row['email'];
        $dbpassword = $row['password'];
      }
      if($email==$dbemail && $password==$dbpassword)
      {
        $uname=" ";         
        header("Location: new/index.php");   
        }
      else
      {
        die("<br><br><br><br><br><br><br><br><center>Incorrect Username or Password. <br><a href='signin.php' >Click </a> to go back </center>");
        header("Location: signin.php");     
        exit;
    
      } 
    }
    else
      die("<br><br><br><br><br><br><br><br><center>The user doesn't exist. <br><a href='signin.php'>Click </a> to go back </center>");
    }
  else
    echo ("error");
  }
  else
    header("Location: ../index.php");

  ?>

<!-- Javascript --> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>