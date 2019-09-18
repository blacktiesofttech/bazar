<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insertdata.php');



if(isset($_POST["send"]))
{
  
$open=$_POST["open"];
$id=$_POST["id"];

$query="update insertgametimeing set opentime='$open' where id='$id'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));

if($query)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}

if(isset($_POST["sends"]))
{
  
$close=$_POST["close"];
$id=$_POST["id"];

$query="update insertgametimeing set closetime='$close' where id='$id'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));

if($query)
{
//echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}

?>

<div class="main-content">
<div class="main-content-inner">
<div class="page-content">
<div class="page-header">
<h1>Game Timing</h1>
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
  }
</style>
<div class="row ">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container"></div>
</div>
<div class="table-header">Results for "Game Timing"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>ID</th>
<th>City Name</th>
<th>Open Time</th>
<th>Close Time</th>
<th>Update Open</th>
<th style="display: none;">Start date</th>
<th>Update Close</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>ID</th>
<th>City Name</th>
<th>Open Time</th>
<th>Close Time</th>
<th>Update Open</th>
<th style="display: none;">Start date</th>
<th>Update Close</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from insertgametimeing  WHERE `id` ORDER BY id ASC";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['id']; ?></a>
</td>
<td><?php echo $row['cityname']; ?></td>
<td class="">
  <?php echo $row['opentime']; ?>
</td>

<td>
    <?php echo $row['closetime']; ?>
</td>
<td  style="display: none;">

</td>
<td>
      <div class="form-group">
<div class="col-sm-12">
<form method="post">
<input type="text" placeholder="Open Time" name="open" class="col-xs-8 col-sm-8" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="send" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
<td>
    <div class="form-group">
<div class="col-sm-12">
<form method="post">
<input type="text" placeholder="Close Time" name="close" class="col-xs-8 col-sm-8" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="sends" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
    <td><a class="red gss" href="deletegametime.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>

</div>
</div>
</div>

<!-- PAGE CONTENT ENDS -->
<div class="main-content-inner">
<div class="row">
<div class="col-xs-12">
<div class="row">
<div class="col-sm-6">
<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Add Game Timing</a>
<div id="dialog-message" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" role="form">

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />
</div>
</div>


<div class="form-group">
<div class="col-sm-12">
<input type="text" id="" placeholder="Open Time" name="opentime" class="col-xs-12 col-sm-12" />
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Close Time" name="closetime" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit" placeholder="Insert Game Timeing" name="insertgametimeing" value="Insert Game Timeing" class="col-xs-12 col-sm-12" />
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
include_once('footer.php');
?>
