<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'edutech');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['repassword']);
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); header("Location:loginpage.php?error=Input is required !");}
  if (empty($username)) { array_push($errors, "Username is required"); header("Location:loginpage.php?error=Input is required !");}
  if (empty($email)) { array_push($errors, "Email is required"); header("Location:loginpage.php?error=Input is required !"); }
  if (empty($password)) { array_push($errors, "Password is required");header("Location:loginpage.php?error= Input is required!"); }
  if ($password != $password2) {
	array_push($errors, "The two passwords do not match");
    header("Location:loginpage.php?error=Password not matched !");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM education WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
      header("Location:loginpage.php?error=Username already exists!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
      header("Location:loginpage.php?error=email already exists !");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $ip = $_SERVER['REMOTE_ADDR']; 
  	$query = "INSERT INTO education (Name,username, email, password,ip) 
  			  VALUES('$name','$username', '$email', '$password','$ip')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    
  	header("Location:loginpage.php");
  }
}
