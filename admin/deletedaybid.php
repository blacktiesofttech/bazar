<?php

if(isset($_POST["del"]))
{
  
  $sql="delete from sinbid where DATE(`date_time`) = DATE(NOW() - INTERVAL 1 DAY)";
  mysqli_query($con,$sql);

}
if(isset($_POST["del1"]))
{
  
  $sql="delete from jodibid where DATE(`date_time`) = DATE(NOW() - INTERVAL 1 DAY)";
  mysqli_query($con,$sql);

}

if(isset($_POST["del2"]))
{
  
  $sql="delete from singlepattibid where DATE(`date_time`) = DATE(NOW() - INTERVAL 1 DAY)";
  mysqli_query($con,$sql);

}
if(isset($_POST["del3"]))
{
  
  $sql="delete from doublepattibid where DATE(`date_time`) = DATE(NOW() - INTERVAL 1 DAY)";
  mysqli_query($con,$sql);

}
if(isset($_POST["del4"]))
{
  
  $sql="delete from tripalpattibid where DATE(`date_time`) = DATE(NOW() - INTERVAL 1 DAY)";
  mysqli_query($con,$sql);

}
if(isset($_POST["del5"]))
{
  
  $sql="delete from halfsangambid where DATE(`date_time`) = DATE(NOW() - INTERVAL 1 DAY)";
  mysqli_query($con,$sql);

}
if(isset($_POST["del6"]))
{
  
  $sql="delete from fullsangambid where DATE(`date_time`) = DATE(NOW() - INTERVAL 1 DAY)";
  mysqli_query($con,$sql);

}
?>