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
  $name = mysql_real_escape_string($_POST["name"]);
  $email = mysql_real_escape_string($_POST["email"]);
  $subject = mysql_real_escape_string($_POST["subject"]);
  $message = mysql_real_escape_string($_POST["message"]);

  session_start();          
  $_SESSION["name_3"] = $_POST["email"];

  if(isset($_SESSION["name_3"]))
  {

  if($email && $message && $name && $subject)
  {
    $queryreg = mysql_query ("INSERT INTO request VALUES('','$name','$email','$subject','$message')");
    header("Location: contact.php");
  }
  else
      echo("Please fill all the details");
      echo("<a href='contact.php'>Click</a> to go back");
  }
  else
    header("Location: ../index.php");

  ?>

<!-- Javascript --> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>