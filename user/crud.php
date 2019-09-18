<?php

function connection()
{
	return mysqli_connect("localhost","root","","satta");
	
	}


function fetch_record($tbl_name)

{
	$con=connection();
	
	$result=mysqli_query($con,"select * from $tbl_name");
	return $result; 
	
	}

function fetch_select_record($tbl_name,$col_name,$val)
{
	$con=connection();
 	$query="select * from $tbl_name where $col_name=$val";
	
	$result=mysqli_query($con,$query);
	return $result; 
	
	}
function ins_record($tbl_name,$row)
{
	$con=connection();
	
	$result=mysqli_query($con,"INSERT INTO `$tbl_name` VALUES ($row) ");
	return $result; 
	
	}
	
	function ins_record_with_column($tbl_name,$col_name,$col_value)
	{
		$con=connection();	
			$query="INSERT INTO `$tbl_name`($col_name) VALUES($col_value)";
		 $result=mysqli_query($con,$query);
		echo alrt_msg($query);
		return $result; 
	
	}
	
function del_record($tbl_name,$col_name,$val)

{
	$con=connection();
	
	$result=mysqli_query($con," delete from $tbl_name where $col_name=$val ");
	return $result; 
	
	}
	
	
	
function alrt_msg($msg)

{
	echo "<script>alert('$msg')</script>";
	
	}

?>