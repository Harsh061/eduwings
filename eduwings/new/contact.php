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
      <h1 class="title-header">Contact Us</h1>
    </section>
  </div>
</div>
<div class="contact">
  <div class="container">
    <div class="row contact_top">
      <div class="col-md-4 contact_details">
        <h5>Address:</h5>
        <div class="contact_address">ACEIT, Jaipur, India</div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Call us:</h5>
        <div class="contact_address"> +91 7792963141<br>
        </div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Email us:</h5>
        <div class="contact_mail"> parakhharshit@gmail.com</div>
      </div>
    </div>
    <div class="contact_bottom">
      <h3>Contact Form</h3>
      <p>For any queries don't hesitate to contact us.</p>
      <form method="post" action="contact_post.php">
        <div class="contact-to">
          <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" name="name">
          <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left: 10px" name="email">
          <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left: 10px" name="subject">
        </div>
        <div class="text2">
          <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" name="message">Message..</textarea>
        </div>
        <div> <input type="submit" name="submit" value="Send"> </div>
      </form>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <p> We would love to hear your valuable feedback.</p>
  <h1><a href="https://goo.gl/forms/JU95QFJxw7BIdDRs2">Feedback</a></h1>
</div>
<div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="https://www.facebook.com/Eduwings-1235426039849169"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2016 Eduwings. Design by <a href="#" rel="nofollow">CodeMonks</a></p>
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider.js"></script>
</body>
</html>
