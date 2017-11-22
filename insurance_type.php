<?php
//session_start();
require("config.php");
require("../assets/lib/htmlfunction.php");
//error_reporting(E_ALL);
//ini_set("display_errors", 1);


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<!-------------slider start------------->
<!--survey--->
<SCRIPT src="js/gen_validation.js" type="text/javascript"></SCRIPT>
<!-------------slider end------------->

<script type="text/javascript" src="../assets/source/jquery.fancybox.js?v=2.1.3"></script>
<link rel="stylesheet" type="text/css" href="../assets/source/jquery.fancybox.css?v=2.1.2" media="screen" />
<link rel="stylesheet" type="text/css" href="../assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<link rel="stylesheet" type="text/css" href="../assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<!-------------slider end------------->

<style>
body {
    background: none repeat scroll 0 0 #FFF;
    width: 100%;
}
input.sba_saving_next,input.investment,input.real_estate,input.risk_cover,input.f_p_loans {float:left;}
label SPAN.title1{ color:#626262 !important;}
ttop{border-top:0 solid;}
tbottom{border-bottom:0 solid;}
</style>

<script>

$(document).ready(function(){
//	var fps = parent.document.getElementsByClassName('financial_products_saving');
var fps = window.parent.document.querySelectorAll('.different_insurance');
	for(var i=0; i<fps.length; i++){
      if(fps[i].checked){
           $('.financial_products_saving_'+fps[i].value).show();
      }
	}	
//var parent_other = window.parent.document.getElementById("other_insurance").value;
var parent_other = parent.document.getElementById('other_insurance').value;
//alert(parent_other);
//$('#other_div').html(parent_other)
$('.financial_products_saving_11').children('td').find('.other_div').html(parent_other);
});
</script>
<style>
.most_imp .selector{   margin-left: 11px; padding-right: 27px; width: 96px !important; }
.most_imp .selector SPAN{ width: 100px !important; }	
.big_select{ float:right;}
.big_select .selector { width: 185px !important; }
.big_select .selector SPAN{ width: 150px !important; }
.small_select .selector{ margin-left: 11px; padding-right: 27px; width: 96px !important;}
.small_select .selector SPAN{ width: 100px !important; }
.small_select{ text-align:center;}
.sml .selector {width: 100px !important;}
.sml .selector SPAN {width: 77px !important;}
.language_select .selector{   margin-left: 11px; padding-right: 27px; width: 400px !important; }
.language_select .selector SPAN{  width: 364px!important; }

.language_select1 .selector{ padding-right: 27px; width: 262px !important; }
.language_select1 .selector SPAN{  width: 266px!important; }
tr { display:block;}
.style_dd { width:260px !important;max-width:265px !important;}
</style>
</head>
<body>
 <div id="container">   
  <!-------------Survey Start-------------ServerPage1.php-->
  
  <div id="widget">

  <div class="main_panel">

		<FORM name="form1" id="form1" class="styleThese" method="POST" action="" style="float:none;">
	<div id="L11" class="L1">		
		<h1>How many insurance policy do you have?</h1>
		<table border="0" width="100%" cellpadding="0" cellspacing="0" class="ttop tright tbottom">
			<tr class="financial_products_saving_1" style="display:none;">
				<td valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Life insurance</div>
				</td>
				<td valign="top">
					<div class=""><?php AddDropDown("insurance_policy.xml","insurance_policy_1","style_dd", "Select ", "", "", "1"); ?></div>
				</td>					
			</tr>	
				
			<tr class="financial_products_saving_2" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Term insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
					<div class=""><?php AddDropDown("insurance_policy.xml","insurance_policy_2","style_dd", "Select  ", "", "", "1"); ?></div>
				</td>					
			</tr>
			<tr class="financial_products_saving_3" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Endowment insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
					<?php AddDropDown("insurance_policy.xml","insurance_policy_3","style_dd", "Select  ", "", "", "1"); ?>
				</td>
			</tr>
			<tr class="financial_products_saving_4" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Investment-cum insurance–Moneyback insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
            <?php AddDropDown("insurance_policy.xml","insurance_policy_4","style_dd", "Select  ", "", "", "1"); ?>
				</td>				
			</tr>
			<tr class="financial_products_saving_5" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Investment-cum insurance -Unit linked insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
            <?php AddDropDown("insurance_policy.xml","insurance_policy_5","style_dd", "Select  ", "", "", "1"); ?>
				</td>				
			</tr>
			<tr class="financial_products_saving_6" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Medical/Health insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
            <?php AddDropDown("insurance_policy.xml","insurance_policy_6","style_dd", "Select  ", "", "", "1"); ?>
				</td>				
			</tr>			
      <tr class="financial_products_saving_7" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Vehicle insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
            <?php AddDropDown("insurance_policy.xml","insurance_policy_7","style_dd", "Select  ", "", "", "1"); ?>
				</td>				
			</tr>
      <tr class="financial_products_saving_8" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Property insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
            <?php AddDropDown("insurance_policy.xml","insurance_policy_8","style_dd", "Select  ", "", "", "1"); ?>
				</td>				
			</tr>
      <tr class="financial_products_saving_9" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Travel insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
            <?php AddDropDown("insurance_policy.xml","insurance_policy_9","style_dd", "Select  ", "", "", "1"); ?>
				</td>				
			</tr>
      <tr class="financial_products_saving_10" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label" style="padding-left: 10px;padding-top:3px;">Critical illness insurance</div>
				</td>
				<td class="tleft ttop" valign="top">
            <?php AddDropDown("insurance_policy.xml","insurance_policy_10","style_dd", "Select  ", "", "", "1"); ?>
				</td>				
			</tr>
      <tr class="financial_products_saving_11" style="display:none;">
				<td class="tleft ttop" valign="top">
					<div class="heading_label other_div" style="padding-left: 10px;padding-top:3px;"></div>
				</td>
				<td class="tleft ttop" valign="top">
            <?php AddDropDown("insurance_policy.xml","insurance_policy_11","style_dd", "Select  ", "", "", "1"); ?>
				</td>				
			</tr>			
			<tr style="display:block;">
				
				<td colspan="100%" align="center" class="tbottom tleft tright" style="border:0px;">
					<a href="javascript:void(0);"  onClick="showNext('L11', '');" class="submit_btn"></a>
				</td>				
				
			</tr>	
	</table>
	</div>
	</form>
	</div>    
    </div>
  <div class="clear"></div>
  <!-------------Survey end-------------return validate();--> 
<div style="display:block; height:15px;"></div>
<div class="clear"></div>
</div>
</form>
</body>
</html>
<script type="text/javascript">
function checknone1(id,value,countchk,qid)
{
 ids = id.split("_");

 check_id = ids[0]+"_"+ids[1]+"_"+ids[2]+"_";
 // noneid = "s" + qid + "_" + countchk;
 noneid = check_id+countchk;
 if(value!=98)
 {
  if(get_id(id).checked)
  {
   if(get_id(noneid).checked)
   {
    alert("You can\'t select any other option with \'None\' option");
    get_id(id).checked = false;
   }
  }
 }
 else
 {
  for(i=1;i<countchk;i++)
  {
    //chkid = "s" + qid + "_" + i;
   chkid = check_id+i;
   if(get_id(chkid).checked)
   {
    alert("You can\'t select \'None\' option with any other option");
    get_id(noneid).checked = false;
    break;
   }
  }
 }
}

function showNext(curr_id, next_id){
//multiselect validation


if(curr_id == 'L11'){

	var test = window.parent.document.querySelectorAll('.different_insurance');
    
		for(var i=0; i<test.length; i++){
		  if(test[i].checked && test[i].value!='98')
		  {
		  	saving_ownership = 'insurance_policy_'+test[i].value;
        
			var financial_products_div = $('.financial_products_saving_'+test[i].value).children('td').find('.heading_label').html();
			//alert(saving_ownership);
				if(document.getElementById(saving_ownership).value=='' || document.getElementById(saving_ownership).value=='0')
				{
					alert("Please Select How many "+financial_products_div+" do you have? ");
					return false;
				}			
			}
		}
		
	}
	if(next_id !='')
	{
		$("#"+curr_id).fadeOut(500);
		$("#"+next_id).delay(1000).fadeIn(500);
	} else{
		
		parent.document.getElementById('insurance_policy_1').value = document.getElementById("insurance_policy_1").value;	
		parent.document.getElementById('insurance_policy_2').value = document.getElementById("insurance_policy_2").value;	
		parent.document.getElementById('insurance_policy_3').value = document.getElementById("insurance_policy_3").value;	
		parent.document.getElementById('insurance_policy_4').value = document.getElementById("insurance_policy_4").value;	
		parent.document.getElementById('insurance_policy_5').value = document.getElementById("insurance_policy_5").value;	
		parent.document.getElementById('insurance_policy_6').value = document.getElementById("insurance_policy_6").value;	
		parent.document.getElementById('insurance_policy_7').value = document.getElementById("insurance_policy_7").value;	
		parent.document.getElementById('insurance_policy_8').value = document.getElementById("insurance_policy_8").value;	
		parent.document.getElementById('insurance_policy_9').value = document.getElementById("insurance_policy_9").value;	
		parent.document.getElementById('insurance_policy_10').value = document.getElementById("insurance_policy_10").value;	
		parent.document.getElementById('insurance_policy_11').value = document.getElementById("insurance_policy_11").value;	
    
    var life_insurance = parent.$("#different_type_insurance_1").is(":checked");
    var term_insurance = parent.$("#different_type_insurance_2").is(":checked");
    var endowment_insurance = parent.$("#different_type_insurance_3").is(":checked");
    var moneyback_insurance = parent.$("#different_type_insurance_4").is(":checked");
    var ulip_insurance = parent.$("#different_type_insurance_5").is(":checked");
    var health_insurance = parent.$("#different_type_insurance_6").is(":checked");
    var critical_insurance = parent.$("#different_type_insurance_10").is(":checked");
    var vehicle_insurance = parent.$("#different_type_insurance_7").is(":checked");    
    
    var p1 = document.getElementById("insurance_policy_1").value;
    var p2 = document.getElementById("insurance_policy_2").value;
    var p3 = document.getElementById("insurance_policy_3").value;
    var p4 = document.getElementById("insurance_policy_4").value;
    var p5 = document.getElementById("insurance_policy_5").value;
    
    var total_insurance = parseInt(p1)+parseInt(p2)+parseInt(p3)+parseInt(p4)+parseInt(p5);
   
    if((life_insurance || term_insurance || endowment_insurance || moneyback_insurance || ulip_insurance) && (total_insurance>=2)){
      parent.document.getElementById('policy1').style.display='block';
      parent.document.getElementById('latest_life_insurance').style.display='block';
      parent.document.getElementById('second_life_policy1').style.display='block';      
      parent.document.getElementById('second_life_policy2').style.display='block';
      parent.document.getElementById('right_div1').style.display='block';      
    }
    if((life_insurance || term_insurance || endowment_insurance || moneyback_insurance || ulip_insurance) && (total_insurance==1)){
      parent.document.getElementById('policy1').style.display='block';                
      parent.document.getElementById('latest_life_insurance').style.display='block';
      parent.document.getElementById('second_life_policy1').style.display='none';      
      parent.document.getElementById('second_life_policy2').style.display='none';            
      parent.document.getElementById('right_div1').style.display='none';      
    }
    var p6 = document.getElementById("insurance_policy_6").value;
    var p10 = document.getElementById("insurance_policy_10").value;
    var total_medical_insurance = parseInt(p6)+parseInt(p10);

    if((health_insurance || critical_insurance) && (total_medical_insurance>=2)){
      parent.document.getElementById('policy1').style.display='block';      
      parent.document.getElementById('latest_health_insurance').style.display='block';      
      parent.document.getElementById('second_health_policy1').style.display='block';      
      parent.document.getElementById('second_health_policy2').style.display='block';      
      parent.document.getElementById('right_div1').style.display='block';            
    }
    if((health_insurance || critical_insurance) && (total_medical_insurance==1)){
      parent.document.getElementById('policy1').style.display='block';      
      parent.document.getElementById('latest_health_insurance').style.display='block';
      parent.document.getElementById('second_health_policy1').style.display='none';      
      parent.document.getElementById('second_health_policy2').style.display='none';            
      parent.document.getElementById('right_div1').style.display='none';      
    }
    
    var vehicle_size = document.getElementById("insurance_policy_7").value;
    var total_vehicle_insurance = parseInt(vehicle_size);
    if(vehicle_insurance && total_vehicle_insurance>=2){
      parent.document.getElementById('policy1').style.display='block';    
      parent.document.getElementById('latest_vehicle_insurance').style.display='block';    
      parent.document.getElementById('second_vehicle_policy1').style.display='block';            
      parent.document.getElementById('second_vehicle_policy2').style.display='block';
      parent.document.getElementById('right_div1').style.display='block';            
    }
    if(vehicle_insurance && total_vehicle_insurance==1){
      parent.document.getElementById('policy1').style.display='block';      
      parent.document.getElementById('latest_vehicle_insurance').style.display='block';      
      parent.document.getElementById('second_vehicle_policy1').style.display='none';            
      parent.document.getElementById('second_vehicle_policy2').style.display='none';      
      parent.document.getElementById('right_div1').style.display='none';      
    }
        
		parent.$.fancybox.close();

		//document.form1.submit();		
	}
}
</script>