<?php 

	// connect to the database
$conn = mysqli_connect('localhost','trophime','Bushenge@0786','registration');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>