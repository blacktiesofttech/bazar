<?php
include_once('header.php');
    $con= connection();

$result="";


  if(isset($_POST["send"]))
{


$add_news=$_POST["add_news"];

$result=ins_record("add_news","null,'$add_news'");

if($result)
{
echo alrt_msg("Successfully ");

}
else
{
echo alrt_msg("No InUpt Ads");

}

}

?>

<style>
	#ads
    {
      z-index: -2;
      position: absolute;
      padding-top: 80px;
    }
</style>

<div class="container" id="ads">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="row">
<div class="col-md-3 col-lg-3 col-sm-3">

</div>



<div class="col-md-6 col-lg-6 col-sm-6" id="fs">
<form method="post" name="" class="forms">
<div class="form-group">
<label for="email">ADD NEWS</label>
<input type="text" class="form-control" id="email" placeholder="ADD NEWS" name="add_news" value="">
</div>
<button type="submit" class="btn" id="btn" name="send">Submit</button>
</form>

</div>
<div class="col-md-3 col-lg-3 col-sm-3">

</div>
</div>
</div>
</div>









<?php  include ('footer.php');?>
