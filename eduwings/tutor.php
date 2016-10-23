<!DOCTYPE html>
<html class="full" lang="en">
<head>
<meta charset="utf-8">
<title>Eduwings</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="assets/css/font.css" rel='stylesheet' type='text/css'>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" >
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


<?php

	error_reporting(0);
	$submit = $_POST['submit'];
		// Form Data

		$name = strip_tags($_POST['name']);
		$email = strip_tags($_POST['email']);
		$password = strip_tags($_POST['password']);
		$number = strip_tags($_POST['number']);
		$college = strip_tags($_POST['college']);
		$subject = strip_tags($_POST['subject']);

	session_start();
	$_SESSION["name_3"] = $_POST["email"];

	if(isset($_SESSION["name_3"]))
	{
		
	if($submit)
	{
		//open database
		include("php/config.php");
		$emailcheck = mysql_query("SELECT email FROM tutor WHERE email='$email'");
		$counter = mysql_num_rows($emailcheck);	
		
		 if($counter!=0)
		{
			echo ("<br><br><br><br><br><br><br><br><center>Email id already registered. <a href='index.php'>Click</a> to go back to signup page.</center>");
		}
		// Existence Check
		else if($name && $email && $number)
		{				//Insert in Database
					$queryreg = mysql_query ("INSERT INTO tutor VALUES('','$name','$email','$password','$college','$number','$subject')");
						header("Location: new/index.php");
		}
		else
			echo("Please fill all the details");
	}	
	else
		
		echo("<br><br><br><br><br><br><br><br><center><a href='index.html'><input type='button'action='index.php' name='submit' value='Signup' id='button'></a>
		</center>");
	}
	else
		header("Location: index.php");


?>
<!-- Javascript --> 
<script src="assets/js/jquery-1.10.2.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 

</body>
</html>