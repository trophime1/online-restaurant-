<?php
include('db_connect.php');

$pass='';
$retype='';
if(isset($_POST['submit']))
{
$email=$_GET['email'];
$pass=$_POST['new'];
$retype=$_POST['type'];
if ($pass != $retype)
        { 
            $error = 'password not match';
           
        }

$sql= "UPDATE user SET password = \"$pass\" WHERE email = \"$email\" ";
$result=mysqli_query($conn,$sql);
if ($result){

           header('location:login.php');
        
}

}

?>
<!doctype html>
<html>
<head>
	 <!-- <script type="text/javascript">
		function  message(){
			alert("Check your Email then Login again");
		}
	</script>  -->
<meta charset="utf-8">
	
<title>Re_new your password</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body> 
<center>
	<section>
<div class="hasi">
    <div class="wrapper">
        <p style="color:red;"><?php echo $error??""?></p>
      <div class="title">new password</div>
      <form method="post" >
        <div class="field">
          <input type="password" name="new" required>
          <label>new_password</label>
        </div>
        <div class="field">
          <input type="password" name="type" required>
			
			
          <label>Re_type password</label>
        </div>
        <div class="field">
         <input type="submit" name="submit" value="change">
         
        </div>

    </body>
    </html>