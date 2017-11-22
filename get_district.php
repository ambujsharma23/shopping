<?php
require("config.php");
$stid=$_POST['stid'];
$query="SELECT * FROM city_town_ganna where state_id='".mysql_real_escape_string($stid)."' ORDER BY city_name ASC";
$result=mysql_query($query);
$res = '<option value="">Select city/town</option>';
while($row1=mysql_fetch_array($result))
{
	if($row1['city_name']!='')
	{
		$res .= '<option value="'.$row1['id'].'">'.$row1['city_name'].'</option>';
	}
}
$res .= '<option value="97">Other city/town</option>'; 
 echo $res;
 exit;
 ?>
									
