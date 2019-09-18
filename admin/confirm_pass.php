<?php
	
$user_pass=$_REQUEST["pwd"];
	$user_conf=$_REQUEST["confirm"];	
	

if($user_pass=='' && $user_conf=='')
{
	echo "Inter Password";


}

else if($user_pass==$user_conf)
	{
		echo "<span style='color:green'>Password Match</span>";
	}
 
 else
 {
	echo "Password not Match";
	

 }

?>