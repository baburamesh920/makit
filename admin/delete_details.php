<?php

$id=$_GET['id'];
include("db_config.php");


$query=mysqli_query($con,"DELETE FROM `job_details` WHERE id='$id' ");
if($query)
{
	echo "<script>alert('Job Details Deleted Successfully');
	window.location= 'details.php';
	</script>";


	

}
?>