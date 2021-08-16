<?php
include('db_connect.php');

?>


<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
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
          <a href="order.php">
            <i class="bx bx-list-ul" ></i>
            <span class="links_name">Admins manage</span>
          </a>
        </li>

        <li>
          <a href="resta.php">
            <i class="bx bx-coin-stack" ></i>
            <span class="links_name">Restaurants manage</span>
          </a>
        </li>

        <li>
          <a href="#">
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

</body>
</html>

