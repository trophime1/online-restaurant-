
<?php
 include('db_connect.php');


?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="download1.png">
	<title> Restourants</title>
<style>
	.column {
  float: left;
  width: 25%;
  padding: 0 10px;
	color:#774142;
}
	.b 
	{
		margin-top: 30%;
	}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
 
	  margin-top: 100%;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
	
}
body
	{
		background-image: url("unnamed.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		
	}
	.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}


.dropbtn1 {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn1:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: block;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown1 a:hover {background-color: #ddd;}
.dropbtn2 {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn2:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: block;
}

.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown2 a:hover {background-color: #ddd;}
.dropbtn3 {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn3:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: block;
}

.dropdown-content3 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content3 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown3 a:hover {background-color: #ddd;}
.dropbtn4 {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn4:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: block;
}

.dropdown-content4 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content4 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown4 a:hover {background-color: #ddd;}
 

.show {display: block;}
	.hasii
	{
	margin-top: 60px;	
	}
</style>
	<link rel="stylesheet" type="text/css" href="main.css">
<!--
	<script>
	function log()
		{
			alert("are you sure you wont to log out");
			
			}
	</script>
-->
</head>
<body>
	<section>
		<div class="container">
			<div class="nav">
				<div class="navbar">
					<ul>
						<li><a href="home.php">Home</a></li>
						
						<li><a href="about.php">About us</a></li>
<!--						<li><a href="contact.php">Contact us</a></li>-->
						<li><a href="cart.php">Cart<span>0</span></a></li>
						<li><button ><a href="home.php" onclick="return confirm(are you sure you want to log out?)"`>Log out</a></button></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<div class="hasii">
<h2>Welcome Again Mr/Mrs: <?php
	$email=$_GET['email'];
	echo $email;
	?></h2>
<p>make your choice to our Restourants!!!</p>

<div class="dropdown">
  <button onclick="myFunction1()" class="dropbtn1" name="hap" value="happiness">Happiness</button>
  <div id="myDropdown1" class="dropdown-content1">
    <a href="tarif.php?restaurant=happiness">Request our services</a>
    <a href="#about">About</a>
    <a href="hcontact.php">Contact</a>
  </div>
	<button onclick="myFunction2()" class="dropbtn2" name="am" value="amoris">Amoris</button>
  <div id="myDropdown2" class="dropdown-content2">
    <a href="tarif.php?restaurant=amoris">Request our services</a>
    <a href="#about">About</a>
    <a href="acontact.php">Contact</a>
  </div>
	<button onclick="myFunction3()" class="dropbtn3" name="um" value="umucyo">Umucyo</button>
  <div id="myDropdown3" class="dropdown-content3">
    <a href="tarif.php?restaurant=umucyo">Request our services</a>
    <a href="#about">About</a>
    <a href="ucontact.php">Contact</a>
  </div>
	<button onclick="myFunction4()" class="dropbtn4" name="moon" value="moonshine">Moonshine</button>
  <div id="myDropdown4" class="dropdown-content4">
    <a href="tarif.php?restaurant=moonshine">request our services</a>
    <a href="#about">About</a>
   <a href="mcontact.php">Contact</a>
  </div>
</div>
	</div>
<div class="container">
 
	</div>
	<div class="b">
	<div class="row">
  <div class="column">
    <div class="card">
      <h3>Amoris Restaurants</h3>
      <p>Location:<br>
	 Huye Campus nearby Barthos hotel</p>
      <p>we have special services for Delivering your issues for free</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Happiness restaurant</h3>
		<p>Location:<br>
	 Huye Campus nearby Viet Hostel</p>
      <p>we have special services for Delivering your issues for free</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Umucyo Restaurant</h3>
      <p>Location:<br>
	 Huye nearby Muslim Mosque (Madina)</p>
      <p>we have special services for Delivering your issues for free</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Moonshine Restaurant</h3>
     <p>Location:<br>
	 Huye Campus nearby Amoris and Barthos hotel</p>
      <p>we have special services for Delivering your issues for free</p>
    </div>
  </div>
</div>
	</div>
<script>
	
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
	
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
	
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {
    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
	
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction4() {
  document.getElementById("myDropdown4").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn4')) {
    var dropdowns = document.getElementsByClassName("dropdown-content4");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
