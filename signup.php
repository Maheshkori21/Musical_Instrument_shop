<html>
<body bgcolor="sherbet orange">
<h1 align="center"><font color="white">Create Account</font></h1>
<h2 align="left" style="margin-right:20px;"><a href="index.php"><font color="white">Back to Main</font></a></h2>
<form method="post" action="signup.php" enctype="multipart/form-data">

	

		<table border="1;"style="width:70%; margin-top:40px;" align="center" >
	
			
			<tr>
				<th><font color="Black"><font color="white" size="4">Username</font></font></th>
				<td><input type="text" name="name" placeholder="Enter Your Name" required></td>
				
			</tr>
		
			<tr>
				<th><font color="Black"><font color="white" size="4">Password</font></font></th>
				<td><input type="text" name="psw" placeholder="Enter Password" required></td>
			</tr>
	
			<tr>
				<th><font color="Black"><font color="white" size="4">Phone No.</font></font></th>
				<td><input type="text" name="phone" placeholder="Enter Phone Number" required></td>
			</tr>

			<tr>
				<th><font color="Black"><font color="white" size="4">Address</font></font></th>
				<td><textarea rows="4" cols="50" name="addr" placeholder="Enter Address" required > </textarea></td>
			</tr>

			<tr>
				
				<td colspan="2" align="center"><input type="submit" name="signup"  value="Sign Up"></td>					

			</tr>
	
		</table>
		

</form>

</body>
</html>

<?php

	if(isset($_POST['signup']))
	{
	
	 include('dbcon.php');
	
	$name= $_POST['name'];
	$psw= $_POST['psw'];
	$phone=$_POST['phone'];
	$addr=$_POST['addr'];
	


 	
 	
 	


	$qry="INSERT INTO `user` (`userid`, `uname`, `psw`, `phone`, `addr`) VALUES (NULL, '$name', '$psw', '$phone', '$addr');";
	
	$result=mysqli_query($con,$qry);

	if($result == true)
	{
	
	?>
	

	<script>
		
		alert('Sign up Successfully.');
	
	</script>
	
	<?php
	}

		else
		{

			?>
			<script>
		
		alert('User Name already Exist.. ');
	
		</script>
 	
		<?php

		}
	
	}

?>
<?php
	include('footer.php');

?>