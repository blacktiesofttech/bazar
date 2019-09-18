<?php
 $time= date("h:ia"); 

if(isset($_POST["send"]))
{
  
$satta=$_POST["satta"];
$satta1=$_POST["satta1"];
$ref_id=$_POST["ref_id"];
$id=$_POST["id"];
$open=$_POST["open"];
if($satta==null)
{
  $query="update insertgameresult set  singleopen='$satta1' where id='$id'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));

if($query)
{

$query=("SELECT * FROM insertgamerate Where gametype='Single'");
$rst_2=mysqli_query($con,$query);
$row_2=mysqli_fetch_array($rst_2);
$singlewin=$row_2['winamount'];

$query=("SELECT * FROM sinbid Where bidnumber='$satta1' And open='Open'");
$rst_1=mysqli_query($con,$query);
while($row_1=mysqli_fetch_array($rst_1))
{
$id=$row_1['userid'];
$name=$row_1['username'];
$bid=$row_1['bidnumber'];
$citns=$row_1['cityname'];
$bidss=$row_1['point'];
$bids=$bidss*$singlewin;
$date = date("Y-m-d H:i:s");


$query=("SELECT * FROM single Where id='$ref_id'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
$citn=$row['cityname'];

if ($citns==$citn) 
{


$sql="select * from point where username='$name'";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$name=$row['username'];

if ($name==null) 
{
  $result=ins_record("point","null,'$id','$name','$bids','$date'");
$result=ins_record("point1","null,'$id','$name','$bids','$date'");


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
$result="UPDATE `point` SET `point` = `point`+'$bids' WHERE  username='$name'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$id','$name','$bids','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

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
}


}
else
{
echo alrt_msg("Data Not Insert");
}
}
if($satta1==null)
{
    $query="update insertgameresult set  sattanumber='$satta' where id='$id'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
//sattanumber='$satta',
if($query)
{
  


$query=("SELECT * FROM allbid Where bidnumber='$satta' And open='Open'");
$rst_1=mysqli_query($con,$query);
while($row_1=mysqli_fetch_array($rst_1))
{

$id=$row_1['userid'];
$name=$row_1['username'];
$bid=$row_1['bidnumber'];
$bidss=$row_1['point'];
$citns=$row_1['cityname'];
 $biding=$row_1['biding'];


$query=("SELECT * FROM insertgamerate Where gametype='$biding'");
$rst_3=mysqli_query($con,$query);
while($row_3=mysqli_fetch_array($rst_3))
{
$winbid=$row_3['winamount'];


$bids=$bidss*$winbid;
$date = date("Y-m-d H:i:s");

$query=("SELECT * FROM single Where id='$ref_id'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
$citn=$row['cityname'];

if ($citns==$citn) 
{
//echo "hello";
$sql="select * from point where username='$name'";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$name=$row['username'];

if ($name==null) 
{
  $result=ins_record("point","null,'$id','$name','$bids','$date'");
$result=ins_record("point1","null,'$id','$name','$bids','$date'");


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
$result="UPDATE `point` SET `point` = `point`+'$bids' WHERE  username='$name'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$id','$name','$bids','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
  # code...
}
}
}

}
else
{
echo alrt_msg("Data Not Insert");
}
}

}

if(isset($_POST["sends"]))
{
  
$satta=$_POST["satta"];
$satta1=$_POST["satta1"];
$ref_id=$_POST["ref_id"];
$id=$_POST["id"];
$close=$_POST["close"];
$open=$_POST["open"];
if($satta==null)
{
   
   $query="update insertgameresult set  singleclose='$satta1' where id='$id'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));

if($query)
{

$query=("SELECT * FROM insertgamerate Where gametype='Single'");
$rst_2=mysqli_query($con,$query);
$row_2=mysqli_fetch_array($rst_2);
$singlewin=$row_2['winamount'];

$query=("SELECT * FROM sinbid Where bidnumber='$satta1' And open='Close'");
$rst_1=mysqli_query($con,$query);
while($row_1=mysqli_fetch_array($rst_1))
{
$id=$row_1['userid'];
$name=$row_1['username'];
$bid=$row_1['bidnumber'];
$bidss=$row_1['point'];
$bids=$bidss*$singlewin;
$citns=$row_1['cityname'];
$date = date("Y-m-d H:i:s");


$query=("SELECT * FROM single Where id='$ref_id'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
$citn=$row['cityname'];

if ($citns==$citn) 
{



$sql="select * from point where username='$name'";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$name=$row['username'];

if ($name==null) 
{
  $result=ins_record("point","null,'$id','$name','$bids','$date'");
$result=ins_record("point1","null,'$id','$name','$bids','$date'");


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
$result="UPDATE `point` SET `point` = `point`+'$bids' WHERE  username='$name'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$id','$name','$bids','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

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
}




}
else
{
//echo alrt_msg("Data Not Insert");
}
}

if($satta1==null)
{
  $query="update insertgameresult set  sattanumberclose='$satta' where id='$id'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
//sattanumber='$satta',
if($query)
{




$query=("SELECT * FROM allbid Where bidnumber='$satta' And open='Close'");
$rst_1=mysqli_query($con,$query);
while($row_1=mysqli_fetch_array($rst_1))
{
$id=$row_1['userid'];
$name=$row_1['username'];
$bid=$row_1['bidnumber'];
$bidss=$row_1['point'];
$citns=$row_1['cityname'];
$biding=$row_1['biding'];


$query=("SELECT * FROM insertgamerate Where gametype='$biding'");
$rst_3=mysqli_query($con,$query);
while($row_3=mysqli_fetch_array($rst_3))
{
$winbid=$row_3['winamount'];




$bids=$bidss*$winbid;
$date = date("Y-m-d H:i:s");

$query=("SELECT * FROM single Where id='$ref_id'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
$citn=$row['cityname'];

if ($citns==$citn) 
{


$sql="select * from point where username='$name'";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$name=$row['username'];

if ($name==null) 
{
  $result=ins_record("point","null,'$id','$name','$bids','$date'");
$result=ins_record("point1","null,'$id','$name','$bids','$date'");


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
$result="UPDATE `point` SET `point` = `point`+'$bids' WHERE  username='$name'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$id','$name','$bids','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
  # code...
}

}





}

}
else
{
echo alrt_msg("Data Not Insert");
}
}
}

?>