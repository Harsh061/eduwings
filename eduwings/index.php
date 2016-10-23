<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Eduwings</title>
    <meta name="keywords" content="Eduwings, Educational website,Personal Tutor, Arya College of Engineering & I.T., Harshit Parikh, Harshit Parakh">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
   <!-- <link rel="stylesheet" href="assets/css/normalize.css">  -->  
        <link rel="stylesheet" href="assets/css/style.css">

  </head>

  <body style="background-color: #1ab188">
<br><br>
<center>
 <image src="assets/img/logo.png" style="border-radius:50%" height="200px" width="250px">
</center>
    <div class="form">
      
      <ul class="tab-group">
        
          
		<li class="tab active"><a href="#signup">Student</a></li>
        <li class="tab"><a href="#login">Tutor</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">
		
          <h1>Welcome Student!</h1>
          
          <form action="signup.php" method="post">
          
            <div class="field-wrap">
              <label>
                Full Name<span class="req">*</span>
              </label>
              <input type="text" name="name"required autocomplete="off" />
        
            <div class="field-wrap">
               </div>
          </div>
		  
		   <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
         
		  
			<div class="field-wrap">
				
              
						
              	<select name="year" class="req" class="field-wrap" required>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				</select>
			</div>
		<select name="branch" class="field-wrap" required>
			<option>CS</option>
			<option>IT</option>
		</select>
		
		<div class="field-wrap">
            <label>
              Phone Number<span class="req">*</span>
            </label>
            <input type="text" name="number" pattern="[0-9].{9}" required autocomplete="off"/>
          </div>
		<select name="college" class="field-wrap" required>
			<option>Arya College Of Engineering & I.T.</option>
			<option>LNMIIT</option>
		</select>

          
		
          
          <input type="submit" value="Get Started" name="submit" class="button button-block"/><br>
          <center><a href="signin.php">Login Here</a></center>
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Tutor!</h1>
          
          <form action="tutor.php" method="post">
          
            <div class="field-wrap">
              <label>
                Full Name<span class="req">*</span>
              </label>
              <input type="text" name="name"required autocomplete="off" />
          
            <div class="field-wrap">
               </div>
          </div>
			<div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
        
			
		<select name="college" class="field-wrap" required>
			<option>Arya College Of Engineering & I.T.</option>
			<option>LNMIIT</option>
		</select>

    <select name="subject" class="field-wrap" required>
      <option>Fundamentals of C</option>
      <option>Object Oriented Programming System</option>
      <option>Data Structures and Algorithms</option>
      <option>Database Management Systems</option>
    </select>
    
		<div class="field-wrap">
            <label>
              Phone Number<span class="req">*</span>
            </label>
            <input type="text" name="number" pattern="[0-9].{9}" required autocomplete="off"/>
          </div>
		        
            
          <input type="submit" name="submit" value="Get Started" class="button button-block"/><br>
				<center><a href="signin.php">Login Here</a></center>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="assets/js/index.js"></script>    
  </body>
</html>
