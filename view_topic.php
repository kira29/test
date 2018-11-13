<?php
session_start();
//ERROR LOGGING
error_reporting(E_ALL);
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE);
ini_set('error_log', '/home/parth/git/rabbitmqphp_example/logging/feLog.txt');
ini_set('log_errors_max_len', 1024);
$username = $_SESSION["username"];

$mydb = new mysqli('127.0.0.1','root','root','IT490');
	
	if ($mydb->errno != 0){
		echo "Failed to connect to database: ".$mydb->error.PHP_EOL;
		exit(0);
	}
	echo "<br><br>Successfully connected to database".PHP_EOL;

$id=$_GET['id'];
echo $id;
$sql = mysqli_query($mydb,"SELECT * FROM fquestions WHERE id='$id'");
$rows=mysqli_fetch_array($sql);
?>
