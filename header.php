<?php
session_start();
include_once('crud.php');
$con= connection();
$result="";
$match="";
if(isset($_POST["signup"]))
{
$name=$_POST["name"];
$last_name=$_POST["lastname"];
$username=$_POST["username"];
$email=$_POST["email"];
$g=$_POST["g"];
$country=$_POST["country"];
$city=$_POST["city"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$confpass=$_POST["confpass"];
$date = date("Y-m-d H:m:s");
$status='Inactive';
if($password==$confpass)
{
$result=ins_record("signup","null,'$name','$lastname','$username','','$email','$g','$country','$city',$phone,'$password','$status','$date'");

//$result23=ins_record("bonus","null,'$username','$email','20','$date'");
}
else
{
echo alrt_msg("Password Not Match");
}
if($result)
{
echo alrt_msg("You Are Registered Now Wait Aprovel Admin");
}
else
{
echo alrt_msg("Something Wrong In Registration");
}
}
?>
<?php
if(isset($_POST["login"]))
{
$name=$_POST["username"];
$password=$_POST["pass"];
$query="select * from signup where username='$name' and password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if($row['username']==$name && $row['password']==$password && $row['status']=='Active')
{
$_SESSION['s_username']=$name;
$_SESSION['u_id']=  $row['id'];
echo "<script>window.location='user/index.php'</script>";
}
else
{
echo alrt_msg("Wait Admin Not Aprovel Your Id");
}
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6992008201702034",
    enable_page_level_ads: true
  });
</script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js">
</script>
<script>

//AJAX is the art of exchanging data with a server, and update parts of a web page - without reloading the whole page.
$(document).ready(function()
{
  
    
    $("#email").keyup(function(){
        var _email=$("#email").val();
        
        $.ajax({
            url:"check_email.php",
            data:{user_email:_email},
            
            success:function(results)
            {
              $("#er").html(results);
            }
                        
          });       
    });


     $("#user").keyup(function(){
        var _user=$("#user").val();
        
        $.ajax({
            url:"check_username.php",
            data:{user_email:_user},
            
            success:function(results)
            {
              $("#un").html(results);
            }
                        
          });       
    });


    
    $("#phone").keyup(function(){
        var _phone=$("#phone").val();
        
        $.ajax({
            url:"check_phone.php",
            data:{user_phone:_phone},
            
            success:function(results)
            {
              $("#po").html(results);
            }
                        
          });       
    });



$("#confpass").keyup(function(){
        var conf=$("#confpass").val();
        var pasw=$("#password").val();
        
        
        $.ajax({
            url:"confirm_pass.php",
            data:{confirm:conf,pwd:pasw},
            
            success:function(results)
            {
              $("#co").html(results);
            }
                        
          });       
    });
    
      
});

</script>
                                <!-- JAVA SCRIPT-->
<script type="text/javascript">




function validateForm() {

var  _name = document.forms["myForm1"]["name"].value;
  var _lst = document.forms["myForm1"]["lastname"].value;
  var  _username = document.forms["myForm1"]["username"].value;
  var  _email = document.forms["myForm1"]["email"].value;
  var _country = document.forms["myForm1"]["country"].value;
  var  _city = document.forms["myForm1"]["city"].value;
  var _num = document.forms["myForm1"]["phone"].value;
   var _pass = document.forms["myForm1"]["password"].value;
  var _confirm = document.forms["myForm1"]["confpass"].value;
  
  if (_name =='' && _lst=='' && _username =='' && _email =='' && _country =='' && _city ==''  && _num =='' && _pass =='' && _confirm =='') 

  {
   
    document.getElementById("demo").innerHTML = "All field is required";
    
    return false;
  }



  else if(_name=='') 
  {
   document.getElementById("demo").innerHTML = "Name must be field out";
    
    return false;
    
  }
  
 else if(_lst=='') 
  {
   document.getElementById("demo").innerHTML = "Lastname must be field out";
    
    return false;
    
  }

else if(_username=='') 
  {
   document.getElementById("demo").innerHTML = "User Name must be field out";
    
    return false;
    
  }

else if(_email=='') 
  {
   document.getElementById("demo").innerHTML = "Email must be field out";
    
    return false;
    
  }
 else if(_country=='') 
  {
   document.getElementById("demo").innerHTML = "Country must be field out";
    
    return false;
    
  }
    else if(_city=='') 
  {
   document.getElementById("demo").innerHTML = "City must be field out";
    
    return false;
    
  }

  else if(_num=='') 
  {
   document.getElementById("demo").innerHTML = "Number must be field out";
    
    return false;
    
  }



 else if(_pass=='') 
  {
   document.getElementById("demo").innerHTML = "Password must be field out";
    
    return false;

  }
  
  
 else if(_confirm=='') 
  {
   document.getElementById("demo").innerHTML = "Confirm Password must be field out";
    
    return false;
    
  }
  

  else
  {
return true;
    

  }
   
}


</script>
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
      <link rel="stylesheet" href="./stylesss.css">


<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "b719c82d-6d35-4703-8a1f-090c3aa47563",
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
  //background-color: white;


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
#numsss
{
  width: 28%; 
  background-color: #8ec63f; 
  color:#372f2d; 
}
@media screen and (max-width: 980px) and (min-width: 340px)
{
  #numsss
  {
    width: 50%;
  }
}
@media screen and (max-width: 339px) and (min-width: 0px)
{
  #numsss
  {
    width: 50%;
  }
}
#modalsss
{
	background-color: white;
	height: 350px;
	border-radius: 10px;
}

#modalsss1
{
	border-radius: 10px;

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
      <a class="navbar-brand" href="index.php">Paisau</a>
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
        <li><a href="playgame.php"><i class="fas fa-play"></i> How to Play</a></li>
        <li><a href="contact.php"><i class="fas fa-map-marker-alt"></i> Contact</a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-sign-in-alt"></i> Login</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fas fa-user-plus"></i> Sign-Up</a></li>
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
    <p>To Play Matka Online Whatsapp Us @ <button type="button" class="btn" id="numsss">+91 8619-3230-68</button></p>
  </div>
</div>
    <img src="img/satta_matka_bazaar_banner1.jpg" alt="satta matka bazaar banner">
      </div>


      <!-------------------- sign up ------------------------------->





    <div class="container">

    <!-- Trigger the modal with a button -->
 

    <!-- Modal -->

    

    <div class="modal fade" id="myModal1" role="dialog">

    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">

    <div class="modal-header">   
    <h4 style="color:green;">Create Account</h4>
    </div>

    <div class="col-lg-12 card-right">


    <form class="new" method="post" name="myForm1"  onsubmit="return validateForm()">
    </br>
    </br> 
    <input type="text" name="name" placeholder="First Name">
    </br>
    </br>
    <input type="text" name="lastname" placeholder="Last Name">
    </br>
    </br>
    <input type="text" name="username" placeholder="User Name" id="user">
    <p id="un" style="color:red;"></p>
    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[gmail]+\.[com]{2,}$" id="email" placeholder="Email">
    <p id="er" style="color:red;"></p>
    
    <label style="padding-left: 40px; float: left;" class="">
      <input style="height: 20px;"  type="radio" value="male" name="g" checked><span style="font-size: 14px;">Male</span>
    </label>
    <label style="padding-left: 40px;float: left;" class="">
      <input style="height: 20px;" type="radio" value="female" name="g" checked><span style="font-size: 14px;">Female</span>
    </label> </br>
    </br>
    <input type="text" placeholder="Country Name" name="country" >
    </br>
    </br>
    <input type="text" placeholder="City" name="city">
    </br>
    </br>
    <input type="Number" placeholder="Phone Number"  name="phone" id="phone">
    <p id="po" style="color:red;"></p>
    <input type="password" placeholder="Password" name="password" id="password" >
    </br>
    </br>
    <input type="password" placeholder="Confirm Password" name="confpass" id="confpass">
   <p id="co" style="color:red"></p>
   <p id="demo" style="color:red"></p>

   <input type="Submit" value="Singup" class="site-btn btn" name="signup">
                    
    </form>
    </div>

    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>

    </div>
      
    </div>

    </div>
  
    </div>
    <!-------------------- sign up End ------------------------------->

    <!-------------------- Login Model ------------------------------->

    <div class="container">
      
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog"  id="modalsss1">
    
    <!-- Modal content-->

    <div class="modal-content" id="modalsss">

    <div class="modal-header">   
    <h4 style="color:green;">LogIn</h4>
    </div>

    </br>

    <div class="col-lg-12 card-right">
    <form class="new" method="post" name="myForm" >
    <input type="text" placeholder="Email" name="username" required >
    </br>
    </br>
    <input type="password" placeholder="Password" name="pass" required >                     
   <p id="demo" style="color:red"></p>

   <input type="Submit" value="Login" class="site-btn btn" name="login">
   <a href="forget_pass.php">Forget Password</a>
    </form>
    <div class="modal-footer">
    <button type="button" style="color:#FF0000;" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>  
    </div>    
    </div>
    </div>

   
 
    <!-------------------- Login Model End ------------------------------->   