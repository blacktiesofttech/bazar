<?php
include_once("connection.php");
include_once('../crud.php');

    
    $id=$_POST['id'];

    $sql="select * from signup where id='$id'";
    $result=mysqli_query($con,$sql) or die(mysqli_query($con));
    $row=mysqli_fetch_array($result);
    $status=$row['status'];
    if ($status=='Inactive') {
      $query="update signup set status='Active' where id='$id;'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
  echo $status;
    }
    elseif ($status=='Active') {
      $query="update signup set status='Inactive' where id='$id;'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
  echo $status;
    }
    
?>