<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Musical Instruments Shop</title>

</head>
<body bgcolor="limegreen">
	<h4><a href="logout.php" style="float:right; margin-right:50px; color:red; font-size:20px;">Logout</a></h4>
	<h1 align="center"><marquee><font color="white" size="10">Welcome to Musical Instruments Shop</font></marquee></h1>

	<form method="post" action="userdash.php">

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
</body>
</html>

</table>

</form>
</body>
</html> 

<?php

	
	if(isset($_POST['submit']))
	{
	
		$name=$_POST['name'];
		
		include('dbcon.php');
		
		include('function2.php');
	
		showdetails($name);
		{
		
			}
	}

?>
<?php
	include('footer.php');

?>