<?php
include("connection.php");
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$sql="delete from singlebid where id = '$id'";
	mysqli_query($con,$sql);
	echo "<script>window.location='checkbid.php'</script>";

}


?>