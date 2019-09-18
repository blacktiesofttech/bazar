<?php
 include_once('header.php');
include_once("connection.php");
include_once('crud.php');
    $con= connection();
    $user=$_SESSION['s_username'];
    $sqlghghgh="select * from signup where username='$user'";
    $resultghghgh=mysqli_query($con,$sqlghghgh) or die(mysqli_query($con));
    $rowghghgh=mysqli_fetch_array($resultghghgh);
    $userid=$rowghghgh['id'];
    $username=$rowghghgh['username'];
    $email=$rowghghgh['email'];



  
  $sql1="SELECT SUM(`point`) FROM allbid where username='$user'";
  $result1=mysqli_query($con,$sql1) or die(mysqli_query($con));
  $row1=mysqli_fetch_array($result1);
  $sql="select * from point where username='$user'";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  $row=mysqli_fetch_array($result);
  $poin1=$row['point'];
  if(isset($_POST["submit"]))
{
$poin=$_POST["n10"];
if ($poin1<=0) {
  echo alrt_msg("Point Empty");
}
elseif($poin1>=$poin)
{

  if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point=$_POST["bidno"][0];
//$_POST["point"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;


if ($point==null) {
// echo "<br>" ."Hello";
}
else
{

if ($cityname==$city." "."Open") {

$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','0','$point','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','0','$point','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point','$date','$time'");
$query="update point set  point=point-'$point' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','0','$point','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','0','$point','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point','$date','$time'");
$query="update point set  point=point-'$point' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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




if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point1=$_POST["bidno"][1];
//$_POST["point1"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;



if ($point1==null) {
 //echo "<br>" ."Hello";
}
else 
{
  
if ($cityname==$city." "."Open") {

$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','1','$point1','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','1','$point1','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point1','$date','$time'");
$query="update point set  point=point-'$point1' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
  
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','1','$point1','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','1','$point1','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point1','$date','$time'");
$query="update point set  point=point-'$point1' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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


if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point2=$_POST["bidno"][2];
//$_POST["point2"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;





if ($point2==null) {
// echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','2','$point2','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','2','$point2','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point2','$date','$time'");
$query="update point set  point=point-'$point2' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','2','$point2','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','2','$point2','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point2','$date','$time'");
$query="update point set  point=point-'$point2' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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


if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point3=$_POST["bidno"][3];
//$_POST["point3"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;


//$open=$row['open'] ;



if ($point3==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','3','$point3','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','3','$point3','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point3','$date','$time'");
$query="update point set  point=point-'$point3' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','3','$point3','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','3','$point3','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point3','$date','$time'");
$query="update point set  point=point-'$point3' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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



if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point4=$_POST["bidno"][4];
//$_POST["point4"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;





if ($point4==null) {
// echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','4','$point4','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','4','$point4','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point4','$date','$time'");
$query="update point set  point=point-'$point4' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','4','$point4','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','4','$point4','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point4','$date','$time'");
$query="update point set  point=point-'$point4' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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


if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point5=$_POST["bidno"][5];
//$_POST["point5"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;





if ($point5==null) {
// echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','5','$point5','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','5','$point5','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point5','$date','$time'");
$query="update point set  point=point-'$point5' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','5','$point5','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','5','$point5','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point5','$date','$time'");
$query="update point set  point=point-'$point5' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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





if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point6=$_POST["bidno"][6];
//$_POST["point6"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;





if ($point6==null) {
// echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','6','$point6','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','6','$point6','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point6','$date','$time'");
$query="update point set  point=point-'$point6' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','6','$point6','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','6','$point6','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point6','$date','$time'");
$query="update point set  point=point-'$point6' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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






if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point7=$_POST["bidno"][7];
//$_POST["point7"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;




if ($point7==null) {
// echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','7','$point7','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','7','$point7','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point7','$date','$time'");
$query="update point set  point=point-'$point7' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','7','$point7','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','7','$point7','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point7','$date','$time'");
$query="update point set  point=point-'$point7' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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



if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point8=$_POST["bidno"][8];
//$_POST["point8"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;





if ($point8==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','8','$point8','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','8','$point8','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point8','$date','$time'");
$query="update point set  point=point-'$point8' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','8','$point8','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','8','$point8','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point8','$date','$time'");
$query="update point set  point=point-'$point8' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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






if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
$point9=$_POST["bidno"][9];
//$_POST["point9"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'];
//$open=$row['open'] ;





if ($point9==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Open','$single','9','$point9','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$single','9','$point9','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point9','$date','$time'");
$query="update point set  point=point-'$point9' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
else if ($cityname==$city." "."Close") {
$result=ins_record("sinbid","null,'$userid','$username','$email','$city','Close','$single','9','$point9','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$single','9','$point9','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$point9','$date','$time'");
$query="update point set  point=point-'$point9' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
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
}
else
{
	echo alrt_msg("Your Point"." "."$poin1" ." "."less then this point"." "."$poin");
}
}
?>
<style>

  @media screen and (max-width: 599px) and (min-width: 0px)
{
    #maina 
    {
      width: 30%;
    }
    #mainas 
    {
    }
    #btns
    {
      font-size: 10px;
      text-align: center;
    }
}
</style>

    <section>
      <div class="container">
  <br>
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Single</a></li>
    <li><a data-toggle="pill" href="#menu1"  style="display:none;">Game Rate</a></li>
    <li><a data-toggle="pill" href="#menu2"  style="display:none;">Game Timeing</a></li>
    
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br>
      <section>
     <div class="container">

  
  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <br>
  <section>
  <div class="container">
  <div class="row">
  <div class="col-sm-4">
  <div class="panel panel-primary" id="di">
<?php
 $sql1="SELECT SUM(`point`) FROM allbid where username='$user'";
  $result1=mysqli_query($con,$sql1) or die(mysqli_query($con));
  $row1=mysqli_fetch_array($result1);
  $sql="select * from point where username='$user'";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  $row=mysqli_fetch_array($result);
  $sql34="select SUM(`amount`) from fullsangambid where username='$user'";
  $result34=mysqli_query($con,$sql34) or die(mysqli_query($con));
  $row34=mysqli_fetch_array($result34);
  $fullsangampoint=$row34['SUM(`amount`)'];
  $sql345="select SUM(`amount`) from halfsangambid where username='$user'";
  $result345=mysqli_query($con,$sql345) or die(mysqli_query($con));
  $row345=mysqli_fetch_array($result345);
  $halfsangampoint=$row345['SUM(`amount`)'];
date_default_timezone_set("Asia/Kolkata");
    $time=date("H:i");
   //current Time in 24 hour format, i.e. 18:00:23    
   

?>
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Points</h4></div>
  <div class="panel-body" id="di2"><h4 style="text-align:center;"><?php echo $row['point'];?></h4></div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Select Biding Bazaar</h4></div>
  <div class="panel-body" id="di2">
  <div class="form-group">  
  </select>
  <select name="bazaar" id="dropdownList" class="custom-select" style="width:100%; height:35px;">
  <option selected>Please Select Bazaar</option>
      <?php
   
  $query_2=("SELECT * FROM `single` WHERE `displayopen`='0' Or `displayopen`='2' AND opentiming ORDER by opentiming ASC");
  $rst_2=mysqli_query($con,$query_2);
  while($row_2=mysqli_fetch_array($rst_2))
  {
     $citynames=$row_2['cityname'];
   
  $query_1=("SELECT * FROM `single` WHERE opentiming>='$time' and cityname='$citynames'");
  $rst_1=mysqli_query($con,$query_1);
  while($row_1=mysqli_fetch_array($rst_1))
  {
    
    $tis=$row_1['opentiming'];
    
  ?>
  <option value="<?php echo $row_1['cityname']  ." ". "Open" ;?>"><?php echo $row_1['cityname'] ;?> Open  <?php echo date("h:i a", strtotime("$tis"));?></option>
  <?php
  }
  }
   $query_4=("SELECT * FROM `single` WHERE `displayopen`='0' or `displayopen`='1' AND `timing` ORDER BY `timing` ASC");
  $rst_4=mysqli_query($con,$query_4);
  while($row_4=mysqli_fetch_array($rst_4))
  { 
    $citynamess=$row_4['cityname'];

$query_3=("SELECT * FROM `single` WHERE timing>='$time' and cityname='$citynamess'");
  $rst_3=mysqli_query($con,$query_3);
  while($row_3=mysqli_fetch_array($rst_3))
  {
    $id=$row['id'];
    $tias=$row_3['timing'];
  ?>
  
  
  
  <option value="<?php echo $row_3['cityname']  ." ". "Close" ;?>"><?php echo $row_3['cityname'] ;?> Close  <?php echo date("h:i a", strtotime("$tias"));?></option>
  <?php
  
  }
  }
  ?>
  </select>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
  //$(document).ready(function(){
   // $('#selected').change(function(){
   //   var selectedOption = $('#selected option:selected');
   //   $('#div').html(selectedOption.val());
   // });
  //});

  $(document).ready(function(){
    $('#dropdownList').on('change',function(){
        //var optionValue = $(this).val();
        //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
        var optionText = $("#dropdownList option:selected").val();
        //alert("Selected Option Text: "+optionText);
        $('#div').val(optionText);
        document.getElementById("div1").innerHTML = optionText;
    });
});

//$(document).on("change", "#qty1", function() {
    //var sum = 0;
    //$("#qty1").each(function(){
       // sum += +$(this).val();
    //});
    //$("total").val(sum);
//});

//$('.form-group').on('input','.qty1',function(){
//  var totalSum = 0;
//  $('.form-group .qty1').each(function(){
//    var inputVal=$(this).val();
//    if ($.isNumberic(inputVal)) {
//     totalSum += parseFloat(inputVal);
//    }
//  });
//  $('#total').text(totalSum);
//});
 /*
 var $form = $('#whereEntry'),
    $summands = $form.find('.form-control'),
    $sumDisplay = $('#sum_val');

$form.delegate('.form-control', 'change', function ()
{
    var sum = 0;
    $summands.each(function ()
    {
        var value = Number($(this).val());
        if (!isNaN(value)) sum += value;
    });

    $sumDisplay.val(sum);
});
*/
$(document).ready(function(){


  $(".form-control").keyup(function(){  
          var sum=0;
  /*if($(this).val().length==0)
  {   
    sum=sum-parseInt($(this).val())  ;     
  }
  else
  {
   sum=sum+parseInt($(this).val());
  }

      $("#sum_val").val(sum);
*/

//var text= new Array();

$("input[name='bidno[]']").each(function(){
  if($(this).val()!=null && $(this).val()!="")
  {
      //text.push($(this).val());   
    sum=sum+parseInt($(this).val())  ;   
  }
}); 
$("#sum_val").val(sum);

  });
  
});
</script>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading"  id="di1"><h4 style="text-align:center;">Place Your Bid</h4></div>
  <div class="panel-body"  id="di2">
  <button type="button" class="btn" style="background-color: #fcfc04; color: #372f2d;" data-toggle="modal" data-target="#myModal">Click Here.</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
  <div class="modal-header">

  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <div class="col-xs-8 modal-title">
    <h4 class="" id="na">Place Your Bid Here.<p id="div1" style="padding: 0px; margin: 0px;"></p></h4>
  </div>
  </div>
  <div class="modal-body">
    <form method="post">
  <input class="form-control " id="div" type="hidden" name="cityname">

  <div class="form-group row">
  <div class="col-xs-2" id="maina">
  <label for="ex1" id="na" >0</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="0">
  <input class="form-control" id="qty" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex2" id="na"  >1</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="1">
  <input class="form-control" id="qty" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex3" id="na" >2</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="2">
  <input class="form-control" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex3" id="na" >3</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="3">
  <input class="form-control" id="ex4" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex3" id="na" >4</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="4">
  <input class="form-control " id="ex5" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex3" id="na" >5</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="5">
  <input class="form-control" id="ex6" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex3" id="na" >6</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="6">
  <input class="form-control" id="ex7" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex3" id="na" >7</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="7">
  <input class="form-control" id="ex8" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex3" id="na" >8</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="8">
  <input class="form-control" id="ex9" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-2" id="maina">
  <label for="ex3" id="na" >9</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="9">
  <input class="form-control" id="ex10" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="bidno[]">
  </div>
  <div class="col-xs-3 form-group" id="maina">
  <label for="ex3" id="na">Total Points</label>
  <input class="form-control" id="sum_val"  value="" type="text" name="n10" >
  </div>
  </div>
  <div class="modal-footer" id="mainas">
    <input type="submit" name="submit" id="btns" value="Submit" class="btn" style="width: 30%;">

  <button type="button" class="btn" id="btns" style="width: 30%;" data-dismiss="modal">Close</button>
  </div> 
  </form>
  </div> 
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>   
  </section>
  </div>
    <script>

    </script>
 
  </section>
  <section>
  <div class="container"> 
  <div class="listing">
  <div class="row "  style="display:none;">

  <?php
  $ha='12:00 PM';
  $he='24:00 AM';
  $ho='02:00 PM';
  $time = date("H:m");
  $query=("select * from single");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  { 
   $id=$row['id'];
    $ti=$row['opentiming'];
 
  
  ?>
    
      <div class="col-sm-3 col-md-3 col-lg-3" style="float: left;">
      <div class="panel panel-primary " id="di">
        <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3>
        </div>
        <div class="panel-footer" id="di2"><h3 style="text-align:center;">OPEN:<?php echo $ti;?></h3>
        </div>
      </div>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3" style="float: left;">
      <div class="panel panel-primary " id="di">
        <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3>
        </div>
        <div class="panel-footer" id="di2"><h3 style="text-align:center;">Close:<?php echo $row['timing'];?></h3>
        </div>
      </div>
    </div>

    <?php
  }
  ?>
  </div>
</div>
</div><br>
<br>
          <br>

      </section>
    </div>
    <div id="menu1" class="tab-pane fade">
  <div class="container">
  <div class="table-responsive">          
  <table class="table"><br>
  <thead>
  <tr>
  <th>#</th>
  <th>Game Type</th>
  <th>Bid Amount</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  $query=("select * from insertgamerate");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <tr>
  <td><?php echo $i++;?></td>
  <td><?php echo $row['gametype'];?></td>
  <td><?php echo $row['bidamount'];?></td>
  </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
  </div>
  </div>
  </div>
  <div id="menu2" class="tab-pane fade">
  <br><section>
  <div class="container">    
  <div class="row">
  <?php
  $query=("select * from insertgametimeing");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-3">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3></div>
  <div class="panel-footer" id="di2"><h4 style="text-align:center;">Opening <?php echo $row['opentime'];?></h4></div>
  <div class="panel-footer" id="di2"><h4 style="text-align:center;">Cloesing <?php echo $row['closetime'];?></h4></div>
  </div>
  </div>
  <?php
  }
  ?>  
  </div>
  </div>
  <br>
  </section>
  </div> 
  </div>
  </div>
  </section>
  <section>
  <div class="container">
  <div class="row">
  <?php
  $query=("select * from insertnotices where id order by id desc limit 1");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-6">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Notices Board</h4></div>
  <div class="panel-body" id="di2"><?php echo $row['notices'];?></div>
  </div>
  </div>
  <?php
  }
  $query=("select * from insertnews where id order by id desc limit 1");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-6">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">News</h4></div>
  <div class="panel-body" id="di2"><?php echo $row['news'];?></div>
  </div>
  </div>
  <?php
  }
  ?>
  </section>
      


      
<?php
    
    include_once('footer.php');
?>
  </body>
</html>

