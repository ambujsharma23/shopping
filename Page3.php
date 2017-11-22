<?php 
require("config.php");
require("../assets/lib/htmlfunction.php");
?>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ET Wealth Questionnaire</title>
<style>
label SPAN.title1{ color:#626262;}
.submit_btn1{ background:#0CA61A; padding:10px 15px; color:#fff; text-decoration:none;font-weight:bold; float:right; margin-top:10px;}
        .right_section{float: left;text-align: right;width: 20%;}
        .left_section{float: left;width: 20%;}
        .middle_section{float: left;width: 58%;}
        .p1{font-size: 12pt;font-weight: bold;padding: 5px;text-align: center;}
        .p2{font-weight: bold;padding-top: 10px;text-align: center;}
</style>
<script>
// cross domain checks
var hdomain='indiatimes.com';
if (document.domain != hdomain)
{if ((document.domain.indexOf(hdomain)) != -1)
{document.domain = hdomain}}	
</script>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<script src="js/js_etwealth_questionnaire.cms?v=2"></script>
<script src="js/gen_validation.js" type="text/javascript"></script>
<script src="../assets/jquery_rating/jquery.barrating.js" type="text/javascript"></script>
<script src="../assets/lib/jquery.raty.min.js"></script>
<script src="js/validatePage3.js" type="text/javascript"></script>
<script>
$(window).load(function() {
     $('.submit_btn1').show();
});

$(document).ready(function(){

    /*$('#irda').change(function(){
        if($(this).val()=='1'){
          $('.try_to_return').show();
        } else {
          $('.try_to_return').hide();
        }
    });*/
  $("#objectives_buying_insurance_13").click(function(){
    $("#objective_other").val('');
    if($('#objectives_buying_insurance_13').is(":checked")){
      $("#objective_otherdiv").show();
    } else {
      $("#objective_otherdiv").hide();
    }
  });
      
    $('#try_to_return').change(function(){
        $('#policy_lookup_period').prop('selectedIndex',0);
        $('#free_lookup_policy').prop('selectedIndex',0);
        
        if($(this).val()=='1'){
          $('.look_up_period').show();
        } else {
          $('.look_up_period').hide();
        }      
    });
   $('#surrendered').change(function(){
     if($(this).val()!='1'){
       $('.never_surrender').show();
     } else {
       $('.never_surrender').hide();
     }
   }); 
   	$.fn.raty.defaults.path = '../assets/lib/img';
	$('#numberMax-demo1').raty({
		numberMax: 5,
		scoreName: "n30_1"
  	});
	$('#numberMax-demo2').raty({
		numberMax: 5,
		scoreName: "n30_2"
	});	
	$('#numberMax-demo3').raty({
		numberMax: 5,
		scoreName: "n30_3"
	});	
	$('#numberMax-demo4').raty({
		numberMax: 5,
		scoreName: "n30_4"
	});	
	$('#numberMax-demo5').raty({
		numberMax: 5,
		scoreName: "n30_5"
	});	
	$('#numberMax-demo6').raty({
		numberMax: 5,
		scoreName: "n30_6"
	});
	$('#numberMax-demo7').raty({
		numberMax: 5,
		scoreName: "n30_7"
	});	
	$('#numberMax-demo8').raty({
		numberMax: 5,
		scoreName: "n30_8"
	});	
	$('#numberMax-demo9').raty({
		numberMax: 5,
		scoreName: "n30_9"
	});
	$('#numberMax-demo10').raty({
		numberMax: 5,
		scoreName: "n30_10"
	});
	$('#numberMax-demo11').raty({
		numberMax: 5,
		scoreName: "n30_11"
	});	
	$('#numberMax-demo12').raty({
		numberMax: 5,
		scoreName: "n30_12"
	});	

});

</script>

<style>
#survey_terms .btn {
    background: url("http://img.etimg.com/photo/46444679.cms") repeat scroll -3px -3px rgba(0, 0, 0, 0) !important;
    cursor: pointer;
    float: left;
    height: 240px;
    position: relative;
    width: 50px;
}
</style>
<style>
.content2{margin-top:0px;}
.main_item_left{
    float: left;
    margin-bottom: 10px;
    width: 450px;
}
.main_item_right{
    float: right;
    margin-bottom: 10px;
    width: 450px;
}
.main_item_left span{
    display: inline-block;
    width: 250px;  
}
table tbody tr {
    display: block;
}
.noborder{ border:0px solid;}
</style>
</head>
<body>
  <div class="parent_main">
  <div id="survey_terms" style="">
    <div class="btn"><a href="javascript:void(0)" id="close_terms" style="">X</a></div>
      <div class="terms_content">
        <p>We have designed a survey that will help you take a long,  hard look at your financial choices. The survey will gather key insights on  consumer financial behaviour and help industry customise products better for  you.</p>
        <p>It would be great if  you can take some time off your busy schedule to fill the ET Wealth Survey.  Don't worry, we will not share your details for commercial purposes.</p>
        <p><strong>Rewards &amp;  Lucky Draw: </strong>And while you are filling up the survey, there lies a reward  for every questionnaire that you complete. <a href="http://economictimes.indiatimes.com/eq_terms.cms" target="_blank">Click here to know more</a>.</p>
        <p><strong>Rules &amp;  Guidelines: </strong>For ET Wealth survey, rules and guidelines please refer to our  T&amp;C section</p>
      </div>
  </div>
      <div class="header">
      <div class="left_section">
        <img src=" http://img.etimg.com/photo/45870340.cms">
      </div>
      <div class="middle_section">
        <div class="p1">Survey 2 – Your Risk Cover and Insurance Products</div>
        <div class="p2">Fill the survey and earn 250 Times points</div>
      </div>
      <div class="right_section">
        <img src="http://juxt360.com/Baseline/images/logo.png">
        <p style="margin: 0;position: relative;top: -10px;font-weight:bold;">ET Insurance Survey</p>        
      </div>
        <div style="clear:both"></div>
    </div>
    
    <iframe id="iframe_submit" name="iframe_submit" style="display:none"></iframe>
      <FORM name="form1" id="form1" class="styleThese" method="POST" action="ServerPage3.php">
      <INPUT type="hidden" name="rfr" id="rfr" value="<?php echo $_GET["rfr"] ?>">
      <INPUT type="hidden" name="p" id="p" value="<?php echo $_GET["p"] ?>">
      <INPUT type="hidden" name="at" id="at" value="<?php echo $_GET["at"] ?>">
      <INPUT type="hidden" name="page5_session_Id" id="page5_session_Id" value="<?php echo $_REQUEST["sessionid"] ?>">
      <INPUT type="hidden" name="et_session_Id" id="et_session_Id" value="<?php echo $_REQUEST["et_session_id"] ?>">      
     <br>
      <h1 style="line-height:35px;">Insurance Post Purchase Experience</h1>
      <br>
    <div class="content2">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">Are you aware that the IRDA (Insurance Regulatory and Development Authority) provides for a free look up period, which allows you to return a policy back to the insurance company in the first 2 weeks after the purchase, in case you are not happy with it, with full refund of the amount paid?</span>
        <div><?php AddDropDown("yes_no.xml","irda","style_dd", "Select ", "", "", "1"); ?></div>
  </div>
  </div>

  <div class="content2 try_to_return">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">Did you ever try to return the insurance policy during the free look-up period?</span>
        <div><?php AddDropDown("yes_no.xml","try_to_return","style_dd", "Select ", "", "", "1"); ?></div>
      </div>
  </div>

   <div class="content2 look_up_period" style="display:none;width:995px;padding:7px 5px;">
      <span class="content2_l1_span" style="width:61%"> Have you ever returned any policies during the free lookup period and how much was the free lookup period?</span>
        <div style="float: left;margin-right: 18px;"><?php AddDropDown("lookup_period.xml","policy_lookup_period","style_dd", "Policy", "", "", "1"); ?></div>
        <div><?php AddDropDown("lookup_policy.xml","free_lookup_policy","style_dd", "Free lookup period", "", "", "1"); ?></div>     
  </div> 
<div class="content2 look_up_period" style="display:none;">
  <div class="content2_l1">
  <span class="content2_l1_span">Why did you return that policy? </span>
    <div style="clear:both;margin-left:-12px;">
      <?php 
      AddCheckBox1("return_policy.xml",'N',"return_policy","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','5','5'),'1','475px');
      ?>
    </div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="width: 605px;">Which following types of policies have you ever surrendered/closed and after how many years?</span>
    <div style="float: left; margin-right: 21px;"><?php AddDropDown("surrendered.xml","surrendered","style_dd", "Select ", "", "", "1"); ?></div>
    <div class="never_surrender"><?php AddDropDown("surrendered_times.xml","surrendered_times","style_dd", "Select ", "", "", "1"); ?></div>
  </div>
</div>

 <div class="content2 never_surrender" style="display:none;">
  <div class="content2_l1">
  <span class="content2_l1_span">Why did you surrender it?</span>
    <div style="clear:both;margin-left:-12px;">
      <?php AddCheckBox1("surrender_it.xml",'N',"surrender_it","#7FB3E6","0","0","2","7",'100%','',false,array(),'1','460px');?>
    </div>
  </div>
</div>

<div class="content2" style="width: 995px;">
  <div class="content2_l1">
  <span class="content2_l1_span" style="width:100%">Below is some consumer feedback on the insurance products bought by them. Please select the answer that most closely echoes your sentiments.</span>
  </div>
</div>
<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">The agents/salesmen were helpful and cleared all my doubts before closing the deal </span>
    <div id="numberMax-demo1" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">Clarity and accuracy of the specimen (forms) in use</span>
    <div id="numberMax-demo2" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">I got the my policy paper on time</span>
    <div id="numberMax-demo3" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">Customer service were quick enough to respond to customer requests</span>
    <div id="numberMax-demo4" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">Private insurance company staff are well trained and confident people</span>
    <div id="numberMax-demo5" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">Government insurance company staff are well trained and confident people</span>
    <div id="numberMax-demo6" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">I get regular alerts about premium</span>
    <div id="numberMax-demo7" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">Return on insurance policy is well below the benefit illustration shown during the sales of the policy</span>
    <div id="numberMax-demo8" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>


<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">Private insurance company has very troublesome process for making the claims</span>
    <div id="numberMax-demo9" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">Government insurance company has very troublesome process for making the claims</span>
    <div id="numberMax-demo10" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">After purchasing the insurance product, the objective of purchasing it has been meet</span>
    <div id="numberMax-demo11" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span" style="padding-left:22px;">Insurance maturity or claim money is easily paid/safe with the private companies</span>
    <div id="numberMax-demo12" style="margin-left:20px;  padding-top: 5px;width:0px;float:left;"></div>
  </div>
</div>

<div class="content2">
  <div class="content2_l1">
  <span class="content2_l1_span"> Which of the following objectives are you planning to achieve by buying new insurance products next year?</span>
  <div style="clear:both"></div>
    <div style="clear:both;margin-left:-12px;">
      <?php AddCheckBox1("objectives.xml",'N',"objectives","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','5','5'),'1','300px');?>
    </div>
    <div id="objective_otherdiv" style="display:none;margin-bottom: 10px;text-align:left;clear:both;"><input type="text" name="objective_other" id="objective_other" placeholder="Other Planning"></div>
  </div>
</div>
<div style="clear:both"></div>
    <a onClick="return validate();" class="submit_btn1" id="fp_submit" href="javascript:void(0);" style="display:none;">Submit &raquo;</a>
    </form>
  </div>
</body>
</html>