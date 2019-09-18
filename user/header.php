<?php
session_start();
if($_SESSION["s_username"]==null)
{
   echo "<script>window.location='../index.php'</script>";
}

include_once ('../connection.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Paisau</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="css/mystyle.css">
      <link rel="stylesheet" href="css/animatestyle.css">
      <link rel="stylesheet" href="../stylesss.css">


<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "cc066f9b-8a17-4d2c-b14e-910675ff707e",
    });
  });
</script>




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d0b57f153d10a56bd7b01e7/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<style>
  .nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #000;
  background-color: #8ec63f;
}
.nav-pills > .active > a > .badge {
  color: #8ec63f;
  background-color: #fff;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}

#di{
  border-color: #8ec63f;
}
#di1{
  background-color: #8ec63f;
  color: #372f2d;
  border-color: #8ec63f;
}
#di2{
  background-color: #372f2d;
  color: #fcfc04;
  border-color: #372f2d;
}
#di2 option{
  color: #8ec63f;
}
#di2 select{
  color: #8ec63f;
}
.hm{
  background-color: #8ec63f;
  height: 100%;
  border-radius: 15px;
}

.hm1{
  color: black;
  padding-top: 5px;
  font-size: 18px;
}
.hm2{
  padding-left: 10px;
  border-color: #372f2d;
}
.btn{
  border-color: #372f2d;
  background-color: #372f2d;
  color: #fcfc04;
  width: 100%;
}
.new{
  width: 100%;

}

.new input{
  width: 100%;
  height: 40px;
  border-radius: 10px;
  padding-left: 15px;

}
.btn{
  background-color: #372f2d;
  border-color: #372f2d;
  color: #fcfc04;
}
#tds th{
background-color: #8ec63f;
color: #000;
text-align: center;
font-size: 18px;
border-color: #372f2d;
}
.fs{
  background-color: #fcfc04;
  color: #372f2d;
}

#tds td{
background-color: #372f2d;
color: #fcfc04;
text-align: center;
font-size: 16px;
border-color: #8ec63f;
}
#na{
color: #8ec63f;
}
</style>
    
  </head>
  <body>
        
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Satta Matka Bazaar</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-rupee-sign"></i> Biding<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="single.php">Single</a></li>
            <li><a href="jodi.php">Jodi</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="spatti.php">Single Patti</a></li>
            <li><a href="dpatti.php">Double Patti</a></li>
            <li><a href="tpatti.php">Tripal Patti</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="hgam.php">Half Sangam</a></li>
            <li><a href="fgam.php">Full Sangam</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-rupee-sign"></i> Reports<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="bidhis.php">Bidding History</a></li>
            <li><a href="pohis.php">Points History</a></li>
            
            
          </ul>
        </li>
        <li><a href="playgame.php"><i class="fas fa-play"></i> How to Play</a></li>
        <li><a href="contact.php"><i class="fas fa-map-marker-alt"></i> Contact</a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><p style="color:#8ec63f; padding-top: 14px;"><?php echo $_SESSION['s_username']; ?> </p></li>
        <li ><a href="../logout.php" ><i class="fas fa-sign-in-alt"></i> Logout</a></li>
  
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div id="details" class="animated bounceInLeft"> 
<div class="clock">
  <div class="hours">
    <div class="first">
      <div class="number">0</div>
    </div>
    <div class="second">
      <div class="number">0</div>
    </div>
  </div>
  <div class="tick">:</div>
  <div class="minutes">
    <div class="first">
      <div class="number">0</div>
    </div>
    <div class="second">
      <div class="number">0</div>
    </div>
  </div>
  <div class="tick">:</div>
  <div class="seconds">
    <div class="first">
      <div class="number">0</div>
    </div>
    <div class="second infinite">
      <div class="number">0</div>
    </div>
  </div>
</div>
    <p>To Play Matka Online Whatsapp Us @ <button type="button" class="btn" style="width: 28%; background-color: #8ec63f; color:#372f2d; ">+91 8619-3230-68</button></p>
  </div>
</div>
    <img src="img/satta_matka_bazaar_banner1.jpg" alt="satta matka bazaar banner">
      </div>


