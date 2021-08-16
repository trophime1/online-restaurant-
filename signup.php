<?php
	include('db_connect.php');


$error='';
	$full='';
	$email='';
	$phone='';
$user='';
if(isset($_POST['submit'])){
	
	$full=$_POST['names'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $user=$_POST['username'];
	$gender=$_POST['gender'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
$qer="SELECT * FROM user where email=\"$email\" OR username=\"$user\"";
$result=mysqli_query($conn,$qer);
if (mysqli_num_rows($result) > 0) {
  $message="the username or email already exist";
} 
else
{ 

	

	$query = "INSERT INTO user( fullname,username,email,phone,password,gender)
	VALUES ('$full','$user','$email','$phone','$password','$gender')";

	
	$result=mysqli_query($conn, $query);

	if($result)	{
    if ($password != $confirm)
	{
		$error = 'password not match';
	}
  else{
		header('location:login.php');
	}
	
  	
	
}
else
	{
    echo 'query error: '. mysqli_error($conn);
	}
}
}

?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
	  <script type="text/javascript">
	  function get()
		  {
			  alert("you have signed up use your email and password to log in to our Restaurants");
			  
		  }
	  </script>
    <meta charset="UTF-8">
    -<title>  Registration Form  </title>-
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <p style="color:red;"><?php echo $message??""?></p>
    <div class="title">Registration</div>
    <div class="content">
      <form method="post" action="signup.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="names" value="<?php $full ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" value="<?php $user ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" value="<?php $email?>" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone" value="<?php $phone; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="confirm" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" name="female" id="dot-1" value="m">
          <input type="radio" name="gender" name="male" id="dot-2" value="f">
          <input type="radio" name="gender" name="not" id="dot-3" value="n">
			<p style="color:red"><?php  
			  echo $error??""?> </p>
          <span class="gender-title">Gender</span>
			 
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
		 
        <div class="but">
			<button  name="submit" >Register</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
