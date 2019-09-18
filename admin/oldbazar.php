<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insert.php');
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
<a data-toggle="tab" href="#home4">SINGLE</a>
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
<div class="table-header">Results for "Single"</div>
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
  ?>
<tr>
<td>
<a href="#"><?php echo $row['cityname']; ?></a>
</td>
<td><?php echo $row['opentiming']; ?></td>
<td class=""><?php echo $row['timing']; ?></td>
<td>
<?php
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked  onchange="active_inactive_user(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox" checked value="2"  onchange="active_inactive_user1(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user1(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user1(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}

?>
</td>
<td style="display: none;">$320,800</td>
<td><a class="green gss" href="editsingle.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deletesingle.php?delete=<?php echo $row ['id']; ?>">
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
<input type="text" id="firstname" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />

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
<input type="submit" placeholder="City Name" name="insertsingle" value="Insert Single" class="col-xs-12 col-sm-12" />
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
  $sql="select * from jodi";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['cityname']; ?></a>
</td>
<td><?php echo $row['open']; ?></td>
<td class=""><?php echo $row['timing']; ?></td>
<td>
<?php
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked  onchange="active_inactive_user2(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user2(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user2(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox" checked value="2"  onchange="active_inactive_user3(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user3(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user3(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}

?>
</td>
<td style="display: none;">$320,800</td>
<td><a class="green gss" href="editjodi.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deletejodi.php?delete=<?php echo $row ['id']; ?>">
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
<a href="#" id="id-btn-dialog3" class="btn btn-purple btn-sm">Add Bazar</a>
<div id="dialog-message1" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post">
<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new1" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />

</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new" placeholder="Open & Close" name="open" class="col-xs-12 col-sm-12" />
<input type="hidden" class="form-control hm2" id="full" placeholder="" name="citynametype">
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Timing" name="timing" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit"  name="insertjodi" value="Insert Jodi" class="col-xs-12 col-sm-12" />
</div>
</div>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#new1, #new").keyup(function () {
var a = $("#new1").val();
var b = $("#new").val();
var c= a + ' ' + b;
$("#full").val(c);
});
});
</script>
</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script >
      function active_inactive_user2(val,id){
        $.ajax({
          type: 'post',
          url: 'change1.php',
          data: {val:val,id:id},
          success:function(result){
           
          }

        });
      }

      function active_inactive_user3(vals,ids){
        $.ajax({
          type: 'post',
          url: 'change1.php',
          data: {vals:vals,ids:ids},
          success:function(result){
           
          }

        });
      }
    </script>
</div><!-- #dialog-message -->
</div><!-- ./span -->
</div><!-- ./row -->
</div><!-- /.page-content -->
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
  $sql="select * from singlepatti";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['cityname']; ?></a>
</td>
<td><?php echo $row['open']; ?></td>
<td class=""><?php echo $row['timing']; ?></td>
<td>
<?php
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked  onchange="active_inactive_user4(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user4(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user4(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox" checked value="2"  onchange="active_inactive_user5(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user5(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user5(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}

?>
</td>
<td style="display: none;">$320,800</td>
<td><a class="green gss" href="editsinglepatti.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deletesinglepatti.php?delete=<?php echo $row ['id']; ?>">
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
<a href="#" id="id-btn-dialog4" class="btn btn-purple btn-sm">Add Bazar</a>
<div id="dialog-message2" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post">
<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new10" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />

</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new11" placeholder="Open & Close" name="open" class="col-xs-12 col-sm-12" />
<input type="hidden" class="form-control hm2" id="fullww" placeholder="" name="citynametype">
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Timing" name="timing" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit"  name="insertsinglepatti" value="Insert Single Patti" class="col-xs-12 col-sm-12" />
</div>
</div>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#new10, #new11").keyup(function () {
var a = $("#new10").val();
var b = $("#new11").val();
var c= a + ' ' + b;
$("#fullww").val(c);
});
});
</script>
<script >
      function active_inactive_user4(val,id){
        $.ajax({
          type: 'post',
          url: 'change2.php',
          data: {val:val,id:id},
          success:function(result){
           
          }

        });
      }

      function active_inactive_user5(vals,ids){
        $.ajax({
          type: 'post',
          url: 'change2.php',
          data: {vals:vals,ids:ids},
          success:function(result){
           
          }

        });
      }
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
  $sql="select * from doublepatti";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['cityname']; ?></a>
</td>
<td><?php echo $row['open']; ?></td>
<td class=""><?php echo $row['timing']; ?></td>
<td>
<?php
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked  onchange="active_inactive_user6(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user6(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user6(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox" checked value="2"  onchange="active_inactive_user7(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user7(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user7(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}

?>
</td>
<td style="display: none;">$320,800</td>
<td><a class="green gss" href="editdoublepatti.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deleteduoblepatti.php?delete=<?php echo $row ['id']; ?>">
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
<a href="#" id="id-btn-dialog5" class="btn btn-purple btn-sm">Add Bazar</a>
<div id="dialog-message3" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post">
<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new8" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />

</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new9" placeholder="Open & Close" name="open" class="col-xs-12 col-sm-12" />
<input type="hidden" class="form-control hm2" id="fullw" placeholder="" name="citynametype">
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Timing" name="timing" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit"  name="insertdoublepatti" value="Insert Double Patti" class="col-xs-12 col-sm-12" />
</div>
</div>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#new8, #new9").keyup(function () {
var a = $("#new8").val();
var b = $("#new9").val();
var c= a + ' ' + b;
$("#fullw").val(c);
});
});
</script>
<script >
      function active_inactive_user6(val,id){
        $.ajax({
          type: 'post',
          url: 'change3.php',
          data: {val:val,id:id},
          success:function(result){
           
          }

        });
      }

      function active_inactive_user7(vals,ids){
        $.ajax({
          type: 'post',
          url: 'change3.php',
          data: {vals:vals,ids:ids},
          success:function(result){
           
          }

        });
      }
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
  $sql="select * from tripalpatti";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['cityname']; ?></a>
</td>
<td><?php echo $row['open']; ?></td>
<td class=""><?php echo $row['timing']; ?></td>
<td>
<?php
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked  onchange="active_inactive_user8(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user8(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user8(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox" checked value="2"  onchange="active_inactive_user9(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user9(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user9(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}

?>
</td>
<td style="display: none;">$320,800</td>
<td><a class="green gss" href="edittripalpatti.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deletetriplepatti.php?delete=<?php echo $row ['id']; ?>">
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
<a href="#" id="id-btn-dialog6" class="btn btn-purple btn-sm">Add Bazar</a>
<div id="dialog-message4" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post">
<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new6" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />

</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new7" placeholder="Open & Close" name="open" class="col-xs-12 col-sm-12" />
<input type="hidden" class="form-control hm2" id="fulleee" placeholder="" name="citynametype">
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Timing" name="timing" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit"  name="inserttripalpatti" value="Insert Tripal Patti" class="col-xs-12 col-sm-12" />
</div>
</div>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#new6, #new7").keyup(function () {
var a = $("#new6").val();
var b = $("#new7").val();
var c= a + ' ' + b;
$("#fulleee").val(c);
});
});
</script>
<script >
      function active_inactive_user8(val,id){
        $.ajax({
          type: 'post',
          url: 'change4.php',
          data: {val:val,id:id},
          success:function(result){
           
          }

        });
      }

      function active_inactive_user9(vals,ids){
        $.ajax({
          type: 'post',
          url: 'change4.php',
          data: {vals:vals,ids:ids},
          success:function(result){
           
          }

        });
      }
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
  $sql="select * from halfsangam";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['cityname']; ?></a>
</td>
<td><?php echo $row['open']; ?></td>
<td class=""><?php echo $row['timing']; ?></td>
<td>
<?php
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked  onchange="active_inactive_user10(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user10(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user10(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox" checked value="2"  onchange="active_inactive_user111(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user111(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user11(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}

?>
</td>
<td style="display: none;">$320,800</td>
<td><a class="green gss" href="edithalfsangam.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deletehalfsangam.php?delete=<?php echo $row ['id']; ?>">
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
  <script type="text/javascript">
      $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>
<!-- PAGE CONTENT ENDS -->
<div class="main-content-inner">
<div class="row">
<div class="col-xs-12">
<div class="row">
<div class="col-sm-6">
<a href="#" id="id-btn-dialog7" class="btn btn-purple btn-sm">Add Bazar</a>
<div id="dialog-message5" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post">
<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new4" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />

</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new5" placeholder="Open & Close" name="open" class="col-xs-12 col-sm-12" />
<input type="hidden" class="form-control hm2" id="fullee" placeholder="" name="citynametype">
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Timing" name="timing" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit"  name="inserthalfsangam" value="Insert Half Sangam" class="col-xs-12 col-sm-12" />
</div>
</div>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#new4, #new5").keyup(function () {
var a = $("#new4").val();
var b = $("#new5").val();
var c= a + ' ' + b;
$("#fullee").val(c);
});
});
</script>
<script >
      function active_inactive_user10(val,id){
        $.ajax({
          type: 'post',
          url: 'change5.php',
          data: {val:val,id:id},
          success:function(result){
           
          }

        });
      }

      function active_inactive_user111(vals,ids){
        $.ajax({
          type: 'post',
          url: 'change5.php',
          data: {vals:vals,ids:ids},
          success:function(result){
           
          }

        });
      }
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
  $sql="select * from fullsangam";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td>
<a href="#"><?php echo $row['cityname']; ?></a>
</td>
<td><?php echo $row['open']; ?></td>
<td class=""><?php echo $row['timing']; ?></td>
<td>
<?php
if ($row['displayopen']==1) 
{
?>
<center>
<label class="switch">
<input type="checkbox" checked  onchange="active_inactive_user12(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user12(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="1"  onchange="active_inactive_user12(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox" checked value="2"  onchange="active_inactive_user13(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user13(this.value,<?php echo $row['id'];?>)" >
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
<input type="checkbox"  value="2"  onchange="active_inactive_user13(this.value,<?php echo $row['id'];?>)" >
<span class="slider round" ></span>
</label>           
</center>
<?php
}

?>
</td>
<td style="display: none;">$320,800</td>
<td><a class="green gss" href="editfullsangam.php?edit=<?php echo $row ['id']; ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a></td>
    <td><a class="red gss" href="deletefullsangam.php?delete=<?php echo $row ['id']; ?>">
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
<a href="#" id="id-btn-dialog8" class="btn btn-purple btn-sm">Add Bazar</a>
<div id="dialog-message6" class="hide">

<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post">
<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new2" placeholder="City Name" name="cityname" class="col-xs-12 col-sm-12" />

</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" id="new3" placeholder="Open & Close" name="open" class="col-xs-12 col-sm-12" />
<input type="hidden" class="form-control hm2" id="fulle" placeholder="" name="citynametype">
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="text" placeholder="Timing" name="timing" class="col-xs-12 col-sm-12" />
</div>
</div>
<br>
<div class="form-group">
<div class="col-sm-12">
<input type="submit"  name="insertfullsangam" value="Insert Full Sangam" class="col-xs-12 col-sm-12" />
</div>
</div>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#new2, #new3").keyup(function () {
var a = $("#new2").val();
var b = $("#new3").val();
var c= a + ' ' + b;
$("#fulle").val(c);
});
});
</script>
<script >
      function active_inactive_user12(val,id){
        $.ajax({
          type: 'post',
          url: 'change6.php',
          data: {val:val,id:id},
          success:function(result){
           
          }

        });
      }

      function active_inactive_user13(vals,ids){
        $.ajax({
          type: 'post',
          url: 'change6.php',
          data: {vals:vals,ids:ids},
          success:function(result){
           
          }

        });
      }
    </script>
</div>
</div>
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
</div><!-- /.col -->
</div><!-- /.row -->


<?php
include_once('footer.php');
?>
