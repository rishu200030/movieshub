<?php
session_start();


if(isset($_SESSION["user_name2"]) && $_SESSION["user_name2"]!=""){
	
} else {
	
	header ("Location: adminlogin.php");	
}

$id = $_REQUEST["id"];


/** database connection **/
require ("functions.php");
$con = dbConnect();

$del_sql = "DELETE FROM `movies` WHERE `movies`.`id` = '$id'";
//var_dump($del_sql);

$del_data = $con->query($del_sql);
//var_dump($del_data);

header("Location:index.php");

?>
