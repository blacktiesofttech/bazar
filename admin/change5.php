<?php
include_once("connection.php");
include_once('../crud.php');

    
    $id=$_POST['id'];
    $val=$_POST['val'];

    $sql="select * from halfsangam where id='$id'";
    $result=mysqli_query($con,$sql) or die(mysqli_query($con));
    $row=mysqli_fetch_array($result);
    $displayopen=$row['displayopen'];
    if ($displayopen=='0') {
      $query="update halfsangam set displayopen='$val' where id='$id;'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
  echo $displayopen;
    }
    elseif ($displayopen=='1') {
      $query="update halfsangam set displayopen='0' where id='$id;'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
  echo $displayopen;
    }


    $id=$_POST['ids'];
    $vals=$_POST['vals'];

    $sql="select * from halfsangam where id='$id'";
    $result=mysqli_query($con,$sql) or die(mysqli_query($con));
    $row=mysqli_fetch_array($result);
    $displayopen=$row['displayopen'];
    if ($displayopen=='0') {
      $query="update halfsangam set displayopen='$vals' where id='$id;'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
  echo $displayopen;
    }
    elseif ($displayopen=='2') {
      $query="update halfsangam set displayopen='0' where id='$id;'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
  echo $displayopen;
    }
   
    
?>