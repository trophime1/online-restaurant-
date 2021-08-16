<?php
include('db_connect.php');
$recov='';
if(isset($_POST['submit'])){
$recov=$_POST['recovery'];
$sql = "SELECT * FROM user where email=\"$recov\" ";
$result = $conn->query($sql) or trigger_error($conn->error);
if (mysqli_num_rows($result) > 0)
{
header('location:set.php?email='.$recov);
}
else
{
	$errors="the email is invalid!!";
}
}
?>


<!doctype html>
<html>
<head>
	 <script type="text/javascript">
		function  message(){
			alert("Check your Email then Login again");
		}
	</script> 
<meta charset="utf-8">
	
<title>Recovery your password</title>
	<link rel="stylesheet" href="main.css">
</head>

<body> 
	<center>
	
	<form method="post" action="recovery.php">
		<div class="rec">
<input type="text" placeholder="Enter your email to recover" name="recovery" required>
		
			</div><div class="re">
	<button  name="submit">Recovery</button>
		
		</div>
		<p style="color:red;"><?php echo $errors??"" ?>  </P>
	</form>
		
		</center>
</body>
</html>
