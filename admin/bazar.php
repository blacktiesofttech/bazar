<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insert.php');
include_once('controller.php');
?>

<div class="main-content">
<div class="main-content-inner">
<div class="page-content">
<div class="page-header">
<h1>BAZAR</h1>
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
<a data-toggle="tab" href="#home4">BAZAR</a>
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
<div class="table-header">Results for "BAZAR"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>Name</th>
<th>Open-Time</th>
<th>Close-Time</th>
<th>Open Bazar</th>
<th>Close Bazar</th>
<th style="display: none;">Start date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>Name</th>
<th>Open-Time</th>
<th>Close-Time</th>
<th>Open Bazar</th>
<th>Close Bazar</th>
<th style="display: none;">Start date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from single  WHERE id ORDER BY id ASC";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
    $id = $row['id'];
    $item_name = $row['cityname'];
    $item_code = $row['opentiming'];
    $item_category = $row['timing'];
  ?>
<tr>
<td>
<a href="#"><?php echo $item_name; ?></a>
</td>
<td><?php echo $item_code; ?></td>
<td class=""><?php echo $item_category ; ?></td>
<td>
<?php
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked  onchange="active_inactive_user(this.value,<?php echo $id;?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}
if ($row['displayopen']==0) 
{
?>
<center>
<label class="switch">
<input type="checkbox"  value="1"  onchange="active_inactive_user(this.value,<?php echo $id;?>)" >
<span class="slider round" ></span>
</label>           
</center>

<?php
}
if ($row['displayopen']==2) 
{
?>
<center>
<label class="switch">
<input type="checkbox"  value="1"  onchange="active_inactive_user(this.value,<?php echo $id;?>)" >
<span class="slider round" ></span>
</label>           
</center>

<?php
}
?>
</td>
<td>
<?php
if ($row['displayopen']==2) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked value="2"  onchange="active_inactive_user1(this.value,<?php echo $id;?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}
if ($row['displayopen']==0) 
{
?>
<center>
<label class="switch">
<input type="checkbox"  value="2"  onchange="active_inactive_user1(this.value,<?php echo $id;?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox"  value="2"  onchange="active_inactive_user1(this.value,<?php echo $id;?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}

?>
</td>
<td style="display: none;">$320,800</td>
<td>
<a href="#edit<?php echo $id;?>" data-toggle="modal">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a>
</td>
    <td><a class="red gss" href="deletesingle.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a>
</td>
<center>
<div  id="edit<?php echo $id; ?>" class="modal fade" role="dialog">


<form method="post" class="form-horizontal" role="form">
<div class="modal-dialog modal-lg">
                                <!-- Modal content-->
<div class="modal-content">
<div class="modal-header" id="mo">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Edit Bazar</h4>
</div>
<div class="modal-body">
<input type="hidden" name="edit_item_id" value="<?php echo $id; ?>">



<div class="form-group">
<div class="col-sm-12">
<input type="text" class="form-control" id="item_name" name="item_name" value="<?php echo $item_name; ?>" placeholder="Bazar Name" required autofocus>

</div>
</div>
<br>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="text"  class="form-control" id="item_code" name="item_code" value="<?php echo $item_code; ?>" placeholder="Open Timing" required>

</div>
</div>


<br>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="text" class="form-control" id="item_category" name="item_category" value="<?php echo $item_category; ?>" placeholder="Close Timing" required>

</div>
</div>
<br>
<br>
</div>
<div class="modal-footer" id="mo">
<button type="submit" class="btn " id="mos" name="update_item"><span class="glyphicon glyphicon-edit"></span> Edit Bazar</button>
<button type="button" class="btn" id="mos" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
</div>
</div>
</div>
</form>
</div>
</center>
</tr>
<?php
  }

                        //Update Items
                        if(isset($_POST['update_item'])){
                            $edit_item_id = $_POST['edit_item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $sql = "UPDATE single SET 
                                cityname='$item_name',
                                opentiming='$item_code',
                                timing='$item_category'
                                WHERE id='$edit_item_id' ";
                            if ($con->query($sql) === TRUE) {
                                echo '<script>window.location.href="bazar.php"</script>';
                            } else {
                                echo "Error updating record: " . $con->error;
                            }
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
<div class="main-content-inner">
<div class="row">
<div class="col-xs-12">
<div class="row">
<div class="col-sm-6">
<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Add Bazar</a>
<div id="dialog-message" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" role="form">
<div class="form-group">
<div class="col-sm-12">
<input type="text" id="firstname" placeholder="Bazar Name" name="cityname" class="col-xs-12 col-sm-12" />

</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="lastname" placeholder="Open Timing" name="open" class="col-xs-12 col-sm-12" />
<!---input type="hidden" class="form-control hm2" id="fullname" placeholder="" name="citynametype"--->
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Close Timing" name="timing" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit" placeholder="City Name" name="insertsingle" value="Add Bazar" class="col-xs-12 col-sm-12" />
</div>
</div>

</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#firstname, #lastname").keyup(function () {
var a = $("#firstname").val();
var b = $("#lastname").val();
var c= a + ' ' + b;
$("#fullname").val(c);
});
});
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
