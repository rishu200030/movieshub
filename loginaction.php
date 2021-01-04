<?php
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];

require ("functions.php");
$con = dbConnect();

$result = mysqli_query($con, "SELECT * FROM admin WHERE uname = '$uname' and password = '$pwd'") or die("Failed to query dtabase".mysqli_error($con));
	
	
$row = mysqli_fetch_array($result);
	
	if($row['uname'] == $uname && $row['password'] == $pwd){
		
		session_start();
		
		$_SESSION['user_name'] = $row['uname'];
		
		header ("Location: dashboard.php");
		
	} else {
		
		header ("Location: loginform1.php?msg=Username or password is incorrect");
	}








?>