<?php
 
session_start();

if(isset($_SESSION['uid']))
{

	header('location:admin/admindash.php');
}


?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

</head>
<body bgcolor="Sky Blue">


<h1 align="center"><font color="white">Admin Login</font></h1>
<h2 align="left" style="margin-right:20px;"><a href="index.php"><font color="white">Back to Main</font></a></h2>

<form action="adminlogin.php" method="post" >


<table align="center">
	<tr>
		<td align="right"><font color="white" size="4">Username</font></td>
		<td><input type="text" name="uname" required></td>
	</tr>
	
	<tr>
		<td align="right"><font color="white" size="4">Password</font></td>
		<td><input type="password" name="pass" required></td>
	</tr>

	<tr>

		<td colspan="3" align="center"><input type="submit" name="login" value="login"></td>		
	</tr>



</table>








<form>


</body>
</html>


<?php

include('dbcon.php');


if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	
	$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
	
	$result=mysqli_query($con,$qry);

	$row=mysqli_num_rows($result);

	if($row <1)
	{
	

?>	
	<script>
		alert('Username or Password not Match !!');
		window.open('adminlogin.php','_self');
	</script>
		
	
<?php

	}
	
	else
	{
		$data=mysqli_fetch_assoc($result);
	
		$id=$data['id'];		

		
	
		$_SESSION['uid']=$id;

		header('location:admin/admindash.php');
		
	}

}


?>
<?php
	include('footer.php');

?>