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

?>


<form method="post" action="additem.php" enctype="multipart/form-data">

	

		<table border="1;"style="width:70%; margin-top:40px;" align="center" >
	
			
	
			<tr>
				<th><font color="Black">Number</font></th>
				<td><input type="text" name="no" placeholder="Enter Instrument No." required></td>
			
			</tr>
	
			<tr>
				<th><font color="Black">Name</font></th>
				<td><input type="text" name="name" placeholder="Enter Instrument Name" required></td>
				
			</tr>
		
			<tr>
				<th><font color="Black">Cost</font></th>
				<td><input type="text" name="cost" placeholder="Enter Instrument cost" required></td>
			</tr>
	
			<tr>
				<th><font color="Black">Image</font></th>
				<td><input type="file" name="image"  required></td>
			</tr>

			<tr>
				
				<td colspan="2" align="center"><input type="submit" name="submit"  value="Submit"></td>					

			</tr>
	
		</table>
		

</form>

</body>
</html>

<html>
<form>
	<table align="center" >
		<tr>
			<td colspan="2" align="center"><input type="submit" name="view"  value="View All"></td>					

		</tr>
	</table>
</form>
</html>

<?php

	if(isset($_POST['submit']))
	{
	
	include('../dbcon.php');
	
	$no= $_POST['no'];
	$name= $_POST['name'];
	$cost= $_POST['cost'];
	
	$image= $_FILES['image']['name'];
	
	$tempname=$_FILES['image']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$image");

	$flag=1;
	


	$qry="INSERT INTO `item`( `no`, `name`, `cost`,`image`,`flag`) VALUES ('$no','$name','$cost','$image',$flag)";
	
	$result=mysqli_query($con,$qry);

	if($result == true)
	{
	
	?>
	

	<script>
		
		alert('Data Inserted Successfully.');
	
	</script>
	
	<?php
	

	}
	
	}


?>



	<?php

	if(isset($_REQUEST['view']))
	{
	
	include('../dbcon.php');
	
	?>
	
	<html>
	
	<table align="center" width="80%" border="1" style="margin-top:10px;">
	<tr style="background-color:black; color:white;">
	
	<th>Sr. Number</th>
	<th>Id</th>
	<th>Image</th>
	<th>Name</th>
	<th>Cost</th>
	
	</tr>
	
	</html>
	
	<?php
	
	$sql="SELECT * FROM `item` WHERE `flag` =1";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)<1)
	{

		echo"<tr><td colspan='8' >No Records Found</td></tr>";
	}
	
	else
	{
		
		$count=0;
	
		while($data=mysqli_fetch_assoc($result))
		{
			$count++;
			
		?>
		<tr align="center">
	
		<td><?php echo $count;  ?></td>
		<td><?php echo $data['id']; ?></td>
		<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"></td>
		<td><?php echo $data['name']; ?></td>
		<td><?php echo $data['cost']; ?></td>
	
		</tr>
		
		<?php


		}
	}
	
	}
	


?>

</table>
<?php
	include('../footer.php');

?>
	