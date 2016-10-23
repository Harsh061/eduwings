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

 <div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header">Our Tutors</h1>
    </section>
  </div>
</div>
<div class="about_content">
  <div class="container">
    <div id="team" name="team">
      <div class="responsive">
  <div class="img">
    <a target="_blank" href="images/team/harsh.png">
      <img src="images/team/harsh.png" alt="lnmhacks" width="600" height="400">
    </a>
    <div class="desc"><a href="https://in.linkedin.com/pub/harshit-parikh/95/540/4a6">Harshit Parikh</a></div>
  </div>
</div>


<div class="responsive">
  <div class="img">
     <a target="_blank" href="images/team/team.png">
      <img src="images/team/team.png" alt="lnmhacks" width="600" height="400">
    </a>
    <div class="desc">Suraj Hinduja</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
     <a target="_blank" href="images/team/team.png">
      <img src="images/team/team.png" alt="lnmhacks" width="600" height="400">
    </a>
    <div class="desc"><a href="https://www.linkedin.com/in/tushar-rakhecha-3830b1127">Tushar Rakhecha</a></div>
  </div>
</div>

<div class="clearfix"></div>

    </div>

  </div>
</div>



<?php

  include('php/footer.php')

?>