<?php
$name = $_POST["fname"];
$uname = $_POST["uname"];
$pwd = $_POST["password"];
$email = $_POST["email"];

//echo $name;
//echo $uname;
//echo $pwd;
//print_r($_REQUEST) ;

require ("functions.php");
$con = dbConnect();

$sql = "INSERT INTO `admin` (`id`, `name`, `uname`, `password`, `email`) VALUES (NULL, '$name', '$uname', '$pwd', '$email')";


mysqli_query($con,$sql);
header ("Location: loginform1.php?msg2=you have successfully registered ");

?>