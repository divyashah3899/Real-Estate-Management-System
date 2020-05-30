<?php 
	include 'dbconnection.php';
	$p_id=$_GET['pid'];
	$q="delete from properties where property_id='$p_id'";
	if(mysqli_query($con,$q))
	{
		echo "<script>alert('Delete Successfully');window.location.href='seepost.php';</script>";
	}
	else {
			echo "<script>alert('Delete Not Successfully');window.location.href='seepost.php';</script>";		
		}	
?>