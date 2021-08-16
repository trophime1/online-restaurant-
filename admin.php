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
      <span class="logo_name">Main Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class="bx bx-grid-alt" ></i>
            <span class="links_name">Admins manage</span>
          </a>
        </li>
        <li>
          <a href="resta.php">
            <i class="bx bx-box" ></i>
            <span class="links_name">Restaurant manage</span>
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
<center><form method="post">
     <input type="text" placeholder="Admin_username" name="user" require>
 
  <input type="password" placeholder="password" name="pass" require>
 
  <input type="password" placeholder="admin_of" name="of" require>
  <input type="submit" name="submit" value="ADD">
<?php
$add='';
$pass='';
if(isset($_POST['submit'])){
  
$pass=$_POST['pass']??"";
$user=$_POST['user']??"";
$of=$_POST['of']??"";
  $sql="INSERT INTO admin(admin_username,admin_of,password) value('$user','$of','$pass')";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
header('location:admin.php');
  }
  else{
    echo 'query error: '. mysqli_error($conn);
  }

}
?>
</form>
</center><br>

<table>
<tr>
<th>admin_Id</th>
<th>admin_name</th>
<th>admin_of</th>
<th>pass</th>
<th colspan="2">action</th>


</tr>
<?php
include('db_connect.php');
$delete="<a href='#' style='color:red;text-decoration: none;')>delete</a>";
$update="<a href='#' style='color:blue;text-decoration: none;'>update</a>";
$sql = "SELECT * FROM admin";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)  {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Admin_id"]. "</td><td>" . $row["Admin_username"] . "</td><td>" . $row["Admin_of"] . "</td><td>" . $row["password"] ."</td><td>". $delete. "</td><td>" .$update. "</td></tr>"  ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>