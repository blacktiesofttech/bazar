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

 
<section>
<div class="container-fluid">
<div id="home" class="tab-pane fade in active">
<div class="container">    
<div class="row">
<div class="row">
<h2 class="text-center">Point History</h2>
</div>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>#</th>
<th>User Name</th>
<th>Transaction Type</th>
<th>Expense Type</th>
<th>Point</th>
<th>Date</th>
<th>Time</th>
<th style="display: none;">Delete</th>
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
<th style="display: none;">Delete</th>
</tr>
</tfoot>
<tbody>
<?php
$i=1;
  $sql="select * from point2 where username='$user'";
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
<td style="display: none;"><?php echo $row['times'];?></td>
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
  </div>
  </div>
  </section>











</body>
</html>
    <?php include_once('foots.php');
?>
  </body>
</html>