<?php
include("connection.php");
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$sql="delete from insertgameresult where id = '$id'";
	mysqli_query($con,$sql);
	echo "<script>window.location='gameresult.php'</script>";

}


?>