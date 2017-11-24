<?php
session_start();
header("Cache-control: private");
if(file_exists("localconf.php"))
{
	include_once("localconf.php");
}
else
{
  $objConn = mysql_connect('localhost','root','');
	define("REDIRECT_PATH","http://juxt360.com/shopping");
}
if(!$objConn)
{
die("Unable to connect to server ");
	exit;
}
mysql_select_db('new_survey', $objConn);
?>

<?php
//session_start();
//header("Cache-control: private");
//if(file_exists("localconf.php"))
//{
//	include_once("localconf.php");
//}
//else
//{
//  $objConn = mysql_connect('localhost','root','smartjsm1000');
//	define("REDIRECT_PATH","http://juxt360.com/shopping");
//}
//if(!$objConn)
//{
//die("Unable to connect to server ");
//	exit;
//}
//mysql_select_db('new_survey', $objConn);
?>
