<?php
session_start();
header("Cache-control: private");
if(file_exists("localconf.php"))
{
	include_once("localconf.php");
}
else
{
	//$objConn = mysql_connect('123.108.40.122','root','password');
	//$objConn = mysql_connect('172.30.101.3','root','admin');

	//$objConn = mysql_connect('localhost','root','');
	$objConn = mysql_connect('localhost','root','smartjsm1000');
	define("REDIRECT_PATH","http://localhost/survey-sample");
	//define("REDIRECT_PATH","http://juxt360.com/msc");
}
if(!$objConn)
{
	die("Unable to connect to server ");
	exit;
}
mysql_select_db('new_survey', $objConn);
//mysql_select_db('surveyadmin', $objConn);

?>
