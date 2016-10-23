
<?php
  session_start();
  if(isset($_SESSION["name_3"]))
  {
    include('php/header.php');
  }
  else
  {
    header("Location: ../index.php");
  }

?>

<!-- ==== HEADERWRAP ==== -->
<div id="headerwrap" name="home">
  <header class="clearfix">
    <h1>Clear all your doubts.</h1>
    <p>For CS & I.T. students.</p>
</div>
<!-- /headerwrap --> 

<!-- ==== ABOUT ==== -->
<div id="about" name="about">
  <div class="container">
    <div class="row white">
      <div class="col-md-6"> <img class="img-responsive" src="assets/img/about/about1.jpg" align=""> </div>
      <div class="col-md-6">
        <h3>Our Motive</h3>
        <p>As it is well said that <b>"Your Knowledge increases if you share it".</b></br>So, this is just our small initiative to get in touch with you.
          Through this we will also get a chance to learn something new from you and update our knowledge.</p>
        <h3>Why choose us?</h3>
        <p>We are not as good as our teachers. But when they are not available we can help you out. You can also get reference notes from us. Give us a try.</p>
        <h3>How we work?</h3>
        <p>We will recieve your request and respond to it within 3-4 hrs via email.So stay connected. Anyone of us will be there to help you out asap.</p>
      </div>
    </div>
  </div>
</div>

<!-- ==== SERVICES ==== -->
<div id="services" name="services">
  <div class="container">
    <div class="row">
      <h2 class="centered">Our Subjects</h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2">
        <p class="large">We will try to give our best to resolve all your problems.</p>
      </div>
      <br>
      <div class="col-lg-3 callout"> <a href="#query" class="smoothScroll"><i class="fa fa-book fa-3x"></i>
        <h3>FOC</h3></a>
      </div>
      <div class="col-lg-3 callout"> <a href="#query" class="smoothScroll"><i class="fa fa-book fa-3x"></i>
        <h3>OOPS</h3></a>
      </div>
     <div class="col-lg-3 callout"> <a href="#query" class="smoothScroll"><i class="fa fa-book fa-3x"></i>
        <h3>DSA</h3></a>
      </div>
      <div class="col-lg-3 callout"> <a href="#query" class="smoothScroll"><i class="fa fa-book  fa-3x"></i>
        <h3>DBMS</br></br></br></h3></a>
      </div>
    </div>
      
    <div class="row">
      <hr>
        <h2 class="centered">Other Technologies</h2>
        <hr>
        <div class="col-lg-3 callout"> 
        </div>
        <div class="col-lg-3 callout"> <i class="fa fa-code fa-3x"></i>
        <h3>Web Development.</h3>
        <p>HTML, CSS, php, MySQL.</p>
      </div>
      <div class="col-lg-3 callout"> <i class="fa fa-coffee  fa-3x"></i>
        <h3>Core Java</h3>
        <p>JAVA Fundamentals.</p>
      </div>
      </div>
  </div>
</div>

 
<div id="query" name="query">
  <div class="container">
    <div class="row">
      <h2 class="centered">Submit your queries here : </h2>
      <center><a href="https://goo.gl/forms/o0gixYS8Niz80zGN2">
        <br>
      <button class="btn btn-primary btn-lg">Queries ?</button></a></center><br><br>
    </div>
  </div>  
</div>




<center>
<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"><span class="copyright"><center>Copyright &copy; 2016 Eduwings | Designed by <a href="#" rel="nofollow">CodeMonks</a></center></span></center></div>
    </div>
  </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/retina.js"></script> 
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
<script type="text/javascript" src="assets/js/jquery-func.js"></script>
</body>
</html>
