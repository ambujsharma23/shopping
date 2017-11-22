<?php
/*echo "<pre>";
print_r($_POST)."<br />";
echo "</pre>";
exit;
*/
include('config.php');

require("../assets/lib/htmlfunction.php");
	if((!isset($_REQUEST['rfr']) || !isset($_REQUEST['page3_session_Id']) || $_REQUEST['rfr']=='') || $_REQUEST['page3_session_Id']==''){
		echo "<CENTER><SPAN style='color:red;font-weight:bold'>Sorry ! This is an invalid link for this survey.</SPAN></CENTER>";
		exit;
	}else{
		$selectqry = mysql_query("SELECT count(page3_SessionId) as cnt FROM jc_shopping_page3 WHERE page3_SessionId='".$_REQUEST["page3_session_Id"]."'");
		$qryresult = mysql_fetch_array($selectqry);

		if($qryresult['cnt']<=0)
		{
			mysql_query("UPDATE  jc_shopping_home SET submit_time_page3=now(),Page3='1' WHERE home_SessionId= '".$_REQUEST["page3_session_Id"]."'");
			$field='';

			$SQL = "INSERT INTO jc_shopping_page3 SET page3_SessionId='".$_REQUEST["page3_session_Id"]."', ";
			foreach($_POST as $key=>$value)
			{
				if($key !='rfr' && $key!='page3_session_Id' && $key!='button' && $value!="0")
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
		}
		mysql_close($objConn);
		$redirect = REDIRECT_PATH."/thanks.php?rfr=".$_REQUEST["rfr"]."&SessionId=".$_REQUEST["page3_session_Id"]."&code=success&show=1";
		header('HTTP/1.1 301 Moved Permanently');
		header("location:$redirect");
		exit();
	}
?>
