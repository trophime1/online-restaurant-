<?php
$restaurant = $_GET['restaurant'];
echo $restaurant;
 if(isset($_POST['submit']))
 {
   $plate=$_POST['plate'];
   $ptrn= 1000 * $plate;
  
   header('location:payment.php?plate='.$ptrn);
 }
?>S

<!DOCTYPE html>
<html>
<head>
	
	<style>
		body
		{
	background-image: url("menu2.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		
	</style>
	<meta charset="utf-8">
	 <link rel="shortcut icon" href="bk.png">
	<title>Request</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<b><section>
		<div class="container">
			<div class="nav">
				<div class="navbar">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="tr1.php">Restaurant</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">Contact us</a></li>
						<li><a href="cart.php">Cart<span>0</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<center class="make"><b>Make your choice for free Delivery!!</b></center>
	</section>
		<p> Choose on our Menu</p>
		<div class="we">
		<form method="post">
			
	
		
		<div class="col">
	<div class="chec">
	<div class="tarif">
	<h4> FOOD TARIF</h4></div>
	<section>
		<div class="table">
			<div class="th">
			
				<div class="td">				
	<table><b>
  <tr>
    <th>Items</th>
	  <th>Unity price</th>
	  
	  <th>Quantity</th>
  </tr>
  <tr>
    <td><input type="checkbox" >Plate</td>
    <td>1000 frw</td> 
	  <td><input type="number" name="plate"></td>
  </tr>
  <tr>
    <td><input type="checkbox" >Plate+meat</td>
    <td>1300 rwf</td> 
	  <td><input type="number"></td>
  </tr>
		 
  <tr>
    <td><input type="checkbox" >Chiken</td>
    <td>10000 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox" >Plate+meat</td>
    <td>1300 rwf</td> 
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td><input type="checkbox" > Full Pizza</td>
    <td>5000 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox" >1/4 Pizza </td>
    <td>1500 rwf</td> 
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td><input type="checkbox" >Omelet special+meat</td>
    <td>1500 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">Omelete special</td>
    <td>1200 rwf</td> 
	  <td><input type="number"></td>
  </tr>
		 <tr>
    <td><input type="checkbox">Fish</td>
    <td>6000 rwf</td>
			 <td><input type="number"></td>
  </tr>
		</b></table>	
	</div>
			</div>
		</div>
	
			
	</section>
	<div class="tarif1">
	<h4> SOFT DRINKS TARIF</h4></div>
	<section>
		<div class="table1">
			<div class="th1">
			
				<div class="td1">				
	<table>
  <tr>
    <th>Items</th>
	  <th>Unity price</th>
	  <th>Quantity</th>
  </tr>
  <tr>
    <td><input type="checkbox">Yogurt</td>
    <td>400 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">energy soft drink</td>
    <td>500 rwf</td> 
	  <td><input type="number"></td>
  </tr>
		 
  <tr>
    <td> <input type="checkbox">inyange juice </td>
    <td>800 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td> <input type="checkbox">Vanila soft drink</td>
    <td>700 rwf</td> 
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td> <input type="checkbox">Fanta</td>
    <td>700 frw</td>
	  <td><input type="number"></td>
  </tr>
		<tr>
    <td> <input type="checkbox"> Pt-Fanta</td>
    <td>500frw</td>
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">mango juice </td>
    <td>500 rwf</td>
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td><input type="checkbox">Milk shake</td>
    <td>1000 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">Vanila shake</td>
    <td>700 rwf</td>
	  <td><input type="number"></td>
  </tr>
</table>	
	</div>
			</div>
		</div>
	
			
	</section>
	<div class="tarif2">
	<h4> Beverage Beer Tarif</h4></div>
	<section>
		<div class="table2">
			<div class="th2">
			
				<div class="td2">				
	<table>
  <tr>
    <th>Items</th>
	  <th>Unity price</th>
	  <th>Quantity</th>
  </tr>
  <tr>
    <td><input type="checkbox">Mitziing</td>
    <td>1100 frw</td> 
	  <td><input type="number"></td>
  </tr>
		<tr> <td><input type="checkbox"> Pt-Mitziing</td>
    <td>600 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">Primus</td>
    <td>1000 rwf</td>
	  <td><input type="number"></td>
  </tr>
		 <tr>
    <td><input type="checkbox">Primus moy</td>
    <td>700 rwf</td>
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td><input type="checkbox"> Amstel </td>
    <td>800 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox"> Heineken</td>
    <td>1000 rwf</td>
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td><input type="checkbox"> Legend </td>
    <td>800 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">Skol Gatanu </td>
    <td>1000 rwf</td> 
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td><input type="checkbox">virunga</td>
    <td>1200 frw</td>
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">skol Malt</td>
    <td>1000 rwf</td> 
	  <td><input type="number"></td>
  </tr>
		<tr>
    <td><input type="checkbox">Urwagwa </td>
    <td>2000rwf</td>
			<td><input type="number"></td>
  </tr> 
 
  <tr>
    <td><input type="checkbox">Umunanasi</td>
    <td>1000 rwf</td>
	  <td><input type="number"></td>
  </tr>
</table>	
	</div>
			</div>
		</div>
	
			
	</section>
	<div class="tarif3">
	<h4> liquor Tarif</h4></div>
	<section>
		<div class="table3">
			<div class="th3">
			
				<div class="td3">				
	<table>
  <tr>
    <th>Items</th>
	  <th>Unity price</th>
	  <th>Quantity</th>
  </tr>
  <tr>
    <td><input type="checkbox">Absolute vodoka</td>
    <td>28000 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">leaf</td>
    <td>8000 rwf</td> 
	  <td><input type="number"></td>
  </tr>
		 
  <tr>
    <td> <input type="checkbox">7 cousin </td>
    <td>8000 frw</td> 
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td> <input type="checkbox">JB</td>
    <td>12000 rwf</td> 
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td> <input type="checkbox">Bond 7 half </td>
    <td>4000 frw</td>
	  <td><input type="number"></td>
  </tr>
		<tr>
    <td> <input type="checkbox">Bond 7 </td>
    <td>7500 frw</td>
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">Konyagi </td>
    <td>7000rwf</td> 
	  <td><input type="number"></td>
  </tr> 
		<tr>
    <td><input type="checkbox">Konyagi half </td>
    <td>4500 rwf</td> 
	  <td><input type="number"></td>
  </tr> 
		<tr>
    <td><input type="checkbox">Konyagi min </td>
    <td>2500 rwf</td> 
	  <td><input type="number"></td>
  </tr> 
  <tr>
    <td><input type="checkbox">bazooka</td>
    <td>8000 frw</td>
	  <td><input type="number"></td>
  </tr>
  <tr>
    <td><input type="checkbox">boss wisky</td>
    <td>7000 rwf</td> 
	  <td><input type="number"></td>
  </tr>
		<tr>
    <td><input type="checkbox">ciloc </td>
    <td>30000 rwf</td>
			<td><input type="number"></td>
  </tr> 
 
</table>
	</div>
			</div>
		</div>
		<div class="back">
    <input type="submit" name="submit" value="request">
  </form>
		</div>	
	</section>
	</div>	
		</div></b>
</body>
	<script>
function checkme(){
	var s= document.getElementById("ab");
if(ab.checked==true)
{
	

}
}
</script>
</html>