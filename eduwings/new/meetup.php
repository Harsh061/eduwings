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
      <h1 class="title-header">Gallery</h1>
    </section>
  </div>
</div>
<div class="about_content">
  <div class="container">
    <div id="team" name="team">
  
    <div class="responsive">
      <div class="img">
        <a target="_blank" href="images/lnm1.jpg">
          <img src="images/lnm1.jpg" alt="lnmhacks" width="600" height="400">
        </a>
        <div class="desc">Hackathons</div>
      </div>
    </div>

    <div class="responsive">
      <div class="img">
        <a target="_blank" href="images/hack2.jpg">
          <img src="images/hack2.jpg" alt="hackathon" width="600" height="400">
        </a>
        <div class="desc">Swags and Goodies</div>
      </div>
    </div>

    <div class="responsive">
      <div class="img">
        <a target="_blank" href="images/meetup.jpg">
          <img src="images/meetup.jpg" alt="meetups" width="600" height="400">
        </a>
        <div class="desc">Meetups</div>
      </div>
    </div>

    <div class="responsive">
      <div class="img">
        <a target="_blank" href="images/code.jpg">
          <img src="images/code.jpg" alt="contest" width="600" height="400">
        </a>
        <div class="desc">Coding Contest</div>
      </div>
    </div>

    <div class="responsive">
      <div class="img">
        <a target="_blank" href="images/hack1.jpg">
          <img src="images/hack1.jpg" alt="hackathon" width="600" height="400">
        </a>
        <div class="desc">IndiaHacks Conference</div>
      </div>
    </div>

    <div class="responsive">
      <div class="img">
        <a target="_blank" href="images/lnm.jpg">
          <img src="images/lnm.jpg" alt="lnmhacks" width="600" height="400">
        </a>
        <div class="desc">LNM Hacks</div>
      </div>
    </div>


    <div class="responsive">
      <div class="img">
        <a target="_blank" href="images/hack3.jpg">
          <img src="images/hack3.jpg" alt="hackathon" width="600" height="400">
        </a>
        <div class="desc">Awards and Recognition</div>
      </div>
    </div>

    <div class="responsive">
      <div class="img">
        <a target="_blank" href="images/hack4.jpg">
          <img src="images/hack4.jpg" alt="hackathon" width="600" height="400">
        </a>
        <div class="desc">Tech Talks</div>
      </div>
    </div>


<div class="clearfix"></div>

    </div>

  </div>
</div>

<?php

  include('php/footer.php')

?>