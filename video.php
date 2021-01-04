<?php

session_start();


if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
  echo ("<h3>"."Hello ".$_SESSION["user_name"]."</h3>");
} else {
  
  header ("Location: loginform1.php");  
}
?>

<?php
require ("functions.php");
$con = dbConnect();
?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtmml1-transitional.dtd">
<html xmls="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$q ="select * from movies";
$query = mysqli_query ($con,$q);
while($row=mysqli_fetch_assoc($query))
{
$id = $row['id'];
$name= $row['name'];
echo "<a href='watch.php?id=$id'>$name</a><br>";

}
?>
</body>
</html>