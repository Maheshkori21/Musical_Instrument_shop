<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Musical Instruments Shop</title>

</head>



<body bgcolor="green">

<h2 align="right" style="margin-right:20px;"><a href="adminlogin.php"><font color="white">Admin Login</font></a></h2>
<h1 align="center"><marquee><font color="white" size="10">Welcome to Musical Instruments Shop</font></marquee></h1>

<form method="post" action="index.php">


<table style="width:30%;" align="center" border=";">
	<tr>
		<td colspan="3" align="center"><font color="white">Instrument Details</font></td>
	</tr>
	<tr>
		
		<td align="right"><font color="white">Instrument Name</font></td>
		<td><input type="text" name="name" required></td>
	</tr>
	<tr>

		<td colspan="3" align="center"><input type="submit" name="submit" value="Show Details"></td>		
	</tr>
	
	</html>




</table>

</form>

</body>
</html> 


<html>
<form>
	<table align="center" >
		<tr>
			<td colspan="2" align="center"><a href="userlogin.php"><h2><font color="white">User Login</font></h2></a></td>
		</tr>
	</table>
</form>
</html>

<html>
<form>
	<table align="center" >
		<tr>
			<td align="center"><a href="signup.php"><h2><font color="red">Sign Up</font></h2></a></td>
		</tr>
	</table>
</form>
</html>


<?php

	
	if(isset($_POST['submit']))
	{
	
		$name=$_POST['name'];
		
		include('dbcon.php');
		
		include('function.php');
	
		showdetails($name);
		{
		
			}
	}

?>
<?php
	include('footer.php');

?>
