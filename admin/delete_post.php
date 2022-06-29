<?php

$post=$_GET['post'];
include("db_config.php");


$query=mysqli_query($con,"DELETE FROM `keywords` WHERE id='$post' ");
if($query)
{
	echo "<script>alert('Keyword Deleted Successfully');
	window.location= 'posts.php';
	</script>";


	

}
?>