<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>register</title>
<style>
fieldset{text-align:center;}
</style>
</head>
<body>
<fieldset>
<form method="POST" action="register.php">
<h3>
student name : &nbsp &nbsp &nbsp <input type="text" name="r1" required><br><br>
email id &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp &nbsp <input type="email" name="r2" size="20px" required><br><br>
mobile no &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="text" name="r3" maxlength="10" required><br><br>
Username &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="text" name="r4" required><br><br>
Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="Password" name="r5" required><br><br>
<input type="submit" value="Register" name="Register">
</h3>
</form>
</fieldset>
</body>
</html>

<?php
	
	if (isset($_POST['Register'])) 
	{
	
		include 'dbcon.php';
		echo "<br>";
		echo $name=$_POST['r1'];
		echo $email=$_POST['r2'];
		echo $mobile=$_POST['r3'];
		echo $uname=$_POST['r4'];
		echo $Password=$_POST['r5'];

		$rgt="insert into register(r_id,name,email_id,mobile_no,username,password) values(default,'$name','$email',$mobile,'$uname','$Password')";
		$row=pg_query($con,$rgt);
	}
?>

