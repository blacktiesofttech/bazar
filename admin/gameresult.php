<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insertdata.php');

date_default_timezone_set("Asia/Kolkata");
 $time= date("H:i"); 

if(isset($_POST["send"]))
{
  
$satta=$_POST["satta"];
$satta1=$_POST["satta1"];
$ref_id=$_POST["ref_id"];
$id=$_POST["id"];
$open=$_POST["open"];
if($satta==null)
{
if($open>=$time)
{
 
//echo "Hello";

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
$names=$row_1['username'];
$bid=$row_1['bidnumber'];
$citns=$row_1['cityname'];
$bidss=$row_1['point'];
$bids=$bidss*$singlewin;
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$times = date("H:i:s");


$query=("SELECT * FROM single Where id='$ref_id'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
$citn=$row['cityname'];

if ($citns==$citn) 
{


$sql="select * from point where username='$names'";
$result_1=mysqli_query($con,$sql) or die(mysqli_query($con));
$row_1=mysqli_fetch_array($result_1);
 $name=$row_1['username'];

if ($name==null) 
{
    
  $result=ins_record("point","null,'$id','$names','$bids','$date','$times'");
$result=ins_record("point1","null,'$id','$names','$bids','$date','$times'");
$result=ins_record("point2","null,'$id','$names','Credit','Win Bid','$bids','$date','$times'");


if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
////echo alrt_msg("Data Not Insert");
}
}
elseif ($name==$name) 
{
$result="UPDATE `point` SET `point` = `point`+'$bids' WHERE  username='$names'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$id','$names','$bids','$date','$times'");
$result=ins_record("point2","null,'$id','$names','Credit','Win Bid','$bids','$date','$times'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$times'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
//echo alrt_msg("Data Not Insert");
}
}
}
}


}
else
{
//echo alrt_msg("Data Not Insert");
}

    # code...
}
else
{
  $sh='myModal444';
}
}
if($satta1==null)
{

if($open>=$time)
{
  //echo "helo";
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
$names=$row_1['username'];
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
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$times = date("H:i:s");

$query=("SELECT * FROM single Where id='$ref_id'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
$citn=$row['cityname'];

if ($citns==$citn) 
{
//echo "hello";
$sql="select * from point where username='$names'";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$name=$row['username'];

if ($name==null) 
{
  $result=ins_record("point","null,'$id','$names','$bids','$date','$times'");
$result=ins_record("point1","null,'$id','$names','$bids','$date','$times'");

$result=ins_record("point2","null,'$id','$names','Credit','Win Bid','$bids','$date','$times'");


if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
//echo alrt_msg("Data Not Insert");
}
}
elseif ($name==$name) 
{
$result="UPDATE `point` SET `point` = `point`+'$bids' WHERE  username='$names'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$id','$names','$bids','$date','$times'");

$result=ins_record("point2","null,'$id','$names','Credit','Win Bid','$bids','$date','$times'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$times'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
//echo alrt_msg("Data Not Insert");
}
}
  # code...
}
}
}

}
else
{
//echo alrt_msg("Data Not Insert");
}
}
else
{
  $sh='myModal444';
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

if($close>=$time)
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
$names=$row_1['username'];
$bid=$row_1['bidnumber'];
$bidss=$row_1['point'];
$bids=$bidss*$singlewin;
$citns=$row_1['cityname'];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$times = date("H:i:s");


$query=("SELECT * FROM single Where id='$ref_id'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
$citn=$row['cityname'];

if ($citns==$citn) 
{



$sql="select * from point where username='$names'";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$name=$row['username'];

if ($name==null) 
{
  $result=ins_record("point","null,'$id','$names','$bids','$date','$times'");
$result=ins_record("point1","null,'$id','$names','$bids','$date','$times'");

$result=ins_record("point2","null,'$id','$names','Credit','Win Bid','$bids','$date','$times'");


if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
//echo alrt_msg("Data Not Insert");
}
}
elseif ($name==$name) 
{
$result="UPDATE `point` SET `point` = `point`+'$bids' WHERE  username='$names'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$id','$names','$bids','$date','$times'");

$result=ins_record("point2","null,'$id','$names','Credit','Win Bid','$bids','$date','$times'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$times'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
//echo alrt_msg("Data Not Insert");
}
}
}
}




}
else
{
////echo alrt_msg("Data Not Insert");
}
}
else
{
 $hs='myModal444';
}
}

if($satta1==null)
{

if($close>=$time)
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
$names=$row_1['username'];
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
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$times = date("H:i:s");

$query=("SELECT * FROM single Where id='$ref_id'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
$citn=$row['cityname'];

if ($citns==$citn) 
{


$sql="select * from point where username='$names'";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$name=$row['username'];

if ($name==null) 
{
  $result=ins_record("point","null,'$id','$names','$bids','$date','$times'");
$result=ins_record("point1","null,'$id','$names','$bids','$date','$times'");

$result=ins_record("point2","null,'$id','$names','Credit','Win Bid','$bids','$date','$times'");


if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
//echo alrt_msg("Data Not Insert");
}
}
elseif ($name==$name) 
{
$result="UPDATE `point` SET `point` = `point`+'$bids' WHERE  username='$names'";
mysqli_query($con,$result);
$result=ins_record("point1","null,'$id','$names','$bids','$date','$times'");

$result=ins_record("point2","null,'$id','$names','Credit','Win Bid','$bids','$date','$times'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date','$times'");

if($result)
{
//echo alrt_msg("Data Insert");
}
else
{
//echo alrt_msg("Data Not Insert");
}
}
  # code...
}

}





}

}
else
{
//echo alrt_msg("Data Not Insert");
}
}
else
{
  $hs='myModal444';
}
}
}

?>

<div class="main-content">
<div class="main-content-inner">
<div class="page-content">
<div class="page-header">
<h1>Game Result</h1>
</div><!-- /.page-header -->

<style type="text/css">
  .vd th
  {
    background-color:#372f2d ;
    color: #fcfc04;
  }
  .vd td
  {
    background-color:#fcfc04;
    color: #372f2d;
  }
  .bh
  {
    background-color: Transparent;
    border: none;
    padding-top: 5px;
    padding: 0px;
    margin:0px;
    width:10px;
  }
  .hmsss
  {
    padding: 0px;
    margin:0px; 
    width:20%;
  }
  .hmsss12
  {
    padding: 0px;
    margin:0px; 
    width:100%;
    right:0px;
    left:0px;
    
  }
  .hmss2
  {
     width:5px; 
  }

    #hidesss
    {
      display: none;
    }


@media screen and (max-width: 980px) and (min-width: 340px)
{
    
}

@media screen and (max-width: 599px) and (min-width: 0px)
{
    #mon
    {
      width: 40%;
      margin-right: 5px;
    }
    .bhs
    {
      width: 30%;
      font-size: 12px;
    }
    #hidesss1
    {
      display: none;
    }

    #hidesss
    {
      display: block;
    }
}
  #myModal444
  {
    top: 30%;
  }
</style>

<div class="row ">
<div class="col-xs-12">
<div class="row"  id="hidesss1">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container"></div>
</div>
<div class="table-header">Results for "Game Result"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>ID</th>
<th>Bazar Name</th>
<th>Open Timing</th>
<th style="display: ;">Close Timing</th>
<th style="display: ;">Bazar Result</th>
<th style="display:none ;">Close Bazar Result</th>
<th style="display: ;" class="hmsss">Time Bazar Open</th>
<th class="hmsss">Time Bazar Close</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>ID</th>
<th>Bazar Name</th>
<th>Open Timing</th>
<th style="display: ;">Close Timing</th>
<th style="display: ;">Bazar Result</th>
<th style="display:none ;">Close Bazar Result</th>
<th style="display: ;" class="hmsss">Time Bazar Open</th>
<th class="hmsss">Time Bazar Close</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $i=1;
  $sql="SELECT * FROM single INNER JOIN insertgameresult ON single.id=insertgameresult.ref_id";
  $result=mysqli_query($con,$sql);
  if (mysqli_num_rows($result)>=null) {
    # code...
  
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $i++; ?></a>
</td>
<td><?php echo $row['cityname']; ?></td>
<td class="">
  <?php echo $row['opentiming']; ?>
</td>
<td  style="display: ;">
  <?php echo $row['timing']; ?>
</td>
<td  style="display: ;">
  <?php echo $row['sattanumber']; ?><?php
  if($row['singleopen']!=null)
  {
     echo '-'. $row['singleopen'];
  }
  ?><?php
  if($row['singleclose']!=null)
  {
      
      echo $row['singleclose'];
  }
  ?><?php
  if($row['sattanumberclose']!=null)
  {
      
      echo '-'. $row['sattanumberclose'];
  }
  ?>

</td>
<td  style="display:none ;">
  

</td>
<td style="display: ;" class="hmsss">
    <div class="form-group" class="hmsss">
<div class="col-sm-12" class="hmsss">
<form method="post" class="hmsss12">
<input type="text" placeholder="" name="satta" class="col-xs-5 col-sm-5" />
<input type="hidden" placeholder="" value="<?php echo $row['opentiming'];?>" name="open" class="col-xs-3 col-sm-3" />
<input type="text" placeholder="" name="satta1" class="col-xs-3 col-sm-3" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />
<input type="hidden" placeholder="Timing" style="display: ;" name="ref_id" value="<?php echo $row['ref_id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="send" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
<td class="hmsss">
<div class="form-group">
<div class="col-sm-12">
<form method="post">
<input type="text" placeholder="" name="satta" class="col-xs-5 col-sm-5" />
<input type="hidden" placeholder="" value="<?php echo $row['opentiming'];?>" name="open" class="col-xs-3 col-sm-3" />
<input type="hidden" placeholder="" value="<?php echo $row['timing'];?>" name="close" class="col-xs-3 col-sm-3" />
<input type="text" placeholder="" name="satta1" class="col-xs-3 col-sm-3" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />
<input type="hidden" placeholder="Timing" style="display: ;" name="ref_id" value="<?php echo $row['ref_id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="sends" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
<td class="hmss2"><a class="red gss" href="deletegameresult.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  }
  ?>  
</tbody>
</table>




</div>
</div>
</div>

<div class="row" id="hidesss">
<div class="col-xs-12">
<div class="clearfix">
 
  <div class="row">
  <?php
  $query=("SELECT * FROM single INNER JOIN insertgameresult ON single.id=insertgameresult.ref_id");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-6">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?> Open <?php  $row['cityname']; ?></h3></div>
  <div class="panel-footer" id="di2"><h4 style="text-align:center;">    
  <div class="form-group" class="hmsss">
<div class="col-sm-12" class="hmsss">
<form method="post" class="hmsss12">
<input type="text" placeholder="" id="mon" name="satta" class="col-xs-5 col-sm-5" />
<input type="hidden" placeholder="" value="<?php echo $row['opentiming'];?>" name="open" class="col-xs-3 col-sm-3" />
<input type="hidden" placeholder="" value="<?php echo $row['timing'];?>" name="close" class="col-xs-3 col-sm-3" />
<input type="text" placeholder="" id="mons" name="satta1" class="col-xs-3 col-sm-3" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />
<input type="hidden" placeholder="Timing" style="display: ;" name="ref_id" value="<?php echo $row['ref_id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="send" class="bhs" style="background-color: ;">Submit</button>
</form>
</div>
</div>
</h4>
<br>
<br>
<br>
</div>
  </div>
  </div>


  <div class="col-sm-6">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?> Close <?php  $row['timing']; ?></h3></div>
 <div class="panel-footer" id="di2">
 <h4 style="text-align:center;">    
<div class="form-group">
<div class="col-sm-12">
<form method="post">
<input type="text" placeholder="" name="satta" class="col-xs-5 col-sm-5" id="mon" />
<input type="hidden" placeholder="" value="<?php echo $row['opentiming'];?>" name="open" class="col-xs-3 col-sm-3" />
<input type="hidden" placeholder="" value="<?php echo $row['timing'];?>" name="close" class="col-xs-3 col-sm-3" />

<input type="text" placeholder="" name="satta1" class="col-xs-3 col-sm-3" id="mons" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />
<input type="hidden" placeholder="Timing" style="display: ;" name="ref_id" value="<?php echo $row['ref_id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="sends" class="bhs" style="background-color: ;">Submit</button>
</form>
</div>
</div>
</h4>
<br>
<br>
<br>
</div>
  </div>
  </div>
  <?php
  }
  ?>  
  </div>
</div>
</div>
</div>

<!-- PAGE CONTENT ENDS -->
<div class="main-content-inner">
<div class="row">
<div class="col-xs-12">
<div class="row">
<div class="col-sm-6">
<a href="#" id="id-btn-dialog1" style="display: none;" class="btn btn-purple btn-sm">Add Game Result</a>
<div id="dialog-message" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" role="form">

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="lastname" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Satta Number" name="sattanumber" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit" placeholder="Insert Game Result" name="insertgameresult" value="Insert Game Result" class="col-xs-12 col-sm-12" />
</div>
</div>

</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>

</div>
</div>

</div><!-- #dialog-message -->
</div><!-- ./span -->
</div><!-- ./row -->
</div><!-- /.page-content -->
</div>
</div>
</div><!-- /.col -->
</div><!-- /.row -->


</div>
</div>
</div>

 <?php
 if($sh)
 {
 ?>
<div id='<?php echo $sh;?>' class='modal fade'>
<div class='modal-dialog'>
<div class='modal-content'>
<div class='modal-header'>             
<button type='button' class='close' data-dismiss='modal' aria-hidden='true'><input type='submit'  name='ip' value='&times;'></button>
<center><h4 class='modal-title'>You Can't Upload Before Open Time</h4></center>
</div>
</div>
</div>
<?php
}
else if($hs)
{
?>
<div id='<?php echo $hs;?>' class='modal fade'>
<div class='modal-dialog'>
<div class='modal-content'>
<div class='modal-header'>             
<button type='button' class='close' data-dismiss='modal' aria-hidden='true'><input type='submit'  name='ip' value='&times;'></button>
<center><h4 class='modal-title'>You Can't Upload Before Close Time</h4></center>
</div>
</div>
</div>
<?php
}
?>




    <script type="text/javascript">
  $(document).ready(function(){
    $("#myModal444").modal('show');
  });
</script>
<?php
include_once('footer.php');
?>
