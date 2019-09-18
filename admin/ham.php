<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
$result=" ";
if(isset($_POST["send"]))
{
  $to=$_POST["to"];
$subject=$_POST["subject"];
$comment=$_POST["comment"];

  $to = $to;
$subject = $subject;
$txt = $comment;


mail($to,$subject,$txt,'From: info@addsmoney4you.com','-f info@addsmoney4you.com');
}
?>
  <!------------------------------ Section -------------------------------------->
    <section class="contact-section">
  <div class="container">
  <div class="row">
  <!------------------------------ Email : Send Email -------------------------------------->
  <div class="col-lg-12 contact-info">
  <div style="height: 100%; background-color: #FA3F27; margin-bottom: 20px; border-radius:0px 0px 65px 10px; box-shadow: 10px 10px 5px grey;">
  <div  style="height: 50px; width: 100%; background-color: #CB0505; border-radius:0px 0px 35px 35px;">
  <span>
  <h4  style="padding-left: 26px; padding-top: 11px; font-family: Monospace; color:#FFF;">
  Email : Send Email
  </h4>
  </span>

  </div>
  </br>
  <div class="col-lg-12" >

  <form class="col-lg-10 contact-info" style="border-radius: 23px; box-shadow: 10px 10px 5px black;"> 
  <!------------------------------ Forment Text Email -------------------------------------->
  <div class="input-group promo-code-form ">
  <label style="color: #ff0000; ">Sender :<input name="from" style="border: 1px solid gray;" type="text" placeholder="addsmoney4you@gmail.com" value="info@addsmoney4you.com" readonly  onkeyup ="Validate(this)" required /></label>

  <label style="color: #ff0000; ">To :
    <input style="border: 1px solid gray;" type="text" name="to"  placeholder="addsmoney4you@gmail.com" />
  
  </label>
  </div>

  <div class="input-group promo-code-form ">
      <label style="color: #ff0000; ">Subject</label>
      <input style="border: 1px solid gray;" type="text" placeholder="Subject" name="subject"  onkeyup = "Validate(this)" required />
  </div>  
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://www.tiny.cloud/css/codepen.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <label style="color: #ff0000; ">Content :</label>
    <textarea name="comment" id="full-featured" style="border:solid 1px #ff0000; ">
    </textarea>
    <script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc'></script>
    <script  src="index.js"></script>
    </br>
    <button type="submit" class="btn" name="send" style="padding-left: 30px; padding-right: 30px; border-radius:0px 24px 35px 35px; ">Send Mail</button>
  <!------------------------------ Forment Text Email End --------------------------------------> 
  </form>
  </div>
  </br>
  </div>
  </div>
  <!------------------------------ Email : Send Email End --------------------------------------> 
  </div>
  </div>
  </section>
  <!------------------------------ Section End -------------------------------------->
  </br>
  </br>
  </br>
  
<?php  include_once ('footer.php');?>

  
  