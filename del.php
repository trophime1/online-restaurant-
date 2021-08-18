<?php
include('db_connect.php');

$sql= "DELETE FROM user where client_id= ".$_GET['id'];
$result= mysqli_query($conn,$sql);
if($result)
{
    header('location:client.php');
    exit();
}
else
{
    echo "errors".mysqli_error($conn);
}



?>