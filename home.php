<!DOCTYPE html>
<html>
<head>
	<title> Welcome </title>
	<link
	<link rel="stylesheet" type="text/css" href="main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(back2.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  opacity:1;
}
	.c{
		margin-top: 30%;
		
	}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
	color:#774142;
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
	.a{
		margin-top: 80px;
	}
</style>
</head>
	
<body><section>
		<div class="container">
			<div class="nav">
				<div class="navbar">
					<ul>
						<li><a href="home.php">Home</a></li>
						
						<li><a href="about.php">About us</a></li>
<!--						<li><a href="contact.php">Contact us</a></li>-->
						<li><a href="cart.php">Cart<span>0</span></a></li>
						<li><a  href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- <div class="he">
	<h2>WELCOME TO OUR RESTAURANTS MANAGEMENT SYSTEM </h2>
	</div>
	<div class="a">
<div class="row">
  <div class="column1">
    <img src="img1.jpg" width="65%;" height="300px;">
    
	  <div class="column3">
    <img src="img2.jpg" width="65%;" height="300px;">
    
		  </div>
  </div>
  <div class="column2" >
    <div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      june<br>
      <span style="font-size:18px">2021</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li><span class="active">24</span></li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

  </div>
</div>
	</div>
<div class="c">	
<marquee><h2>Responsive Column Cards</h2>
<p>Resize the browser window to see the effect.</p></marquee>
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
	</div> -->

</body>
</html>
