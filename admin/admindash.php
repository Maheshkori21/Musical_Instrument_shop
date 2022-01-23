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

?>
<?php
	include('../footer.php');

?>
 	
	<div class="admintitle">
	
	<h4><a href="logout.php" style="float:right; margin-right:50px; color:red; font-size:20px;">Logout</a></h4>
	<h1 align="center">Welcome to Admin Dashboard</h1>
	</div>
	
	
	
	<div class="dashboard" >
	
		<table style="width:50%;" align="center" >
	
			<tr>
				<td>1.</td><td><a href="additem.php">Insert Instrument Detials</a></td>
			
			</tr>
	
			<tr>
				<td>2.</td><td><a href="updateitem.php">Update Instrument Detials</a></td>
				
			</tr>
		
			<tr>
				<td>3.</td><td><a href="deleteitem.php">Delete Instrument Detials</a></td>
		
			</tr>
			<tr>
				<td>4.</td><td><a href="sellitem.php">View Available Records</a></td>
		
			</tr>
			<tr>
				<td>5.</td><td><a href="solditem.php">View Sold Records</a></td>
		
			</tr>
	
	
		</table>
	</div>



</body>
</html>

