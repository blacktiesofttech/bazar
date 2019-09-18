<?php
require_once("crud.php");
$user_phone=$_REQUEST["user_phone"];
$result2=fetch_select_record("signup","phone","'$user_phone'");
$rows_count2=mysqli_num_rows($result2);
	if($rows_count2>=1)
	{
		echo "Phone Number Exist...Try Another Phone Number";
	}
?>