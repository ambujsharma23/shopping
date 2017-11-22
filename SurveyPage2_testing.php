<?php
require("config.php");
require("../survey/assets/lib/htmlfunction.php");
//print_r($_SESSION);
?>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shopping Survey</title>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/gen_validation.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jsjquery161min.cms"></script>
<script src="js/js_etwealth_questionnaire.cms?v=2"></script>

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
$(document).ready(function(){
  $("#store_visit_other_div").hide();
  $("#question_div").hide();
  $("#visit_question").hide();
  $("#tablet_div").hide();
  $("#laptop_div").hide();
  $("#kitchen_div").hide();
  $("#mobile_div").hide();
  $("#tv_div").hide();
  $("#appliance_div").hide();

  $("#visit_tablet_div").hide();
  $("#visit_laptop_div").hide();
  $("#visit_mobile_div").hide();
  $("#visit_tv_div").hide();
  $("#visit_kitchen_div").hide();
  $("#visit_large_appliance_div").hide();

  //$("#first_three").hide();
  //$("#second_three").hide();
  $("#purchase_reason_tablet").hide();
  $("#not_purchase_reason_tablet").hide();
  $("#purchase_reason_laptop").hide();
  $("#not_purchase_reason_laptop").hide();
  $("#purchase_reason_kitchen").hide();
  $("#not_purchase_reason_kitchen").hide();
  $("#purchase_reason_mobile").hide();
  $("#not_purchase_reason_mobile").hide();
  $("#purchase_reason_tv").hide();
  $("#not_purchase_reason_tv").hide();
  $("#purchase_reason_appliance").hide();
  $("#not_purchase_reason_appliance").hide();

  $("#stores_retailers_16").click(function(){
      if($('#stores_retailers_16').is(":checked")){
          $('#store_visit_other').val('');
         $("#store_visit_other_div").show();
      }else {
          $('#store_visit_other').val('');
        $("#store_visit_other_div").hide();
      }
  });
    $('.products_bought_last_weekend').click(function(){

    if($('#product_brought_1').is(":checked") || $('#product_brought_2').is(":checked") || $('#product_brought_3').is(":checked") || $('#product_brought_4').is(":checked") || $('#product_brought_5').is(":checked") || $('#product_brought_6').is(":checked")){
      $("#question_div").show();
      $("#visit_question").show();
    }else {
      $("#question_div").hide();
      $("#visit_question").hide();
    }
/*    if($('#product_brought_1').is(":checked") || $('#product_brought_2').is(":checked") || $('#product_brought_5').is(":checked")){
      $("#first_three").show();
    }else{
      $("#first_three").hide();
    }

    if($('#product_brought_3').is(":checked") || $('#product_brought_4').is(":checked") || $('#product_brought_6').is(":checked")){
      $("#second_three").show();
    }else{
      $("#second_three").hide();
    }
 */
});
    $("#product_brought_1").click(function(){
      if($('#product_brought_1').is(":checked")){
        $("#purchase_tablet").prop('selectedIndex', 0);
        $("#tablet_store_1").prop('selectedIndex', 0);
        $("#tablet_store_2").prop('selectedIndex', 0);
        $("#tablet_store_3").prop('selectedIndex', 0);
        $("#tablet_div").show();
        $("#visit_tablet_div").show();
      }else {
       // $("#purchase_tablet").prop('selectedIndex', 0);
        $("#tablet_div").hide();
        $("#visit_tablet_div").hide();
      }
    });
    $("#product_brought_2").click(function(){
      if($('#product_brought_2').is(":checked")){
        $("#purchase_laptop").prop('selectedIndex', 0);
        $("#laptop_store_1").prop('selectedIndex', 0);
        $("#laptop_store_2").prop('selectedIndex', 0);
        $("#laptop_store_3").prop('selectedIndex', 0);
        $("#laptop_div").show();
        $("#visit_laptop_div").show();
      }else {
        //$("#purchase_laptop").prop('selectedIndex', 0);
        $("#laptop_div").hide();
        $("#visit_laptop_div").hide();
      }
    });
    $("#product_brought_3").click(function(){
      if($('#product_brought_3').is(":checked")){
        $("#purchase_mobile").prop('selectedIndex', 0);
        $("#mobile_store_1").prop('selectedIndex', 0);
        $("#mobile_store_2").prop('selectedIndex', 0);
        $("#mobile_store_3").prop('selectedIndex', 0);
        $("#mobile_div").show();
        $("#visit_mobile_div").show();
      }else {
        //$("#purchase_mobile").prop('selectedIndex', 0);
        $("#mobile_div").hide();
        $("#visit_mobile_div").hide();
      }
    });
    $("#product_brought_4").click(function(){
      if($('#product_brought_4').is(":checked")){
        $("#purchase_tv").prop('selectedIndex', 0);
        $("#tv_store_1").prop('selectedIndex', 0);
        $("#tv_store_2").prop('selectedIndex', 0);
        $("#tv_store_3").prop('selectedIndex', 0);
        $("#tv_div").show();
        $("#visit_tv_div").show();
      }else {
       // $("#purchase_tv").prop('selectedIndex', 0);
        $("#tv_div").hide();
        $("#visit_tv_div").hide();
      }
    });
    $("#product_brought_5").click(function(){
      if($('#product_brought_5').is(":checked")){
        $("#purchase_kitchen_product").prop('selectedIndex', 0);
        $("#kitchen_store_1").prop('selectedIndex', 0);
        $("#kitchen_store_2").prop('selectedIndex', 0);
        $("#kitchen_store_3").prop('selectedIndex', 0);
        $("#kitchen_div").show();
        $("#visit_kitchen_div").show();
      }else {
      //  $("#purchase_kitchen_product").prop('selectedIndex', 0);
        $("#kitchen_div").hide();
        $("#visit_kitchen_div").hide();
      }
    });
    $("#product_brought_6").click(function(){
      if($('#product_brought_6').is(":checked")){
        $("#purchase_appliances").prop('selectedIndex', 0);
        $("#large_appliance_store_1").prop('selectedIndex', 0);
        $("#large_appliance_store_2").prop('selectedIndex', 0);
        $("#large_appliance_store_3").prop('selectedIndex', 0);
        $("#appliance_div").show();
        $("#visit_large_appliance_div").show();
      }else {
        //$("#purchase_appliances").prop('selectedIndex', 0);
        $("#appliance_div").hide();
        $("#visit_large_appliance_div").hide();
      }
    });

/*    $(".select_shop").change(function(){
      $(this).each(function(){
          if($(this).val()=='2' || $(this).val()=='12'){
            $("#purchase_reason").show();
            $("#not_purchase_reason").hide();
          }else if($(this).val()!='2' || $(this).val()!='12'){
            $("#not_purchase_reason").show();
            $("#purchase_reason").hide();
          }
      });

    });*/
    $("#purchase_tablet").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_tablet").show();
          $("#not_purchase_reason_tablet").hide();
        }else {
          $("#not_purchase_reason_tablet").show();
          $("#purchase_reason_tablet").hide();
        }
    });
    $("#purchase_laptop").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_laptop").show();
          $("#not_purchase_reason_laptop").hide();
        }else {
          $("#not_purchase_reason_laptop").show();
          $("#purchase_reason_laptop").hide();
        }
    });
    $("#purchase_kitchen_product").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_kitchen").show();
          $("#not_purchase_reason_kitchen").hide();
        }else {
          $("#not_purchase_reason_kitchen").show();
          $("#purchase_reason_kitchen").hide();
        }
    });
    $("#purchase_mobile").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_mobile").show();
          $("#not_purchase_reason_mobile").hide();
        }else {
          $("#not_purchase_reason_mobile").show();
          $("#purchase_reason_mobile").hide();
        }
    });
    $("#purchase_tv").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_tv").show();
          $("#not_purchase_reason_tv").hide();
        }else {
          $("#not_purchase_reason_tv").show();
          $("#purchase_reason_tv").hide();
        }
    });
    $("#purchase_appliances").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_appliance").show();
          $("#not_purchase_reason_appliance").hide();
        }else {
          $("#not_purchase_reason_appliance").show();
          $("#purchase_reason_appliance").hide();
        }
    });

 //tablet
   $(".add_more_tablet").click(function(){
     if($(this).html()=='+'){
       $("#three_more_tablet").show();
       $(".tablet_one").show();
       $(".add_more_tablet_1").show();
       $(".remove_more_tablet_1").show();
       $(".add_more_tablet").hide();
     }
   });
   $(".add_more_tablet_1").click(function(){
     if($(this).html()=='+'){
       $(".tablet_two").show();
       $(".add_more_tablet_1").hide();
       $(".remove_more_tablet_1").hide();
       $(".add_more_tablet_2").show();
       $(".remove_more_tablet_2").show();

     }
   });
   $(".add_more_tablet_2").click(function(){
     if($(this).html()=='+'){
       $(".tablet_three").show();
       $(".remove_more_tablet_3").show();
       $(".add_more_tablet_1").hide();
       $(".remove_more_tablet_1").hide();
       $(".add_more_tablet_2").hide();
       $(".remove_more_tablet_2").hide();


     }
   });
   $(".remove_more_tablet_1").click(function(){
     if($(this).html()=='-'){
       $("#tablet_store_4").prop('selectedIndex',0);
       $(".tablet_one").hide();
       $(".add_more_tablet_1").hide();
       $(".remove_more_tablet_1").hide();
       $(".add_more_tablet").show();
       $("#three_more_tablet").hide();
     }
   });
   $(".remove_more_tablet_2").click(function(){
     if($(this).html()=='-'){
       $("#tablet_store_5").prop('selectedIndex',0);
       $(".tablet_two").hide();
       $(".add_more_tablet_2").hide();
       $(".remove_more_tablet_2").hide();
       $(".add_more_tablet_1").show();
       $(".remove_more_tablet_1").show();
     }
   });
   $(".remove_more_tablet_3").click(function(){
     if($(this).html()=='-'){
       $("#tablet_store_6").prop('selectedIndex',0);
       $(".tablet_three").hide();
       $(".remove_more_tablet_3").hide();
       $(".add_more_tablet_2").show();
       $(".remove_more_tablet_2").show();
     }
   });
   //laptop
   $(".add_more_laptop").click(function(){
     if($(this).html()=='+'){
       $("#three_more_laptop").show();
       $(".laptop_one").show();
       $(".add_more_laptop_1").show();
       $(".remove_more_laptop_1").show();
       $(".add_more_laptop").hide();
     }
   });
   $(".add_more_laptop_1").click(function(){
     if($(this).html()=='+'){
       $(".laptop_two").show();
       $(".add_more_laptop_1").hide();
       $(".remove_more_laptop_1").hide();
       $(".add_more_laptop_2").show();
       $(".remove_more_laptop_2").show();

     }
   });
   $(".add_more_laptop_2").click(function(){
     if($(this).html()=='+'){
       $(".laptop_three").show();
       $(".remove_more_laptop_3").show();
       $(".add_more_laptop_1").hide();
       $(".remove_more_laptop_1").hide();
       $(".add_more_laptop_2").hide();
       $(".remove_more_laptop_2").hide();


     }
   });
   $(".remove_more_laptop_1").click(function(){
     if($(this).html()=='-'){
       $("#laptop_store_4").prop('selectedIndex',0);
       $(".laptop_one").hide();
       $(".add_more_laptop_1").hide();
       $(".remove_more_laptop_1").hide();
       $(".add_more_laptop").show();
       $("#three_more_laptop").hide();

     }
   });
   $(".remove_more_laptop_2").click(function(){
     if($(this).html()=='-'){
       $("#laptop_store_5").prop('selectedIndex',0);
       $(".laptop_two").hide();
       $(".add_more_laptop_2").hide();
       $(".remove_more_laptop_2").hide();
       $(".add_more_laptop_1").show();
       $(".remove_more_laptop_1").show();
     }
   });
   $(".remove_more_laptop_3").click(function(){
     if($(this).html()=='-'){
       $("#laptop_store_6").prop('selectedIndex',0);
       $(".laptop_three").hide();
       $(".remove_more_laptop_3").hide();
       $(".add_more_laptop_2").show();
       $(".remove_more_laptop_2").show();
     }
   });
   //mobile
   $(".add_more_mobile").click(function(){
     if($(this).html()=='+'){
       $("#three_more_mobile").show();
       $(".mobile_one").show();
       $(".add_more_mobile_1").show();
       $(".remove_more_mobile_1").show();
       $(".add_more_mobile").hide();
     }
   });
   $(".add_more_mobile_1").click(function(){
     if($(this).html()=='+'){
       $(".mobile_two").show();
       $(".add_more_mobile_1").hide();
       $(".remove_more_mobile_1").hide();
       $(".add_more_mobile_2").show();
       $(".remove_more_mobile_2").show();

     }
   });
   $(".add_more_mobile_2").click(function(){
     if($(this).html()=='+'){
       $(".mobile_three").show();
       $(".remove_more_mobile_3").show();
       $(".add_more_mobile_1").hide();
       $(".remove_more_mobile_1").hide();
       $(".add_more_mobile_2").hide();
       $(".remove_more_mobile_2").hide();
     }
   });
   $(".remove_more_mobile_1").click(function(){
     if($(this).html()=='-'){
       $("#mobile_store_4").prop('selectedIndex',0);
       $(".mobile_one").hide();
       $(".add_more_mobile_1").hide();
       $(".remove_more_mobile_1").hide();
       $(".add_more_mobile").show();
       $("#three_more_mobile").hide();
     }
   });
   $(".remove_more_mobile_2").click(function(){
     if($(this).html()=='-'){
       $("#mobile_store_5").prop('selectedIndex',0);
       $(".mobile_two").hide();
       $(".add_more_mobile_2").hide();
       $(".remove_more_mobile_2").hide();
       $(".add_more_mobile_1").show();
       $(".remove_more_mobile_1").show();
     }
   });
   $(".remove_more_mobile_3").click(function(){
     if($(this).html()=='-'){
       $("#mobile_store_6").prop('selectedIndex',0);
       $(".mobile_three").hide();
       $(".remove_more_mobile_3").hide();
       $(".add_more_mobile_2").show();
       $(".remove_more_mobile_2").show();
     }
   });
   //tv
   $(".add_more_tv").click(function(){
     if($(this).html()=='+'){
       $("#three_more_tv").show();
       $(".tv_one").show();
       $(".add_more_tv_1").show();
       $(".remove_more_tv_1").show();
       $(".add_more_tv").hide();
     }
   });
   $(".add_more_tv_1").click(function(){
     if($(this).html()=='+'){
       $(".tv_two").show();
       $(".add_more_tv_1").hide();
       $(".remove_more_tv_1").hide();
       $(".add_more_tv_2").show();
       $(".remove_more_tv_2").show();

     }
   });
   $(".add_more_tv_2").click(function(){
     if($(this).html()=='+'){
       $(".tv_three").show();
       $(".remove_more_tv_3").show();
       $(".add_more_tv_1").hide();
       $(".remove_more_tv_1").hide();
       $(".add_more_tv_2").hide();
       $(".remove_more_tv_2").hide();
     }
   });
   $(".remove_more_tv_1").click(function(){
     if($(this).html()=='-'){
       $("#tv_store_4").prop('selectedIndex',0);
       $(".tv_one").hide();
       $(".add_more_tv_1").hide();
       $(".remove_more_tv_1").hide();
       $(".add_more_tv").show();
       $("#three_more_tv").hide();
     }
   });
   $(".remove_more_tv_2").click(function(){
     if($(this).html()=='-'){
       $("#tv_store_5").prop('selectedIndex',0);
       $(".tv_two").hide();
       $(".add_more_tv_2").hide();
       $(".remove_more_tv_2").hide();
       $(".add_more_tv_1").show();
       $(".remove_more_tv_1").show();
     }
   });
   $(".remove_more_tv_3").click(function(){
     if($(this).html()=='-'){
       $("#tv_store_6").prop('selectedIndex',0);
       $(".tv_three").hide();
       $(".remove_more_tv_3").hide();
       $(".add_more_tv_2").show();
       $(".remove_more_tv_2").show();
     }
   });

   //kitchen
   $(".add_more_kitchen").click(function(){
     if($(this).html()=='+'){
       $("#three_more_kitchen").show();
       $(".kitchen_one").show();
       $(".add_more_kitchen_1").show();
       $(".remove_more_kitchen_1").show();
       $(".add_more_kitchen").hide();
     }
   });
   $(".add_more_kitchen_1").click(function(){
     if($(this).html()=='+'){
       $(".kitchen_two").show();
       $(".add_more_kitchen_1").hide();
       $(".remove_more_kitchen_1").hide();
       $(".add_more_kitchen_2").show();
       $(".remove_more_kitchen_2").show();

     }
   });
   $(".add_more_kitchen_2").click(function(){
     if($(this).html()=='+'){
       $(".kitchen_three").show();
       $(".remove_more_kitchen_3").show();
       $(".add_more_kitchen_1").hide();
       $(".remove_more_kitchen_1").hide();
       $(".add_more_kitchen_2").hide();
       $(".remove_more_kitchen_2").hide();
     }
   });
   $(".remove_more_kitchen_1").click(function(){
     if($(this).html()=='-'){
       $("#kitchen_store_4").prop('selectedIndex',0);
       $(".kitchen_one").hide();
       $(".add_more_kitchen_1").hide();
       $(".remove_more_kitchen_1").hide();
       $(".add_more_kitchen").show();
       $("#three_more_kitchen").hide();
     }
   });
   $(".remove_more_kitchen_2").click(function(){
     if($(this).html()=='-'){
       $("#kitchen_store_5").prop('selectedIndex',0);
       $(".kitchen_two").hide();
       $(".add_more_kitchen_2").hide();
       $(".remove_more_kitchen_2").hide();
       $(".add_more_kitchen_1").show();
       $(".remove_more_kitchen_1").show();
     }
   });
   $(".remove_more_kitchen_3").click(function(){
     if($(this).html()=='-'){
       $("#kitchen_store_6").prop('selectedIndex',0);
       $(".kitchen_three").hide();
       $(".remove_more_kitchen_3").hide();
       $(".add_more_kitchen_2").show();
       $(".remove_more_kitchen_2").show();
     }
   });
   //large_appliance
   $(".add_more_large_appliance").click(function(){
     if($(this).html()=='+'){
       $("#three_more_large_appliance").show();
       $(".large_appliance_one").show();
       $(".add_more_large_appliance_1").show();
       $(".remove_more_large_appliance_1").show();
       $(".add_more_large_appliance").hide();
     }
   });
   $(".add_more_large_appliance_1").click(function(){
     if($(this).html()=='+'){
       $(".large_appliance_two").show();
       $(".add_more_large_appliance_1").hide();
       $(".remove_more_large_appliance_1").hide();
       $(".add_more_large_appliance_2").show();
       $(".remove_more_large_appliance_2").show();

     }
   });
   $(".add_more_large_appliance_2").click(function(){
     if($(this).html()=='+'){
       $(".large_appliance_three").show();
       $(".remove_more_large_appliance_3").show();
       $(".add_more_large_appliance_1").hide();
       $(".remove_more_large_appliance_1").hide();
       $(".add_more_large_appliance_2").hide();
       $(".remove_more_large_appliance_2").hide();
     }
   });
   $(".remove_more_large_appliance_1").click(function(){
     if($(this).html()=='-'){
       $("#large_appliance_store_4").prop('selectedIndex',0);
       $(".large_appliance_one").hide();
       $(".add_more_large_appliance_1").hide();
       $(".remove_more_large_appliance_1").hide();
       $(".add_more_large_appliance").show();
       $("#three_more_large_appliance").hide();
     }
   });
   $(".remove_more_large_appliance_2").click(function(){
     if($(this).html()=='-'){
       $("#large_appliance_store_5").prop('selectedIndex',0);
       $(".large_appliance_two").hide();
       $(".add_more_large_appliance_2").hide();
       $(".remove_more_large_appliance_2").hide();
       $(".add_more_large_appliance_1").show();
       $(".remove_more_large_appliance_1").show();
     }
   });
   $(".remove_more_large_appliance_3").click(function(){
     if($(this).html()=='-'){
       $("#large_appliance_store_6").prop('selectedIndex',0);
       $(".large_appliance_three").hide();
       $(".remove_more_large_appliance_3").hide();
       $(".add_more_large_appliance_2").show();
       $(".remove_more_large_appliance_2").show();
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

table tbody tr {
    display: block;
}
.noborder{ border:0px solid;}
.content2{ margin-top:0px;}
#purchase_kitchen_product,#purchase_tablet,#purchase_laptop,#purchase_appliances,#purchase_mobile,#purchase_tv{ width:312px !important;max-width:500px!important;}

#tablet_store_1,#tablet_store_2,#tablet_store_3,#tablet_store_4,#tablet_store_5,#tablet_store_6,#laptop_store_1,#laptop_store_2,#laptop_store_3,#laptop_store_4,#laptop_store_5,#laptop_store_6,#mobile_store_1,#mobile_store_2,#mobile_store_3,#mobile_store_4,#mobile_store_5,#mobile_store_6,#tv_store_1,#tv_store_2,#tv_store_3,#tv_store_4,#tv_store_5,#tv_store_6,#kitchen_store_1,#kitchen_store_2,#kitchen_store_3,#kitchen_store_4,#kitchen_store_5,#kitchen_store_6,#large_appliance_store_1,#large_appliance_store_2,#large_appliance_store_3,#large_appliance_store_4,#large_appliance_store_5,#large_appliance_store_6{ width:250px !important;max-width:500px!important;margin-right:10px;}

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
<script src="js/validatePage2.js" type="text/javascript"></script>
</head>
<body>
<div class="wealthbutton"></div>
  <div class="parent_main">
    <FORM name="form2" id="form2" class="styleThese" method="POST" action="ServerPage2.php">
      <INPUT type="hidden" name="rfr" id="rfr" value="<?php echo $_REQUEST["rfr"] ?>">
      <INPUT type="hidden" name="subid" id="subid" value="<?php echo $_REQUEST["subid"] ?>">
      <INPUT type="hidden" name="page2_session_Id" id="page2_session_Id" value="<?php echo $_REQUEST["SessionId"] ?>">


      <br>
      <h1 style="line-height:35px;">About purchase behaviour</h1>

      <div class="content2">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:78%">And which of the following products did you purchase during the last week?</span>
          <div>
            <?php if(isset($_SESSION['buy_product_1']) && $_SESSION['buy_product_1']==1) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onclick="checknone1(this.id,this.value,98,98);" value="1" class="products_bought_last_weekend" id="product_brought_1" name="product_brought_1">
              <label for="product_brought_1">
                <span class="title1">Tablet</span>
              </label>
            </div>
            <?php }?>
            <?php if(isset($_SESSION['buy_product_2']) && $_SESSION['buy_product_2']==2) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onclick="checknone1(this.id,this.value,98,98);" value="2" class="products_bought_last_weekend" id="product_brought_2" name="product_brought_2">
              <label for="product_brought_2"><span class="title1">Laptop, Computer (Desktop)</span></label>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['buy_product_3']) && $_SESSION['buy_product_3']==3) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onclick="checknone1(this.id,this.value,98,98);" value="3" class="products_bought_last_weekend" id="product_brought_3" name="product_brought_3">
              <label for="product_brought_3"><span class="title1">Mobile Phone</span></label>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['buy_product_4']) && $_SESSION['buy_product_4']==4) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onclick="checknone1(this.id,this.value,98,98);" value="4" class="products_bought_last_weekend" id="product_brought_4" name="product_brought_4">
              <label for="product_brought_4"><span class="title1">Television (LCD/LED/3D)</span></label>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['buy_product_5']) && $_SESSION['buy_product_5']==5) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onclick="checknone1(this.id,this.value,98,98);" value="5" class="products_bought_last_weekend" id="product_brought_5" name="product_brought_5">
              <label for="product_brought_5"><span class="title1">Kitchen Appliances (Microwave, Mixer, Juicer,etc)</span></label>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['buy_product_6']) && $_SESSION['buy_product_6']==6) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onclick="checknone1(this.id,this.value,98,98);" value="6" class="products_bought_last_weekend" id="product_brought_6" name="product_brought_6">
              <label for="product_brought_6"><span class="title1">Large Appliances (Refrigerator,AC,Washing Machine )</span></label>
            </div>
            <?php } ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onclick="checknone1(this.id,this.value,98,98);" value="98" class="products_bought_last_weekend" id="product_brought_98" name="product_brought_98">
              <label for="product_brought_98"><span class="title1">Didn’t buy any</span></label>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>

           <!--div>
           <?php
              //AddCheckBox1("products_bought.xml",'N',"products_bought_last_weekend","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','98','98'),'1','400px');
              ?>
            </div-->
        </div>
      </div>
      <div class="content2" id="visit_question">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width: 78%">Which all stores/retailers did you visit?</span>
        </div>
      </div>
      <div class="content2" id="visit_tablet_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:18%">Tablet</span>
          <div style="">
           <?php//AddCheckBox1("stores_retailers.xml",'N',"stores_retailers","#7FB3E6","0","0","2","9",'100%','checknone1',false,array('this.id','this.value','18','18'),'1','300px');
              ?>
           </div>
           <div style="float:left;">
            <?php AddDropDown("stores_retailers.xml","tablet_store_1","style_dd", "First Store", "", "", "1");?>
            </div>
            <div style="float:left;">
            <?php
             AddDropDown("stores_retailers.xml","tablet_store_2","style_dd", "Second Store", "", "", "1");
              ?>
            </div>
            <div style="float:left;">
              <?php
             AddDropDown("stores_retailers.xml","tablet_store_3","style_dd", "Third Store", "", "", "1");
              ?>
            </div>
          <span class="add_more_tablet" style="cursor: pointer;font-size: 15pt;">+</span>
        </div>
      </div>
      <div class="content2" id="three_more_tablet" style="display:none;">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:18%">&nbsp;</span>
          <div style="float:left;" class="tablet_one" style="display:none;">
            <?php
             AddDropDown("stores_retailers.xml","tablet_store_4","style_dd", "Fourth Store", "", "", "1");
              ?>
          </div>
           <span class="add_more_tablet_1" style="cursor: pointer;font-size: 15pt;">+</span>
           <span class="remove_more_tablet_1" style="cursor: pointer;font-size: 15pt;">-</span>
            <div style="float:left;display:none;" class="tablet_two">
            <?php
             AddDropDown("stores_retailers.xml","tablet_store_5","style_dd", "Fifth Store", "", "", "1");
              ?>
            </div>
           <span class="add_more_tablet_2" style="cursor: pointer;font-size: 15pt;display:none;" >+</span>
           <span class="remove_more_tablet_2" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
            <div style="float:left;display:none;" class="tablet_three">
              <?php
             AddDropDown("stores_retailers.xml","tablet_store_6","style_dd", "Sixth Store", "", "", "1");
              ?>
            </div>
           <span class="remove_more_tablet_3" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
        </div>
      </div>
      <div class="content2" id="visit_laptop_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:18%">Laptop, Computer (Desktop)</span>
           <div style="float:left;">
            <?php AddDropDown("stores_retailers.xml","laptop_store_1","style_dd", "First Store", "", "", "1");?>
            </div>
            <div style="float:left;">
            <?php
             AddDropDown("stores_retailers.xml","laptop_store_2","style_dd", "Second Store", "", "", "1");
              ?>
            </div>
            <div style="float:left;">
              <?php
             AddDropDown("stores_retailers.xml","laptop_store_3","style_dd", "Third Store", "", "", "1");
              ?>
            </div>
          <span class="add_more_laptop" style="cursor: pointer;font-size: 15pt;">+</span>
        </div>
      </div>
      <div class="content2" id="three_more_laptop" style="display:none;">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:18%">&nbsp;</span>
          <div style="float:left;" class="laptop_one" style="display:none;">
            <?php
             AddDropDown("stores_retailers.xml","laptop_store_4","style_dd", "Fourth Store", "", "", "1");
              ?>
          </div>
           <span class="add_more_laptop_1" style="cursor: pointer;font-size: 15pt;">+</span>
           <span class="remove_more_laptop_1" style="cursor: pointer;font-size: 15pt;">-</span>
            <div style="float:left;display:none;" class="laptop_two">
            <?php
             AddDropDown("stores_retailers.xml","laptop_store_5","style_dd", "Fifth Store", "", "", "1");
              ?>
            </div>
           <span class="add_more_laptop_2" style="cursor: pointer;font-size: 15pt;display:none;" >+</span>
           <span class="remove_more_laptop_2" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
            <div style="float:left;display:none;" class="laptop_three">
              <?php
             AddDropDown("stores_retailers.xml","laptop_store_6","style_dd", "Sixth Store", "", "", "1");
              ?>
            </div>
           <span class="remove_more_laptop_3" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
          </div>
      </div>
      <div class="content2" id="visit_mobile_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:18%">Mobile Phone</span>
           <div style="float:left;">
            <?php AddDropDown("stores_retailers.xml","mobile_store_1","style_dd", "First Store", "", "", "1");?>
            </div>
            <div style="float:left;">
            <?php
             AddDropDown("stores_retailers.xml","mobile_store_2","style_dd", "Second Store", "", "", "1");
              ?>
            </div>
            <div style="float:left;">
              <?php
             AddDropDown("stores_retailers.xml","mobile_store_3","style_dd", "Third Store", "", "", "1");
              ?>
            </div>
          <span class="add_more_mobile" style="cursor: pointer;font-size: 15pt;">+</span>
        </div>
      </div>
      <div class="content2" id="three_more_mobile" style="display:none;">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:18%">&nbsp;</span>
          <div style="float:left;" class="mobile_one" style="display:none;">
            <?php
             AddDropDown("stores_retailers.xml","mobile_store_4","style_dd", "Fourth Store", "", "", "1");
              ?>
          </div>
           <span class="add_more_mobile_1" style="cursor: pointer;font-size: 15pt;">+</span>
           <span class="remove_more_mobile_1" style="cursor: pointer;font-size: 15pt;">-</span>
            <div style="float:left;display:none;" class="mobile_two">
            <?php
             AddDropDown("stores_retailers.xml","mobile_store_5","style_dd", "Fifth Store", "", "", "1");
              ?>
            </div>
           <span class="add_more_mobile_2" style="cursor: pointer;font-size: 15pt;display:none;" >+</span>
           <span class="remove_more_mobile_2" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
            <div style="float:left;display:none;" class="mobile_three">
              <?php
             AddDropDown("stores_retailers.xml","mobile_store_6","style_dd", "Sixth Store", "", "", "1");
              ?>
            </div>
           <span class="remove_more_mobile_3" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
          </div>
      </div>
      <div class="content2" id="visit_tv_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:18%"> Television (LCD/LED/3D)</span>
           <div style="float:left;">
            <?php AddDropDown("stores_retailers.xml","tv_store_1","style_dd", "First Store", "", "", "1");?>
            </div>
            <div style="float:left;">
            <?php
             AddDropDown("stores_retailers.xml","tv_store_2","style_dd", "Second Store", "", "", "1");
              ?>
            </div>
            <div style="float:left;">
              <?php
             AddDropDown("stores_retailers.xml","tv_store_3","style_dd", "Third Store", "", "", "1");
              ?>
            </div>
          <span class="add_more_tv" style="cursor: pointer;font-size: 15pt;">+</span>
        </div>
      </div>
      <div class="content2" id="three_more_tv" style="display:none;">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:18%">&nbsp;</span>
          <div style="float:left;" class="tv_one" style="display:none;">
            <?php
             AddDropDown("stores_retailers.xml","tv_store_4","style_dd", "Fourth Store", "", "", "1");
              ?>
          </div>
           <span class="add_more_tv_1" style="cursor: pointer;font-size: 15pt;">+</span>
           <span class="remove_more_tv_1" style="cursor: pointer;font-size: 15pt;">-</span>
            <div style="float:left;display:none;" class="tv_two">
            <?php
             AddDropDown("stores_retailers.xml","tv_store_5","style_dd", "Fifth Store", "", "", "1");
              ?>
            </div>
           <span class="add_more_tv_2" style="cursor: pointer;font-size: 15pt;display:none;" >+</span>
           <span class="remove_more_tv_2" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
            <div style="float:left;display:none;" class="tv_three">
              <?php
             AddDropDown("stores_retailers.xml","tv_store_6","style_dd", "Sixth Store", "", "", "1");
              ?>
            </div>
           <span class="remove_more_tv_3" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
          </div>
      </div>
      <div class="content2" id="visit_kitchen_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:18%">Kitchen Appliances (Microwave, Mixer, Juicer,etc)</span>
           <div style="float:left;">
            <?php AddDropDown("stores_retailers.xml","kitchen_store_1","style_dd", "First Store", "", "", "1");?>
            </div>
            <div style="float:left;">
            <?php
             AddDropDown("stores_retailers.xml","kitchen_store_2","style_dd", "Second Store", "", "", "1");
              ?>
            </div>
            <div style="float:left;">
              <?php
             AddDropDown("stores_retailers.xml","kitchen_store_3","style_dd", "Third Store", "", "", "1");
              ?>
            </div>
          <span class="add_more_kitchen" style="cursor: pointer;font-size: 15pt;">+</span>
        </div>
      </div>
      <div class="content2" id="three_more_kitchen" style="display:none;">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:18%">&nbsp;</span>
          <div style="float:left;" class="kitchen_one" style="display:none;">
            <?php
             AddDropDown("stores_retailers.xml","kitchen_store_4","style_dd", "Fourth Store", "", "", "1");
              ?>
          </div>
           <span class="add_more_kitchen_1" style="cursor: pointer;font-size: 15pt;">+</span>
           <span class="remove_more_kitchen_1" style="cursor: pointer;font-size: 15pt;">-</span>
            <div style="float:left;display:none;" class="kitchen_two">
            <?php
             AddDropDown("stores_retailers.xml","kitchen_store_5","style_dd", "Fifth Store", "", "", "1");
              ?>
            </div>
           <span class="add_more_kitchen_2" style="cursor: pointer;font-size: 15pt;display:none;" >+</span>
           <span class="remove_more_kitchen_2" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
            <div style="float:left;display:none;" class="kitchen_three">
              <?php
             AddDropDown("stores_retailers.xml","kitchen_store_6","style_dd", "Sixth Store", "", "", "1");
              ?>
            </div>
           <span class="remove_more_kitchen_3" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
          </div>
      </div>
      <div class="content2" id="visit_large_appliance_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:18%">Large Appliances (Refrigerator,AC,Washing Machine )</span>
           <div style="float:left;">
            <?php AddDropDown("stores_retailers.xml","large_appliance_store_1","style_dd", "First Store", "", "", "1");?>
            </div>
            <div style="float:left;">
            <?php
             AddDropDown("stores_retailers.xml","large_appliance_store_2","style_dd", "Second Store", "", "", "1");
              ?>
            </div>
            <div style="float:left;">
              <?php
             AddDropDown("stores_retailers.xml","large_appliance_store_3","style_dd", "Third Store", "", "", "1");
              ?>
            </div>
          <span class="add_more_large_appliance" style="cursor: pointer;font-size: 15pt;">+</span>
        </div>
      </div>
      <div class="content2" id="three_more_large_appliance" style="display:none;">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:18%">&nbsp;</span>
          <div style="float:left;" class="large_appliance_one" style="display:none;">
            <?php
             AddDropDown("stores_retailers.xml","large_appliance_store_4","style_dd", "Fourth Store", "", "", "1");
              ?>
          </div>
           <span class="add_more_large_appliance_1" style="cursor: pointer;font-size: 15pt;">+</span>
           <span class="remove_more_large_appliance_1" style="cursor: pointer;font-size: 15pt;">-</span>
            <div style="float:left;display:none;" class="large_appliance_two">
            <?php
             AddDropDown("stores_retailers.xml","large_appliance_store_5","style_dd", "Fifth Store", "", "", "1");
              ?>
            </div>
           <span class="add_more_large_appliance_2" style="cursor: pointer;font-size: 15pt;display:none;" >+</span>
           <span class="remove_more_large_appliance_2" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
            <div style="float:left;display:none;" class="large_appliance_three">
              <?php
             AddDropDown("stores_retailers.xml","large_appliance_store_6","style_dd", "Sixth Store", "", "", "1");
              ?>
            </div>
           <span class="remove_more_large_appliance_3" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
          </div>
      </div>
      <div class="content2" id="question_div">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span">And from where did you purchase it?</span>
        </div>
      </div>
      <div class="content2" id="tablet_div">
        <div class="content2_l1" style="width:995px;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("purchase_product.xml","purchase_tablet","style_dd select_shop", "Tablet", "", "", "1"); ?>
            </div>
        </div>
      </div>
    <div class="content2" id="purchase_reason_tablet">

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend  Tablet you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="tablet_recommending" id="tablet_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have purchased the tablet from Croma. Please state the reasons of purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("product_from_croma_tablet.xml",'N',"product_from_croma_tablet","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>

        <!------>



    </div>
    <div class="content2" id="not_purchase_reason_tablet">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend  Tablet you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_10" value="10"></td>
          </tr>        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="tablet_not_recommending" id="tablet_not_recommending" value=""  >
          </div>
      </div>

      <span class="content2_l1_span">You mentioned you have not purchased the tablet from Croma.Please state the reasons for not purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_from_croma_tablet.xml",'N',"not_purchase_from_croma_tablet","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
    <div class="content2" id="laptop_div">
      <div class="content2_l1" style="width:995px;">
          <div style="float: left;padding-right: 10px;" id="">
            <?php AddDropDown("purchase_product.xml","purchase_laptop","style_dd select_shop", "Laptop, Computer (Desktop)", "", "", "1"); ?>
          </div>
        </div>
      </div>
      <!- ----------->
    <div class="content2" id="purchase_reason_laptop">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Laptop you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>

          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="laptop_recommending" id="laptop_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have purchased the laptop from Croma. Please state the reasons of purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("product_from_croma_laptop.xml",'N',"product_from_croma_laptop","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
    <div class="content2" id="not_purchase_reason_laptop">

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Laptop you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>

          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_10" value="10"></td>
          </tr>
          </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="laptop_not_recommending" id="laptop_not_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have not purchased the laptop from Croma.Please state the reasons for not purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_from_croma_laptop.xml",'N',"not_purchase_from_croma_laptop","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>

      <div class="content2" id="kitchen_div">
        <div class="content2_l1" style="width:995px;">

           <div>
              <?php AddDropDown("purchase_product.xml","purchase_kitchen_product","style_dd select_shop", "Kitchen Appliances (Microwave,Mixer,Juicer,etc)", "", "", "1"); ?>
            </div>
        </div>
      </div>
    <div class="content2" id="purchase_reason_kitchen">

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Kitchen Appliances (Microwave, Mixer, Juicer,etc) you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="kitchen_recommending" id="kitchen_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have purchased the Kitchen Appliances from Croma. Please state the reasons of purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("product_from_croma_kitchen.xml",'N',"product_from_croma_kitchen","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
    <div class="content2" id="not_purchase_reason_kitchen">

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Kitchen Appliances (Microwave, Mixer, Juicer,etc) you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="kitchen_not_recommending" id="kitchen_not_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have not purchased the Kitchen Appliances from Croma.Please state the reasons for not purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_from_croma_kitchen.xml",'N',"not_purchase_from_croma_kitchen","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
    <div class="content2" id="mobile_div">
        <div class="content2_l1" style="width:995px;">
        <div style="float: left;padding-right: 10px;" id="">
          <?php AddDropDown("purchase_product.xml","purchase_mobile","style_dd select_shop", "Mobile Phone", "", "", "1"); ?>
        </div>
        </div>
      </div>
    <div class="content2" id="purchase_reason_mobile">

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Mobile you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="mobile_recommending" id="mobile_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have purchased the mobile from Croma. Please state the reasons of purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("product_from_croma_mobile.xml",'N',"product_from_croma_mobile","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
    <div class="content2" id="not_purchase_reason_mobile">

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Mobile you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="mobile_not_recommending" id="mobile_not_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have not purchased the mobile from Croma.Please state the reasons for not purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_from_croma_mobile.xml",'N',"not_purchase_from_croma_mobile","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
      <div class="content2" id="tv_div">
        <div class="content2_l1" style="width:995px;">
          <div style="float: left;padding-right: 10px;"><?php AddDropDown("purchase_product.xml","purchase_tv","style_dd select_shop", "Television (LCD/LED/3D)", "", "", "1"); ?>
          </div>
        </div>
      </div>
    <div class="content2" id="purchase_reason_tv">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Television (LCD/LED/3D) you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="tv_recommending" id="tv_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have purchased the television from Croma. Please state the reasons of purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("product_from_croma_tv.xml",'N',"product_from_croma_tv","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
    <div class="content2" id="not_purchase_reason_tv">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Television (LCD/LED/3D) you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="tv_not_recommending" id="tv_not_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have not purchased the television from Croma.Please state the reasons for not purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_from_croma_tv.xml",'N',"not_purchase_from_croma_tv","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
      <div class="content2" id="appliance_div">
        <div class="content2_l1" style="width:995px;">
          <div>
          <?php AddDropDown("purchase_product.xml","purchase_appliances","style_dd select_shop", "Large Appliances (Refrigerator,AC,Washing Machine)", "", "", "1"); ?>
            </div>
        </div>
      </div>

    <div class="content2" id="purchase_reason_appliance">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Large Appliances (Refrigerator,AC,Washing Machine ) you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="appliance_recommending" id="appliance_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have purchased the Large Appliances from Croma. Please state the reasons of purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("product_from_croma_appliance.xml",'N',"product_from_croma_appliance","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>

    <div class="content2" id="not_purchase_reason_appliance">

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend Large Appliances (Refrigerator,AC,Washing Machine ) you made a purcchese from to a friend or colleage ?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not Likely at all recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align:right;color:#626262!important;">Extremely Likely</span></td>
          </tr>
          <tr>
            <td style="width:18%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_10" value="10"></td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending ?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="appliance_not_recommending" id="appliance_not_recommending" value=""  >
          </div>
      </div>
      <span class="content2_l1_span">You mentioned you have not purchased the Large Appliances from Croma.Please state the reasons for not purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_from_croma_appliance.xml",'N',"not_purchase_from_croma_appliance","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>
  <a onClick="return validate();" class="submit_btn" id="fp_submit" href="javascript:void(0);" style="display:none;"></a>
</form>
</body>
</html>
