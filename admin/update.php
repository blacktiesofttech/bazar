<?php
include("connection.php");
if(isset($_GET['update']))
{
	$id=$_GET['update'];
	$query="update insertgamerate set bidamount='' where id='$id'";
	$rst=mysqli_query($con,$query) or die( mysqli_error($con));
	echo "<script>window.location='gamerate.php'</script>";

}


?>