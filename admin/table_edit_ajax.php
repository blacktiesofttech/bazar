<?php
include("connection.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$firstname=mysql_escape_String($_POST['firstname']);
$sql = "update insertgamerate set bidamount='$firstname' where id='$id'";
mysql_query($sql);
}
?>