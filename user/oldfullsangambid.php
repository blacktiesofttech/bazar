<?php
 include_once('header.php');
include_once("connection.php");
include_once('crud.php');
    $con= connection();
    $user=$_SESSION['s_username'];
    $sqlghghgh="select * from signup where username='$user'";
    $resultghghgh=mysqli_query($con,$sqlghghgh) or die(mysqli_query($con));
    $rowghghgh=mysqli_fetch_array($resultghghgh);
    $userid=$rowghghgh['id'];
    $username=$rowghghgh['username'];
    $email=$rowghghgh['email'];



        if(isset($_POST["submit"]))
{
  
$cityname=$_POST["cityname"];
//$singlenumber=$_POST["singlenumber"];
//$bidamount=$_POST["bidamount"];
echo $n0=$_POST["n0"];
echo $n1=$_POST["n1"];
echo $n2=$_POST["n2"];
echo $n3=$_POST["n3"];
echo $n4=$_POST["n4"];
echo $n5=$_POST["n5"];
echo $n6=$_POST["n6"];
$n7=$_POST["n7"];
$n8=$_POST["n8"];
$n9=$_POST["n9"];
$n10=$_POST["n10"];
$date = date("Y-m-d H:i:s");
$result=ins_record("fbid","null,'$userid','$username','$email','$cityname','$n0','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}


}
?>
      
    <section>
      <div class="container">
  <h2>Dashboard</h2>
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Game Results</a></li>
    <li><a data-toggle="pill" href="#menu1">Game Rate</a></li>
    <li><a data-toggle="pill" href="#menu2">Game Timeing</a></li>
    
  </ul>
  
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br>
      <section>
     <div class="container">

  
  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <br>
  <section>
  <div class="container">
  <div class="row">
  <div class="col-sm-4">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Points</h4></div>
  <div class="panel-body" id="di2"><h4 style="text-align:center;">XXXX</h4></div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Select Biding Bazaar</h4></div>
  <div class="panel-body" id="di2">
  <div class="form-group">  
  </select>
  <select name="bazaar" id="dropdownList" class="custom-select">
  <option selected>Please Select Bazaar</option>
      <?php
  $ha='12:00 PM';
  $he='24:00 AM';
  $ho='02:00 PM';
  $time = date("H:m");
  $query=("select * from fullsangam");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  { 
   $id=$row['id'];
    $ti=$row['timing'];
  
  ?>
  <option value="<?php echo $row['cityname'] ;?>"><?php echo $row['cityname'] ;?> <?php echo $row['open'] ;?> <?php echo $row['timing'] ;?></option>
  <?php
  }
  ?>
  </select>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
  //$(document).ready(function(){
   // $('#selected').change(function(){
   //   var selectedOption = $('#selected option:selected');
   //   $('#div').html(selectedOption.val());
   // });
  //});

  $(document).ready(function(){
    $('#dropdownList').on('change',function(){
        //var optionValue = $(this).val();
        //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
        var optionText = $("#dropdownList option:selected").val();
        //alert("Selected Option Text: "+optionText);
        $('#div').val(optionText);
        document.getElementById("div1").innerHTML = optionText;
    });
});

//$(document).on("change", "#qty1", function() {
    //var sum = 0;
    //$("#qty1").each(function(){
       // sum += +$(this).val();
    //});
    //$("total").val(sum);
//});

//$('.form-group').on('input','.qty1',function(){
//  var totalSum = 0;
//  $('.form-group .qty1').each(function(){
//    var inputVal=$(this).val();
//    if ($.isNumberic(inputVal)) {
//     totalSum += parseFloat(inputVal);
//    }
//  });
//  $('#total').text(totalSum);
//});
 /*
 var $form = $('#whereEntry'),
    $summands = $form.find('.form-control'),
    $sumDisplay = $('#sum_val');

$form.delegate('.form-control', 'change', function ()
{
    var sum = 0;
    $summands.each(function ()
    {
        var value = Number($(this).val());
        if (!isNaN(value)) sum += value;
    });

    $sumDisplay.val(sum);
});
*/
$(document).ready(function(){
  var sum=0;
  
  $(".form-control").keyup(function(){
    sum=sum+parseInt($(this).val());
    $("#sum_val").val(sum);

  });
  
});
</script>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading"  id="di1"><h4 style="text-align:center;">Place Your Bid</h4></div>
  <div class="panel-body"  id="di2">
  <button type="button" class="btn" style="background-color: #fcfc04; color: #372f2d;" data-toggle="modal" data-target="#myModal">Click Here.</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
  <div class="modal-header">

  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <div class="col-xs-8 modal-title">
    <h4 class="" id="na">Place Your Bid Here.<p id="div1" style="padding: 0px; margin: 0px;"></p></h4>
  </div>
  </div>
  <div class="modal-body">
    <form method="post">
  <input class="form-control " id="div" type="hidden" name="cityname">
  <div class="form-group row">
  <div class="col-xs-2">
  <label for="ex1" id="na">0</label>
  <input class="form-control" id="qty" type="text" name="n0">
  </div>
  <div class="col-xs-2">
  <label for="ex2" id="na">1</label>
  <input class="form-control" id="qty" type="text" name="n1">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na">2</label>
  <input class="form-control" id="ex3" type="text" name="n2">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na">3</label>
  <input class="form-control" id="ex4" type="text" name="n3">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na">4</label>
  <input class="form-control " id="ex5" type="text" name="n4">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na">5</label>
  <input class="form-control" id="ex6" type="text" name="n5">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na">6</label>
  <input class="form-control" id="ex7" type="text" name="n6">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na">7</label>
  <input class="form-control" id="ex8" type="text" name="n7">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na">8</label>
  <input class="form-control" id="ex9" type="text" name="n8">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na">9</label>
  <input class="form-control" id="ex10" type="text" name="n9">
  </div>
  <div class="col-xs-3 form-group">
  <label for="ex3" id="na">Total Points</label>
  <input class="form-control" id="sum_val"  value="" type="text" name="n10" >
  </div>
  </div>
  <div class="modal-footer">
    <input type="submit" name="submit" value="Submit" class="btn" style="width: 20%;">

  <button type="button" class="btn" style="width: 20%;" data-dismiss="modal">Close</button>
  </div> 
  </form>
  </div> 
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>   
  </section>
  </div>
    <script>

    </script>
 
  </section>
  <section>
  <div class="container"> 
  <div class="listing">
  <div class="row ">

  <?php
  $ha='12:00 PM';
  $he='24:00 AM';
  $ho='02:00 PM';
  $time = date("H:m");
  $query=("select * from fullsangam");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  { 
   $id=$row['id'];
    $ti=$row['timing'];

  ?>
    
      <div class="col-sm-3 col-md-3 col-lg-3" style="float: left;">
      <div class="panel panel-primary " id="di">
        <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3>
        </div>
        <div class="panel-footer" id="di2"><h3 style="text-align:center;"><?php echo $row['open'];?> : <?php echo $ti;?></h3>
        </div>
      </div>

    </div>
   
    <?php
  }
  ?>
      
  
  </div>
</div><br>
<br>

      </section>
    </div>
    <div id="menu1" class="tab-pane fade">
  <div class="container">
  <div class="table-responsive">          
  <table class="table"><br>
  <thead>
  <tr>
  <th>#</th>
  <th>Game Type</th>
  <th>Bid Amount</th>
  <th>Win Amount</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $query=("select * from insertgamerate");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <tr>
  <td><?php echo $row['id'];?></td>
  <td><?php echo $row['gametype'];?></td>
  <td><?php echo $row['bidamount'];?></td>
  <td><?php echo $row['winamount'];?></td>
  </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
  </div>
  </div>
  </div>
  <div id="menu2" class="tab-pane fade">
  <br><section>
  <div class="container">    
  <div class="row">
  <?php
  $query=("select * from insertgametimeing");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-3">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3></div>
  <div class="panel-footer" id="di2"><h4 style="text-align:center;">Opening <?php echo $row['opentime'];?></h4></div>
  <div class="panel-footer" id="di2"><h4 style="text-align:center;">Cloesing <?php echo $row['closetime'];?></h4></div>
  </div>
  </div>
  <?php
  }
  ?>  
  </div>
  </div>
  <br>
  </section>
  </div> 
  </div>
  </div>
  </section>
  <section>
  <div class="container">
  <div class="row">
  <?php
  $query=("select * from insertnotices where id order by id desc limit 1");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-6">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Notices Board</h4></div>
  <div class="panel-body" id="di2"><?php echo $row['notices'];?></div>
  </div>
  </div>
  <?php
  }
  $query=("select * from insertnews where id order by id desc limit 1");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-6">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">News</h4></div>
  <div class="panel-body" id="di2"><?php echo $row['news'];?></div>
  </div>
  </div>
  <?php
  }
  ?>
  </section>
      




    <?php include_once('footer.php');
?>
  </body>
</html>