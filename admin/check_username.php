<?php
require_once("crud.php");
$user_email=$_REQUEST["user_email"];
$result=fetch_select_record("signup","username","'$user_email'");
$rows_count=mysqli_num_rows($result);
if($rows_count>=1)
	{
		echo "User Name Exist...Try Another User Name";
	}
?>