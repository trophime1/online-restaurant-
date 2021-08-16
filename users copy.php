<?php
include ('db_connection.php');

?>
<?php
$sql='SELECT client_id,full_name,username,email,phone,password,gender,created_at FROM  client';

//$sql= mysql_query("SELECT id,fname,lname,email,sex,age,created_at FROM  users", $conn);
//query for result
$result=mysqli_query($conn,$sql);
//query to fetch results
$dsply=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($login);

 foreach($dsply as $dsply) { //the 1st login is for table name 
    
echo htmlspecialchars($dsply['client_id']); //login is that varialble used to fetch data 
echo "<br>";
 echo htmlspecialchars($dsply['full_name']); 
 echo "<br>";
 echo htmlspecialchars($dsply['username']); 
 echo "<br>";
 echo htmlspecialchars($dsply['email']); 
 echo "<br>";
 echo htmlspecialchars($dsply['phone']); 
 echo "<br>";
 echo htmlspecialchars($dsply['password']); 
 echo "<br>";
 echo htmlspecialchars($dsply['gender']); 
 echo "<br>";
 echo htmlspecialchars($dsply['created_at']);
    
 } 
?>
<?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>