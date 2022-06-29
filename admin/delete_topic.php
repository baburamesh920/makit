<?php

$id=$_GET['id'];
include("db_config.php");


$query=mysqli_query($con,"DELETE FROM `topics` WHERE id='$id' ");
if($query)
{
	echo "<script>alert('Topic Deleted Successfully');
	window.location= 'topics.php';
	</script>";


	

}
?>