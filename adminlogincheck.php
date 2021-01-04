<?php
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];

require ("functions.php");
$con = dbConnect();

$result = mysqli_query($con, "SELECT * FROM private WHERE uname = '$uname' and password = '$pwd'") or die("Failed to query dtabase".mysqli_error($con));
	
	
$row = mysqli_fetch_array($result);
	
	if($row['uname'] == $uname && $row['password'] == $pwd){
		
		session_start();
		
		$_SESSION['user_name2'] = $row['uname'];
		
		header ("Location: index.php");
		
	} else {
		
		header ("Location: adminlogin.php?msg4=Username or password is incorrect");
	}
