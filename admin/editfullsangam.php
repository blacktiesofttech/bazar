<?php
include_once('crud.php');
include_once('connection.php');
    $con= connection();



if(isset($_GET['edit']))
{

  $edit = $_GET['edit'];
//echo $_SESSION['s_username'];

$query=("select * from fullsangam where id='$edit'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
}


if(isset($_POST["send"]))
{
  
$id=$_POST["id"];
$cityname=$_POST["cityname"];
$open=$_POST["open"];
$timing =$_POST["timing"];

$query="update fullsangam set open='$open', timing='$timing' where id='$edit'";

$rst=mysqli_query($con,$query) or die( mysqli_error($con));

echo "<script>window.location='bazar.php'</script>";
} 



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>UI Elements - Ace Admin</title>

    <meta name="description" content="Common UI Features &amp; Elements" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/chosen.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />
    <script src="assets/js/ace-extra.min.js"></script>
    <style>
.hm{
  background-color: #8ec63f;
  height: 100%;
  border-radius: 15px;
}

.hm1{
  color: #372f2d;
  padding-top: 5px;
  font-size: 18px;
  text-align: center;

}
.hm2{
  padding-left: 10px;
  border-color: #372f2d;
  text-align: center;
}
.btn{
  
}
#inputGroupSelect01{
  padding-left: 10px;
  border-color: #372f2d;
  text-align: center;
  width: 100%;
  border-radius: 10px;
  height: 40px;
}
.bn{
  border-color: #372f2d;
  background-color: #372f2d;
  color: #fcfc04;
  width: 100%;
}
.bn hover{
  border-color: #372f2d;
  background-color: #372f2d;
  color: #fcfc04;
  width: 100%;
}
  </style>

    <!-- ace settings handler -->
    

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->


  </head>
<body class="no-skin">
<div id="navbar" class="navbar navbar-default ace-save-state">
<div class="navbar-container ace-save-state" id="navbar-container">
<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
<span class="sr-only">Toggle sidebar</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="navbar-header pull-left">
<a href="index.php" class="navbar-brand">
<small><i class="fa fa-user"></i>Satta Bazar</small></a>
</div>
<div class="navbar-buttons navbar-header pull-right" role="navigation">
<ul class="nav ace-nav">
<li class="light-blue dropdown-modal">
<a data-toggle="dropdown" href="#" class="dropdown-toggle">
<i class="ace-icon fa fa-sign-out"></i>
<span class="user-info" id="ss">Logout</span></a></li>
</ul>
</div>
</div>
</div>



  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
    <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
    <form method="post">
    <br>
    <div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">Id</label>
    </center>
    <input type="email" class="form-control hm2" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="User Id" name="id" readonly required value="<?php echo $row["id"]?>">
    </div>
    <div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">City Name</label>
    </center>
    <input type="email" class="form-control hm2" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email"  name="cityname" readonly required value="<?php echo $row["cityname"]?>">
    </div>
    <div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">Options</label>
    </center>
    <select  class="custom-select" id="inputGroupSelect01" name="open">
    <option selected><?php echo $row["open"]?></option>
    <option  value="Open">Open</option>
    <option  value="Close">Close</option>
    </select>
    </div>
    <div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">Timing</label>
    </center>
    <input type="text" class="form-control hm2" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Phone Number" name="timing"  required value="<?php echo $row["timing"]?>">
    </div>
  <div class="form-group row">
    <div class="col-sm-12">
    <button type="submit" name="send" class="btn bn">Insert Data</button>
    </div>
    </div>
  </form>
    </div>
    <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
    </div>
    </div>
    </div>
</div><!-- /.main-container -->
    <!-- basic scripts -->
    <!--[if !IE]> -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="assets/js/jquery-ui.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/bootbox.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.gritter.min.js"></script>
    <script src="assets/js/spin.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/buttons.flash.min.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <script src="assets/js/buttons.colVis.min.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>
    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="model.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/spinbox.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/daterangepicker.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/js/jquery.knob.min.js"></script>
    <script src="assets/js/autosize.min.js"></script>
    <script src="assets/js/jquery.inputlimiter.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/bootstrap-tag.min.js"></script>
  </body>
</html>
