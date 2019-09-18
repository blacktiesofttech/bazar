<?php
include ('header.php');
include("connection.php");


if(isset($_GET['edit']))
{

	$edit = $_GET['edit'];
//echo $_SESSION['s_username'];

$query=("select * from signup where id='$edit'");
$rst=mysqli_query($con,$query);
$row=mysqli_fetch_array($rst);
}

include_once('../crud.php');
    $con= connection();

if(isset($_POST["send"]))
{
	
$userid=$_POST["userid"];
$username=$_POST["fullname"];
$email=$_POST["email"];
$date = date("Y-m-d H:i:s");

$status=$_POST['status'];

$query="update signup set status='$status' where id='$edit'";

$rst=mysqli_query($con,$query) or die( mysqli_error($con));

echo "<script>window.location='aprovel.php'</script>";
}	

?>

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
	<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-xl-12 col-sl-12">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-xl-3 col-sl-3"></div>
    <div class="col-lg-6 col-md-6 col-xl-6 col-sl-6 hm">
    <form method="post">
    <br>
    <div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">User Id</label>
    </center>
    <input type="email" class="form-control hm2" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="User Id" name="userid" readonly required value="<?php echo $row["id"]?>">
  	</div>
  	<div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">User Name</label>
    </center>
    <input type="email" class="form-control hm2" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="User Name" name="fullname" readonly required value="<?php echo $row["username"]?>">
  	</div>
  	<div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">Email</label>
    </center>
    <input type="email" class="form-control hm2" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email"  name="email" readonly required value="<?php echo $row["email"]?>">
  	</div>
  	<div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">Gender</label>
    </center>
    <input type="email" class="form-control hm2" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Gender" name="sendaccount" readonly required value="<?php echo $row["gender"]?>">
  	</div>
  	<div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">Phone Number</label>
    </center>
    <input type="email" class="form-control hm2" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Phone Number" name="account" readonly required value="<?php echo $row["phone"]?>">
  	</div>
  	<div class="form-group">
    <center>
    <label for="exampleInputEmail1" class="hm1">Options</label>
    </center>
    <select  class="custom-select" id="inputGroupSelect01" name="status">
    <option selected><?php echo $row["status"]?></option>
    <option  value="Not Aprovel">Not Aprovel</option>
    <option  value="Aprovel">Aprovel</option>
  	</select>
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
    <br>

	
    <!------------------------------ Contact Us End -------------------------------------->	
	




<?php  include ('footer.php');?>