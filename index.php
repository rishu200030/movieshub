<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>admin panel</title>
  </head>
  <body>
      <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand"><?php

session_start();


if(isset($_SESSION["user_name2"]) && $_SESSION["user_name2"]!=""){
  echo ("<h3>"."Welcome  ".$_SESSION["user_name2"]."</h3>");
} else {
  
  header ("Location: adminlogin.php");  
}
?></a>
 
  
  <form class="form-inline" action="adminlogout.php">
   
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">logOut</button>
  </form>
</nav>

<h2 align="center">ADMIN PANEL</h2>

<div align="center" style="width: 40%; margin-left: 50px;" >
  <h2>UPLOAD MOVIES HERE</h2>
 <form method="post" enctype="multipart/form-data" >
   <input type="file" name="file" /><br><br>

   <input  class="form-control"aria-label="Username" aria-describedby="basic-addon1"type="text" name="movie_name" placeholder="movie name" required><br>
   <input  class="form-control"  aria-label="Username" aria-describedby="basic-addon1"type="text" name="type" placeholder="type of movie"required><br>
   <input  class="form-control"  aria-label="Username" aria-describedby="basic-addon1"type="number" name="rating" placeholder="rating"required><br>
   <input type="submit" name="submit" value= "Upload" /><br><br>
  </form>
  </div>

<?php
require ("functions.php");
$con = dbConnect();


if(isset($_POST['submit']))
{    
  
    
 
     $name = $_FILES['file']['name'];
     $temp = $_FILES['file']['tmp_name'];
     $movie_name = $_POST['movie_name'];
     $type = $_POST['type'];
     $rating = $_POST['rating'];
     move_uploaded_file($temp,"upload/".$name);

     //$q="INSERT INTO `movies` (`id`, `name`) VALUES (NULL, '$name');";
     $q="INSERT INTO `movies` (`id`, `name`, `movie_name`, `type`, `rating`) VALUES (NULL, '$name', '$movie_name', '$type', '$rating');";
   
     $res = mysqli_query($con,$q);
     if ($res == 1) {
         echo"Submitted to database.....";
        

     }    echo "<br><br>".$movie_name."has been uploaded.";

      

} 
?>
<hr>






<div align="center">

<table border=1px>  
  <tr>
    <th>movie</th>
    <th>type</th>
    <th>rating</th>
    <th>Action</th>
  </tr> 
  
  <?php
    $q ="select * from movies";
    $query = mysqli_query ($con,$q);
    while($row=mysqli_fetch_assoc($query)) {
  ?>
  <tr>
    <td><?php echo $movie_name = $row['movie_name'] ; ?></td>
    <td><?php echo $type = $row['type']; ?></td>
    <td><?php echo $rating = $row['rating']; ?></td>
    <td>
      <a href="delete_action.php?id=<?php echo $row["id"]; ?>"onclick="javascript: return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash" style="color:red; font-size:15px"></i></a>
      
      
      
    </td>
    
  <?php
    }
  ?>
  </tr>


</table>
</div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>