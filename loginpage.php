<!DOCTYPE html>
<html lang="en" class="loading">
<head>
  <meta charset="UTF-8">
  <title>EDU TECH</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<link rel="stylesheet" type="text/css" href="./login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
</head>
<body>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>
			
			<!-- Login Form -->
			<form id="login" class="input-group" action="login.php" method="post">
				<div class="inp">
					<img src="images/icon/user.png">
          <input type="text" id="email" name="username" class="input-field" placeholder="Username " style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="images/icon/password.png">
          <input type="password" id="Password" class="input-field" name="password" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<br>
        <br>
				<button type="submit" class="submit-btn">Log In</button>
				
        <br>
       <center> <?php if (isset($_GET['error'])) { ?>   <p class="error"> <?php echo $_GET['error']; ?></p> <?php } ?> </center>
			</form>



			
			<!-- Registration Form -->
			<form id="register" class="input-group" method="post" action="registration.php">
        
			    <input type="text" class="input-field" placeholder="Your Name"  name="name" required="required">
				<input type="text" class="input-field" placeholder="Username"  name="username" required="required">
				<input type="email" class="input-field" placeholder="Email Address"  name="email" required="required">
				<input type="password" class="input-field" placeholder="Create Password" name="password" required="required">
				<input type="password" class="input-field" placeholder="Re-enter Password" name="repassword"  required="required">
        		<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()" required="required">I agree to the <a class="tnc" href="https://www.termsandconditionsgenerator.com/live.php?token=Zq8sbI7UZWPLAlrip5i94bH0jfWMirSY">Terms & Conditions </a>
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn" name="reg_user">Register</button>
        <br>
      </form>
     
		<script type="text/javascript" src="js/login.js"></script>
</body>
</html>

