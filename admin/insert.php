<?php
// Create connection
//$conn = mysqli_connect("localhost:3306","paisauin_paisaui","Paisa@123","paisauin_paisau");
// Check connection
//if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["insertsingle"]))
{
$cityname=$_POST["cityname"];
$open=$_POST["open"];
//$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");


$sql = "INSERT INTO single (cityname,opentiming,timing,displayopen,date_time,times)
VALUES ('$cityname','$open','$timing','0','$date','$time')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    $last_id;
    $sqls= "INSERT INTO insertgameresult (cityname,sattanumber,singleopen,singleclose,sattanumberclose,date_time,times,ref_id)
VALUES ('$cityname','','','','','$date','$time','$last_id')";
if (mysqli_query($conn, $sqls)) {
	//echo "Hello";
}

} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}


if(isset($_POST["insertsingle"]))
{
$cityname=$_POST["cityname"];
$open=$_POST["open"];
//$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");


$sqlss = "INSERT INTO jodi (cityname,open,timing,displayopen,date_time,times)
VALUES ('$cityname','$open','$timing','0','$date','$time')";
mysqli_query($conn, $sqlss);



}

if(isset($_POST["insertsingle"]))
{
$cityname=$_POST["cityname"];
$open=$_POST["open"];
//$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");


$sqlss = "INSERT INTO doublepatti (cityname,open,timing,displayopen,date_time,times)
VALUES ('$cityname','$open','$timing','0','$date','$time')";
mysqli_query($conn, $sqlss);



}

if(isset($_POST["insertsingle"]))
{
$cityname=$_POST["cityname"];
$open=$_POST["open"];
//$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");


$sqlss = "INSERT INTO tripalpatti (cityname,open,timing,displayopen,date_time,times)
VALUES ('$cityname','$open','$timing','0','$date','$time')";
mysqli_query($conn, $sqlss);



}


if(isset($_POST["insertsingle"]))
{
$cityname=$_POST["cityname"];
$open=$_POST["open"];
//$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");


$sqlss = "INSERT INTO halfsangam (cityname,open,timing,displayopen,date_time,times)
VALUES ('$cityname','$open','$timing','0','$date','$time')";
mysqli_query($conn, $sqlss);



}


if(isset($_POST["insertsingle"]))
{
$cityname=$_POST["cityname"];
$open=$_POST["open"];
//$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");


$sqlss = "INSERT INTO fullsangam (cityname,open,timing,displayopen,date_time,times)
VALUES ('$cityname','$open','$timing','0','$date','$time')";
mysqli_query($conn, $sqlss);



}

if(isset($_POST["insertsingle"]))
{
$cityname=$_POST["cityname"];
$open=$_POST["open"];
//$citynametype=$_POST["citynametype"];
$timing=$_POST["timing"];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");


$sqlss = "INSERT INTO singlepatti (cityname,open,timing,displayopen,date_time,times)
VALUES ('$cityname','$open','$timing','0','$date','$time')";
mysqli_query($conn, $sqlss);



}


mysqli_close($conn);
?>