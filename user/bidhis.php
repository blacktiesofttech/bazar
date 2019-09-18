<?php
 include_once('header.php');
include_once("connection.php");
include_once('../crud.php');
    $con= connection();
    $user=$_SESSION['s_username'];
?>
      <style>
        #gg
        {
          background-color: #372f2d;
          border: #372f2d;
          border-radius: 0px;
        }

        #gg h3
        {
          font-size: 15px;
          padding:0px;
          color: #fcfc04;
        }
      </style>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
  
$(document).ready(function() {
  $('#example').DataTable();
} );

  </script>

  <script type="text/javascript">
  
$(document).ready(function() {
  $('#example1').DataTable();
} );

  </script>

    <script type="text/javascript">
  
$(document).ready(function() {
  $('#example2').DataTable();
} );

  </script>

    <script type="text/javascript">
  
$(document).ready(function() {
  $('#example3').DataTable();
} );

  </script>

    <script type="text/javascript">
  
$(document).ready(function() {
  $('#example4').DataTable();
} );

  </script>

    <script type="text/javascript">
  
$(document).ready(function() {
  $('#example5').DataTable();
} );

  </script>

    <script type="text/javascript">
  
$(document).ready(function() {
  $('#example6').DataTable();
} );

  </script>


<section>
<div class="container-fluid">
<ul class="nav nav-pills">
<li class="active"><a data-toggle="pill" href="#home">Single</a></li>
<li><a data-toggle="pill" href="#menu3">Jodi</a></li>
<li><a data-toggle="pill" href="#menu4">Single Patti</a></li>
<li><a data-toggle="pill" href="#menu5">Duoble Patti</a></li>
<li><a data-toggle="pill" href="#menu6">Triple Patti</a></li>
<li><a data-toggle="pill" href="#menu1">Hlaf Sangam</a></li>
<li><a data-toggle="pill" href="#menu2" style="display:;">Full Sangam</a></li>
</ul> 
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
  <br>
  <section>
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Single Bidding History</h2>
</div>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered " cellspacing="0" width="100%">
<thead>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>
<th>Date</th>
<th>Time</th>
</tr>
</tfoot>
<tbody>
<?php
  $sql="SELECT * FROM `sinbid` where username='$user' AND `date_time` >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['cityname'];?></td>
<td><?php echo $row['open'];?></td>
<td><?php echo $row['biding'];?></td>
<td><?php echo $row['bidnumber'];?></td>
<td><?php echo $row['point'];?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
  </section>
  </div>

  <div id="menu3" class="tab-pane fade">
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Jodi Bidding History</h2>
</div>
<table id="example3" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</tfoot>
<tbody>
<?php
  $sql="select * from jodibid  where username='$user' AND `date_time` >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['cityname'];?></td>
<td><?php echo $row['open'];?></td>
<td><?php echo $row['biding'];?></td>
<td><?php echo $row['bidnumber'];?></td>
<td><?php echo $row['point'];?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>     
</div>
</div>

<br>
<br>
<br>
<br>
  </div>


 <div id="menu4" class="tab-pane fade">
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Single Patti Bidding History</h2>
</div>
<table id="example4" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</tfoot>
<tbody>
<?php
  $sql="select * from singlepattibid  where username='$user' AND `date_time` >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['cityname'];?></td>
<td><?php echo $row['open'];?></td>
<td><?php echo $row['biding'];?></td>
<td><?php echo $row['bidnumber'];?></td>
<td><?php echo $row['point'];?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>     
</div>
</div>

<br>
<br>
<br>
<br>
  </div>



 <div id="menu5" class="tab-pane fade">
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Duoble Patti Bidding History</h2>
</div>
<table id="example5" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</tfoot>
<tbody>
<?php
  $sql="select * from doublepattibid  where username='$user' AND `date_time` >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['cityname'];?></td>
<td><?php echo $row['open'];?></td>
<td><?php echo $row['biding'];?></td>
<td><?php echo $row['bidnumber'];?></td>
<td><?php echo $row['point'];?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>     
</div>
</div>

<br>
<br>
<br>
<br>
  </div>



 <div id="menu6" class="tab-pane fade">
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Triple Patti Bidding History</h2>
</div>
<table id="example6" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Bid Number</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</tfoot>
<tbody>
<?php
  $sql="select * from tripalpattibid  where username='$user' AND `date_time` >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['cityname'];?></td>
<td><?php echo $row['open'];?></td>
<td><?php echo $row['biding'];?></td>
<td><?php echo $row['bidnumber'];?></td>
<td><?php echo $row['point'];?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>     
</div>
</div>

<br>
<br>
<br>
<br>
  </div>




  <div id="menu1" class="tab-pane fade">
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Half Sangam</h2>
</div>
<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Bazaar Name</th>
<th>Bid Type</th>
<th>Ank</th>
<th>Anks Numbers</th>
<th>Patti</th>
<th>Patti Numbers</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Bazaar Name</th>
<th>Bid Type</th>
<th>Ank</th>
<th>Anks Numbers</th>
<th>Patti</th>
<th>Patti Numbers</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</tfoot>
<tbody>
<?php
  $sql="select * from halfsangambid  where username='$user' AND `date_time` >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['cityname'];?></td>
<td><?php echo $row['biding'];?></td>
<td><?php echo $row['ank'];?></td>
<td><?php echo $row['anks'];?></td>
<td><?php echo $row['patti'];?></td>
<td><?php echo $row['pattis'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>     
</div>
</div>

<br>
<br>
<br>
<br>
  </div>


  <div id="menu1" class="tab-pane fade">
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Half Sangam</h2>
</div>
<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Bazaar Name</th>
<th>Bid Type</th>
<th>Ank</th>
<th>Anks Numbers</th>
<th>Patti</th>
<th>Patti Numbers</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Bazaar Name</th>
<th>Bid Type</th>
<th>Ank</th>
<th>Anks Numbers</th>
<th>Patti</th>
<th>Patti Numbers</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</tfoot>
<tbody>
<?php
  $sql="select * from halfsangambid  where username='$user' AND `date_time` >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['cityname'];?></td>
<td><?php echo $row['biding'];?></td>
<td><?php echo $row['ank'];?></td>
<td><?php echo $row['anks'];?></td>
<td><?php echo $row['patti'];?></td>
<td><?php echo $row['pattis'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>     
</div>
</div>

<br>
<br>
<br>
<br>
  </div>
  <div id="menu2" class="tab-pane fade">
  <section>
  
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Full Sangam</h2>
</div>
<table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Close Patti</th>
<th>Open Patti</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Bazaar Name</th>
<th>Bazaar Type</th>
<th>Bid Type</th>
<th>Close Patti</th>
<th>Open Patti</th>
<th>Amonut</th>

<th>Date</th>
<th>Time</th>
</tr>
</tfoot>
<tbody>
<?php
  $sql="select * from fullsangambid  where username='$user' AND `date_time` >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
<tr>
<td><?php echo $row['cityname'];?></td>
<td><?php echo $row['open'];?></td>
<td><?php echo $row['biding'];?></td>
<td><?php echo $row['closepatti'];?></td>
<td><?php echo $row['openpatti'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $row['date_time'];?></td>
<td><?php echo $row['times'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>

</div>
</div> 
<br>
<br>
<br>
<br>
<br> 
  </section>
  </div> 
  </div>
  </div>
  </section>











</body>
</html>
    <?php include_once('foots.php');
?>
  </body>
</html>