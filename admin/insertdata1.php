<?php include_once('header.php');
include_once("connection.php");
include_once('crud.php');
if(isset($_POST["insertgameresult"]))
{
  
$cityname=$_POST["cityname"];
$sattanumber=$_POST["sattanumber"];
$date = date("Y-m-d H:i:s");
$result=ins_record("insertgameresult","null,'$cityname','$sattanumber','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

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

if(isset($_POST["insertgamerate"]))
{
  
$gametype=$_POST["gametype"];
$bidamount=$_POST["bidamount"];
$winamount=$_POST["winamount"];
$date = date("Y-m-d H:i:s");
$result=ins_record("insertgamerate","null,'$gametype','$bidamount','$winamount','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

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

if(isset($_POST["insertgametimeing"]))
{
  
$cityname=$_POST["cityname"];
$opentime=$_POST["opentime"];
$closetime=$_POST["closetime"];
$date = date("Y-m-d H:i:s");
$result=ins_record("insertgametimeing","null,'$cityname','$opentime','$closetime','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

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
if(isset($_POST["insertnotices"]))
{
  
$notices=$_POST["notices"];
$date = date("Y-m-d H:i:s");
$result=ins_record("insertnotices","null,'$notices','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

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
if(isset($_POST["insertnews"]))
{
  
$news=$_POST["news"];
$date = date("Y-m-d H:i:s");
$result=ins_record("insertnews","null,'$news','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");

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
?>
      
  <section>
  <div class="container">
  <h2>Isert Data Home</h2>
  <ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#home">Insert Notices</a></li>
  <li><a data-toggle="pill" href="#menu1">Insert News</a></li>
  <li><a data-toggle="pill" href="#menu2">Insert Game Timeing</a></li>
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
  <div class="form-group">
  <center>
  <label for="exampleInputEmail1" class="hm1">Notice</label>
  </center>
  <input type="text" name="notices" class="form-control hm2" id="" a placeholder="Notice">
  </div>
  <button type="submit" name="insertnotices" class="btn btn-primary">Insert Notices</button>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
  <br>
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
  <div class="form-row">
  <div class="col-md-12 mb-12">
  <center>
  <label for="" class="hm1">News</label>
  </center>
  <textarea class="form-control hm2" name="news" style="height: 200px;" placeholder="News"  required></textarea>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12"   style="padding-top: 20px;">
  <button type="submit" name="insertnews " class="btn btn-primary btn">Insert News</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
  <br>
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
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="City Name" name="cityname">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Open Time</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Open Time" name="opentime">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label hm1">Close Time</label>
  <div class="col-sm-8">
  <input type="text" class="form-control hm2" id="inputEmail3" placeholder="Close Time" name="closetime">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-12">
  <button type="submit" name="insertgametimeing" class="btn btn-primary btn">Insert Game Timeing</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
  </div>
  </div>
  </div>
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