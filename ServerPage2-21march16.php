<?php
include('config.php');
require("../assets/lib/htmlfunction.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_POST['product_brought_98']) && $_POST['product_brought_98']!=''){
  $_SESSION['product_brought_98']=$_POST['product_brought_98'];
}

	if((!isset($_REQUEST['rfr']) || !isset($_REQUEST['page2_session_Id']) || $_REQUEST['rfr']=='') || $_REQUEST['page2_session_Id']==''){
		echo "<CENTER><SPAN style='color:red;font-weight:bold'>Sorry ! This is an invalid link for this survey.</SPAN></CENTER>";
		exit;
	}else{


		$selectqry = mysql_query("SELECT count(page2_SessionId) as cnt FROM jc_shopping_page2 WHERE page2_SessionId='".$_REQUEST["page2_session_Id"]."'");
		$qryresult = mysql_fetch_array($selectqry);

		if($qryresult['cnt']<=0)
		{
			mysql_query("UPDATE  jc_shopping_home SET submit_time_page2=now(),Page2='1' WHERE home_SessionId= '".$_REQUEST["page2_session_Id"]."'");
			$field='';

			$SQL = "INSERT INTO jc_shopping_page2 SET page2_SessionId='".$_REQUEST["page2_session_Id"]."', ";
			foreach($_POST as $key=>$value)
			{
				if($key !='rfr' && $key!='page2_session_Id' && $key!='button' && $value!='0' && $key!='subid')
				{
					$value = mysql_real_escape_string($value);
					$field .= "$key = '$value',";
				}
			}
			$field = substr($field,0,strlen($field)-1);
			$SQL .= $field;

			if(!mysql_query($SQL))
			{
				echo mysql_error();
				echo $result = "Query Failed!!!";
				exit;
			}
		}

		$query1 = mysql_query("SELECT buy_product_1, buy_product_2, buy_product_3, buy_product_4, buy_product_5, buy_product_6 FROM jc_shopping_home");
		$result1 = mysql_fetch_assoc($query1);

		//echo "<pre>";
		//print_r($result1)."<br />";
		//exit;

		mysql_close($objConn);

		$show = '';

		if($result1['buy_product_1']== 1 || $result1['buy_product_2']== 2 || $result1['buy_product_3']== 3 || $result1['buy_product_4']== 4 || $result1['buy_product_5']== 5 || $result1['buy_product_6']== 6)
			{
				$show = "&show=1";
			} else {
				$show = "&show=0";
			}

    if($_POST['product_brought_1']==1 || $_POST['product_brought_2']==2 || $_POST['product_brought_3']==3 || $_POST['product_brought_4']==4 || $_POST['product_brought_5']==5 || $_POST['product_brought_6']==6){
      $redirect = REDIRECT_PATH."/thanks.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["page2_session_Id"]."&code=success&subid=".$_REQUEST['subid'].$show;
      header('HTTP/1.1 301 Moved Permanently');
      header("location:$redirect");
      exit();
  }else{
		$redirect = REDIRECT_PATH."/SurveyPage3.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["page2_session_Id"];
		header('HTTP/1.1 301 Moved Permanently');
		header("location:$redirect");
		exit();
  }

	}


?>
