
<?php


	function showdetails($name)
	{
		include('dbcon.php');
	
		$sql="SELECT * FROM `item` WHERE `name`='$name' and `flag` =1";
		$run=mysqli_query($con,$sql);
		
		if(mysqli_num_rows($run)>0)
		{
		
		$count=0;
		
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
			
		
		?>
		

		<table align="center" width="100%" border="1" style="margin-top:30px;max-height:150px">
		<tr style="background-color:black; color:skyblue;">
		
		<th>Sr. Number</th>
		<th>Id</th>
		<th>Image</th>
		<th>Name</th>
		<th>Cost</th>
		<th>Buy</th>
	
		</tr>
		
		
		<tr align="center" height="150px">
	
		<td><?php echo $count;  ?></td>
		<td><?php echo $data['id']; ?></td>
		<td rowspan="5"> <img src="dataimg/<?php echo $data['image']; ?>" style="max-height:150px; max-width:120px;"></td>
		<td><?php echo $data['name']; ?></td>
		<td><?php echo $data['cost']; ?></td>
		<td><a href="buy.php?sid=<?php echo $data['id']; ?>">Buy</a></td>
	
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