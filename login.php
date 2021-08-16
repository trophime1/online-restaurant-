<?php

$error = array('logi'=>'','username'=>'','cpassword'=>'','incorrect'=>'');
if(isset($_POST['submit'])){
	
if(empty($_POST['login'])){
	$error['logi']= 'you want to log in as Admin or Client?';
}
  //  $email=$_POST['email'];
	$person=$_POST['login']??"";
	$username=$_POST['email']??"";
	$password=$_POST['password']??"";
   if($person=='Admin'){
	   if($username == 'Admin' && $password == 'happiness@2019'){
		   header('location:dashboard1.php');
	   }
	   else if($username == 'Admin' && $password == 'umucyo@2019'){
		   header('location:dashboard2.php');
}
	    else if($username == 'Admin' && $password == 'amoris@2019'){
		   header('location:dashboard3.php');
}
	    else if($username == 'Admin' && $password == 'moonshine@2019'){
		   header('location:dashboard4.php');
}
else if($username == 'Admin' && $password == 'trophime'){
	header('location:maindash.php');
}
	   else
	   {
		   $error['incorrect']='Password or Username is incorrect';
	   }
	  
    }
    if($person=='client'){
      include('db_connect.php');
	// write query 
	 $sql = "SELECT * FROM user where username=\"$username\" AND  password=\"$password\"";

	// // get the result set (set of rows)
	 $result = mysqli_query($conn,$sql);
	 if (mysqli_num_rows($result) > 0) {
	 	 header('location:resto.php?email='.$username);
	// 	echo "hiii";

		}
	else {
	 	$errors = "Your Username or Password is invalid";
		 }

    //   echo "hii";
    }

	
}
?>
<!doctype html>

<html>
<head>
	<style>
		body {
			background-image: url("GTR.jpg");
			 
			background-repeat: no-repeat;
			background-size: cover;
			
		}
	</style>
<meta charset="utf-8">
	 <link rel="shortcut icon" href="bk.png">
<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
	
	<center>
	<section>
<div class="hasi">
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form method="post" action="login.php">
        <div class="field">
          <input type="text" name="email" required>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" name="password" required>
			
			
          <label>Password</label>
        </div>
		<p style="color:red"><?php echo $errors ??"" ?></p>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="recovery.php">Forgot password?</a></div>
        </div>
		  <div class="op">
			  <input type="radio" name="login" value="Admin"> Admin
			  <input type="radio" name="login" value="client"> Client
			  </div>
		  <p style="color:red"><?php echo $error['logi'] ??"" ?></p>
		  <p style="color:red"><?php echo $error['incorrect'] ??""?></p>
      <p style="color:red"><?php echo $errors['incorrect'] ??""?></p>
        <div class="field">
         <input type="submit" name="submit" value="log in">
        </div>
        <div class="signup-link">Not a member? <a href="signup.php" name="submit">Signup now</a></div>
      </form>
    </div>
		</div>
 
	</section> 
	</center>
</body>
</html>