<?php
  session_start();
  if(isset($_SESSION["name_3"]))
  {
    include("config.php");
    include('php/header.php');
  }
  else
  {
    header("Location: ../index.php");
  }

?>

<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header">Our  Services</h1>
    </section>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4 service_box"><a href="../tutor/index.php"><i class="fa fa-user fa-5x pull-left"></i></a>
      <h2><a href="../tutor/index.php">On demand tutor</a></h2>
      <p></p>
    </div>
    <div class="col-md-4 service_box"><a href="#"><i class="fa fa-laptop fa-5x pull-left"></i></a>
      <h2><a href="https://eduwingsblog.wordpress.com/">Blogs</a></h2>
      <p></p>
    </div>
    <div class="col-md-4 service_box"><a href="#"><i class="fa fa-users fa-5x pull-left"></i></a>
      <h2><a href="team.php">Quality Tutors</a></h2>
      <p></p>
    </div>
    <div class="col-md-4 service_box"><a href="../tutor/index.php"><i class="fa fa-user fa-5x pull-left"></i></a>
      <h2><a href="#">Feature</a></h2>
      <p></p>
    </div>
    <div class="col-md-4 service_box"><a href="#"><i class="fa fa-laptop fa-5x pull-left"></i></a>
      <h2><a href="#">Feature</a></h2>
      <p></p>
    </div>
    <div class="col-md-4 service_box"><a href="#"><i class="fa fa-users fa-5x pull-left"></i></a>
      <h2><a href="#">Feature</a></h2>
      <p></p>
    </div>

  </div>
</div>

<?php

  include('php/footer.php')

?>