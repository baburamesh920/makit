<?php

$id=$_GET['id'];
include("db_config.php");


$query=mysqli_query($con,"DELETE FROM `company` WHERE id='$id' ");
if($query)
{
	echo "<script>alert('Company Name Deleted Successfully');
	window.location= 'pages.php';
	</script>";


	

}
?>