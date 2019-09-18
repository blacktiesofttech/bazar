<?php
/*
Text Counter by http://www.free-php-counter.com
You are allowed to remove advertising after you purchased a licence
*/

// settings

// ip-protection in seconds
$counter_expire = 600;

// ignore agent list
$counter_ignore_agents = array('bot', 'bot1', 'bot3');

// ignore ip list
$counter_ignore_ips = array('127.0.0.2', '127.0.0.3');


// datebase settings
$counter_host = "localhost:3306";
$counter_user = "addsmone_login";
$counter_password = "Hulkslam12345";
$counter_database = "addsmone_addsmoney4you";

// get basic information
$counter_agent = $_SERVER['HTTP_USER_AGENT'];
$counter_ip = $_SERVER['REMOTE_ADDR']; 
$counter_time = time();



// connect to database
$counter_connected = true;
$link = mysqli_connect($counter_host, $counter_user, $counter_password, $counter_database);
if (!$link) 
{
 	// can't connect to database
	$counter_connected = false;
	die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
	exit;
}
?>