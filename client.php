<?php
include('db_connect.php');

?>


<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>

  <style>
table {
border-collapse: collapse;
width: 85%;
color: #588c7e;
font-family: Verdana, sans-serif ;
font-size: 15px;
text-align: left;
margin-left: 245px;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>



    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="main1.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bxl-c-plus-plus"></i>
      <span class="logo_name">HAPPINESS</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="client.php" class="active">
            <i class="bx bx-grid-alt" ></i>
            <span class="links_name">Client</span>
          </a>
        </li>
        <li>
          <a href="product.php">
            <i class="bx bx-box" ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="order">
            <i class="bx bx-list-ul" ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>

        <li>
          <a href="stock.php">
            <i class="bx bx-coin-stack" ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>

        <li>
          <a href="message.php">
            <i class="bx bx-message" ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
<
        <li class="log_out">
          <a href="home.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name" onClick="return confirm('Are you sure you want to log out?')">Log out</span>
          </a>
        </li>
      </ul>
  </div>
	


  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
//function get()
//	  {
//		  var a=confirm("are you sure to log out?");
//		  if(a==true){
//			  document.write("log out successful");
//		  }
//		 
//	  }
 </script>

<table>
<tr>
<th>client_Id</th>
<th>full_name</th>
<th>username</th>
<th>email</th>
<th>phone</th>
<th>password</th>
<th>gender</th>
<th>create_at</th>

</tr>
<?php
include('db_connect.php');

$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)  {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["client_id"]. "</td><td>" . $row["fullname"] . "</td><td>"
. $row["username"]. "</td><td>". $row["email"]. "</td><td>" . $row["phone"]. "</td><td>"
. $row["password"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["create_at"]. "</td></tr>"  ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>

