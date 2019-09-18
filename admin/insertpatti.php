<?php include_once('header.php');
include_once("connection.php");
include_once('crud.php');



if(isset($_POST["insertsingle"]))
{

$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d H:i:s");

$result=ins_record("single","null,'$cityname','$citynametype','$open','$timing','$date'");

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

//echo "<script>window.location='aprovel.php'</script>";
}

if(isset($_POST["insertjodi"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d H:i:s");

$result=ins_record("jodi","null,'$cityname','$citynametype','$open','$timing','$date'");

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}

if(isset($_POST["insertsinglepatti"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d H:i:s");

$result=ins_record("singlepatti","null,'$cityname','$citynametype','$open','$timing','$date'");

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}
if(isset($_POST["insertdoublepatti"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d H:i:s");

$result=ins_record("doublepatti","null,'$cityname','$citynametype','$open','$timing','$date'");

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}
if(isset($_POST["inserttripalpatti"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d H:i:s");

$result=ins_record("tripalpatti","null,'$cityname','$citynametype','$open','$timing','$date'");

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}
if(isset($_POST["inserthalfsangam"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d H:i:s");

$result=ins_record("halfsangam","null,'$cityname','$citynametype','$open','$timing','$date'");

if($result)
{
echo alrt_msg("Data Insert");
}
else
{
echo alrt_msg("Data Not Insert");
}

}
if(isset($_POST["insertfullsangam"]))
{
  
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d H:i:s");

$result=ins_record("fullsangam","null,'$cityname','$citynametype','$open','$timing','$date'");

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
  <h2>Isert Data Home</h2>
  <ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#home">Singel</a></li>
  <li><a data-toggle="pill" href="#menu1">Jodi</a></li>
  <li><a data-toggle="pill" href="#menu2">Single Patti</a></li>
  <li><a data-toggle="pill" href="#menu3">Double Patti</a></li>
  <li><a data-toggle="pill" href="#menu4">Tripal Patti</a></li>
  <li><a data-toggle="pill" href="#menu5">Half Sangam</a></li>
  <li><a data-toggle="pill" href="#menu6">Full Sangam</a></li>
  </ul>
  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <br>
  <section>
  <div class="container-fluid">
  <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
  <div class="row">
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
  <form method="post">
  <br>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">City Name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="firstname" placeholder="City Name" name="cityname">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Open & Close</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="lastname" placeholder="Open & Close" name="open">

  <input type="hidden" class="form-control hm2" id="fullname" placeholder="" name="citynametype">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Timing</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Timing" name="timing">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12">
  <button type="submit" name="insertsingle" class="btn btn-primary btn">Insert Single</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
  <br>


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
</br>




  </section>
  </div>
  <div id="menu1" class="tab-pane fade">
  <br>
  <div class="container-fluid">
  <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
  <div class="row">
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
  <form method="post">
  <br>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">City Name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new1" placeholder="City Name" name="cityname">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Open & Close</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new" placeholder="Open & Close" name="open">
  <input type="hidden" class="form-control hm2" id="full" placeholder="Open & Close" name="citynametype">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Timing</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Timing" name="timing">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12">
  <button type="submit" name="insertjodi" class="btn btn-primary btn">Insert Jodi</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
  <br>

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
  <div id="menu2" class="tab-pane fade">
  <section>
  <br>
  <div class="container-fluid">
  <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
  <div class="row">
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
  <form method="post">
  <br>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">City Name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new10" placeholder="City Name" name="cityname">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Open & Close</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new11" placeholder="Open & Close" name="open">
  <input type="hidden" class="form-control hm2" id="fullww" placeholder="Open & Close" name="citynametype">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Timing</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Timing" name="timing">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12">
  <button type="submit" name="insertsinglepatti" class="btn btn-primary btn">Insert Single Patti</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
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
  <br>
  </section>
  </div>
  <div id="menu3" class="tab-pane fade">
  <section>
  <br>
  <div class="container-fluid">
  <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
  <div class="row">
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
  <form method="post">
  <br>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">City Name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new8" placeholder="City Name" name="cityname">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Open & Close</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new9" placeholder="Open & Close" name="open">
  <input type="hidden" class="form-control hm2" id="fullw" placeholder="Open & Close" name="citynametype">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Timing</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Timing" name="timing">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12">
  <button type="submit" name="insertdoublepatti" class="btn btn-primary btn">Insert Double Patti</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
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
  <br>
  </section>
  </div>
  <div id="menu4" class="tab-pane fade">
  <section>
  <br>
  <div class="container-fluid">
  <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
  <div class="row">
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
  <form method="post">
  <br>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">City Name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new6" placeholder="City Name" name="cityname">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Open & Close</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new7" placeholder="Open & Close" name="open">
  <input type="hidden" class="form-control hm2" id="fulleee" placeholder="Open & Close" name="citynametype">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Timing</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Timing" name="timing">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12">
  <button type="submit" name="inserttripalpatti" class="btn btn-primary btn">Insert Tripal Patti</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
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
  <br>
  </section>
  </div>
  <div id="menu5" class="tab-pane fade">
  <section>
  <br>
  <div class="container-fluid">
  <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
  <div class="row">
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
  <form method="post">
  <br>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">City Name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new4" placeholder="City Name" name="cityname">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Open & Close</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new5" placeholder="Open & Close" name="open">
  <input type="hidden" class="form-control hm2" id="fullee" placeholder="Open & Close" name="citynametype">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Timing</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Timing" name="timing">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12">
  <button type="submit" name="inserthalfsangam" class="btn btn-primary btn">Insert Half Sangam</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
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
  <br>
  </section>
  </div>
  <div id="menu6" class="tab-pane fade">
  <section>
  <br>
  <div class="container-fluid">
  <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
  <div class="row">
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
  <form method="post">
  <br>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">City Name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new2" placeholder="City Name" name="cityname">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Open & Close</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="new3" placeholder="Open & Close" name="open">
  <input type="hidden" class="form-control hm2" id="fulle" placeholder="Open & Close" name="citynametype">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Timing</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Timing" name="timing">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12">
  <button type="submit" name="insertfullsangam" class="btn btn-primary btn">Insert Full Sangam</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
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
  <br>
  </section>
  </div>
  </div>
  </div>
  </section>

      




    <?php include_once('footer.php');
?>
  </body>
</html>