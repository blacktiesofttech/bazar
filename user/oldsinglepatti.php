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
$Jodi='Single Patti';
$bidnumber=$_POST["ham"];
$point1=$_POST["ha"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;

if ($cityname==$city." "."Open") {
//echo "Hello";
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber','$point1','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber','$point1','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point1','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber','$point1','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber','$point1','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point1','$date','$time'");
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

 if(isset($_POST["submit"]))
{
$cityname=$_POST["cityname"];
$Jodi='Single Patti';
$bidnumber1=$_POST["ham2"];
$point2=$_POST["ha2"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point2==null  && $bidnumber1==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber1','$point2','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber1','$point2','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point2','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber1','$point2','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber1','$point2','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point2','$date','$time'");
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
$Jodi='Single Patti';
$bidnumber2=$_POST["ham3"];
$point3=$_POST["ha3"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point3==null  && $bidnumber2==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {

$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber2','$point3','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber2','$point3','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point3','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber2','$point3','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber2','$point3','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point3','$date','$time'");
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
$Jodi='Single Patti';
$bidnumber3=$_POST["ham4"];
$point4=$_POST["ha4"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point4==null  && $bidnumber3==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {

$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber3','$point4','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber3','$point4','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point4','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber3','$point4','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber3','$point4','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point4','$date','$time'");
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
$Jodi='Single Patti';
$bidnumber4=$_POST["ham5"];
$point5=$_POST["ha5"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point5==null  && $bidnumber4==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {

$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber4','$point5','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber4','$point5','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point5','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber4','$point5','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber4','$point5','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point5','$date','$time'");
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
$Jodi='Single Patti';
$bidnumber5=$_POST["ham6"];
$point6=$_POST["ha6"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point6==null  && $bidnumber5==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {

$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber5','$point6','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber5','$point6','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point6','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber5','$point6','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber5','$point6','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point6','$date','$time'");
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
$Jodi='Single Patti';
$bidnumber6=$_POST["ham7"];
$point7=$_POST["ha7"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point7==null  && $bidnumber6==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {

$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber6','$point7','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber6','$point7','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point7','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber6','$point7','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber6','$point7','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point7','$date','$time'");
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
$Jodi='Single Patti';
$bidnumber7=$_POST["ham8"];
$point8=$_POST["ha8"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point8==null  && $bidnumber7==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {

$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber7','$point8','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber7','$point8','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point8','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber7','$point8','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber7','$point8','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point8','$date','$time'");
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
$Jodi='Single Patti';
$bidnumber8=$_POST["ham9"];
$point9=$_POST["ha9"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point9==null  && $bidnumber8==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {

$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber8','$point9','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber8','$point9','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point9','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber8','$point9','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber8','$point9','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point9','$date','$time'");
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
$Jodi='Single Patti';
$bidnumber9=$_POST["ham10"];
$point10=$_POST["ha10"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$sql="select * from single";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
while($row_1=mysqli_fetch_array($result_1))
{
$city=$row_1['cityname'] ;
$open=$row_1['open'] ;
if ($point10==null && $bidnumber9==null) {
 //echo "<br>" ."Hello";
}
else 
{
if ($cityname==$city." "."Open") {

$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber9','$point10','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Open','$Jodi','$bidnumber9','$point10','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point10','$date','$time'");
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
$result=ins_record("singlepattibid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber9','$point10','$date','$time'");
$result=ins_record("allbid","null,'$userid','$username','$email','$city','Close','$Jodi','$bidnumber9','$point10','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Credit','User Bid','$point10','$date','$time'");
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
   
    #btns
    {
      font-size: 10px;
      text-align: center;
    }

    #naaa
    {
      width: 50%;
      float: left;
      padding-bottom: 0px;
    }
    #naaaa
    {
      width: 50%;
      float: right;
      padding-bottom: 0px;
    }
    #naaaa input
    {
      font-size: 14px;
      margin: 0px;
    }
    #naaa input
    {
      font-size: 14px;
      margin: 0px;
    }
    #myModal
    {
      width: 90%;
    }
    #nas
    {
      width: 50%;
    }
}
</style>     
    <section>
      <div class="container">
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Single Patti</a></li>
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

?>
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Points</h4></div>
  <div class="panel-body" id="di2"><h4 style="text-align:center;"><?php echo $row['point']-$row1['SUM(`point`)']-$fullsangampoint-$halfsangampoint ;?></h4></div>
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
   date_default_timezone_set("Asia/Kolkata");
    $time=date("H:i");
  $query_2=("SELECT * FROM `single` WHERE `displayopen`='0' Or `displayopen`='2' ORDER BY `opentiming` ASC");
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
   $query_4=("SELECT * FROM `single` WHERE `displayopen`='0' or `displayopen`='1' ORDER BY `timing` ASC");
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

 /* 
$(document).ready(function () {
$("#itext, #itext2").keyup(function () {
var a = $("#itext").val();
var b = $("#itext2").val();
var c= a ++ b;
$("#sum_val").val(c);
});
});

    $(function(){
        $('#ibtn').click(function(){
          $('#itex').clone().attr('name','ham' + $(this).index()).insertAfter('#itex');
          $('#itext').clone().attr('name','ha' + $(this).index()).insertAfter('#itext');
        })
      })


  
$(document).ready(function(){
  var i = 1;
  $('#ibtn').click(function(){
    i ++;
    $('#naaa').append('<label for="inputjodi" id="na">Single Patti No.</label><input type="text" class="form-control" id="itex'+i+'" placeholder="Type Single Patti Here." style="margin-bottom: 10px;" name="ham'+i+'">');
    $('#naaaa').append('<label for="inputjodi" id="na">Bid Amount</label><input type="text" class="form-control" id="itext'+i+'" placeholder="Type Bidding Amount" style="margin-bottom: 10px;" name="ha'+i+'">');
  });
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

$("input[name='ha[]']").each(function(){
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
<div class="panel-heading" id="di1"><h4 style="text-align:center;">Place Your Bid</h4></div>
<div class="panel-body" id="di2">         
<button type="button" class="btn" style="background-color: #fcfc04; color: #372f2d;" data-toggle="modal" data-target="#myModal">Click Here.</button>
  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
      <!-- Modal content-->
<div class="modal-content">
<div class="col-xs-8 modal-title">
<h4 class="" id="na">Place Your Bid Here.<p id="div1" style="padding: 0px; margin: 0px;"></p></h4>
</div>
<div class="modal-body">
<form method="post" name="myform" id="form">
<input class="form-control " id="div" type="hidden" name="cityname">

<div class="form-group row">
<div class="form-group col-md-6 " id="naaa" style="">
<label for="inputjodi" id="na">Jodi No.</label>
<input type="text" class="form-control" id="itex" name="ham" placeholder="Type Jodi" style="margin-bottom: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
</div>
<div class="form-group col-md-6" id="naaaa">
<label for="inputjodiamount" id="na">Bid Amount</label>
<input type="text" class="form-control new" id="itext" name="ha[]" placeholder="Type Bid Amount" style="margin-bottom: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
</div>
<div class="form-group col-md-6 " id="naaa" style="">
<label for="inputjodi" id="na">Jodi No.</label>
<input type="text" class="form-control" id="itex" name="ham2" placeholder="Type Jodi" style="margin-bottom: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
</div>
<div class="form-group col-md-6" id="naaaa">
<label for="inputjodiamount" id="na">Bid Amount</label>
<input type="text" class="form-control new" id="itext" name="ha[]" placeholder="Type Bid Amount" style="margin-bottom: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
</div>
<div class="form-group col-md-6 " id="naaa" style="">
<label for="inputjodi" id="na">Jodi No.</label>
<input type="text" class="form-control" id="itex" name="ham3" placeholder="Type Jodi" style="margin-bottom: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
</div>
<div class="form-group col-md-6" id="naaaa">
<label for="inputjodiamount" id="na">Bid Amount</label>
<input type="text" class="form-control new" id="itext" name="ha[]" placeholder="Type Bid Amount" style="margin-bottom: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
</div>
<div class="col-xs-3" id="nas">
<label for="ex3" id="na">Total Points</label>
<input class="form-control" id="sum_val" type="text" name="n10">
</div>
</div>
<div class="modal-footer">
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
  $query=("select * from singlepatti");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  { 
   $id=$row['id'];
    $ti=$row['timing'];

  
  ?>
    
      <div class="col-sm-3 col-md-3 col-lg-3" style="float: left;">
      <div class="panel panel-primary " id="di">
        <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3>
        </div>
        <div class="panel-footer" id="di2"><h3 style="text-align:center;">Open : <?php echo $row['open'];?></h3>
        </div>
      </div>
  
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3" style="float: left;">
      <div class="panel panel-primary " id="di">
        <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3>
        </div>
        <div class="panel-footer" id="di2"><h3 style="text-align:center;">Close : <?php echo $ti;?></h3>
        </div>
      </div>
  
    </div>

    <?php
  }
  ?>
      
  
  </div>
</div><br>
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
  <th>Win Amount</th>
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
  <td><?php echo $row['winamount'];?></td>
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
      




    <?php include_once('footer.php');
?>
  </body>
</html>