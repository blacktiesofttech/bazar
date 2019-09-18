<?php
session_start();
include_once('crud.php');
include_once('bootstarp.php');
$con= connection();
$result="";
$match="";
?>
<?php
if(isset($_POST["login"]))
{
$name=$_POST["username"];

$password=$_POST["pass"];

    
    $query="select * from admin where email='$name' and password='$password'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
if($row['email']==$name && $row['password']==$password)
{
$_SESSION['s_hello']=$name;
 echo "<script>window.location='index.php'</script>";
}
else
{
echo alrt_msg("Invalid Id And Password");

}


}
?>
<script src="http://code.jquery.com/jquery-1.10.1.min.js">
</script>
<script>
</script>
<script type="text/javascript">
function validateForm() {
  var  _email = document.forms["myForm1"]["email"].value;
   var _pass = document.forms["myForm1"]["password"].value;
  
  if (_email =='' && _pass =='') 

  {
   
    document.getElementById("demo").innerHTML = "All field is required";
    
    return false;
  }
else if(_email=='') 
  {
   document.getElementById("demo").innerHTML = "Email must be field out";
    
    return false;
    
  }
 else if(_pass=='') 
  {
   document.getElementById("demo").innerHTML = "Password must be field out";
    
    return false;

  }

</script>
<body>

    <!-------------------- Login Model ------------------------------->
</br>
</br>
</br>
</br>
</br>
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-4">

</div>
<div class="col-md-4 col-lg-4 col-sm-4">
<form method="post" name="myForm" class="forms">
  <h3>Login Panel</h3>
  <br>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
    </div>
    <button type="submit" class="btn" id="btn" name="login">Submit</button>
  </form>
</div>
<div class="col-md-4 col-lg-4 col-sm-4">

</div>
</div>
</div>
</div>
 
</body>
</html>

   
 
    <!-------------------- Login Model End ------------------------------->   
</body>