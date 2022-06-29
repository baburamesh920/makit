<?php

$id=$_GET['id'];
include("db_config.php");


$query=mysqli_query($con,"DELETE FROM `plan_types` WHERE id='$id' ");
if($query)
{
	echo "<script>alert('Plan type Deleted Successfully');
	window.location= 'plan_types.php';
	</script>";


	

}
?>