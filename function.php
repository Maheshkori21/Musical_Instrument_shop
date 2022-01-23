
<?php


	function showdetails($name)
	{
		include('dbcon.php');
	
		$sql="SELECT * FROM `item` WHERE `name`='$name' and `flag` =1";
		$run=mysqli_query($con,$sql);
		
		?>

		<html><h2 align="center"><font color="white">For Purchasing the instrument user must have to login</font></h2>
		</html>

		<?php
		if(mysqli_num_rows($run)>0)
		{
		
		$count=0;
		
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
			
		
		?>
		
		

		<table align="center" width="80%" border="1" style="margin-top:20px;max-height:100px">
		<tr style="background-color:black; color:skyblue;">
		
		<th>Sr. Number</th>
		<th>Id</th>
		<th>Image</th>
		<th>Name</th>
		<th>Cost</th>
		
	
		</tr>
		
		
		<tr align="center" height="100px">
	
		<td><?php echo $count;  ?></td>
		<td><?php echo $data['id']; ?></td>
		<td rowspan="5"> <img src="dataimg/<?php echo $data['image']; ?>" style="max-height:150px; max-width:120px;"></td>
		<td><?php echo $data['name']; ?></td>
		<td><?php echo $data['cost']; ?></td>
		
	
		</tr>
		</table>
		
	<?php
		}
	
	
	}
		else
	
		{
	
			echo"<script>alert('No Instrument Found.');</script>";
		}
	
	}
	
?>
<?php
	include('footer.php');

?>