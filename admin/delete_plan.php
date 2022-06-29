<?php

$id=$_GET['id'];
include("db_config.php");


$query=mysqli_query($con,"DELETE FROM `plans` WHERE id='$id' ");
if($query)
{
	echo "<script>alert('Plan Deleted Successfully');
	window.location= 'plans.php';
	</script>";


	

}
?>