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
<div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>Come be a part of emerging community.</h1>
      <p>Eduwings is all about connecting with people, sharing knowledge, experience and thoughts.</p>
      <a class="banner_btn" href="about.html">Read More</a> </div>
  </div>
</div>
<div class="main">
<div class="content_white">
  <h2>Featured Services</h2>
  <p>Give us a try.</p>
</div>
<div class="featured_content" id="feature">
  <div class="container">
    <div class="row text-center">
      <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-book fa-3x"></i>
        <h3 class="m_1"><a href="../tutor/index.php">Subjects</a></h3>
        <p class="m_2">We are not as good as our teachers but we can help you when they are not available. We will try to clear all your doubts related to the subjects.</p>
      </div>
      <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-laptop fa-3x"></i>
        <h3 class="m_1"><a href="https://eduwingsblog.wordpress.com/" target="blank">Technology Blogs</a></h3>
        <p class="m_2"><b>Sharing is caring.</b> We will let you get updated with the latest trends and technologies.</p>
      </div>
      <div class="col-md-3 col-xs-3 feature_grid1"> <i class="fa fa-check-square-o fa-3x"></i>
        <h3 class="m_1"><a href="meetup.php">Meetups</a></h3>
        <p class="m_2">With the motive of growing our network we will have weekly intra-college meetups and monthly inter-college meetups.</p>
      </div>
      <div class="col-md-3 col-xs-3 feature_grid2"> <i class="fa fa-globe fa-3x"></i>
        <h3 class="m_1"><a href="#">Monthly Events</a></h3>
        <p class="m_2">We will be conducting events every month. This will be a platform to prove your skills and showcase all your talents to others.</p>
      </div>
    </div>
  </div>
</div>
<div class="about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="block-heading-two">
          <h2><span>About Us</span></h2>
        </div>
        <p>EduWings is all about connecting with people, sharing knowledge, experience and thoughts.
          We cater to the learning needs of Engineering Students.
          Come and join with us
        <a class="banner_btn" href="about.php">Read More</a> </div>
      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>Upcoming Events</span></h3>
        </div>
        <div class="panel-group" id="accordion-alt3">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> <i class="fa fa-angle-right"></i> Coding Contest</a> </h4>
            </div>
            <div id="collapseOne-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Real time programming problems</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3"> <i class="fa fa-angle-right"></i> Web Design Contest</a> </h4>
            </div>
            <div id="collapseTwo-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Website designing contest</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3"> <i class="fa fa-angle-right"></i> Hackathon</a> </h4>
            </div>
            <div id="collapseThree-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Different track hackathons</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3"> <i class="fa fa-angle-right"></i> Monthly meetups</a> </a> </h4>
            </div>
            <div id="collapseFour-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>At CCD.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

  include('php/footer.php')

?>