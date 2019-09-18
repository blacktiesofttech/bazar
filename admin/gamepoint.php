<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insertdata.php');

date_default_timezone_set("Asia/Kolkata");
 $time= date("H:i"); 

if(isset($_POST["send"]))
{
$add=$_POST["add"];
$name=$_POST["name"];
$id=$_POST["id"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$times = date("H:i:s");

$query="update point set  point=point+'$add' where userid='$id'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
$result=ins_record("point2","null,'$id','$name','Credit','Bid','$add','$date','$times'");
}



if(isset($_POST["sends"]))
{
  
$sub=$_POST["sub"];
$name=$_POST["name"];
$id=$_POST["id"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$times = date("H:i:s");

$query="update point set  point=point-'$sub' where userid='$id'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));
$result=ins_record("point2","null,'$id','$name','Debit','Bid','$sub','$date','$times'");
}

?>

<div class="main-content">
<div class="main-content-inner">
<div class="page-content">
<div class="page-header">
<h1>Game Point</h1>
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

  #mo
  {
    background-color: #372f2d;
    color: #fcfc04;
  }
  #mos
  {
    border-color: #fcfc04;
    background-color: #372f2d;
    color: #fcfc04;
  }
</style>
<div class="row">
<div class="col-xs-12">
<div class="space"></div>
<div class="row">
<div class="vspace-6-sm"></div>
<div class="col-sm-12">
<div class="tabbable">
<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
<li class="active">
<a data-toggle="tab" href="#home4">Game Point</a>
</li>
<!---
<li>
<a data-toggle="tab" href="#profile4">JODI</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown14">SINGLE PATTI</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown15">DOUBLE PATTI</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown16">TRIPLE PATTI</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown17">HALF SANGAM</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown18">FULL SANGAM</a>
</li>----->
</ul>
<div class="tab-content">
<div id="home4" class="tab-pane in active">
<div class="row ">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container"></div>
</div>
<div class="table-header">Results for "Game Point"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>User ID</th>
<th>User Name</th>
<th>Point</th>
<th style="display:;">Add Point</th>
<th>Subtract Point</th>
<th style="display: ;">Date</th>
<th style="display: ;">Time</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>User ID</th>
<th>User Name</th>
<th>Point</th>
<th style="display:;">Add Point</th>
<th>Subtract Point</th>
<th style="display: ;">Date</th>
<th style="display: ;">Time</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
$i=1;
  $sql="select * from point  WHERE `id` ORDER BY id ASC";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
    
  ?>
<tr>
<td>
  <?php echo $i++; ?>
</td>
<td><?php echo $row['username']; ?></td>
<td class="">
  <?php echo $row['point'] ?>
</td>
<td style="display: ;" class="hmsss">
    <div class="form-group" class="hmsss">
<div class="col-sm-12" class="hmsss">
<form method="post" class="hmsss12">
<input type="text" placeholder="" name="add" class="col-xs-5 col-sm-5" />
<input type="text" placeholder="Timing" style="display: none;" name="name" value="<?php echo $row['username'];?>" class="col-xs-8 col-sm-8" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['userid'];?>" class="col-xs-8 col-sm-8" />
<button type="submit" name="send" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
<td style="display: ;" class="hmsss">
    <div class="form-group" class="hmsss">
<div class="col-sm-12" class="hmsss">
<form method="post" class="hmsss12">
<input type="text" placeholder="" name="sub" class="col-xs-5 col-sm-5" />
<input type="text" placeholder="Timing" style="display: none;" name="name" value="<?php echo $row['username'];?>" class="col-xs-8 col-sm-8" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['userid'];?>" class="col-xs-8 col-sm-8" />
<button type="submit" name="sends" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
<td  style="display: ;">
    <?php echo $row['date_time']; ?>
</td>
<td  style="display: ;">
    <?php echo $row['times']; ?>
</td>
   <td><a class="red gss" href="deletepoint.php?delete=<?php echo $row ['id']; ?>">
        
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script >
      function active_inactive_user(val,id){
        $.ajax({
          type: 'post',
          url: 'change.php',
          data: {val:val,id:id},
          success:function(result){
           
          }

        });
      }

      function active_inactive_user1(vals,ids){
        $.ajax({
          type: 'post',
          url: 'change.php',
          data: {vals:vals,ids:ids},
          success:function(result){
           
          }

        });
      }
    </script>
</table>
</div>
</div>
</div>
<!-- PAGE CONTENT ENDS -->

<!-- PAGE CONTENT ENDS -->
<div class="main-content-inner">
<div class="row">
<div class="col-xs-12">
<div class="row">
<div class="col-sm-6">
<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Add Game Point</a>
<div id="dialog-message" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" role="form">

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="" placeholder="User Id" name="userid" class="col-xs-12 col-sm-12" />
</div>
</div>


<div class="form-group">
<div class="col-sm-12">
<input type="text" id="" placeholder="User Name" name="username" class="col-xs-12 col-sm-12" />
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Point" name="point" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit" placeholder="Insert Point" name="insertpoint" value="Insert Point" class="col-xs-12 col-sm-12" />
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
<!-- /.row -->
</div><!-- /.col -->
</div><!-- /.row -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
      $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );


  </script>
<?php
include_once('footer.php');
?>
