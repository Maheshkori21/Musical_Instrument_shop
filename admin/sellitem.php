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

<table>


<form action="sellitem.php" method="post">
	
	
	
	
	
	<tr>
		<th>Enter Instrument Name</th>
		
		<td>
		<input type="text" name="name" placeholder="Enter Instrument Name" required />
		</td>
	
	
	</tr>
	
	
	
	<tr>
		<td cospan="2" align="center">
		<input type="submit" name="submit" value="Search"/>
		</td>
	
	</tr>
	
	
</form>

</table>
	
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

	if(isset($_REQUEST['submit']))
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
	<th>Edit</th>
	
	</tr>
	
	</html>
	
	<?php
	
	$name= $_POST['name'];
	
	$sql="SELECT * FROM `item` where `name` LIKE '%$name%' and `flag` =1";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)<1)
	{

		echo"<tr><td colspan='6' >No Records Found</td></tr>";
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
		<td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
	
		</tr>
		
		<?php


		}
	}
	
	}
	


?>

</table>


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
	