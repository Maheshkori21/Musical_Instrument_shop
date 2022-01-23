

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Login</title>

</head>
<body bgcolor="Sky Blue">


<h1 align="center"><font color="white">User Login</font></h1>
<h2 align="left" style="margin-right:20px;"><a href="index.php"><font color="white">Back to Main</font></a></h2>


<form action="userlogin.php" method="post" >


<table align="center">
	<tr>
		<td align="right"><font color="white" size="5">Username</font></td>
		<td><input type="text" name="usname" required></td>
	</tr>
	
	<tr>
		<td align="right"><font color="white" size="5">Password</font></td>
		<td><input type="password" name="psw" required></td>
	</tr>

	<tr>

		<td colspan="3" align="center"><input type="submit" size="5" name="login" value="login"></td>		
	</tr>



</table>








<form>


</body>
</html>


<?php

include('dbcon.php');


if(isset($_POST['login']))
{
	$username=$_POST['usname'];
	$password=$_POST['psw'];
	
	$qry="SELECT * FROM `user` WHERE `uname`='$username' AND `psw`='$password';";
	
	$result=mysqli_query($con,$qry);

	$row=mysqli_num_rows($result);

	if($row <1)
	{
	

?>	
	<script>
		alert('Username or Password not Match !!');
		window.open('userlogin.php','_self');
	</script>
		
	
<?php

	}
	
	else
	{
		$data=mysqli_fetch_assoc($result);
	
		$id=$data['id'];		

		
	
		$_SESSION['uid']=$id;

		header('location:userdash.php');
		
	}

}


?>
<?php
	include('footer.php');

?>