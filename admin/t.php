<?php
 include_once('header.php');
 ?>

    <body class="no-skin">
       

<div class="main-container ace-save-state" id="main-container">      
<div id="sidebar" class="sidebar responsive ace-save-state">
</div>

<div class="main-content">
<div class="main-content-inner">
                
<div class="page-content">
                       
<div class="page-header">
<h1>Tables</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
<div class="clearfix">
<div class="pull-right tableTools-container"></div>
</div>                                        <!-- div.dataTables_borderWrap -->
<div>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th class="center" style="display: none;">
<label class="pos-rel">
<input type="checkbox" class="ace" />
<span class="lbl"></span>
</label>
</th>
 <th>ID</th>
  <th>User ID</th>
  <th>User Name</th>
  <th style="display:none;">Email</th>
  <th>Bazar Name</th>
  <th>Single Number</th>
  <th>Bid Amount</th>
  <th>Date & Time</th>
<th>Delete</th>
</tr>
</thead>

<tbody>
<?php
$i=1;
  $sql="select * from sinbid where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td class="center" style="display: none;">
<label class="pos-rel">
<input type="checkbox" class="ace" />
<span class="lbl"></span>
</label>
</td>
<td><?php echo $i++; ?></td>
<td><?php echo $row['userid']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['cityname']; ?></td>
<td><?php echo $row['bidnumber']; ?></td>
<td><?php echo $row['point']; ?></td>
</tr>
<?php
  }
  ?> 
</tbody>
</table>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>

                                <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
 
    <?php include_once('footer.php');
?>
