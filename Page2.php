<?php 
require("config.php");
require("../assets/lib/htmlfunction.php");
?>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ET Wealth Questionnaire&times;</title>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/gen_validation.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jsjquery161min.cms"></script>
<script src="js/js_etwealth_questionnaire.cms?v=2"></script>

<script type="text/javascript" src="../assets/source/jquery.fancybox.js?v=2.1.3"></script>
<link rel="stylesheet" type="text/css" href="../assets/source/jquery.fancybox.css?v=2.1.2" media="screen" />
<link rel="stylesheet" type="text/css" href="../assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<link rel="stylesheet" type="text/css" href="../assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<script>
// cross domain checks
var hdomain='indiatimes.com';
if (document.domain != hdomain)
{if ((document.domain.indexOf(hdomain)) != -1)
{document.domain = hdomain}}	

</script>

<script type="text/javascript">
/*function validate(){
	document.forms["form2"].submit();
}*/
function chknum(field)
{
  var num = document.getElementById(field).value;
  if(isNaN(num)){
    alert("Please enter only numeric value");
    document.getElementById(field).value = '';
    document.getElementById(field).focus();
    return false;
  }
}
$(window).load(function() {
     $('.submit_btn').show();
});

</script>

<style>
label SPAN.title1{ color:#626262;}
.fancybox-skin { border-radius:0px;}
.content2{margin-bottom:10px;margin-top:10px;}
.content2 .content2_l1 SPAN.question{ display:block;margin-bottom:10px;}

#survey_terms .btn {
    background: url("http://img.etimg.com/photo/46444679.cms") repeat scroll -3px -3px rgba(0, 0, 0, 0) !important;
    cursor: pointer;
    float: left;
    height: 240px;
    position: relative;
    width: 50px;
}
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
    color:#626262!important;
}
.main_item_right span{
    display: inline-block;
    width: 220px;  
    color:#626262!important;
}
table tbody tr {
    display: block;
}
.noborder{ border:0px solid;}
.content2{ margin-top:0px;}
#life_insurance_cover_amount,#medical_insurance_cover_amount,#vehicle_insurance_cover_amount,#property_insurance_cover_amount,#critical_insurance_cover_amount{ width:230px !important}
        .right_div{float: left;width: 46%;}
        .left_div{float: left;padding-right: 20px;width: 46%;}
        .latest_policy1{color:#626262;text-align:center;}
        .mode_payment1{color: #626262;float: left;text-align: center;width: 48%;}
        .mode_payment2{color: #626262;float: left;margin-right: 45px;text-align: center;width: 50%;}
        .time_purchase1{color: #626262;float: left;text-align: right;width: 50%;}
        .time_purchase2{color: #626262;float: left;width: 38%;}
        #life_covered_think,#health_covered_think{width:280px!important;max-width: 270px !important;}

        .right_section{float: left;text-align: right;width: 20%;}
        .left_section{float: left;width: 20%;}
        .middle_section{float: left;width: 58%;}
        .p1{font-size: 12pt;font-weight: bold;padding: 5px;text-align: center;}
        .p2{font-weight: bold;padding-top: 10px;text-align: center;}
</style>
<script src="js/validatePage2.js" type="text/javascript"></script>
</head>
<body>
<div class="wealthbutton"></div>
  <div class="parent_main">
    <div id="survey_terms">
      <div class="btn"><a id="close_terms" href="javascript:void(0)">X</a></div>
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
      <FORM name="form2" id="form2" class="styleThese" method="POST" action="ServerPage2.php">
        <INPUT type="hidden" name="rfr" id="rfr" value="<?php echo $_GET["rfr"] ?>">
        <INPUT type="hidden" name="p" id="p" value="<?php echo $_GET["p"] ?>">
        <INPUT type="hidden" name="at" id="at" value="<?php echo $_GET["at"] ?>">
        <INPUT type="hidden" name="page4_session_Id" id="page4_session_Id" value="<?php echo $sessionid; ?>">
        <INPUT type="hidden" name="et_session_Id" id="et_session_Id" value="<?php echo $_GET['sessionid']; ?>">
        
                
      <br>
      <h1 style="line-height:35px;">About you</h1>
      
      <div class="content2">
        <div class="content2_l1">
        <span class="content2_l1_span">Where are you residing?</span>
         <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("residing.xml","residing","style_res", "Residing", "", "", "1"); ?>
          </div>
      </div>  		
      </div>
      <div class="content2">
        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span">What do you understand by the following insurance terms?</span>
          <div style="clear:both;"></div>
          <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("insurance_terms_endowmentplan.xml","endowmentplan","style_dd", "Endowment Plan", "", "", "1"); ?>
          </div>
          <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("insurance_terms_termplan.xml","termplan","style_dd", "Term Plan", "", "", "1"); ?>
          </div>
          <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("insurance_terms_annuityplan.xml","annuityplan","style_dd", "Annuity Plan", "", "", "1"); ?>
          </div>
          <div style="float:left;">
            <?php AddDropDown("insurance_terms_ulip.xml","ulip","style_dd", "ULIP Plan", "", "", "1"); ?>
          </div>
        
        </div>
      </div>

      <div class="content2">
        <div class="content2_l1">
        <span class="content2_l1_span">What are the different types of insurance you have?</span>
          <div style="clear:both;margin-left:-12px;">
            <?php 
            AddCheckBox1("different_insurance.xml",'N',"different_insurance","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
            ?>
            <div id="other_insurance_div" style="display:none;float:right;margin-right: 515px;"><input type="text" name="other_insurance" id="other_insurance"></div>
          </div>
        </div>
      </div>
    <div class="content2" id="no_insurance_coverage1" style="width:995px">
      <span class="content2_l1_span" style="width:90%">Amongst those who selling or advising you to buy insurance product, whom do you trust the most and the least?</span>
        <div class="content2_l1">
          <div style="float:left;margin-right: 20px;">
           <?php AddDropDown("least_trusted_person_1.xml","trust_most_person","style_dd", "Trust the Most", "", "", "1"); ?>
          </div>
          <div>
            <?php AddDropDown("least_trusted_person_2.xml","trust_least_person","style_dd", "Trust the Least", "", "", "1"); ?>
          </div>
        </div>
    </div>

    <div class="content2" id="no_insurance_coverage2">
      <span class="content2_l1_span">Select the top 3 sources of information that influence your decision the most, while purchasing any insurance policy?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;"><?php AddDropDown("influence_factor.xml","first_influence_factor","style_dd", "Influenced the Most", "", "", "1"); ?></div>
          <div style="float: left;margin-right: 20px;"><?php AddDropDown("influence_factor.xml","second_influence_factor","style_dd", "Second Most", "", "", "1"); ?></div>
          <div style="float: left;margin-right: 20px;"><?php AddDropDown("influence_factor.xml","third_influence_factor","style_dd", "Third Most", "", "", "1"); ?></div>
        </div>
    </div>
    <div class="content2" id="no_insurance_coverage3">
      <span class="content2_l1_span">Select the top 3 deciding factors that you usually consider while selecting insurance policies.</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;"><?php AddDropDown("deciding_factors.xml","first_deciding_factors","style_dd", "Biggest deciding factor", "", "", "1"); ?></div>
          <div style="float: left;margin-right: 20px;"><?php AddDropDown("deciding_factors.xml","second_deciding_factors","style_dd", "2nd deciding factor", "", "", "1");?></div>
          <div style="float: left;margin-right: 20px;"><?php AddDropDown("deciding_factors.xml","third_deciding_factors","style_dd", "3rd deciding factor", "", "", "1"); ?></div>          
        </div>
    </div>
    <h1 style="line-height:35px;clear:both;" id="no_insurance_coverage4">Insurance Usage and Ownership</h1>
    <div class="content2" id="no_insurance_coverage5">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:62%">Who all in your family are covered for any insurance?</span>
          <div style="float:left;margin-right:10px;"><?php AddDropDown("covered_insurance.xml","covered_life_insurance","style_dd", "Life Insurance", "", "", "1"); ?></div>
          <div style="float:left;"><?php AddDropDown("covered_insurance.xml","covered_health_insurance","style_dd", "Health Insurance", "", "", "1");?></div>
        </div>
    </div>
    <div class="content2" id="cover_amount" style="display:none;">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
          <span class="content2_l1_span" style="width:60%">How much does your total insurance cover sum up to?</span>

        </div>
    </div>
    <div class="content2" id="life_cover_amount" style="display:none;float: left;width: 24%;">
        <div class="content2_l1" style="width:100%;margin-top:5px;">
          <div style="float:left;"><?php AddDropDown("Cover_amount.xml","life_insurance_cover_amount","style_dd", "Life Insurance Cover Amount", "", "", "1");?></div>
        </div>
    </div>
    <div class="content2" id="medical_cover_amount" style="display:none;float: left;width: 24%;">
        <div class="content2_l1" style="width:100%;margin-top:5px;">
          <div style="float:left;"><?php AddDropDown("Cover_amount.xml","medical_insurance_cover_amount","style_dd", "Medical Insurance Cover Amount", "", "", "1");?></div>
        </div>
    </div>
    <div class="content2" id="vehicle_cover_amount" style="display:none;float: left;width: 24%;">
        <div class="content2_l1" style="width:100%;margin-top:5px;">
          <div style="float:left;"><?php AddDropDown("Cover_amount.xml","vehicle_insurance_cover_amount","style_dd", "Vehicle Insurance Cover Amount", "", "", "1");?></div>
        </div>
    </div>
    <div class="content2" id="property_cover_amount" style="display:none;float: left;width: 24%;">
        <div class="content2_l1" style="width:100%;margin-top:5px;">

          <div style="float:left;"><?php AddDropDown("Cover_amount.xml","property_insurance_cover_amount","style_dd", "Property Insurance Cover Amount", "", "", "1");?></div>
        </div>
    </div>
    <div class="content2" id="cover_question_div">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span" style="width:60%">Please tell us how well do you think you are covered?</span>
        </div>
    </div>
    <div class="content2" id="life_cover_div">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;"><?php AddDropDown("covered_perception.xml","life_covered_perception","style_dd", "Life cover", "", "", "1"); ?></div>
          <div style="float:left;margin-right:25px;"><?php AddDropDown("covered_think.xml","life_covered_think","style_dd", "How much do you think cover should be", "", "", "1"); ?></div>
          <div style="float:left;margin-right:30px;"><?php AddDropDown("covered_perception.xml","health_covered_perception","style_dd", "Health Cover", "", "", "1"); ?></div>
          <div style="float:left;"><?php AddDropDown("covered_think.xml","health_covered_think","style_dd", "How much do you think cover should be", "", "", "1"); ?></div>          
        </div>
    </div>

    <div class="content2" id="policy1" style="display:none;">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
            <span class="content2_l1_span">What mode of payment do you uses for your insurance policy premium payment </span>
        </div>
      <div class="content2_l1" style="margin-left: 16%; width: 85%;">
        <div class="left_div">
          <div class="latest_policy1">Latest Policy 1</div>
          <div class="mode_payment1">Mode of Payment now</div>
          <div class="time_purchase1">At the time of purchase</div>
        </div>
        <div class="right_div"  id="right_div1">
          <div class="latest_policy1">Latest Policy 2</div>
          <div class="mode_payment2">Mode of Payment now</div>
          <div class="time_purchase2">At the time of purchase</div>      
        </div>     
      </div>
    </div>    
    <div class="content2" id="latest_life_insurance" style="display:none;">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span" style="width:17.5%">Life Insurance</span>
              
              <div style="float:left;margin-right:30px;"><?php AddDropDown("payment.xml","payment_mode_life1","style_dd", "Select  ", "", "", "1"); ?></div>
              <div style="float:left;margin-right:30px;"><?php AddDropDown("payment.xml","purchase_time_life1","style_dd", "Select  ", "", "", "1"); ?></div>
              <div style="float:left;margin-right:30px;display:none;" id="second_life_policy1"><?php AddDropDown("payment.xml","payment_mode_life2","style_dd", "Select  ", "", "", "1"); ?></div>
              <div style="float:left;display:none;" id="second_life_policy2"><?php AddDropDown("payment.xml","purchase_time_life2","style_dd", "Select  ", "", "", "1"); ?></div>

        </div>
    </div>
    <div class="content2" id="latest_health_insurance" style="display:none;">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span" style="width:17.5%">Health Insurance</span>
              <div style="float:left;margin-right:30px;"><?php AddDropDown("payment.xml","payment_mode_health1","style_dd", "Select  ", "", "", "1"); ?></div>
              <div style="float:left;margin-right:30px;"><?php AddDropDown("payment.xml","purchase_time_health1","style_dd", "Select  ", "", "", "1"); ?></div>
              <div style="float:left;margin-right:30px;display:none;" id="second_health_policy1"><?php AddDropDown("payment.xml","payment_mode_health2","style_dd", "Select  ", "", "", "1"); ?></div>
              <div style="float:left;display:none;" id="second_health_policy2"><?php AddDropDown("payment.xml","purchase_time_health2","style_dd", "Select  ", "", "", "1"); ?></div>
        </div>
    </div>
    <div class="content2" id="latest_vehicle_insurance" style="display:none;">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
          <span class="content2_l1_span" style="width:17.5%">Vehicle Insurance</span>
            <div style="float:left;margin-right:30px;"><?php AddDropDown("payment.xml","payment_mode_vehicle1","style_dd", "Select  ", "", "", "1");  ?></div>
            <div style="float:left;margin-right:30px;"><?php AddDropDown("payment.xml","purchase_time_vehicle1","style_dd", "Select  ", "", "", "1"); ?></div>
            <div style="float:left;margin-right:30px;display:none;" id="second_vehicle_policy1"><?php AddDropDown("payment.xml","payment_mode_vehicle2","style_dd", "Select  ", "", "", "1");  ?></div>
            <div style="float:left;display:none;" id="second_vehicle_policy2"><?php AddDropDown("payment.xml","purchase_time_vehicle2","style_dd", "Select  ", "", "", "1"); ?></div>
        </div>
    </div>   
  <div class="content2" id="no_insurance_coverage7">
    <div class="content2_l1" style="width:995px;">
      <span class="content2_l1_span">Have you ever purchased an insurance policy online?</span>
      <div><?php AddDropDown("policy_online.xml","purchase_policy_online","style_dd", "Select ", "", "", "1"); ?></div>
    </div>
  </div>
  
  <div class="content2" id="purchase_insurance_products" style="display:none;">
    <span class="content2_l1_span">What websites did you search for information before purchasing insurance products?</span>
      <div class="content2_l1 insurance">
        <div>
        <?php AddCheckBox1("search_information.xml",'N',"website_search_information","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','5','5'),'1','300px'); ?>
      </div>
  </div>
  </div>
  <div class="content2 policy_bought_online" style="display:none;">
    <div class="content2_l1" style="width: 995px">
      <span class="content2_l1_span" style="width:444px;">Can you give us details of your latest insurance policy bought online/mobile?</span>
        <div style="float: left;margin-right: 5px;"><?php AddDropDown("mobile_app.xml","mobile_app","style_dd", "Website/Mobile App", "", "", "1"); ?></div>
        <div style="float: left;margin-right: 5px;"><?php AddDropDown("mobile_app_policy.xml","mobile_app_policy","style_dd", "Type of Insurance policy", "", "", "1"); ?></div>
        <div style="float: left;"><?php AddDropDown("mobile_app_payment.xml","mobile_app_payment","style_dd", "Mode of payment", "", "", "1"); ?></div>
    </div>
  </div>

  <div class="content2 policy_bought_online" style="display:none;">
  <div class="content2_l1">
  <span class="content2_l1_span">Why did you purchase insurance online?</span>
    <div style="clear:both;margin-left:-12px;">
      <?php 
      AddCheckBox1("insurance_online.xml",'N',"insurance_online","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','5','5'),'1','300px');
      ?>
    </div>
  </div>
</div>

<div class="content2 not_purchase_online" style="display:none;">
  <div class="content2_l1">
  <span class="content2_l1_span">Why didn't you purchase the insurance policy online?</span>
    <div style="clear:both;margin-left:-12px;">
      <?php 
      AddCheckBox1("insurance_online_1.xml",'N',"insurance_online_1","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','5','5'),'1','365px');
      ?>
    </div>
  </div>
</div>

<div class="content2" id="no_insurance_coverage8">
  <div class="content2_l1" style="width:995px;">
    <span class="content2_l1_span">God forbid, but in case of any eventuality and something happened to you, how long do you think the insurance cover amount will last your family/ beneficiaries?</span>
      <div><?php AddDropDown("beneficiaries.xml","beneficiaries","style_dd", "Select ", "", "", "1"); ?></div>
  </div>
  </div>

  <div class="content2" id="no_insurance_coverage9">
    <div class="content2_l1" style="width:995px;">
      <span class="content2_l1_span">In case of an eventuality and something happened to you, how equipped is the nominee to handle the amount to be received from the insurance company?</span>
        <div><?php AddDropDown("nominee.xml","eventuality_nominee","style_dd", "Select ", "", "", "1"); ?></div>
  </div>
  </div>

  <div class="content2" id="no_insurance_coverage10">
  <div class="content2_l1">
  <span class="content2_l1_span">What all expenses, do you think, it will cover?</span>
    <div style="clear:both;margin-left:-12px;">
      <?php 
      AddCheckBox1("expenses.xml",'N',"expenses","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','6','6'),'1','415px');
      ?>
    </div>
  </div>
</div>  
    <div class="content2" style="display:none;" id="main_reason">
      <div class="content2_l1">
      <span class="content2_l1_span"> What are the main reasons that you do not have any insurance cover?</span>
        <div style="clear:both;margin-left:-12px;">
          <?php 
          AddCheckBox1("insurance_cover.xml",'N',"insurance_cover","#7FB3E6","0","0","2","8",'100%','checknone1',false,array('this.id','this.value','5','5'),'1','420px');
          ?>
        </div>
      </div>
    </div>
    
  <a onClick="return validate();" class="submit_btn" id="fp_submit" href="javascript:void(0);" style="display:none;"></a>
</form>
</body>
</html>