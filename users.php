<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: Verdana, sans-serif ;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
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

$sql = "SELECT * FROM client";
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