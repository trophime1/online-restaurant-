<?php
include('db_connect.php');
$sql= "DELETE * FROM restaurant where restaurant_id= ".$GET['id'];
$result= mysqli_query($conn,$sql);
if($result)
{
    header('location.restaurant.php');
    else
    {
        echo "errors".mysqli_error($conn);
    }
}


?>