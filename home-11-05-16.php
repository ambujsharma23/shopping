<?php
require("config.php");
require("../survey/assets/lib/htmlfunction.php");
global $objConn;
$rfr = '';
$emailid = '';
$bname = '';
$bver = '';
$browser_flag = false;
$monthArray = array("01"=>"1st January","02"=>"1st January","03"=>"1st January","04"=>"1st April","05"=>"1st April","06"=>"1st April","07"=>"1st July","08"=>"1st July","09"=>"1st July","10"=>"1st October","11"=>"1st October","12"=>"1st October");

$month = date("m");
$year = date("Y");
$qmonths =  "&nbsp;<B>".$monthArray[$month]."&nbsp;$year</B>";
$_SESSION["qmonths"] = $qmonths;
$sessionid	=	session_id();


$b_det = getBrowserDetails();
$bname = $b_det[0];
$bver = $b_det[1];
$ip= getClientIP();

$_SESSION['session_id'] = $sessionid;
if(isset($_GET['subid']) && $_GET['subid']!=''){
  $_SESSION['subid'] = $_GET['subid'];
}
if(isset($_REQUEST["at"]))
{
	$at = $_REQUEST["at"];
} else{
	$at = 'default';
}
if(isset($_REQUEST["rfr"]))
{
	$rfr = ucfirst(strtolower($_REQUEST["rfr"]));
	$_SESSION["rfr"] = $rfr;
}
else
{
	echo "<CENTER><SPAN style='color:red;font-weight:bold'>Sorry ! This is an invalid link for this survey.</SPAN></CENTER>";
	exit;
}

$SQL = "SELECT home_SessionId FROM jc_shopping_home WHERE home_SessionId='".$sessionid."' LIMIT 0,1";
$rs = mysql_query($SQL);
if(mysql_num_rows($rs)==1)
{
//	$SQL = "UPDATE jc_relationshipsurvey_home SET Start_Dt_Tm=now() WHERE SessionId='".$sessionid."' ";
}
else
{
	$SQL = "INSERT INTO jc_shopping_home(IP,Browser,BrowVer,home_SessionId,Start_Dt_Tm,RFR,AT) VALUES('".$ip."','".$bname."','".$bver ."','".$sessionid."',now(),'".mysql_real_escape_string($rfr)."','".mysql_real_escape_string($at)."')";
}


if(!mysql_query($SQL))
{
	die("There is some database error ".mysql_error());
}
?>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shopping Survey</title>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/gen_validation.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jsjquery161min.cms"></script>
<!--script src="js/js_etwealth_questionnaire.cms?v=2"></script-->

<script type="text/javascript" src="../survey/assets/source/jquery.fancybox.js?v=2.1.3"></script>
<link rel="stylesheet" type="text/css" href="../survey/assets/source/jquery.fancybox.css?v=2.1.2" media="screen" />
<link rel="stylesheet" type="text/css" href="../survey/assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="../survey/assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<link rel="stylesheet" type="text/css" href="../survey/assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="../survey/assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="../survey/assets/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<link rel="stylesheet" type="text/css" href="../survey/assets/css/style.css">
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
}
*/
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
$(document).ready(function(){
    $('#eduction_contribution').hide();
    $('#occupation_contribution').hide();
    $('#other_city_div').hide();
    $('#buy_product_other_div').hide();
    $("#tablet_div").hide();
    $("#laptop_div").hide();
    $("#kitchen_div").hide();
    $("#mobile_div").hide();
    $("#tv_div").hide();
    $("#appliance_div").hide();
    //rt 17mrch//
    $("#personal_care_div").hide();
    //rt//
    $("#question_div").hide();
    $("#first_three").hide();
    $("#second_three").hide();
    $("#third_three").hide();
    $("#recently_div").hide();
    $("#yes_no").change(function(){
        if($(this).val()=='2'){
          $('#eduction_contribution').show();
          $('#occupation_contribution').show();
          $("#highest_education_contribute").prop('selectedIndex', 0);
          $('#current_occupation_contribution').prop('selectedIndex',0);
        }else {
          $("#highest_education_contribute").prop('selectedIndex', 0);
          $('#current_occupation_contribution').prop('selectedIndex',0);
          $('#eduction_contribution').hide();
          $('#occupation_contribution').hide();
        }
    });
    $("#district").change(function(){
        if($(this).val()=='97'){
          $("#other_city").val('');
          $('#other_city_div').show();
        }else {
          $("#other_city").val('');
          $('#other_city_div').hide();
        }
    });
    $("#buy_product_8").click(function(){
      if($('#buy_product_8').is(":checked")){
        $("#buy_product_other").val('');
        $("#buy_product_other_div").show();
      }
      else {
        $("#buy_product_other_div").hide();
        $("#buy_product_other").val('');
      }
    });
    $('.products').click(function(){
     if($('#buy_product_1').is(":checked") || $('#buy_product_2').is(":checked") || $('#buy_product_3').is(":checked") || $('#buy_product_4').is(":checked") || $('#buy_product_5').is(":checked") || $('#buy_product_6').is(":checked") || $('#buy_product_9').is(":checked")){
      $("#question_div").show();
    }else {
      $("#question_div").hide();
    }
    if($('#buy_product_1').is(":checked") || $('#buy_product_2').is(":checked") || $('#buy_product_5').is(":checked")){
      $("#first_three").show();
    }else{
      $("#first_three").hide();
    }
    if($('#buy_product_3').is(":checked") || $('#buy_product_4').is(":checked") || $('#buy_product_6').is(":checked")){
      $("#second_three").show();
    }else{
      $("#second_three").hide();
    }
    //17march16//rt
    if($('#buy_product_9').is(":checked")){
      $("#third_three").show();
    }else{
      $("#third_three").hide();
    }
    //end17march16//


//    $("#question_div").show();
 //   $("#first_three").show();
 //   $("#second_three").show();
      if($('#buy_product_1').is(":checked")){
        $("#search_tablet").prop('selectedIndex', 0);
        $("#tablet_div").show();
      }else {
        $("#search_tablet").prop('selectedIndex', 0);
        $("#tablet_div").hide();
      }
      if($('#buy_product_2').is(":checked")){
        $("#search_laptop").prop('selectedIndex', 0);
        $("#laptop_div").show();
      }else {
        $("#search_laptop").prop('selectedIndex', 0);
        $("#laptop_div").hide();
      }
      if($('#buy_product_3').is(":checked")){
        $("#search_mobile").prop('selectedIndex', 0);
        $("#mobile_div").show();
      }else {
        $("#search_mobile").prop('selectedIndex', 0);
        $("#mobile_div").hide();
      }
      if($('#buy_product_4').is(":checked")){
        $("#search_tv").prop('selectedIndex', 0);
        $("#tv_div").show();
      }else {
        $("#search_tv").prop('selectedIndex', 0);
        $("#tv_div").hide();
      }
      if($('#buy_product_5').is(":checked")){
        $("#search_kitchen_product").prop('selectedIndex', 0);
        $("#kitchen_div").show();
      }else {
        $("#search_kitchen_product").prop('selectedIndex', 0);
        $("#kitchen_div").hide();
      }
      if($('#buy_product_6').is(":checked")){
        $("#search_appliances").prop('selectedIndex', 0);
        $("#appliance_div").show();
      }else {
        $("#search_appliances").prop('selectedIndex', 0);
        $("#appliance_div").hide();
      }
      //17march16//rt
      if($('#buy_product_9').is(":checked")){
        $("#search_personal_care").prop('selectedIndex', 0);
        $("#personal_care_div").show();
      }else {
        $("#search_personal_care").prop('selectedIndex', 0);
        $("#personal_care_div").hide();
      }


    });
    $("#retailer_ads_13").click(function(){
      if($('#retailer_ads_13').is(":checked")){
        $("#recent_other").val('');
        $("#recently_div").show();
      }else {
        $("#recent_other").val('');
        $("#recently_div").hide();
      }
    });
			$("#state_name").change(function(){
				$('#district').html('<option value="">Select city/town</option>');
				$('#city').html('<option value="">Select City</option>');
				$('#area').html('<option value="">Select Area</option>');
				var stid = $(this).val();
				if(stid!=''){
				$.ajax({
					type: 	"POST",
					async: 	true,
					data:	{stid:stid},
					url: 	'get_district.php',
					success: function (result) {
						var res = result;
						$("#district").html(res);
					},
					error: function (XMLHttpRequest, textStatus, errorThrown) {
						if (errorThrown != null)
							alert(textStatus + " : " + errorThrown);
						}
					});

				}
			});


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
#search_kitchen_product,#search_tablet,#search_laptop,#search_appliances,#search_mobile,#search_tv{ width:312px !important;max-width:500px!important;}

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
        .withouttable TABLE TR TD { border: 0px solid;}
</style>
<script src="js/validatePage_home.js" type="text/javascript"></script>
</head>
<body>
<div class="wealthbutton"></div>
  <div class="parent_main">

    <div class="header">
      <div style="float: left; width: 78%;">
      <ul>
        <li><p style="margin:0px;padding:0px;">Please spare 2 to 3 minutes; share your opinion & preferences on shopping online or offline and stand chance to win up to Rs. 10,000</p></li>
        <li><p style="margin:0px;padding:0px;">Depending on your profile you may require to answer a maximum of 1 to 3 short pages.</p></li>
        <li><p style="margin:0px;padding:0px;">All the questions are mandatory.</p></li>
        <li><p style="margin:0px;padding:0px;">Inappropriate/incomplete answers may disqualify you from being selected for prize draw. With every completed page you are eligible to win more.</p></li>
      </ul>
      </div>
      <div class="" style="float: left; width: 20%;padding-top:20px;">
        <img src="http://juxt360.com/Baseline/images/logo.png">
      </div>
        <div style="clear:both"></div>
    </div>
      <FORM name="form2" id="form2" class="styleThese" method="POST" action="ServerPage1.php">
        <INPUT type="hidden" name="rfr" id="rfr" value="<?php echo $_GET["rfr"] ?>">
        <INPUT type="hidden" name="subid" id="subid" value="<?php echo @$_SESSION["subid"] ?>">
        <INPUT type="hidden" name="home_SessionId" id="home_SessionId" value="<?php echo $sessionid; ?>">


      <br>
      <h1 style="line-height:35px;">About you</h1>
      <div class="content2">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:59%">Where do you stay?</span>
         <div style="float:left;margin-right: 20px;">
          <?php
					$query="SELECT * FROM state_ganna order by state_name ASC";
          //echo $query;
							$result_state = mysql_query($query);
					?>
					<select name='state_name' id="state_name" required="true" class="style_dd">
							<option value=''>Select State</option>
							<?php
								while($row_state=mysql_fetch_array($result_state))
								{
								if($row_state['state_name']!=''){
							?>
								<option value="<?php echo $row_state['id']; ?>"><?php echo $row_state['state_name']; ?></option>
						<?php }
						}
						?>
						<option value="97">Other States/UTs</option>
						</select>
            <select name="district" id="district" class="style_dd">
						<option value="">Select City/Town</option>
					</select>
            <?php //AddDropDown("residing.xml","residing","style_dd", "Residing", "", "", "1"); ?>
            <div style="margin-top:5px;display:none;" id="other_city_div"><input type="text" name="other_city" id="other_city" placeholder="Other City" style="width:180px;"></div>
          </div>
      </div>
      </div>
      <div class="content2">
        <div class="content2_l1" style="width: 973px;">
          <span class="content2_l1_span" style="width:78%"></span>
          <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("gender.xml","gender","style_dd", "Select Gender", "", "", "1"); ?>
          </div>

          <div style="float:right;margin-right: 20px;">
            <?php AddDropDown("age.xml","age","style_dd", "Select Age", "", "", "1"); ?>
          </div>

        </div>
      </div>

      <div class="content2">
        <div class="content2_l1" style="width: 973px;">

            <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("highest_level_education.xml","highest_education","style_dd", "Highest Education", "", "", "1"); ?>
          </div>
          <div style="float:right;margin-right: 20px;">
            <?php AddDropDown("your_current_occupation.xml","current_occupation","style_dd", "Current Occupation", "", "", "1"); ?>
          </div>

        </div>
      </div>

      <div class="content2">
        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:78%">Do you contribute the most towards the monthly household expense of your household (household means all members sharing the same kitchen)?</span>
            <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("jc_CWE_YN.xml","yes_no","style_dd", "Select", "", "", "1"); ?>
          </div>

        </div>
      </div>
      <div class="content2" id="eduction_contribution">
        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:78%">What is the highest education of the person who contributes the most towards the monthly household expense of your household (all members sharing the same kitchen)?</span>
            <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("highest_level_education.xml","highest_education_contribute","style_dd", "Highest Education", "", "", "1"); ?>
          </div>

        </div>
      </div>
      <div class="content2" id="occupation_contribution">
        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:78%">What is the occupation of the person who contributes the most towards your monthly household expenses (all members sharing the same kitchen)?</span>
            <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("your_current_occupation2.xml","current_occupation_contribution","style_dd", "Current Occupation", "", "", "1"); ?>
          </div>

        </div>
      </div>
      <div class="content2">
        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:100%">We may need to contact you, in case you are the winner or seek clarifications on your responses. Please share your <input type="text" id="email" name="email" value="" placeholder="Email id"> & your <input type="text" name="phoneno" id="phoneno" value=""  placeholder="contact no">. We assure you that your contact details will not be used for any other purpose.</span>
          <span class="content2_l1_span" style="width:100%">We may need to contact you for further clarification related to your responses in this survey or further research purpose. Would you like us to contact you?</span>

         <div style="float:left;margin-right: 20px;" class="withouttable">
          <input type="radio" value="1" id="contact_me_1" name="contact_me_1"><span class="content2_l1_span" style="float:none;">Yes, please contact me</span><br>
          <input type="radio" value="2" id="contact_me_2" name="contact_me_1"><span class="content2_l1_span" style="float:none;">No, thanks don't bother me</span>

            <!--span class="content2_l1_span"><?php //AddRadioButton("contact.xml", 1, "Ans",'#ffffff','0', 2 , 2, 1, 200,'','','1'); ?></span-->
          </div>
        </div>
      </div>
      <br>
      <h1 style="line-height:35px;">About your recent purchase</h1>
     <div class="content2">
       <div class="content2_l1">
          <span class="content2_l1_span">Which of the following products did you look around to buy any of the following products during the last 2 weeks?</span>
            <div style="clear:both;margin-left:-12px;">
              <?php
              AddCheckBox1("products.xml",'N',"products","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','7','7'),'1','460px');
              ?>
            </div>
              <div id="buy_product_other_div" style="clear:both; text-align:center;"><input type="text" name="buy_product_other" id="buy_product_other" placeholder="Other Product"></div>
        </div>
     </div>
     <div class="content2" id="question_div">
       <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span">And where all did you search for it?</span>
        </div>
      </div>
     <div class="content2" id="first_three">
       <div class="content2_l1" style="width:995px;">
            <div style="float: left;padding-right: 10px;" id="tablet_div">
              <?php AddDropDown("search_products.xml","search_tablet","style_dd", "Tablet", "", "", "1"); ?>
            </div>
            <div style="float: left;padding-right: 10px;" id="laptop_div">
            <?php AddDropDown("search_products.xml","search_laptop","style_dd", "Laptop, Computer (Desktop)", "", "", "1"); ?>
            </div>
            <div id="kitchen_div">
              <?php AddDropDown("search_products.xml","search_kitchen_product","style_dd", "Kitchen Appliances (Microwave,Mixer, Juicer ,Water Purifier, Air Fryer, etc.))", "", "", "1"); ?>
            </div>
        </div>
      </div>
      <div class="content2" id="second_three">
       <div class="content2_l1" style="width:995px;">
        <div style="float: left;padding-right: 10px;" id="mobile_div">
          <?php AddDropDown("search_products.xml","search_mobile","style_dd", "Mobile Phone", "", "", "1"); ?>
        </div>
        <div style="float: left;padding-right: 10px;" id="tv_div">
        <?php AddDropDown("search_products.xml","search_tv","style_dd", "Television (LCD/LED/3D)", "", "", "1"); ?>
            </div>
          <div id="appliance_div">
          <?php AddDropDown("search_products.xml","search_appliances","style_dd", "Large Appliances (Refrigerator,AC,Washing Machine)", "", "", "1"); ?>
            </div>
        </div>
      </div>

      <!--17march16-->
      <div class="content2" id="third_three">
       <div class="content2_l1" style="width:995px;">
        <div style="float: left;padding-right: 10px;" id="personal_care_div">
          <?php AddDropDown("search_products.xml","search_personal_care","style_dd", "Personal Care Appliances (Electric shavers, Trimmers, Hair Dryers, etc.)", "", "", "1"); ?>
        </div>
     
        </div>
      </div>


      <!--17march end-->

    <div class="content2" id="no_insurance_coverage1" style="width:995px">
      <span class="content2_l1_span" style="width:90%">In the last 2 weeks, have you see any ads from any of the following retailers?</span>
        <div class="content2_l1">
          <div style="float:left;margin-right: 20px;">
          <?php
              AddCheckBox1("ads_from_retailer.xml",'N',"ads_from_retailer","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','98','98'),'1','300px');
              ?></div>
              <div id="recently_div" style="padding-left:323px;"><input type="text" name="recent_other" id="recent_other" placeholder="Recently other"></div>
        </div>
    </div>
  <a onClick="return validate();" class="submit_btn" id="fp_submit" href="javascript:void(0);" style="display:none;"></a>
</form>
</body>
</html>
