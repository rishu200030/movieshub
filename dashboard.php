<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style type="text/css">
      .container{
        background-color:#2F4F4F;

        color: white;
        margin-bottom: 20px;
        margin-top: 20px;
        padding-top: 10px;
        width: 70%;
      }
      body{
        background-image: url(backgroundimg.jpeg);
      background-repeat: no-repeat;
      background-image: cover;
          background-size: auto;
          background-attachment: fixed;
            background-position: center; 
            background-size: 100% 100%;
      }

    </style>

    <title>dashboard</title>
  </head>
  <body>
   



    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand"><?php

session_start();


if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
  echo ("<h3>"."Welcome  ".$_SESSION["user_name"]."</h3>");
} else {
  
  header ("Location: loginform1.php");  
}
?></a>
 
  
  <form class="form-inline" action="logout.php">
   
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">logOut</button>
  </form>
</nav>
<div align="center">
  <h2 style="color: white;">Enjoy Movies Hub chart Buster</h2>
</div>

<div style="background-color:#40E0D0; width: 80%;margin-right: 10%; margin-left: 10%;">

<?php
require ("functions.php");
$con = dbConnect();
?>

<?php
$q ="select * from movies";
$query = mysqli_query ($con,$q);
while($row=mysqli_fetch_assoc($query))
{
echo "<div class='container'>";
$id = $row['id'];
$name= $row['name'];
$movie_name = $row['movie_name'];
$type = $row['type'];
$rating = $row['rating'];
echo "<h3><strong>$movie_name</strong></h3>";
echo "<p>$type</p>";
echo "<p>Ratings $rating/5 <button type='button' class='btn btn-primary'><a href='watch.php?id=$id' style='text-decoration: none; color: white'>      Stream</a></button></p><br>";
echo "</div>";
}



?>
</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>