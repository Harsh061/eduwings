<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Eduwings</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="assets/css/normalize.css">    
        <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body style="background-color: #1ab188">
<br><br>
  <center>
 <image src="assets/img/logo.png" height="200px" width="350px">
</center>
	
    <div class="form">
      
      
        <div id="signup">
		
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">	
		  
		
          <div class="field-wrap">
					<label>
						Email Address<span class="req">*</span>
					</label>
					<input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
				<label>
					Password<span class="req">*</span>
				</label>
				<input type="password" name="password" required autocomplete="off"/>
          </div>
          <select name="role" class="field-wrap" required>
			<option>tutor</option>
			<option>user</option>
		</select>
		
          <input type="submit" name="submit" value="Login" class="button button-block"/><br>
           <center><a href="index.php">New User</a></center>
         
		  </form>

        </div>
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="assets/js/index.js"></script>
  </body>
</html>
