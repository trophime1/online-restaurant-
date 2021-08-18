<?php
include('db_connect.php');
$sql=" UPDATE FROM restaurant set restaurant_name='".$_POST['restname']."' where restaurant_id=".$_GET['id'];
mysqli_query($conn,$sql);
header('location:resta.php');
    exit();

?>