    


    
  

<!DOCTYPE html>
<html>
<head>
	<title>adminlogin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="mainpage.php"><b><input type="submit" class="button" value="Back"></b></form>
    
	<div align="center" style="background-color: rgba(255,255,255,0.5);margin: auto;padding-top: 30px;padding-bottom: 30px;  border-radius: 30px;width: 50%;">
		<div><h1>ADMIN LOGIN IN FOR MOVIES HUB</h1></div>
        
 

        <?php  
             if(isset($_REQUEST["msg4"]) && $_REQUEST["msg4"]!=""){	
	          echo $_REQUEST["msg4"];
	         }
	     ?>


		<br><form action="adminlogincheck.php" method="post">
		<div style="width=50%;">
		<input class="input" type="text" name="uname" placeholder="enter username" required=""><br><br>
		<input class="input" type="password" name="pwd" placeholder="enter password" required=""><br><br>
	    
        </div>
       

		<input class="button" type="submit" name="submit" value="login">
		

		</form>
		
	</div>

</body>
</html>