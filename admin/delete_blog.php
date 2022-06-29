<?php

$id=$_GET['id'];
include("db_config.php");


$query=mysqli_query($con,"DELETE FROM `blogs` WHERE id='$id' ");
if($query)
{
	echo "<script>alert('Blog Post Deleted Successfully');
	window.location= 'blog_details.php';
	</script>";


	

}
?>