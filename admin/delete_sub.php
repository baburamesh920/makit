<?php

$id=$_GET['id'];
include("db_config.php");


$query=mysqli_query($con,"DELETE FROM `sub_topics` WHERE id='$id' ");
if($query)
{
	echo "<script>alert('Sub Topic Deleted Successfully');
	window.location= 'subtopics.php';
	</script>";


	

}
?>