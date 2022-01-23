<?php
include('../dbcon.php');
	
	$no= $_POST['no'];
	$name= $_POST['name'];
	$cost= $_POST['cost'];
	
	$id= $_POST['sid'];
	
	$image= $_FILES['image']['name'];
	
	$tempname=$_FILES['image']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$image");
	


	$qry="UPDATE `item` SET `no` = '$no', `name` = '$name', `cost` = '$cost', `image` = '$image' WHERE `id` =$id";
	
	$result=mysqli_query($con,$qry);

	if($result == true)
	{
	
	?>
	

	<script>
		
		alert('Data Updated Successfully.');
		 
	
			window.open('updateform.php?sid=<?php echo $id;?>','_self'); 
		
	
	</script>
	
	<?php
	

	}

?>
<?php
	include('../footer.php');

?>