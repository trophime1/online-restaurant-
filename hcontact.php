<?php 
include("db_connect.php");
$eml='';
$nm='';
$message='';
if(isset($_POST['button'])){
$eml=$_POST['eml']??"";
$nm=$_POST['nm']??"";
$message=$_POST['Message']??"";
}
$query = "INSERT INTO contact( names,email,messages)
	VALUES ('$nm','$eml','$message')";
	$result=mysqli_query($conn, $query);
	
	if (mysqli_num_rows($result) > 0) {
	
	$messages = "Thank you to contact us we will check your message";

}
	else
	{
		$error= 'query error: '. mysqli_error($conn);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="style1.css">
    <!-- <link rel="short icon" type="image/png" href="LOGO.png"> -->
</head>
<body>

<!--
    <div id="bar">
		<div id="home"><a href=""><label>HOME</label></a></div>
		<div id="menu"><a href="menu.html"><label>MENU</label></a></div>
		<div id="order"><a href="order_online.html"><label>ORDER ONLINE</label></a></div>
		<div id="team"><a href="team.html"><label>TEAM</label></a></div>
		<div id="contact" style="color: red; font-family: calibri; font-size: 18pt; text-align: center;"><label>CONTACT US</label></div>
		<div id="sign"><a href="sign_up.html"><label>SIGN UP</label></a></div>
	</div>
-->

	<div id="otherways">
		<img id="logo" src="LOGO.png">

		<div id="ways">
			<h2 id="detail">CONTACT DETAIL</h2>
			<div class="m_icon">
				<i class="fa fa-mobile" aria-hidden="true"></i>  <b> +250 786 866 091</b>
			</div>
			
			<div class="mail_icon">
				<i class="fa fa-envelope" aria-hidden="true"></i> <b> +250 783 360 726</b>
			</div>
			<div class="mail_icon">
				<i class="fa fa-envelope" aria-hidden="true"></i> <b>happiness@gmail.com</b>
			</div>
			<div class="fb_icon" style="font-size: 14pt;">
				<i class="fa fa-facebook-square" aria-hidden="true"></i> <b>www.facebook.com/happinesss restaurant</b>
			</div>
			
			<div class="tw_icon" style="font-size: 16pt;">
				<i class="fa fa-twitter-square" aria-hidden="true"></i> <b> FREE FOOD DELIVERY</b>
			</div>
		</div>
	</div>

	<div class="contact_us">
		<div id="ct_head">Contact Us</div>
		<input id="nm" type="text" name="your name" placeholder="Name">
		<input id="eml" type="email" name="your email" placeholder="Email" >
		<textarea name="Message" cols="5" rows="5" placeholder="Your Message Here" ></textarea>
		<button id="send" name="button">Send</button>
	</div>

    <p style="color=white;"><?php echo ($messages)??"" ?></p>
	<p style="color=white;"><?php echo ($error)??"" ?></p>
</body>
</html>