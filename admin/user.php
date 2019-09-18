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


?>

<div class="main-content">
<div class="main-content-inner">
<div class="page-content">
<div class="page-header">
<h1>User Approval</h1>
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
<div class="table-header">Results for "User Approval"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>User Id</th>
<th>User Name</th>
<th>User Email</th>
<th>Status</th>
<th>Active & Diactive</th>
<th style="display: none;">Start date</th>
<th style="display: none;" >Edit</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>User Id</th>
<th>User Name</th>
<th>User Email</th>
<th>Status</th>
<th>Active & Diactive</th>
<th style="display: none;">Start date</th>
<th style="display: none;" >Edit</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from signup where id order by id ASC";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['id']; ?></a>
</td>
<td><?php echo $row['username']; ?></td>
<td class="">
 <?php echo $row['email']; ?>
</td>
<?php
if ($row['status']=='Active') 
{
?>
<td  style='color:green;'><?php echo $row['status'];?></td>
<?php
}
else
{
?>
<td style='color:red;'><?php echo $row['status'];?></td>
<?php
}
?>
<td>
<?php
if ($row['status']=='Active') 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked value="1"  onchange="active_inactive_user(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>
                
</center>
<?php 
}
else
{
?>
<center>
<label class="switch">
<input type="checkbox" value="0"  onchange="active_inactive_user(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>
                
</center>
<?php
}
?>
</td>
<td style="display: none;">$320,800</td>
<td style="display: none;"><a class="green gss" href="editsingle.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deleteuser.php?delete=<?php echo $row ['id']; ?>">
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
          url: 'useractive.php',
          data: {val:val,id:id},
          success:function(result){
            if (result=='Active') {
              $
            }
          }

        });
      }
    </script>
</div>
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
