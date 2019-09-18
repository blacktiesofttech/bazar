<?php
 include_once('header.php');
include_once("connection.php");
include_once('../crud.php');
    $con= connection();
    $user=$_SESSION['s_username'];
?>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
$(document).ready(function() {    
  $(".expenses").each(function() {    
    $(this).keyup(function() {     
      calculateSum();
    });
  });
});    

function calculateSum() {    
  var sum = 0;        
  $(".expenses").each(function() {          
    if (!isNaN(this.value) && this.value.length != 0) {
      sum += parseFloat(this.value);
    }    
  });

  $("#expenses_sum").val(sum.toFixed(2));
}
  </script>






<table border="1">
  <tr>
      <th>sl</th>
      <th>TA</th>
      <th>DA</th>
      <th>HA</th>
      <th>Total</th>
  </tr>
  <tr>
      <td>1</td>
      <td><input class="expenses"></td>
      <td><input class="expenses"></td>
      <td><input class="expenses"></td><td>
      <input id="expenses_sum"></td>
  </tr>
  <tr>
      <td>2</td>
      <td><input class="expenses"></td>
      <td><input class="expenses"></td>
      <td><input class="expenses"></td><td>
      <input id="expenses_sum"></td>
  </tr>
  <tr>
      <td>3</td>
      <td><input class="expenses"></td>
      <td><input class="expenses"></td>
      <td><input class="expenses"></td><td>
      <input id="expenses_sum"></td>
  </tr>
</table>

</body>
</html>
    <?php include_once('foots.php');
?>
  </body>
</html>