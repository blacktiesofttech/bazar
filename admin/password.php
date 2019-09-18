
<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insertdata.php');

if(isset($_POST["send"]))
{
  
$password=$_POST["password"];
$id=$_POST["id"];

$query="update signup set password='$password' where id='$id'";
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
  
$password=$_POST["password"];
$id=$_POST["id"];

$query="update admin set password='$password' where id='$id'";
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
<h1>Password</h1>
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
<div class="table-header">Results for "Password"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>#</th>
<th>User Id</th>
<th>User Name</th>
<th style="display: ;">Email</th>
<th>Phone Number</th>
<th style="display: ;" >Password</th>
<th style="display: ;">Password Update</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>#</th>
<th>User Id</th>
<th>User Name</th>
<th style="display: ;">Email</th>
<th>Phone Number</th>
<th style="display: ;" >Password</th>
<th style="display: ;">Password Update</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
$i=1;
  $sql="select * from admin";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<?php echo $i++; ?>
</td>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td class="">
<?php echo $row['phone']; ?>
</td>
<td  style="display: ;">
 <?php echo $row['password']; ?>
</td>
<td style="display: ;">
 <div class="form-group">
<div class="col-sm-12">
<form method="post">
<input type="text" placeholder="Password" name="password" class="col-xs-8 col-sm-8" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="sends" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>
<td><a class="red gss" href="deleteid.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>
<thead>
<tr>
<th colspan="8" style="text-align: center;">User</th>
</tr>
</thead>
   
<?php
$i=1;
  $sql="select * from signup";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<?php echo $i++; ?>
</td>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td style="display: ;"><?php echo $row['phone']; ?></td>
<td style="display: ;"><?php echo $row['password']; ?></td>
<td class="">
  <div class="form-group">
<div class="col-sm-12">
<form method="post">
<input type="text" placeholder="Password" name="password" class="col-xs-8 col-sm-8" />
<input type="text" placeholder="Timing" style="display: none;" name="id" value="<?php echo $row['id'];?>" class="col-xs-8 col-sm-8" />

<button type="submit" name="send" class="bh"><i class="ace-icon fa fa-refresh"></i></button>
</form>
</div>
</div>
</td>


<td><a class="red gss" href="deleteuserid.php?delete=<?php echo $row ['id']; ?>">
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

</div>
</div><!-- /.col -->
</div><!-- /.row -->


</div>
</div>
</div>
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
