<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
//include_once('insert.php');
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
<th>#</th>
<th>User Name</th>
<th>Transaction Type</th>
<th>Expense Type</th>
<th>Point</th>
<th>Date</th>
<th>Time</th>
<th>Edit & Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>#</th>
<th>User Name</th>
<th>Transaction Type</th>
<th>Expense Type</th>
<th>Point</th>
<th>Date</th>
<th>Time</th>
<th>Edit & Delete</th>
</tr>
</tfoot>

<tbody>
<?php
$i=1;
  $sql="select * from point2";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  
    $id = $row['id'];
    $item_name = $row['username'];
    $item_code = $row['transactiontype'];
    $item_category = $row['expensetype'];
    $item_point = $row['point'];
  ?>
<tr>
<td>
<?php echo $i++; ?>
</td>
<td>
<?php echo $item_name; ?>
</td>
<td><?php echo $item_code; ?></td>
<td class=""><?php echo $item_category ; ?></td>

<td><?php echo $item_point;?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
<td>
<a href="#edit<?php echo $id;?>" data-toggle="modal">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a>
<a class="red gss" href="deletepoints1.php?delete=<?php echo $row ['id']; ?>">
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
<h4 class="modal-title">Edit Point</h4>
</div>
<div class="modal-body">
<input type="hidden" name="edit_item_id" value="<?php echo $id; ?>">



<div class="form-group">
<div class="col-sm-12">
<input type="text" class="form-control" id="item_name" name="item_name" value="<?php echo $item_name; ?>" placeholder="User Name" required autofocus>

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
<div class="form-group">
<div class="col-sm-12">
<input type="text" class="form-control" id="item_point" name="item_point" value="<?php echo $item_point; ?>" placeholder="Close Timing" required>

</div>
</div>
<br>
<br>
</div>
<div class="modal-footer" id="mo">
<button type="submit" class="btn " id="mos" name="update_item"><span class="glyphicon glyphicon-edit"></span> Edit Point</button>
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
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_point = $_POST['item_point'];
                            $sql = "UPDATE point2 SET
                                transactiontype='$item_code',
                                expensetype='$item_category',
                                point='$item_point'
                                WHERE id='$edit_item_id' ";
                            if ($con->query($sql) === TRUE) {
                                echo '<script>window.location.href="pohis.php"</script>';
                            } else {
                                echo "Error updating record: " . $con->error;
                            }
                        }
  ?>  
</tbody>
</table>

</div>
</div>
</div>
<!-- PAGE CONTENT ENDS -->

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
