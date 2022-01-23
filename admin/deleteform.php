<?php

include('../dbcon.php');
	
	
	
	$id=$_REQUEST['sid'];

	$qry="DELETE FROM `item` WHERE `id`='$id';";
	
	$result=mysqli_query($con,$qry);

	if($result == true)
	{
	
	?>
	

	<script>
		
		alert('Data Deleted Successfully.');
		 
	
			window.open('deleteitem.php','_self'); 
		
	
	</script>
	
	<?php
	

	}

?>
<?php
	include('../footer.php');

?>