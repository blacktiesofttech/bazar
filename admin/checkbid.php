<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insertdata.php');
include_once('deletedaybid.php');

?>

<div class="main-content">
<div class="main-content-inner">
<div class="page-content">
<div class="page-header">
<h1> BID</h1>
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
  #miyon
  {
      float:right;
  }
  #by
  {
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
<a data-toggle="tab" href="#home4">SINGLE BID</a>
</li>
<li>
<a data-toggle="tab" href="#profile4">JODI BID</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown14">SINGLE PATTI BID</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown15">DOUBLE PATTI BID</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown16">TRIPLE PATTI BID</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown17">HALF SANGAM BID</a>
</li>
<li>
<a data-toggle="tab" href="#dropdown18">FULL SANGAM BID</a>
</li>
</ul>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->

<div class="tab-content">
<div id="home4" class="tab-pane in active">
<div class="row ">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container"></div>
</div>
<div class="table-header">Results for "Single"</div>

<div class="table-responsive">

<table id="datatable" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from sinbid where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['userid']; ?></td>
  <td><?php echo $row['username']; ?></td>
  <td style="display:none;"><?php echo $row['email']; ?></td>
  <td><?php echo $row['cityname']; ?></td>
  <td><?php echo $row['bidnumber']; ?></td>
  <td><?php echo $row['point']; ?></td>
  <td><?php echo $row['date_time']; ?></td>
  <td><?php echo $row['times']; ?></td>
<td><a class="red gss" href="deletesbid.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>
<br>
<form method="post">
<input type="submit" name="del" value="Delete Bid" id="by">
</form>
</div>
</div>
</div>

</div><!-- /.col -->
</div><!-- /.row -->
</div>
<div id="profile4" class="tab-pane">


<div class="row ">

<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container1"></div>
</div>

<div class="table-header">Results for "Jodi"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">

<table id="datatable1" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from jodibid where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['userid']; ?></td>
  <td><?php echo $row['username']; ?></td>
  <td style="display:none;"><?php echo $row['email']; ?></td>
  <td><?php echo $row['cityname']; ?></td>
  <td><?php echo $row['jodinumber']; ?></td>
  <td><?php echo $row['bidamount']; ?></td>
  <td><?php echo $row['date_time']; ?></td>
  <td><?php echo $row['times']; ?></td>
<td><a class="red gss" href="deletejb.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>
<br>
<form method="post">
<input type="submit" name="del1" value="Delete Bid" id="by">
</form>

</div>
</div>
</div>

</div><!-- /.col -->
</div><!-- /.row -->


</div>

<div id="dropdown14" class="tab-pane">
<div class="row ">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container2"></div>
</div>

<div class="table-header">Results for "Single Patti"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">

<table id="datatable2" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from singlepattibid where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['userid']; ?></td>              
  <td><?php echo $row['username']; ?></td>
  <td style="display:none;"><?php echo $row['email']; ?></td>
  <td><?php echo $row['cityname']; ?></td>
  <td><?php echo $row['singlepattinumber']; ?></td>
  <td><?php echo $row['bidamount']; ?></td>
  <td><?php echo $row['date_time']; ?></td>
  <td><?php echo $row['times']; ?></td>
<td><a class="red gss" href="deletespb.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>
<br>
<form method="post">
<input type="submit" name="del2" value="Delete Bid" id="by">
</form>
</div>
</div>
</div>

</div><!-- /.col -->
</div><!-- /.row -->
</div>

<div id="dropdown15" class="tab-pane">
<div class="row ">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container3"></div>
</div>
<div class="table-header">Results for "Double Patti"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable3" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from doublepattibid where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['userid']; ?></td>              
  <td><?php echo $row['username']; ?></td>
  <td style="display:none;"><?php echo $row['email']; ?></td>
  <td><?php echo $row['cityname']; ?></td>
  <td><?php echo $row['doublepattinumber']; ?></td>
  <td><?php echo $row['bidamount']; ?></td>
  <td><?php echo $row['date_time']; ?></td>
  <td><?php echo $row['times']; ?></td>
<td><a class="red gss" href="deletedpb.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>
<br>
<form method="post">
<input type="submit" name="del3" value="Delete Bid" id="by">
</form>
</div>
</div>
</div>

</div><!-- /.col -->
</div><!-- /.row -->
</div>

<div id="dropdown16" class="tab-pane">
<div class="row ">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container4"></div>
</div>
<div class="table-header">Results for "Triple Patti"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable4" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from tripalpattibid where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['userid']; ?></td>                 
  <td><?php echo $row['username']; ?></td>
  <td style="display:none;"><?php echo $row['email']; ?></td>
  <td><?php echo $row['cityname']; ?></td>
  <td><?php echo $row['tripalpattinumber']; ?></td>
  <td><?php echo $row['bidamount']; ?></td>
  <td><?php echo $row['date_time']; ?></td>
  <td><?php echo $row['times']; ?></td>
<td><a class="red gss" href="deletetpb.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>
<br>
<form method="post">
<input type="submit" name="del4" value="Delete Bid" id="by">
</form>
</div>
</div>
</div>
<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div>

<div id="dropdown17" class="tab-pane">


<div class="row ">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container5"></div>
</div>
<div class="table-header">Results for "Half Sangam"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive">
<table id="datatable5" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Ank</th>
  <th>Ank Number</th>
  <th>Patti</th>
  <th>Patti Number</th>
  <th>Amount</th>
  
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
  <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Ank</th>
  <th>Ank Number</th>
  <th>Patti</th>
  <th>Patti Number</th>
  <th>Amount</th>
  
  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from halfsangambid where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['userid']; ?></td>                
<td><?php echo $row['username']; ?></td>
<td style="display:none;"><?php echo $row['email']; ?></td>
<td><?php echo $row['cityname']; ?></td>
<td><?php echo $row['ank']; ?></td>
<td><?php echo $row['anks']; ?></td>
<td><?php echo $row['patti']; ?></td>
<td><?php echo $row['pattis']; ?></td>
<td><?php echo $row['amount']; ?></td>
<td><?php echo $row['date_time']; ?></td>
  <td><?php echo $row['times']; ?></td>
<td><a class="red gss" href="deletehsp.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>
<br>
<form method="post">
<input type="submit" name="del5" value="Delete Bid" id="by">
</form>
</div>
</div>
</div>

</div><!-- /.col -->
</div><!-- /.row -->



</div>

<div id="dropdown18" class="tab-pane">
<div class="row ">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container6"></div>
</div>
<div class="table-header">Results for "Full Sangam"</div>
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<div class="table-responsive6">
<table id="datatable6" class="table table-striped table-bordered vd" cellspacing="0" width="100%">
<thead>
<tr>
<th>ID</th>
<th>User ID</th>
<th>User Name</th>
<th style="display:none;">Email</th>
<th>Bazar Name</th>
<th>Close Patti</th>
<th>Open Patti</th>
<th>Amount</th>

  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</thead>

<tfoot>
<tr>
<th>ID</th>
<th>User ID</th>
<th>User Name</th>
<th style="display:none;">Email</th>
<th>Bazar Name</th>
<th>Close Patti</th>
<th>Open Patti</th>
<th>Amount</th>

  <th>Date</th>
  <th>Time</th>
<th>Delete</th>
</tr>
</tfoot>

<tbody>
<?php
  $sql="select * from  fullsangambid where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['userid']; ?></td>
<td><?php echo $row['username']; ?></td>
<td style="display:none;"><?php echo $row['email']; ?></td>
<td><?php echo $row['cityname']; ?></td>
<td><?php echo $row['closepatti']; ?></td>
<td><?php echo $row['openpatti']; ?></td>
<td><?php echo $row['amount']; ?></td>
<td><?php echo $row['date_time']; ?></td>
  <td><?php echo $row['times']; ?></td>
    <td><a class="red gss" href="deletefsp.php?delete=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a></td>
</tr>
<?php
  }
  ?>  
</tbody>
</table>
<br>
<form method="post">
<input type="submit" name="del6" value="Delete Bid" id="by">
</form>
</div>
</div>
</div>
<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type="text/javascript">
      $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>
  <script type="text/javascript">
      $(document).ready(function() {
    $('#datatable1').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>

  <script type="text/javascript">
      $(document).ready(function() {
    $('#datatable2').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>

  <script type="text/javascript">
      $(document).ready(function() {
    $('#datatable3').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>

  <script type="text/javascript">
      $(document).ready(function() {
    $('#datatable4').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>

  <script type="text/javascript">
      $(document).ready(function() {
    $('#datatable5').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>

  <script type="text/javascript">
      $(document).ready(function() {
    $('#datatable6').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>

</div>
</div>
</div>
</div><!-- /.col -->
</div><!-- /.row -->


<?php
include_once('footer.php');
?>
