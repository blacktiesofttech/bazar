<?php
if(isset($_POST["insertsingle"]))
{
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$result=ins_record("single","null,'$cityname','$citynametype','$open','$timing','0','$date','$time'");

if($result)
{
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
//echo $id =mysql_insert_id($con);
//$result1=ins_record("insertgameresult","null,'$cityname','','$date','$time','$id'");
}
else
{
echo alrt_msg("Data Not Insert");
}

//echo "<script>window.location='aprovel.php'</script>";
}

if(isset($_POST["insertsingle"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$result=ins_record("jodi","null,'$cityname','$citynametype','$open','$timing','0','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}


if(isset($_POST["insertsingle"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$result=ins_record("doublepatti","null,'$cityname','$citynametype','$open','$timing','0','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}
if(isset($_POST["insertsingle"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$result=ins_record("tripalpatti","null,'$cityname','$citynametype','$open','$timing','0','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}
if(isset($_POST["insertsingle"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$result=ins_record("halfsangam","null,'$cityname','$citynametype','$open','$timing','0','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}
if(isset($_POST["insertsingle"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$result=ins_record("fullsangam","null,'$cityname','$citynametype','$open','$timing','0','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}


if(isset($_POST["insertsingle"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$result=ins_record("singlepatti","null,'$cityname','$citynametype','$open','$timing','0','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}
if(isset($_POST["insertsingle"]))
{
  
//$cityname=$_POST["cityname"];
//$sattanumber=$_POST["sattanumber"];


//$result23=ins_record("bonus","null,'$username','$email','20','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

//echo "<script>window.location='aprovel.php'</script>";
}

if(isset($_POST["insertgamerate"]))
{
  
$gametype=$_POST["gametype"];
$bidamount=$_POST["bidamount"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$result=ins_record("insertgamerate","null,'$gametype','$bidamount','$date','$time'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$time'");

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

//echo "<script>window.location='aprovel.php'</script>";
}




if(isset($_POST["insertgametimeing"]))
{
  
$cityname=$_POST["cityname"];
$opentime=$_POST["opentime"];
$closetime=$_POST["closetime"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$result=ins_record("insertgametimeing","null,'$cityname','$opentime','$closetime','$date','$time'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}


}


if(isset($_POST["insertpoint"]))
{
  



$userid=$_POST["userid"];
$username=$_POST["username"];
$point=$_POST["point"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$sql="select * from point where username='$username'";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$name=$row['username'];

if ($name==null) 
{
  $result=ins_record("point","null,'$userid','$username','$point','$date','$time'");
$result=ins_record("point1","null,'$userid','$username','$point','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Debit','Bid','$point','$date','$time'");


if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
elseif ($name==$name) 
{
$result="UPDATE `point` SET `point` = `point`+'$point' WHERE  username='$username'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$userid','$username','$point','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Debit','Bid','$point','$date','$time'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
}

if(isset($_POST["insertnotices"]))
{
  
$notices=$_POST["notices"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$result=ins_record("insertnotices","null,'$notices','$date','$time'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

//echo "<script>window.location='aprovel.php'</script>";
}


if(isset($_POST["insertnews"]))
{
  
$news=$_POST["news"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$result=ins_record("insertnews","null,'$news','$date','$time'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$time'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

//echo "<script>window.location='aprovel.php'</script>";
}
?>