
<!DOCTYPE html>
<html>
<head>
	<title>singup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="mainpage.php"><b><input type="submit" class="button" value="Back"></b></form>
	<div align="center" style="background-color: rgba(255,255,255,0.5);margin: auto;padding-top: 30px;padding-bottom: 30px;  border-radius: 30px;width: 50%;">
		<div><h1>SIGN UP FOR MOVIES HUB</h1></div>
		<form action="signupaction.php" method="post">
		<div style="width=50%;">
		<input class="input" type="text" name="fname" placeholder="enter your name"><br><br>
		<input class="input" type="text" name="uname" placeholder="enter username"><br><br>
		<input class="input" type="password" name="password" placeholder="enter your password"><br><br>
	    <input class="input" type="email" name="email" placeholder="enter your email"><br><br>
	
        </div>
       

		<input class="button" type="submit" name="submit" value="submit">
		<input class="button"type="reset" name="clear" value="clear"><br>
		


		</form>
		<h5>if already registerd ?<a href="loginform1.php" style="color:#4169E1;">login</a></h5>
	</div>

</body>
</html>