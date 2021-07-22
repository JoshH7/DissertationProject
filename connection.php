<?php
define('DB_H', 'localhost');
define('DB_N', 'logindetails');
define('DB_U', 'root');
define('DB_P', '');
include('Index.html');

$connection = mysqli_connect(DB_H,DB_U,DB_P,DB_N);
if(!$connection){
	error_log("Couldnt connect to mysql" . mysqli_error($connection));
die('Couldnt connect to server'); }
	
$db_select = mysqli_select_db($connection,DB_N);
if(!$db_select){
	error_log("Couldnt connect to mysql" . mysqli_error($connection));
die('Server Error 1'); }
?>

		