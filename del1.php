<?php
include('db_connect.php');

$sql= "DELETE FROM restaurant where restaurant_id= ".$_GET['id'];
$result= mysqli_query($conn,$sql);
if($result)
{
    header('location:resta.php');
    exit();
}
else
{
    echo "errors".mysqli_error($conn);
}



?>