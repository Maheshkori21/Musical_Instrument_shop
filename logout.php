<?php

session_start();

session_destroy();
	
header('location:index.php');


	
?>
<?php
	include('footer.php');

?>