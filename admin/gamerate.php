
<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insertdata.php');

if(isset($_POST["send"]))
{
  
$bidamount=$_POST["bidamount"];
$id=$_POST["id"];

$query="update insertgamerate set bidamount='$bidamount' where id='$id'";
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
  
$winamount=$_POST["winamount"];
$id=$_POST["id"];

$query="update insertgamerate set winamount='$winamount' where id='$id'";
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
<h1>Game Rate</h1>
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
<div class="table-header">Results for "Game Rate"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>Game Type</th>
<th>Current Rate</th>
<th>Win Amount</th>
<th>Update Rate</th>
<th>Update Win</th>
<th style="display: none;">Start date</th>
<th style="display: none;" >Edit</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>Game Type</th>
<th>Current Rate</th>
<th>Win Amount</th>
<th>Update Rate</th>
<th>Update Win</th>
<th style="display: none;">Start date</th>
<th style="display: none;" >Edit</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from insertgamerate";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['gametype']; ?></a>
</td>
<td><?php echo $row['bidamount']; ?></td>
<td><?php echo $row['winamount']; ?></td>
<td class="">
  <div class="form-group">
<div class="col-sm-12">
<form method="post">
<input type="text" placeholder="Bid Amount" name="bidamount" class="col-xs-8 col-sm-8" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="send" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
<td  style="display: ;">
  <div class="form-group">
<div class="col-sm-12">
<form method="post">
<input type="text" placeholder="Win Amount" name="winamount" class="col-xs-8 col-sm-8" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="sends" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
<td style="display: none;">$320,800</td>
<td style="display: none;"><a class="green gss" href="editsingle.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deletegamerate.php?delete=<?php echo $row ['id']; ?>">
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
<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Add Game Rate</a>
<div id="dialog-message" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" role="form">

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="lastname" placeholder="Game Type" name="gametype" class="col-xs-12 col-sm-12" />
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Bid Amount & Win Amount" name="bidamount" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit" placeholder="Insert Game Rate" name="insertgamerate" value="Insert Game Rate" class="col-xs-12 col-sm-12" />
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
