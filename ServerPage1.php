<?php
include('config.php');
require("../assets/lib/htmlfunction.php");
/*print_r($_POST);
exit;*/

global $objConn;
$field = "";
$values = "";
$sec_code = "";
$sessionid = "";
$result = "SUCCESS";
$fldArray = array();

unset($_SESSION['buy_product_1']);
unset($_SESSION['buy_product_2']);
unset($_SESSION['buy_product_3']);
unset($_SESSION['buy_product_4']);
unset($_SESSION['buy_product_5']);
unset($_SESSION['buy_product_6']);
unset($_SESSION['buy_product_9']);

if(isset($_POST['buy_product_1']) && $_POST['buy_product_1']!=''){
  $_SESSION['buy_product_1']=$_POST['buy_product_1'];
}
if(isset($_POST['buy_product_2']) && $_POST['buy_product_2']!=''){
  $_SESSION['buy_product_2']=$_POST['buy_product_2'];
}
if(isset($_POST['buy_product_3']) && $_POST['buy_product_3']!=''){
  $_SESSION['buy_product_3']=$_POST['buy_product_3'];
}
if(isset($_POST['buy_product_4']) && $_POST['buy_product_4']!=''){
  $_SESSION['buy_product_4']=$_POST['buy_product_4'];
}
if(isset($_POST['buy_product_5']) && $_POST['buy_product_5']!=''){
  $_SESSION['buy_product_5']=$_POST['buy_product_5'];
}
if(isset($_POST['buy_product_6']) && $_POST['buy_product_6']!=''){
  $_SESSION['buy_product_6']=$_POST['buy_product_6'];
}
if(isset($_POST['buy_product_7']) && $_POST['buy_product_7']!=''){
  $_SESSION['buy_product_7']=$_POST['buy_product_7'];
}

//19march16//
if(isset($_POST['buy_product_9']) && $_POST['buy_product_9']!=''){
  $_SESSION['buy_product_9']=$_POST['buy_product_9'];
}


$SQL = "SELECT * FROM jc_shopping_home";

$RS = mysql_query($SQL) or die(mysql_error());

$exist = mysql_num_rows($RS);
$SQL ="UPDATE jc_shopping_home SET submit_time_page1=now(),Page1='1', ";
foreach($_POST as $key=>$value)
{
	if($key !='SessionId')
	{
		if($key !='rfr' && $key !='home_SessionId')
		{
			$value = mysql_real_escape_string($value);
			$field .= "$key = '$value',";
		}
	}
}
	$field = substr($field,0,strlen($field)-1);

	$SQL .=$field." WHERE home_SessionId= '".$_REQUEST["home_SessionId"]."' ";
	if(!mysql_query($SQL))
	{
		echo mysql_error();
		echo $result = "Query Failed!!!";
		exit;
	}else {
    //if($_POST['district']==97 || $_POST['age']==1 || $_POST['buy_product_7']==98){
      if($_POST['district']== 97 || ($_POST['district']!= 9 && $_POST['district']!= 18 && $_POST['district']!= 41 && $_POST['district']!= 8 && $_POST['district']!= 2 && $_POST['district']!= 31 && $_POST['district']!= 34) || $_POST['age']== 1)  {
  		//$redirect = REDIRECT_PATH."/thanks.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["home_SessionId"]."&code=failure";
      $redirect = REDIRECT_PATH."/thanks.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["home_SessionId"]."&code=failure";
      header('HTTP/1.1 301 Moved Permanently');
      header("location:$redirect");
      exit();
    }else{
       $redirect = "SurveyPage2.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["home_SessionId"]."&subId=".$_REQUEST['subId'];
       //$redirect = REDIRECT_PATH."/SurveyPage2.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["home_SessionId"]."&subid=".$_REQUEST['subid'];
       //$redirect = "SurveyPage2.php?rfr=".$_REQUEST["rfr"];
      header('HTTP/1.1 301 Moved Permanently');
      header("location:$redirect");
       //echo $redirect;
       //echo '<script>window.location="'.$redirect.'"</script>';
      exit();
    }
  }
?>
