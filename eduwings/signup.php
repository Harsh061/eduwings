<!DOCTYPE html>
<html class="full" lang="en">
<head>
<meta charset="utf-8">
<title>Eduwings</title>
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
	$submit = $_POST['submit'];
		// Form Data

		$name = strip_tags($_POST['name']);
		$email = strip_tags($_POST['email']);
		$password = strip_tags($_POST['password']);
		$year = strip_tags($_POST['year']);
		$branch = strip_tags($_POST['branch']);
		$number = strip_tags($_POST['number']);
		$college = strip_tags($_POST['college']);

	session_start();
	$_SESSION["name_3"] = $_POST["email"];
	
	if(isset($_SESSION["name_3"]))
	{
			
		
	if($submit)
	{
		//open database
		
		$emailcheck = mysql_query("SELECT email FROM user WHERE email='$email'");
		$counter = mysql_num_rows($emailcheck);	
		
		 if($counter!=0)
		{
			echo ("<br><br><br><br><br><br><br><br><center>Email id already registered. <a href='index.php'>Click</a> to go back to signup page.</center>");
		}
		// Existence Check
		else if($name && $email && $year && $branch && $number)
		{				//Insert in Database
					$queryreg = mysql_query ("INSERT INTO user VALUES('','$name','$email','$password','$year','$branch','$number','$college')");
					header("Location: new/index.php");
    				
		}
		else
			echo("Please fill all the details");
			echo("<a href='index.php'>Click</a> to go back");
	}	
	else
		
		echo("<br><br><br><br><br><br><br><br><center><a href='index.php'><input type='button' action='index.php' name='submit' value='Signup' id='button'></a>
		</center>");
	}
	else
		header("Location: index.php");

?>
<!-- Javascript --> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>