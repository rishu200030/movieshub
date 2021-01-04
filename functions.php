<?php

function dbConnect() {
	
	$con = mysqli_connect("localhost", "root", "", "movieshub");
	if($con->connect_error){
		echo "connection failed". mysqli_connect_error();
	} else {
		
		return $con;
	}
	
}

?>
