<!DOCTYPE html>
<html class="full" lang="en">
<head>
<meta charset="utf-8">
<title>Eduignitor</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='../../assets/css/font.css' rel='stylesheet' type='text/css'>
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" >
<link href="../../assets/css/font-awesome.min.css" rel="stylesheet">
<link href="../../assets/css/animate.min.css" rel="stylesheet">
<link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php
    $submit = $_POST['submit'];
        // Form Data

        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $subject = strip_tags($_POST['subject']);
        $number = strip_tags($_POST['number']);
        $message = strip_tags($_POST['message']);

    if($submit)
    {
        //open database
        $connect = mysql_connect("localhost","root","Harsh@061") or die("Couldn't connect");
        mysql_select_db("users") or die("Couldn't connect");
        $queryreg = mysql_query ("INSERT INTO request VALUES('','$name','$email','$subject','$number','$message','')");
        echo("<div id='preloader'>
  <div id='status'> <img src='assets/img/preloader.gif' height='64' width='64' alt=''> </div>
</div>

<div class='coming-soon'>
  <div class='container'>
    <div class='row'>
      <div class='span12'>
        <div class='logo'> <i class='fa fa-location-arrow'></i>Eduignitor</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class='container' style='margin-top:-100px'>
  <div class='row'>
    <div class='span12 subscribe'>
      <h3 class='animated fadeInDown'>Your Request has been accepted.We will contact you soon. !!</h3>
      <form class='form-inline animated fadeInDown' method='post' action='tutor/index.html'>
        <a href='../index.html'><input type='button'action='../index.html' name='submit' value='Proceed' id='button'></a>
        
    </form>
    
   </div>
  </div>

  <div class='span12'>
    <div class='copyright social animated fadeInDown'>Copyright &copy; 2016 Eduignitor | Designed by <a href='#' rel='nofollow'>Ignitors</a></div>
  </div></div>
</div>");
         }
    else
        echo("Please fill all the details");
?>

<!-- Javascript --> 
<script src="../../assets/js/jquery-1.10.2.min.js"></script> 
<script src="../../assets/js/bootstrap.min.js"></script> 
<script src="../../assets/js/jquery.countdown.js"></script> 
<script src="../../assets/js/custom.js"></script>

</body>
</html>
