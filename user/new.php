<?php
 include_once('header.php');
include_once("connection.php");
include_once('../crud.php');
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
  
  if(isset($_POST["submit"]))
{

$cityname=$_POST["cityname"];
$single='Single';
//$bidnumber=$_POST["bidnumber"];
//$point=$_POST["point"];
$date = date("Y-m-d");
$time = date("H:m:s");
$sql="select * from single";
$result=mysqli_query($con,$sql) or die(mysqli_query($con));
$row=mysqli_fetch_array($result);
$city=$row['cityname'];

echo $_POST["bidno"][0] ."<br>";
echo $_POST["bidno"][1] ."<br>";
echo $_POST["bidno"][2] ."<br>";
echo $_POST["bidno"][3] ."<br>";
echo $_POST["bidno"][4] ."<br>";
echo $_POST["bidno"][5] ."<br>";
echo $_POST["bidno"][6] ."<br>";
echo $_POST["bidno"][7] ."<br>";
echo $_POST["bidno"][8] ."<br>";
echo $_POST["bidno"][9] ."<br>";
$bid_no="";
$bid_value="";

for($i=0;$i<sizeof($_POST["bidno"]);$i++)
{
    if($_POST["bidno"][$i]!="")
    {
      //$bid_no.= $i.",";
       $bid_value.=$_POST["bidno"][$i].",";
       if ($bid_value) {
        
       }
    }
}


$bid_no= rtrim($bid_no,',');
$bid_value= rtrim($bid_value,',');
//$result=ins_record("sinbid","null,'$userid','$username','$email','$city','$open','$single','$bid_no','$bid_value','$date'");

}
?>

    <section>
      <div class="container">
  <br>
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Place Bid</a></li>
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
  <div class="panel-body" id="di2"><h4 style="text-align:center;"><?php echo $row['point']-$row1['SUM(`point`)']-$fullsangampoint-$halfsangampoint ;?></h4></div>
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
  $query=("select * from single");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  { 
   $id=$row['id'];
    $ti=$row['timing'];
  
  ?>
  <option value="<?php echo $row['citynametype'] ;?>"><?php echo $row['cityname'] ;?> <?php echo $row['open'] ;?> <?php echo $row['timing'] ;?></option>
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


  $(".form-control").keyup(function(){	
    	    var sum=0;
	/*if($(this).val().length==0)
	{   
		sum=sum-parseInt($(this).val())  ; 	   
	}
	else
	{
	 sum=sum+parseInt($(this).val());
	}

	    $("#sum_val").val(sum);
*/

//var text= new Array();

$("input[name='bidno[]']").each(function(){
	if($(this).val()!=null && $(this).val()!="")
	{
    	//text.push($(this).val());		
		sum=sum+parseInt($(this).val())  ; 	 
	}
}); 
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
  <label for="ex1" id="na" >0</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="0">
  <input class="form-control" id="qty" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex2" id="na"  >1</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="1">
  <input class="form-control" id="qty" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na" >2</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="2">
  <input class="form-control" id="ex3" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na" >3</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="3">
  <input class="form-control" id="ex4" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na" >4</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="4">
  <input class="form-control " id="ex5" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na" >5</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="5">
  <input class="form-control" id="ex6" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na" >6</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="6">
  <input class="form-control" id="ex7" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na" >7</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="7">
  <input class="form-control" id="ex8" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na" >8</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="8">
  <input class="form-control" id="ex9" type="text" name="bidno[]">
  </div>
  <div class="col-xs-2">
  <label for="ex3" id="na" >9</label>
  <input class="form-control"  type="hidden" name="bidnumber" value="9">
  <input class="form-control" id="ex10" type="text" name="bidno[]">
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
  $query=("select * from single");
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
</div>
</div><br>
<br>
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

