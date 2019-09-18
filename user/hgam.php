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



  $sql1="SELECT SUM(`point`) FROM allbid where username='$user'";
  $result1=mysqli_query($con,$sql1) or die(mysqli_query($con));
  $row1=mysqli_fetch_array($result1);
  $sql="select * from point where username='$user'";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  $row=mysqli_fetch_array($result);
  $poin1=$row['point'];
  if(isset($_POST["submit"]))
{
$poin=$_POST["amount"];
if ($poin1<=0) {
  echo alrt_msg("Point Empty");
}
elseif($poin1>=$poin)
{
    if(isset($_POST["submit"]))
{
  
$cityname=$_POST["cityname"];  
$closeank=$_POST["closeank"];
$openpatti=$_POST["openpatti"];
$amount=$_POST["amount"];
$openank=$_POST["openank"];
$closepatti=$_POST["closepatti"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$halfsangam='Half Sangam';
$closeanks="Close Ank";
$opatti="Open Patti";
$openanks="Open Ank";
$cptti="Close Patti";
if ($openank==null) {

$result=ins_record("halfsangambid","null,'$userid','$username','$email','$cityname','$halfsangam','$closeanks','$closeank','$opatti','$openpatti','$amount','$date','$time'");

$result=ins_record("hlafsangambidfull","null,'$userid','$username','$email','$cityname','$halfsangam','$closeanks','$closeank','$opatti','$openpatti','$amount','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$amount','$date','$time'");
$query="update point set  point=point-'$amount' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
elseif ($closeank==null) {

$result=ins_record("halfsangambid","null,'$userid','$username','$email','$cityname','$halfsangam','$openanks','$openank','$cptti','$closepatti','$amount','$date','$time'");

$result=ins_record("hlafsangambidfull","null,'$userid','$username','$email','$cityname','$halfsangam','$openanks','$openank','$cptti','$closepatti','$amount','$date','$time'");
$result=ins_record("point2","null,'$userid','$username','Dedit','User Bid','$amount','$date','$time'");
$query="update point set  point=point-'$amount' where username='$user'";
  $rst=mysqli_query($con,$query) or die( mysqli_error($con));


if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}
}
}
}
else
{
  echo alrt_msg("Your Point"." "."$poin1" ." "."less then this point"." "."$poin");
}
}
?>
   <style>

  @media screen and (max-width: 599px) and (min-width: 0px)
{
    
    #btns
    {
      font-size: 10px;
      text-align: center;
    }
}
</style>    
    <section>
      <div class="container">
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Half Sangam</a></li>
    <li><a data-toggle="pill" href="#menu1"  style="display:none;">Game Rate</a></li>
    <li><a data-toggle="pill" href="#menu2"  style="display:none;">Game Timeing</a></li>
    
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
<?php
 $sql1="SELECT SUM(`point`) FROM allbid where username='$user'";
  $result1=mysqli_query($con,$sql1) or die(mysqli_query($con));
  $row1=mysqli_fetch_array($result1);
  $sql="select * from point where username='$user'";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  $row=mysqli_fetch_array($result);
  $sql34="select SUM(`amount`) from fullsangambid where username='$user'";
  $result34=mysqli_query($con,$sql34) or die(mysqli_query($con));
  $row34=mysqli_fetch_array($result34);
  $fullsangampoint=$row34['SUM(`amount`)'];
  $sql345="select SUM(`amount`) from halfsangambid where username='$user'";
  $result345=mysqli_query($con,$sql345) or die(mysqli_query($con));
  $row345=mysqli_fetch_array($result345);
  $halfsangampoint=$row345['SUM(`amount`)'];

?>
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Points</h4></div>
  <div class="panel-body" id="di2"><h4 style="text-align:center;"><?php echo $row['point'];?></h4></div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Select Biding Bazaar</h4></div>
  <div class="panel-body" id="di2">
  <div class="form-group">  
  </select>
  <select name="bazaar" id="dropdownList" class="custom-select" style="width:100%; height:35px;">
  <option selected>Please Select Bazaar</option>
    <?php
   date_default_timezone_set("Asia/Kolkata");
    $time=date("H:i");
  $query_2=("SELECT * FROM `single` WHERE `displayopen`='0' Or `displayopen`='2'  AND opentiming ORDER by opentiming ASC");
  $rst_2=mysqli_query($con,$query_2);
  while($row_2=mysqli_fetch_array($rst_2))
  {
     $citynames=$row_2['cityname'];
   
  $query_1=("SELECT * FROM `single` WHERE opentiming>='$time' and cityname='$citynames'");
  $rst_1=mysqli_query($con,$query_1);
  while($row_1=mysqli_fetch_array($rst_1))
  {
    
    $tis=$row_1['opentiming'];
    
  ?>
  <option value="<?php echo $row_1['cityname']  ." ". "Open" ;?>"><?php echo $row_1['cityname'] ;?> Open  <?php echo date("h:i a", strtotime("$tis"));?></option>
  <?php
  }
  }
   $query_4=("SELECT * FROM `single` WHERE `displayopen`='0' or `displayopen`='1' AND `timing` ORDER BY `timing` ASC");
  $rst_4=mysqli_query($con,$query_4);
  while($row_4=mysqli_fetch_array($rst_4))
  { 
    $citynamess=$row_4['cityname'];

$query_3=("SELECT * FROM `single` WHERE timing>='$time' and cityname='$citynamess'");
  $rst_3=mysqli_query($con,$query_3);
  while($row_3=mysqli_fetch_array($rst_3))
  {
    $id=$row['id'];
    $tias=$row_3['timing'];
  ?>
  
  
  
  <option value="<?php echo $row_3['cityname']  ." ". "Close" ;?>"><?php echo $row_3['cityname'] ;?> Close  <?php echo date("h:i a", strtotime("$tias"));?></option>
  <?php
  
  }
  }
  ?>
  </select>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>


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


$(document).ready(function(){
  var sum=0;
  
  $(".form-control").keyup(function(){
    sum=sum+parseInt($(this).val());
    $("#sum_val").val(sum);

  });
  
});



$(document).ready(function () {        
//alert("hello");        
$("#inputhgank").change(function(){
    //alert('I am pretty sure the text box changed');
    $("#inputhgcp").prop('disabled',true);
    event.preventDefault();
});
$("#inputhgank1").change(function(){
    //alert('I am pretty sure the text box changed');
    $("#inputhgcp1").prop('disabled',true);
    event.preventDefault();
});
$("#inputhgank2").change(function(){
    //alert('I am pretty sure the text box changed');
    $("#inputhgcp2").prop('disabled',true);
    event.preventDefault();
});
$("#inputhgcp2").change(function(){
    //alert('I am pretty sure the text box changed');
    $("#inputhgank2").prop('disabled',true);
    event.preventDefault();
});
$("#inputhgcp1").change(function(){
    //alert('I am pretty sure the text box changed');
    $("#inputhgank1").prop('disabled',true);
    event.preventDefault();
});
$("#inputhgcp").change(function(){
    //alert('I am pretty sure the text box changed');
    $("#inputhgank").prop('disabled',true);
    event.preventDefault();
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
<div class="form-group col-md-3">

<label for="inputhgank" id="na">Close Ank</label>
<input type="text" class="form-control" id="inputhgank" name="closeank" placeholder="Close Ank">
</div>
<div class="form-group col-md-3">
<label for="inputhgop" id="na">Open Patti</label>
<input type="text" class="form-control" id="inputhgank1" name="openpatti" placeholder="Open Patti">
</div>
<div class="form-group col-md-3">
<label for="inputamount" id="na">Amount</label>
<input type="text" class="form-control" id="inputhgank2" name="amount" placeholder="Amount">
</div>
</div>
<div class="form-group row">
<div class="form-group col-md-3">
<label for="inputhgoank" id="na">Open Ank</label>
<input type="text" class="form-control" id="inputhgcp" name="openank" placeholder="Open Ank">
</div>
<div class="form-group col-md-3">
<label for="inputhgcp" id="na">Close Patti</label>
<input type="text" class="form-control" id="inputhgcp1" name="closepatti" placeholder="Close Patti">
</div>
<div class="form-group col-md-3">
<label for="inputamount" id="na">Amount</label>
<input type="text" class="form-control" id="inputhgcp2" name="amount" placeholder="Amount">
</div>
</div>
<div class="col-xs-3"  style="display: none;">
<label for="ex3" id="na">Total Points</label>
<input class="form-control" id="ex11" type="text">
</div>
</div>
  <div class="modal-footer">
    <input type="submit" name="submit" id="btns" value="Submit" class="btn" style="width: 30%;">

  <button type="button" class="btn" id="btns" style="width: 30%;" data-dismiss="modal">Close</button>
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
  <div class="row "  style="display:none;">
  <?php
  $ha='12:00 PM';
  $he='24:00 AM';
  $ho='02:00 PM';
  $time = date("H:m");
  $query=("select * from halfsangam");
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
        <div class="panel-footer" id="di2"><h3 style="text-align:center;">OPEN:<?php echo $ti;?></h3>
        </div>
      </div>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3" style="float: left;">
      <div class="panel panel-primary " id="di">
        <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3>
        </div>
        <div class="panel-footer" id="di2"><h3 style="text-align:center;">Close:<?php echo $row['timing'];?></h3>
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