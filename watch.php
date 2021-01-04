<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-color: #2F4F4F;

      }
    </style>

    <title>movies hub</title>
  </head>
  <body>


    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand"><?php

session_start();


if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
  echo ("<h3>"."Hello ".$_SESSION["user_name"]."</h3>");
} else {
  
  header ("Location: loginform1.php");  
}
?></a>
 
  
  <form class="form-inline" action="logout.php">
   
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">logOut</button>
  </form>
</nav>


<div align="center" style="background-color: rgba(255,255,255,0.5);width: 80%; margin-right:10% ;margin-left:10%" >
  <h1 >Enjoy your streaming in Movies Hub</h1>
<?php
require ("functions.php");
$con = dbConnect();

if(isset($_GET['id']))
{     
      $id = $_GET['id'];
      $q = "select * from movies where id=$id";
      
      $query = mysqli_query($con,$q);
      while($row = mysqli_fetch_assoc($query))
      {
             $name = $row['name'];
            
             $movie_name = $row['movie_name'];
             


      }
echo"<h3>You are watching  ".$movie_name."</h3><br>";
echo"<video width='70%' height='500px' controls><source src='upload/".$name."'type='video/webm'></video>";

}
else
{
echo '<script>alert("error in playing video")</script>'; 
header ("Location: dashboard.php");
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