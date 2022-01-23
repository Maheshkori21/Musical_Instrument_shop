<?php

session_start();
	
		if(isset($_SESSION['uid']))
		
		{
			echo " ";
		
		}
		
		else
			
		{
			header('location: ../adminlogin.php');
		}

?>

<?php
	include('header.php');
	include('titlehead.php');
	
	include('../dbcon.php');
	
	$sid=$_GET['sid'];
	
	$sql="SELECT * FROM `item` WHERE `id`='$sid'";
	$result=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($result);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">

	

		<table border="1;"style="width:70%; margin-top:40px;" align="center" >
	
			
		
	
			<tr>
				<th>Number</th>
				<td><input type="text" name="no" value=<?php echo $data['no']; ?> required></td>
			
			</tr>
	
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
				
			</tr>
		
			<tr>
				<th>Cost</th>
				<td><input type="text" name="cost" value=<?php echo $data['cost']; ?> required></td>
			</tr>
	
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"  required></td>
			</tr>

			<tr>
				
				<td colspan="2" align="center">
				<input type="hidden" name="sid"  value="<?php echo $data['id']; ?>" />

				<input type="submit" name="submit"  value="Submit">

				</td>					

			</tr>
	
	
		</table>
	
	

</form>

</body>
</html>
<?php
	include('../footer.php');

?>