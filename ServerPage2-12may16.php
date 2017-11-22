<?php
include('config.php');
require("../assets/lib/htmlfunction.php");
/*
echo "<pre>";
print_r($_POST)."<br />";
echo "</pre>";*/
//exit;

error_reporting(E_ALL);
ini_set("display_errors", 1);

$new_table_fields = array("tablet_other1","tablet_other2","tablet_other3","tablet_other4","laptop_other1","laptop_other2","laptop_other3","laptop_other4","kitchen_other1","kitchen_other2","kitchen_other3","kitchen_other4","mobile_other1","mobile_other2","mobile_other3","mobile_other4","tv_other1","tv_other2","tv_other3","tv_other4","appliance_other1","appliance_other2","appliance_other3","appliance_other4","pc_other1","pc_other2","pc_other3","pc_other4","purchase_reason_for_online_personel_care_1","purchase_reason_for_online_personel_care_2","purchase_reason_for_online_personel_care_3","purchase_reason_for_online_personel_care_4","purchase_reason_for_online_personel_care_5","purchase_reason_for_online_personel_care_6","purchase_reason_for_online_personel_care_7","purchase_reason_for_online_personel_care_8","purchase_reason_for_online_personel_care_9","purchase_reason_for_offline_personel_care_1","purchase_reason_for_offline_personel_care_2","purchase_reason_for_offline_personel_care_3","purchase_reason_for_offline_personel_care_4","purchase_reason_for_offline_personel_care_5","purchase_reason_for_offline_personel_care_6","purchase_reason_for_offline_personel_care_7","purchase_reason_for_offline_personel_care_8","purchase_reason_for_offline_personel_care_9","purchase_reason_for_offline_personel_care_10");

if(isset($_POST['product_brought_98']) && $_POST['product_brought_98']!=''){
	$_SESSION['product_brought_98']=$_POST['product_brought_98'];
} else {
	unset($_SESSION['product_brought_98']);

	if(isset($_POST['product_brought_1']) && $_POST['product_brought_1']!=""){
		$_SESSION['product_brought_1'] = $_POST['product_brought_1'];
	} 

	if(isset($_POST['product_brought_2']) && $_POST['product_brought_2']!=""){
		$_SESSION['product_brought_2'] = $_POST['product_brought_2'];
	} 

	if(isset($_POST['product_brought_3']) && $_POST['product_brought_3']!=""){
		$_SESSION['product_brought_3'] = $_POST['product_brought_3'];
	} 

	if(isset($_POST['product_brought_4']) && $_POST['product_brought_4']!=""){
		$_SESSION['product_brought_4'] = $_POST['product_brought_4'];
	} 

	if(isset($_POST['product_brought_5']) && $_POST['product_brought_5']!=""){
		$_SESSION['product_brought_5'] = $_POST['product_brought_5'];
	} 

	if(isset($_POST['product_brought_6']) && $_POST['product_brought_6']!=""){
		$_SESSION['product_brought_6'] = $_POST['product_brought_6'];
	} 

	if(isset($_POST['product_brought_7']) && $_POST['product_brought_7']!=""){
		$_SESSION['product_brought_7'] = $_POST['product_brought_7'];
	} 

	if(isset($_POST['product_brought_8']) && $_POST['product_brought_8']!=""){
		$_SESSION['product_brought_8'] = $_POST['product_brought_8'];
	} 

	if(isset($_POST['product_brought_9']) && $_POST['product_brought_9']!=""){
		$_SESSION['product_brought_9'] = $_POST['product_brought_9'];
	} 


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
				if($key !='rfr' && $key!='page2_session_Id' && $key!='button' && $value!='0' && $key!='subid' && !in_array($key, $new_table_fields))
				{
					$value = mysql_real_escape_string($value);
					$field .= "$key = '$value',";
				}
			}
			$field = substr($field,0,strlen($field)-1);
			$SQL .= $field;
			//echo $SQL;
			//exit;
			if(!mysql_query($SQL))
			{
				echo mysql_error();
				echo $result = "Query Failed!!!";
				exit;
			}

			$page2_id = mysql_insert_id();

			//adding new fields data into new table
			$SQL = "INSERT INTO jc_shopping_page2_a SET page2_a_SessionId='".$_REQUEST["page2_session_Id"]."', page2_id='".$page2_id."', ";
			$field = "";
			foreach($_POST as $key=>$value)
			{
				if($key !='rfr' && $key!='page2_session_Id' && $key!='button' && $value!='0' && $key!='subid')
				{
					if(in_array($key, $new_table_fields))
					{
						$value = mysql_real_escape_string($value);
						$field .= "$key = '$value',";
					}
				}	
			}
			$field = substr($field,0,strlen($field)-1);
			$SQL .= $field;
			//echo "<br>";
			//echo $SQL;

			if(!mysql_query($SQL))
			{
				echo mysql_error();
				echo $result = "Query Failed!!!";
				exit;
			}
			//exit;

		}

		$query1 = mysql_query("SELECT buy_product_1, buy_product_2, buy_product_3, buy_product_4, buy_product_5, buy_product_6, buy_product_9 FROM jc_shopping_home");
		$result1 = mysql_fetch_assoc($query1);

		//echo "<pre>";
		//print_r($result1)."<br />";
		//exit;

		mysql_close($objConn);

		$show = '';

		if($result1['buy_product_1']== 1 || $result1['buy_product_2']== 2 || $result1['buy_product_3']== 3 || $result1['buy_product_4']== 4 || $result1['buy_product_5']== 5 || $result1['buy_product_6']== 6 || $result1['buy_product_9']== 9)
			{
				$show = "&show=1";
			} else {
				$show = "&show=0";
			}

   /* if($_POST['product_brought_1']==1 || $_POST['product_brought_2']==2 || $_POST['product_brought_3']==3 || $_POST['product_brought_4']==4 || $_POST['product_brought_5']==5 || $_POST['product_brought_6']==6 || $_POST['product_brought_9']==9){
      $redirect = REDIRECT_PATH."/thanks.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["page2_session_Id"]."&code=success&subid=".$_REQUEST['subid'].$show;
      header('HTTP/1.1 301 Moved Permanently');
      header("location:$redirect");
      exit();
  }else{
		$redirect = "SurveyPage3.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["page2_session_Id"];
		//$redirect = REDIRECT_PATH."/SurveyPage3.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["page2_session_Id"];
		header('HTTP/1.1 301 Moved Permanently');
		header("location:$redirect");
		exit();
  }*/
  $redirect = "SurveyPage3.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["page2_session_Id"];
		//$redirect = REDIRECT_PATH."/SurveyPage3.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["page2_session_Id"];
		header('HTTP/1.1 301 Moved Permanently');
		header("location:$redirect");
		exit();

	}


?>
