	<html>
	<body bgcolor="green">
	<h4>

	<a href="userdash.php" style="float:left; margin-left:40px; color:red; font-size:20px;">Back to Main Dashboard</a>

	<a href="logout.php" style="float:right; margin-right:50px; color:red; font-size:20px;">Logout</a>
	
	</h4>
	
	<h1 align="center">Bill </h1>
	


	
	</html>
	
	<?php
	
	include('dbcon.php');
	  if($_GET['sid']!="")
	   $sid=$_GET['sid'];
else
       if($_POST['sid']!="")
	   $sid=$_POST['sid'];
	
	$sql="SELECT * FROM `item` WHERE `id`='$sid'";
	$result=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($result);

?>

<form method="post" action="buy.php?sid=<?php echo $sid; ?>" enctype="multipart/form-data">

	 

		<table border="1;"style="width:70%; margin-top:40px;" align="center" >
	
			<th>Number</th>
		<th>Name</th>
		<th>Cost</th>
		<th>Image</th>
		
		
	
			<tr>
				
				<td align="center"><?php echo $data['no']; ?>
</td>
			
			
	
			
				
				<td align="center"><?php echo $data['name']; ?> </td>
				
			
		
			
				
				<td align="center"><?php echo $data['cost']; ?> </td>
			
	
			
				
				<td align="center"><img src="dataimg/<?php echo $data['image']; ?>" style="max-height:100px; max-width:100px;"></td>
			
			
				
				<td colspan="2" align="center">
				<input type="hidden" name="sid"  value="<?php echo $data['id']; ?>" />

				<input type="submit" name="submit"  value="Place Order">

				</td>	


			
			
			
				
				<td colspan="2" align="center">
					<input type="submit" name="cancel" value="Cancel"> 

				</td>
			</tr>
	
		</table>
	
	

</form>

</body>
</html>

<?php

	
	if(isset($_REQUEST['cancel']))
	
	{

		
?>
	<script>
		
		alert('Order Cancel..');
		 
	
			window.open('userdash.php'); 
		
	
	</script>

	<?php

	}
	else
	{

	}
	
?>

<?php


	if(isset($_REQUEST['submit']))
	
	{
		include('dbcon.php');
		$qry="UPDATE `item` SET `flag` ='0' WHERE `id`='$sid'";

		$result=mysqli_query($con,$qry);
?>
	<script>
		
		alert('Order Placed Successfully..');
		 
	
			window.open('userdash.php'); 
		
	
	</script>

	<?php

	}
	else
	{

	}
	
?>
<?php
	include('footer.php');

?>