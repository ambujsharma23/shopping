<?php
require("config.php");
require("../survey/assets/lib/htmlfunction.php");
//print_r($_SESSION);
//exit;
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
<style>
.reason_for_not_purchasing_from_chroma {
    width: 213px !important;
}
.style_dd.select_shop {
    width: 215px !important;
}

.visted_chroma {
    border-bottom: 1px solid rgb(221, 221, 221);
    margin: 3px;
    padding: 5px 0;
}
.content2 {
    margin-bottom: 8px;
    padding-bottom: 5px;
}

</style>
<script type="text/javascript">
  function addPurchaseVisitedPanel(product, store, counter) {
    var htmlData = '<div class="content2 ex_visited" id="purchase_reason_both_'+product+'_'+counter+'">';
      htmlData += '<div class="content2_l1" style="width:995px;">';
     
      htmlData += '<span class="content2_l1_span">You said that you have visited <u>'+store+'</u> store before making the purchase. How likely are you to recommend this store to a friend or colleague.?</span>';
      htmlData += '<div style="clear:both;"></div>';
      htmlData += '  <table width="100%">';
      htmlData += '    <tr>';
      htmlData += '      <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>';
      htmlData += '      <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>';
      htmlData += '    </tr>';
      htmlData += '    <tr style="text-align: center; width: 65%;  margin: 0px auto;">';
      htmlData += '      <td style="width:12%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new1_'+store+'" value="1"></td>';
      htmlData += '      <td style="width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new2_'+store+'" value="1"></td>';
      htmlData += '      <td style="width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new3_'+store+'" value="3"></td>';
      htmlData += '      <td style="width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new4_'+store+'" value="4"></td>';
      htmlData += '      <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new5_'+store+'" value="5"></td>';
      htmlData += '      <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new6_'+store+'" value="6"></td>';
      htmlData += '      <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new7_'+store+'" value="7"></td>';
      htmlData += '      <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new8_'+store+'" value="8"></td>';
      htmlData += '      <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new9_'+store+'" value="9"></td>';
      htmlData += '      <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" class="visited_radio" name="'+product+'_visited_radio_'+counter+'" id="'+product+'_likely_to_recommend_new10_'+store+'" value="10"></td>';
      htmlData += '    </tr>';
      htmlData += '<tr style="text-align: center; width: 65%;  margin: 0px auto;">';
      htmlData += '<td style="width:11%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_1" value="1">1</td>';
      htmlData += '<td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_2" value="1"></td>';
      htmlData += '<td style="width:10%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_3" value="3"></td>';
      htmlData += '<td style="width:10%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_4" value="4"></td>';
      htmlData += '<td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_5" value="5">5</td>';
      htmlData += '<td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_6" value="6"></td>';
      htmlData += '<td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_7" value="7"></td>';
      htmlData += '<td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" value="8" id="tablet_likely_to_recommend_8" name="tablet_likely_to_recommend"></td>';
      htmlData += '<td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_9" value="9"></td>';
      htmlData += '<td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_10" value="10">10</td>';
      htmlData += '</tr>';
      htmlData += '  </table>';
      htmlData += '</div>';
      htmlData += '<div style="clear:both;"></div>';
      htmlData += '<div class="content2_l1" style="width: 995px;">';
      htmlData += '  <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>';
      htmlData += '    <div style="float:left;margin-right: 20px;"><input type="text" class="visited_text" name="'+product+'_visited_text_'+counter+'" id="'+product+'_recommending_'+store+'" value="" />';
      htmlData += '  </div>';
      htmlData += '</div>';
      htmlData += '</div>';

    $("#panel_"+product).append(htmlData);
  }
</script>
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
  //rt
  $("#personel_care_div").hide();


  $("#visit_tablet_div").hide();
  $("#visit_laptop_div").hide();
  $("#visit_mobile_div").hide();
  $("#visit_tv_div").hide();
  $("#visit_kitchen_div").hide();
  $("#visit_large_appliance_div").hide();
  //rt
  $("#visit_personel_care_div").hide();

  //$("#first_three").hide();
  //$("#second_three").hide();
  $("#purchase_reason_tablet").hide();

  $("#purchase_reason_tablet_both").hide();

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
  //rt
  $("#purchase_reason_personel_care").hide();
  $("#not_purchase_reason_personel_care").hide();
  $("#purchase_reason_for_offline_personel_care").hide();
  $("#purchase_reason_for_online_personel_care").hide();
  $("#not_purchase_reason_for_chroma_both_personel_care").hide();
  $("#visited_chroma_but_not_purchased_personel_care").hide();

  $("#purchase_reason_for_ofline_appliance").hide();
  $("#purchase_reason_for_online_appliance").hide();
  $("#not_purchase_reason_for_chroma_both_appliance").hide();
  $("#visited_chroma_but_not_purchased_appliance").hide();

  $("#purchase_reason_for_offline_tv").hide();
  $("#purchase_reason_for_online_tv").hide();
  $("#not_purchase_reason_for_chroma_both_tv").hide();
  $("#visited_chroma_but_not_purchased_tv").hide();

  $("#purchase_reason_for_offline_mobile").hide();
  $("#purchase_reason_for_online_mobile").hide();
  $("#not_purchase_reason_for_chroma_both_mobile").hide();
  $("#visited_chroma_but_not_purchased_mobile").hide();


  $("#purchase_reason_for_offline_kitchen").hide();
  $("#purchase_reason_for_online_kitchen").hide();
  $("#not_purchase_reason_for_chroma_both_kitchen").hide();
  $("#visited_chroma_but_not_purchased_kitchen").hide();


  $("#purchase_reason_for_offline_laptop").hide();
  $("#purchase_reason_for_online_laptop").hide();
  $("#not_purchase_reason_for_chroma_both_laptop").hide();
  $("#visited_chroma_but_not_purchased_laptop").hide();
  
  $("#purchase_reason_for_offline_tablet").hide();
  $("#purchase_reason_for_online_tablet").hide();
  $("#not_purchase_reason_for_chroma_both_tablet").hide();
  $("#visited_chroma_but_not_purchased_tablet").hide();
  
  
  //rt

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

    if($('#product_brought_1').is(":checked") || $('#product_brought_2').is(":checked") || $('#product_brought_3').is(":checked") || $('#product_brought_4').is(":checked") || $('#product_brought_5').is(":checked") || $('#product_brought_6').is(":checked")|| $('#product_brought_9').is(":checked") ){
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

    //19march16// //personel care//
   $("#product_brought_9").click(function(){
      if($('#product_brought_9').is(":checked")){
        $("#purchase_personel_care").prop('selectedIndex', 0);
        $("#personel_care_store_1").prop('selectedIndex', 0);
        $("#personel_care_store_2").prop('selectedIndex', 0);
        $("#personel_care_store_3").prop('selectedIndex', 0);
        $("#personel_care_div").show();
        $("#visit_personel_care_div").show();
      }else {
        //$("#purchase_personel_care").prop('selectedIndex', 0);
        $("#personel_care_div").hide();
        $("#visit_personel_care_div").hide();
      }
    });
    //end 19march16//

    //* start code for tablet rtt *// 
  //for visted and purchased dynamic products//
  ////04-01-16//
  //  tablet store updated list
  //purchase_tablet
  $("select[name^=tablet_store_]").change(function(){
    $("#purchase_tablet").html('<option value="">From where did you purchase it - Tablet</option>');        
    $("select[name^=tablet_store_]").each(function() {
      var optVal = '';
      var dta = $(this).val();
      var dtav = $(this).find("option:selected").text();      

      if(dta!= 0 && dta!= 17 && dta!= 98){  
      var tdat = '<option value="'+dta+'">'+dtav+'</option>';  
        optVal = optVal+tdat;
      }
      
      $("#purchase_tablet").append(optVal);
    });
  });
  
  //purchase_mobile
  $("select[name^=mobile_store_]").change(function(){
    $("#purchase_mobile").html('<option value="">From where did you purchase it - Mobile</option>');        
    $("select[name^=mobile_store_]").each(function() {
      var optVal = '';
      var dta = $(this).val();
      var dtav = $(this).find("option:selected").text();      

      if(dta!= 0 && dta!= 17 && dta!= 98){   
      var tdat = '<option value="'+dta+'">'+dtav+'</option>';  
        optVal = optVal+tdat;
      }
      
      $("#purchase_mobile").append(optVal);
    });
  });
  //large_appliance
  $("select[name^=large_appliance_store_]").change(function(){
    $("#purchase_appliances").html('<option value="">From where did you purchase it - Appliances</option>');        
    $("select[name^=large_appliance_store_]").each(function() {
      var optVal = '';
      var dta = $(this).val();
      var dtav = $(this).find("option:selected").text();      

      if(dta!= 0 && dta!= 17 && dta!= 98){  
      var tdat = '<option value="'+dta+'">'+dtav+'</option>';  
        optVal = optVal+tdat;
      }
      
      $("#purchase_appliances").append(optVal);
    });
  });
  
  //purchase_laptop
  $("select[name^=laptop_store_]").change(function(){
    $("#purchase_laptop").html('<option value="">From where did you purchase it - Laptop</option>');        
    $("select[name^=laptop_store_]").each(function() {
      var optVal = '';
      var dta = $(this).val();
      var dtav = $(this).find("option:selected").text();      

      if(dta!= 0 && dta!= 17 && dta!= 98){   
      var tdat = '<option value="'+dta+'">'+dtav+'</option>';  
        optVal = optVal+tdat;
      }
      
      $("#purchase_laptop").append(optVal);
    });
  }); 
  
  //purchase_kitchen_product
  $("select[name^=kitchen_store_]").change(function(){
    $("#purchase_kitchen_product").html('<option value="">From where did you purchase it - Kitchen Appliances</option>');         
    $("select[name^=kitchen_store_]").each(function() {
      var optVal = '';
      var dta = $(this).val();
      var dtav = $(this).find("option:selected").text();      

      if(dta!= 0 && dta!= 17 && dta!= 98){  
      var tdat = '<option value="'+dta+'">'+dtav+'</option>';  
        optVal = optVal+tdat;
      }
      
      $("#purchase_kitchen_product").append(optVal);
    });
  }); 
  //purchase_tv
  $("select[name^=tv_store_]").change(function(){
    $("#purchase_tv").html('<option value="">From where did you purchase it - Television</option>');        
    $("select[name^=tv_store_]").each(function() {
      var optVal = '';
      var dta = $(this).val();
      var dtav = $(this).find("option:selected").text();      

      if(dta!= 0 && dta!= 17 && dta!= 98){   
      var tdat = '<option value="'+dta+'">'+dtav+'</option>';  
        optVal = optVal+tdat;
      }
      
      $("#purchase_tv").append(optVal);
    });
  }); 
      

 //19march16//
//personel_care//
//personel_care_store_1
  $("select[name^=personel_care_store_]").change(function(){
    $("#purchase_personel_care").html('<option value="">From where did you purchase it - Personel care Appliances</option>');        
    $("select[name^=personel_care_store_]").each(function() {
      var optVal = '';
      var dta = $(this).val();
      var dtav = $(this).find("option:selected").text();      

      if(dta!= 0 && dta!= 17 && dta!= 98){   
      var tdat = '<option value="'+dta+'">'+dtav+'</option>';  
        optVal = optVal+tdat;
      }
      
      $("#purchase_personel_care").append(optVal);
    });
  });

////end 04-01-16//


    //  Visited n Purchased Matrix
    //  FOR TABLET VISITED
    $("select[name^=tablet_store_]").change(function() {
      $("#visited_croma_tablet").hide();
      $("#non_visited_croma_tablet").hide();
      var non_visited = false;
      var yes_visited = false;
      $("select[name^=tablet_store_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          //alert('here');
          if(!checkPurchased('purchase_tablet')) {
            $("#visited_croma_tablet").toggle();

            yes_visited = true
          }
        }
        else {
          if(!checkPurchased('purchase_tablet')) {
            //$("#non_visited_croma_tablet").toggle();
            non_visited = true;
          }
        }
      });

      if(yes_visited) {
        $("#visited_croma_tablet").show();
      }
      else {
        $("#non_visited_croma_tablet").show();
      }
    });

    function checkVisited(visitedName) {
      var visited = false;
      $("select[name^="+visitedName+"_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 12) {
          visited = true;
        }
      });

      return visited;
    }

    function checkPurchased(purchaseId) {
      var purchased = false;
      if($("#"+purchaseId+" option:selected").val() == 2 || $("#"+purchaseId+" option:selected").val() == 12) {
        purchased = true;
      }

      return purchased;
    }    
/*  tablet end code rtt  */


//for laptop//

//* start code for laptop rtt *// 

    //  Visited n Purchased Matrix
    //  FOR laptop VISITED
    $("select[name^=laptop_store_]").change(function() {
      $("#visited_croma_laptop").hide();
      $("#non_visited_croma_laptop").hide();
      var non_visited = false;
      var yes_visited = false;
      $("select[name^=laptop_store_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          //alert('here');
          if(!checkPurchased('purchase_laptop')) {
            $("#visited_croma_laptop").toggle();

            yes_visited = true
          }
        }
        else {
          if(!checkPurchased('purchase_laptop')) {
            //$("#non_visited_croma_tablet").toggle();
            non_visited = true;
          }
        }
      });

      if(yes_visited) {
        $("#visited_croma_laptop").show();
      }
      else {
        $("#non_visited_croma_laptop").show();
      }
    });

    
/*  laptop end code rtt  */

///end for laptop//

//mobile/
//* start code for mobile rtt *// 

    //  Visited n Purchased Matrix
    //  FOR mobile VISITED
    $("select[name^=mobile_store_]").change(function() {
      $("#visited_croma_mobile").hide();
      $("#non_visited_croma_mobile").hide();
      var non_visited = false;
      var yes_visited = false;
      $("select[name^=mobile_store_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          //alert('here');
          if(!checkPurchased('purchase_mobile')) {
            $("#visited_croma_mobile").toggle();

            yes_visited = true
          }
        }
        else {
          if(!checkPurchased('purchase_mobile')) {
            //$("#non_visited_croma_tablet").toggle();
            non_visited = true;
          }
        }
      });

      if(yes_visited) {
        $("#visited_croma_mobile").show();
      }
      else {
        $("#non_visited_croma_mobile").show();
      }
    });

   
//end mobile//

//kitchen app//
    //  Visited n Purchased Matrix
    //  FOR TABLET VISITED
    $("select[name^=kitchen_store_]").change(function() {
      $("#visited_croma_kitchen").hide();
      $("#non_visited_croma_kitchen").hide();
      var non_visited = false;
      var yes_visited = false;
      $("select[name^=kitchen_store_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          //alert('here');
          if(!checkPurchased('purchase_kitchen')) {
            $("#visited_croma_kitchen").toggle();

            yes_visited = true
          }
        }
        else {
          if(!checkPurchased('purchase_kitchen')) {
            //$("#non_visited_croma_tablet").toggle();
            non_visited = true;
          }
        }
      });

      if(yes_visited) {
        $("#visited_croma_kitchen").show();
      }
      else {
        $("#non_visited_croma_kitchen").show();
      }
    });

    ////

    //start tv//
//* start code for tv rtt *// 

    //  Visited n Purchased Matrix
    //  FOR tv VISITED
    $("select[name^=tv_store_]").change(function() {
      $("#visited_croma_tv").hide();
      $("#non_visited_croma_tv").hide();
      var non_visited = false;
      var yes_visited = false;
      $("select[name^=tv_store_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          //alert('here');
          if(!checkPurchased('purchase_tv')) {
            $("#visited_croma_tv").toggle();

            yes_visited = true
          }
        }
        else {
          if(!checkPurchased('purchase_tv')) {
            //$("#non_visited_croma_tablet").toggle();
            non_visited = true;
          }
        }
      });

      if(yes_visited) {
        $("#visited_croma_tv").show();
      }
      else {
        $("#non_visited_croma_tv").show();
      }
    });
    //end tv//

    ////start large_appliance_//
        //  Visited n Purchased Matrix
    //  FOR TABLET VISITED
    $("select[name^=large_appliance_store_]").change(function() {
      $("#visited_croma_large_appliance").hide();
      $("#non_visited_croma_large_appliance").hide();
      var non_visited = false;
      var yes_visited = false;
      $("select[name^=large_appliance_store_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          //alert('here');
          if(!checkPurchased('purchase_appliances')) {
            $("#visited_croma_large_appliance").toggle();

            yes_visited = true
          }
        }
        else {
          if(!checkPurchased('purchase_appliances')) {
            //$("#non_visited_croma_tablet").toggle();
            non_visited = true;
          }
        }
      });

      if(yes_visited) {
        $("#visited_croma_large_appliance").show();
      }
      else {
        $("#non_visited_croma_large_appliance").show();
      }
    });

    function checkVisited(visitedName) {
      var visited = false;
      $("select[name^="+visitedName+"_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 12) {
          visited = true;
        }
      });

      return visited;
    }

    function checkPurchased(purchaseId) {
      var purchased = false;
      if($("#"+purchaseId+" option:selected").val() == 2 || $("#"+purchaseId+" option:selected").val() == 12) {
        purchased = true;
      }

      return purchased;
    }    

    ///end large_appliance_//


//19march16//

 ////start personel_care//
        //  Visited n Purchased Matrix
    //  FOR TABLET VISITED
    //personel_care_store_1
    $("select[name^=personel_care_store_]").change(function() {
      $("#visited_croma_personel_care").hide();
      $("#non_visited_croma_personel_care").hide();
      var non_visited = false;
      var yes_visited = false;
      $("select[name^=personel_care_store_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          //alert('here');
          if(!checkPurchased('purchase_personel_care')) {
            $("#visited_croma_personel_care").toggle();

            yes_visited = true
          }
        }
        else {
          if(!checkPurchased('purchase_personel_care')) {
            //$("#non_visited_croma_tablet").toggle();
            non_visited = true;
          }
        }
      });

      if(yes_visited) {
        $("#visited_croma_personel_care").show();
      }
      else {
        $("#non_visited_croma_personel_care").show();
      }
    });

    function checkVisited(visitedName) {
      var visited = false;
      $("select[name^="+visitedName+"_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 12) {
          visited = true;
        }
      });

      return visited;
    }

    function checkPurchased(purchaseId) {
      var purchased = false;
      if($("#"+purchaseId+" option:selected").val() == 2 || $("#"+purchaseId+" option:selected").val() == 12) {
        purchased = true;
      }

      return purchased;
    }    

    ///end personel_care//
//19march16 end//

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
          $("#purchase_reason_tablet_both").show();
        }
        else {
          $("#not_purchase_reason_tablet").show();
          $("#purchase_reason_tablet").hide();
          $("#purchase_reason_tablet_both").hide();

          $("#visited_croma_tablet").hide();
          $("#non_visited_croma_tablet").hide();
          if(checkVisited('tablet_store')) {
            $("#visited_croma_tablet").show();
          }
          else {
            $("#non_visited_croma_tablet").show();
          }
        }

        $("#tablet_value").text($("#purchase_tablet").find('option:selected').text());
        $("#tablet_value1").text($("#purchase_tablet").find('option:selected').text());
        $("#tablet_value2").text($("#purchase_tablet").find('option:selected').text());
        $("#tablet_value3").text($("#purchase_tablet").find('option:selected').text());

        // 10TH May 16 //
        // FOR ONLY VISITED SECTION TABLET//
        var selectedVal = $(this).val();
        var selectedId = $(this).attr('id');
        idTextArr = selectedId.split('_');
        var product = idTextArr[1];

        $("#panel_"+product).html('');

        var counter = 1;
        $("#"+selectedId).find("option").each(function() {
          if(($(this).val() != '') && ($(this).val() != selectedVal)) {
            //alert($(this).text()+':'+$(this).val());
            
            var store = $(this).text();
            addPurchaseVisitedPanel(product, store, counter);

            counter++;
          }
        });
        // End 10th May //
    });
    
    

    $("#purchase_laptop").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_laptop").show();
          $("#not_purchase_reason_laptop").hide();
        }else {
          $("#not_purchase_reason_laptop").show();
          $("#purchase_reason_laptop").hide();

           $("#visited_croma_laptop").hide();
          $("#non_visited_croma_laptop").hide();
          if(checkVisited('laptop_store')) {            
            $("#visited_croma_laptop").show();
            }
          else {
            $("#non_visited_croma_laptop").show();
          }

      }

        $("#laptop_value").text($("#purchase_laptop").find('option:selected').text());
        $("#laptop_value1").text($("#purchase_laptop").find('option:selected').text());
        $("#laptop_value2").text($("#purchase_laptop").find('option:selected').text());
        $("#laptop_value3").text($("#purchase_laptop").find('option:selected').text());

        // 10TH May 16 //
        // FOR ONLY VISITED SECTION LAPTOP//
        var selectedVal = $(this).val();
        var selectedId = $(this).attr('id');
        idTextArr = selectedId.split('_');
        var product = idTextArr[1];

        var counter = 1;
        $("#panel_"+product).html('');
        $("#"+selectedId).find("option").each(function() {
          if(($(this).val() != '') && ($(this).val() != selectedVal)) {
            //alert($(this).text()+':'+$(this).val());
            
            var store = $(this).text();
            addPurchaseVisitedPanel(product, store, counter);
             counter++;

          }
        });
        // End 10th May //
    });

    $("#purchase_kitchen_product").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_kitchen").show();
          $("#not_purchase_reason_kitchen").hide();

          $("#visited_croma_kitchen").hide();
          $("#non_visited_croma_kitchen").hide();
            if(checkVisited('kitchen_store')){
            $("#visited_croma_kitchen").show();
            }
          else {
            $("#non_visited_croma_kitchen").show();
          }

        }else {
          $("#not_purchase_reason_kitchen").show();
          $("#purchase_reason_kitchen").hide();
        }

        $("#kitchen_value").text($("#purchase_kitchen_product").find('option:selected').text());
        $("#kitchen_value1").text($("#purchase_kitchen_product").find('option:selected').text());
        $("#kitchen_value2").text($("#purchase_kitchen_product").find('option:selected').text());
        $("#kitchen_value3").text($("#purchase_kitchen_product").find('option:selected').text());

        // 10TH May 16 //
        // FOR ONLY VISITED SECTION purchase_kitchen_product// 
        var selectedVal = $(this).val();
        var selectedId = $(this).attr('id');
        var product = 'kitchen_product';
        /*idTextArr = selectedId.split('_');
        var product = idTextArr[1]+idTextArr[2];*/

        var counter = 1;
        $("#panel_"+product).html('');
        $("#"+selectedId).find("option").each(function() {
          if(($(this).val() != '') && ($(this).val() != selectedVal)) {
            //alert($(this).text()+':'+$(this).val());
            
            var store = $(this).text();
            addPurchaseVisitedPanel(product, store,counter);
            counter++;
          }
        });
        // End 10th May //

    });
    $("#purchase_mobile").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_mobile").show();
          $("#not_purchase_reason_mobile").hide();
        }else {
          $("#not_purchase_reason_mobile").show();
          $("#purchase_reason_mobile").hide();

          $("#visited_croma_mobile").hide();
          $("#non_visited_croma_mobile").hide();
            if(checkVisited('mobile_store')){
            $("#visited_croma_mobile").show();
            }
          else {
            $("#non_visited_croma_mobile").show();
          }

        }

        $("#mobile_value").text($("#purchase_mobile").find('option:selected').text());
        $("#mobile_value1").text($("#purchase_mobile").find('option:selected').text());
        $("#mobile_value2").text($("#purchase_mobile").find('option:selected').text());
        $("#mobile_value3").text($("#purchase_mobile").find('option:selected').text());

         // 10TH May 16 //
        // FOR ONLY VISITED SECTION MOBILE//
        var selectedVal = $(this).val();
        var selectedId = $(this).attr('id');
        idTextArr = selectedId.split('_');
        var product = idTextArr[1];

        var counter = 1;
        $("#panel_"+product).html('');
        $("#"+selectedId).find("option").each(function() {
          if(($(this).val() != '') && ($(this).val() != selectedVal)) {
            //alert($(this).text()+':'+$(this).val());
            
            var store = $(this).text();
            addPurchaseVisitedPanel(product, store,counter);
            counter++;
          }
        });
        // End 10th May //

    });
    $("#purchase_tv").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_tv").show();
          $("#not_purchase_reason_tv").hide();
        }else {
          $("#not_purchase_reason_tv").show();
          $("#purchase_reason_tv").hide();

          $("#visited_croma_tv").hide();
          $("#non_visited_croma_tv").hide();
            if(checkVisited('tv_store')){
            $("#visited_croma_tv").show();
            }
          else {
            $("#non_visited_croma_tv").show();
          }

        }

        $("#tv_value").text($("#purchase_tv").find('option:selected').text());
        $("#tv_value1").text($("#purchase_tv").find('option:selected').text());
        $("#tv_value2").text($("#purchase_tv").find('option:selected').text());
        $("#tv_value3").text($("#purchase_tv").find('option:selected').text());

         // 10TH May 16 //
        // FOR ONLY VISITED SECTION TV//
        var selectedVal = $(this).val();
        var selectedId = $(this).attr('id');
        idTextArr = selectedId.split('_');
        var product = idTextArr[1];

        var counter = 1;
        $("#panel_"+product).html('');
        $("#"+selectedId).find("option").each(function() {
          if(($(this).val() != '') && ($(this).val() != selectedVal)) {
            //alert($(this).text()+':'+$(this).val());
            
            var store = $(this).text();
            addPurchaseVisitedPanel(product, store,counter);
            counter++;
          }
        });
        // End 10th May //
    });

    $("#purchase_appliances").change(function(){
        if($(this).val()=='2' || $(this).val()=='12'){
          $("#purchase_reason_appliance").show();
          $("#not_purchase_reason_appliance").hide();
        }else {
          $("#not_purchase_reason_appliance").show();
          $("#purchase_reason_appliance").hide();

          $("#visited_croma_large_appliance").hide();
          $("#non_visited_croma_large_appliance").hide();
            if(checkVisited('large_appliance_store')){
            $("#visited_croma_large_appliance").show();
            }
          else {
            $("#non_visited_croma_large_appliance").show();
          }
        }

        $("#appliances_value").text($("#purchase_appliances").find('option:selected').text());
        $("#appliances_value1").text($("#purchase_appliances").find('option:selected').text());
        $("#appliances_value2").text($("#purchase_appliances").find('option:selected').text());
        $("#appliances_value3").text($("#purchase_appliances").find('option:selected').text());

         // 10TH May 16 //
        // FOR ONLY VISITED SECTION Appliances//
        var selectedVal = $(this).val();
        var selectedId = $(this).attr('id');
        idTextArr = selectedId.split('_');
        var product = idTextArr[1];

        var counter = 1;
        $("#panel_"+product).html('');
        $("#"+selectedId).find("option").each(function() {
          if(($(this).val() != '') && ($(this).val() != selectedVal)) {
            //alert($(this).text()+':'+$(this).val());
            
            var store = $(this).text();
            addPurchaseVisitedPanel(product, store, counter);
            counter++;
          }
        });
        // End 10th May //

    });

    //19march16// personel care//
        $("#purchase_personel_care").change(function(){
        if($(this).val()=='2' || $(this).val()=='13'){
          $("#purchase_reason_personel_care").show();
          $("#not_purchase_reason_personel_care").hide();
        }else {
          $("#not_purchase_reason_personel_care").show();
          $("#purchase_reason_personel_care").hide();

          $("#visit_personel_care_div").hide();
          $("#non_visited_croma_personel_care").hide();
            if(checkVisited('personel_care_store')){
            $("#visited_croma_personel_care").show();
            }
          else {
            $("#non_visited_croma_personel_care").show();
          }
        }

        $("#personel_care_value").text($("#purchase_personel_care").find('option:selected').text());
        $("#personel_care_value1").text($("#purchase_personel_care").find('option:selected').text());
        $("#personel_care_value2").text($("#purchase_personel_care").find('option:selected').text());
        $("#personel_care_value3").text($("#purchase_personel_care").find('option:selected').text());


        // 10TH May 16 //
        // FOR ONLY VISITED SECTION purchase_kitchen_product// 
        var selectedVal = $(this).val();
        var selectedId = $(this).attr('id');
        var product = 'personel_care';
        /*idTextArr = selectedId.split('_');
        var product = idTextArr[1]+idTextArr[2];*/

        var counter = 1;
        $("#panel_"+product).html('');
        $("#"+selectedId).find("option").each(function() {
          if(($(this).val() != '') && ($(this).val() != selectedVal)) {
            //alert($(this).text()+':'+$(this).val());
            
            var store = $(this).text();
            addPurchaseVisitedPanel(product, store, counter);
            counter++;
          }
        });
        // End 10th May //

    });

//**start tablet reason**//
  //21march16// 
    //tablet offline products reason//
        $("#purchase_tablet").change(function(){
         // if($(this).val()=='2' ) {
       if($(this).val()=='2' || $(this).val()=='1' || $(this).val()=='3' || $(this).val()=='4' || $(this).val()=='5' || $(this).val()=='6' || $(this).val()=='9'|| $(this).val()=='10' || $(this).val()=='15'){
          $("#purchase_reason_for_offline_tablet").show();
         // $("#not_purchase_reason_personel_care").hide();
        }else {
         // $("#not_purchase_reason_personel_care").show();
          $("#purchase_reason_for_offline_tablet").hide();
       }          
    });
//end tablet offline products reason//     

 //tablet online products reason//
        $("#purchase_tablet").change(function(){        
       if($(this).val()=='7' || $(this).val()=='8' || $(this).val()=='12' || $(this).val()=='11' || $(this).val()=='19'){
          $("#purchase_reason_for_online_tablet").show();         
        }else {         
          $("#purchase_reason_for_online_tablet").hide();
       }          
    });
//end tablet online products reason// 

 function checkVisitedExt(visitedName) {
      var visited = false;
      $("select[name^="+visitedName+"_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          visited = true;
        }
      });

      return visited;
    }
 //tablet chroma both not purchase products reason//
      $("#purchase_tablet").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#not_purchase_reason_for_chroma_both_tablet").hide();  
          $("#visited_chroma_but_not_purchased_tablet").hide(); 

        }else {        
          if(checkVisitedExt('tablet_store') == true){
 
            $("#visited_chroma_but_not_purchased_tablet").show();
          }else{
               $("#not_purchase_reason_for_chroma_both_tablet").show();
             }
          //$("#visited_chroma_but_not_purchased_tablet").hide();
       }          
    });
//end tablet  chroma both not purchase products reason// 
 
//end tablet reason

//start laptop reason
  //21march16// 
    //laptop offline products reason//
        $("#purchase_laptop").change(function(){
         // if($(this).val()=='2' ) {
       if($(this).val()=='2' || $(this).val()=='1' || $(this).val()=='3' || $(this).val()=='4' || $(this).val()=='5' || $(this).val()=='6' || $(this).val()=='9'|| $(this).val()=='10' || $(this).val()=='15'){
          $("#purchase_reason_for_offline_laptop").show();
         // $("#not_purchase_reason_personel_care").hide();
        }else {
         // $("#not_purchase_reason_personel_care").show();
          $("#purchase_reason_for_offline_laptop").hide();
       }          
    });
//end laptop offline products reason//     

 //laptop online products reason//
        $("#purchase_laptop").change(function(){        
       if($(this).val()=='7' || $(this).val()=='8' || $(this).val()=='12' || $(this).val()=='11' || $(this).val()=='19'){
          $("#purchase_reason_for_online_laptop").show();         
        }else {         
          $("#purchase_reason_for_online_laptop").hide();
       }          
    });
//end laptop online products reason// 

 //laptop chroma both not purchase products reason//
      $("#purchase_laptop").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#not_purchase_reason_for_chroma_both_laptop").hide();  
          $("#visited_chroma_but_not_purchased_laptop").hide(); 

        }else {        
          if(checkVisitedExt('laptop_store') == true){
 
            $("#visited_chroma_but_not_purchased_laptop").show();
          }else{
               $("#not_purchase_reason_for_chroma_both_laptop").show();
             }
          //$("#visited_chroma_but_not_purchased_tablet").hide();
       }          
    });
//end laptop  chroma both not purchase products reason// 
 
//laptop chroma visited but not purchase products reason// {
 /*     $("#purchase_laptop").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#visited_chroma_but_not_purchased_laptop").hide();         
        }else {         
          $("#visited_chroma_but_not_purchased_laptop").show();
       }          
    });*/
//end laptop chroma visited but not purchase products reason// 

//end laptop reason

//start kitchen reason
  //21march16// 
    //kitchen offline products reason//
        $("#purchase_kitchen_product").change(function(){
         // if($(this).val()=='2' ) {
       if($(this).val()=='2' || $(this).val()=='1' || $(this).val()=='3' || $(this).val()=='4' || $(this).val()=='5' || $(this).val()=='6' || $(this).val()=='9'|| $(this).val()=='10' || $(this).val()=='15'){
          $("#purchase_reason_for_offline_kitchen").show();
         // $("#not_purchase_reason_personel_care").hide();
        }else {
         // $("#not_purchase_reason_personel_care").show();
          $("#purchase_reason_for_offline_kitchen").hide();
       }          
    });
//end kitchen offline products reason//     

 //kitchen online products reason//
        $("#purchase_kitchen_product").change(function(){        
       if($(this).val()=='7' || $(this).val()=='8' || $(this).val()=='12' || $(this).val()=='11' || $(this).val()=='19'){
          $("#purchase_reason_for_online_kitchen").show();         
        }else {         
          $("#purchase_reason_for_online_kitchen").hide();
       }          
    });
//end kitchen online products reason// 

 //kitchen chroma both not purchase products reason// {
      $("#purchase_kitchen_product").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#not_purchase_reason_for_chroma_both_kitchen").hide();  
          $("#visited_chroma_but_not_purchased_kitchen").hide(); 

        }else {        
          if(checkVisitedExt('kitchen_store') == true){
 
            $("#visited_chroma_but_not_purchased_kitchen").show();
          }else{
               $("#not_purchase_reason_for_chroma_both_kitchen").show();
             }
          //$("#visited_chroma_but_not_purchased_tablet").hide();
       }          
    });
//end kitchen  chroma both not purchase products reason// 

//kitchen chroma visited but not purchase products reason// {
      /*$("#purchase_kitchen_product").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#visited_chroma_but_not_purchased_kitchen").hide();         
        }else {         
          $("#visited_chroma_but_not_purchased_kitchen").show();
       }          
    });*/
//end kitchen chroma visited but not purchase products reason// 
//end kitchen reason

//start mobile reason
  //21march16// 
    //mobile offline products reason//
        $("#purchase_mobile").change(function(){
         // if($(this).val()=='2' ) {
       if($(this).val()=='2' || $(this).val()=='1' || $(this).val()=='3' || $(this).val()=='4' || $(this).val()=='5' || $(this).val()=='6' || $(this).val()=='9'|| $(this).val()=='10' || $(this).val()=='15'){
          $("#purchase_reason_for_offline_mobile").show();
         // $("#not_purchase_reason_personel_care").hide();
        }else {
         // $("#not_purchase_reason_personel_care").show();
          $("#purchase_reason_for_offline_mobile").hide();
       }          
    });
//end mobile offline products reason//     

 //mobile online products reason//
        $("#purchase_mobile").change(function(){        
       if($(this).val()=='7' || $(this).val()=='8' || $(this).val()=='12' || $(this).val()=='11' || $(this).val()=='19'){
          $("#purchase_reason_for_online_mobile").show();         
        }else {         
          $("#purchase_reason_for_online_mobile").hide();
       }          
    });
//end mobile online products reason// 

 //mobile chroma both not purchase products reason// {
     $("#purchase_mobile").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#not_purchase_reason_for_chroma_both_mobile").hide();  
          $("#visited_chroma_but_not_purchased_mobile").hide(); 

        }else {        
          if(checkVisitedExt('mobile_store') == true){
 
            $("#visited_chroma_but_not_purchased_mobile").show();
          }else{
               $("#not_purchase_reason_for_chroma_both_mobile").show();
             }
          //$("#visited_chroma_but_not_purchased_tablet").hide();
       }          
    });
//end mobile  chroma both not purchase products reason// 

//mobile chroma visited but not purchase products reason// {
    /*  $("#purchase_mobile").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#visited_chroma_but_not_purchased_mobile").hide();         
        }else {         
          $("#visited_chroma_but_not_purchased_mobile").show();
       }          
    });*/
//end mobile chroma visited but not purchase products reason// 
//end mobile reason

//start tv reason
  //21march16// 
    //tv offline products reason//
        $("#purchase_tv").change(function(){
         // if($(this).val()=='2' ) {
       if($(this).val()=='2' || $(this).val()=='1' || $(this).val()=='3' || $(this).val()=='4' || $(this).val()=='5' || $(this).val()=='6' || $(this).val()=='9'|| $(this).val()=='10' || $(this).val()=='15'){
          $("#purchase_reason_for_offline_tv").show();
         // $("#not_purchase_reason_personel_care").hide();
        }else {
         // $("#not_purchase_reason_personel_care").show();
          $("#purchase_reason_for_offline_tv").hide();
       }          
    });
//end tv offline products reason//     

 //tv online products reason//
        $("#purchase_tv").change(function(){        
       if($(this).val()=='7' || $(this).val()=='8' || $(this).val()=='12' || $(this).val()=='11' || $(this).val()=='19'){
          $("#purchase_reason_for_online_tv").show();         
        }else {         
          $("#purchase_reason_for_online_tv").hide();
       }          
    });
//end tv online products reason// 

 //tv chroma both not purchase products reason// {
     $("#purchase_tv").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#not_purchase_reason_for_chroma_both_tv").hide();  
          $("#visited_chroma_but_not_purchased_tv").hide(); 

        }else {        
          if(checkVisitedExt('tv_store') == true){
 
            $("#visited_chroma_but_not_purchased_tv").show();
          }else{
               $("#not_purchase_reason_for_chroma_both_tv").show();
             }
          //$("#visited_chroma_but_not_purchased_tablet").hide();
       }          
    });
//end tv  chroma both not purchase products reason// 
//tv chroma visited but not purchase products reason// {
   /*   $("#purchase_tv").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#visited_chroma_but_not_purchased_tv").hide();         
        }else {         
          $("#visited_chroma_but_not_purchased_tv").show();
       }          
    });*/
//end tv chroma visited but not purchase products reason// 
//end tv reason

//appliances
  //21march16// 
    //appliances offline products reason//
        $("#purchase_appliances").change(function(){
         // if($(this).val()=='2' ) {
       if($(this).val()=='2' || $(this).val()=='1' || $(this).val()=='3' || $(this).val()=='4' || $(this).val()=='5' || $(this).val()=='6' || $(this).val()=='9'|| $(this).val()=='10' || $(this).val()=='15'){
          $("#purchase_reason_for_ofline_appliance").show();
         // $("#not_purchase_reason_personel_care").hide();
        }else {
         // $("#not_purchase_reason_personel_care").show();
          $("#purchase_reason_for_ofline_appliance").hide();
       }          
    });
//end appliances offline products reason//     

 //appliances online products reason//
        $("#purchase_appliances").change(function(){        
       if($(this).val()=='7' || $(this).val()=='8' || $(this).val()=='12' || $(this).val()=='11' || $(this).val()=='19'){
          $("#purchase_reason_for_online_appliance").show();         
        }else {         
          $("#purchase_reason_for_online_appliance").hide();
       }          
    });
//end appliances online products reason// 

 //applianceschroma both not purchase products reason// {
  $("#purchase_appliances").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#not_purchase_reason_for_chroma_both_appliance").hide();  
          $("#visited_chroma_but_not_purchased_appliance").hide(); 

        }else {        
          if(checkVisitedExt('appliance_store') == true){
 
            $("#visited_chroma_but_not_purchased_appliance").show();
          }else{
               $("#not_purchase_reason_for_chroma_both_appliance").show();
             }
          //$("#visited_chroma_but_not_purchased_tablet").hide();
       }          
    });
//end appliances  chroma both not purchase products reason// 

//appliance chroma visited but not purchase products reason// {
     /* $("#purchase_appliances").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#visited_chroma_but_not_purchased_appliance").hide();         
        }else {         
          $("#visited_chroma_but_not_purchased_appliance").show();
       }          
    });*/
//end appliance chroma visited but not purchase products reason// 


//end appliance reason

//start personel care reason//
  //21march16// 
    //personel care offline products reason//
        $("#purchase_personel_care").change(function(){
         // if($(this).val()=='2' ) {
       if($(this).val()=='2' || $(this).val()=='1' || $(this).val()=='3' || $(this).val()=='4' || $(this).val()=='5' || $(this).val()=='6' || $(this).val()=='9'|| $(this).val()=='10' || $(this).val()=='15'){
          $("#purchase_reason_for_offline_personel_care").show();
         // $("#not_purchase_reason_personel_care").hide();
        }else {
         // $("#not_purchase_reason_personel_care").show();
          $("#purchase_reason_for_offline_personel_care").hide();
       }          
    });
//end personel care offline products reason//     

 //personel care online products reason//
        $("#purchase_personel_care").change(function(){        
       if($(this).val()=='7' || $(this).val()=='8' || $(this).val()=='12' || $(this).val()=='11' || $(this).val()=='19'){
          $("#purchase_reason_for_online_personel_care").show();         
        }else {         
          $("#purchase_reason_for_online_personel_care").hide();
       }          
    });
//end personel care online products reason// 

 //personel care chroma both not purchase products reason// {
   $("#purchase_personel_care").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#not_purchase_reason_for_chroma_both_personel_care").hide();  
          $("#visited_chroma_but_not_purchased_personel_care").hide(); 

        }else {        
          if(checkVisitedExt('personel_care_store') == true){
 
            $("#visited_chroma_but_not_purchased_personel_care").show();
          }else{
               $("#not_purchase_reason_for_chroma_both_personel_care").show();
             }
          //$("#visited_chroma_but_not_purchased_tablet").hide();
       }          
    });//end personel care chroma both not purchase products reason// 

//pc chroma visited but not purchase products reason// {
     /* $("#purchase_personel_care").change(function(){   
      //alert($(this).val());     
       if($(this).val()=='2' || $(this).val()=='13'){
          $("#visited_chroma_but_not_purchased_personel_care").hide();         
        }else {         
          $("#visited_chroma_but_not_purchased_personel_care").show();
       }          
    });*/
//end pc chroma visited but not purchase products reason// 

//end 21march16// 

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


   //19march16//
   //personel care//
   $(".add_more_personel_care").click(function(){
     if($(this).html()=='+'){
       $("#three_more_personel_care").show();
       $(".personel_care_one").show();
       $(".add_more_personel_care_1").show();
       $(".remove_more_personel_care_1").show();
       $(".add_more_personel_care").hide();
     }
   });
   $(".add_more_personel_care_1").click(function(){
     if($(this).html()=='+'){
       $(".personel_care_two").show();
       $(".add_more_personel_care_1").hide();
       $(".remove_more_personel_care_1").hide();
       $(".add_more_personel_care_2").show();
       $(".remove_more_personel_care_2").show();

     }
   });
   $(".add_more_personel_care_2").click(function(){
     if($(this).html()=='+'){
       $(".personel_care_three").show();
       $(".remove_more_personel_care_3").show();
       $(".add_more_personel_care_1").hide();
       $(".remove_more_personel_care_1").hide();
       $(".add_more_personel_care_2").hide();
       $(".remove_more_personel_care_2").hide();
     }
   });
   $(".remove_more_personel_care_1").click(function(){
     if($(this).html()=='-'){
       $("#personel_care_store_4").prop('selectedIndex',0);
       $(".personel_care_one").hide();
       $(".add_more_personel_care_1").hide();
       $(".remove_more_personel_care_1").hide();
       $(".add_more_personel_care").show();
       $("#three_more_personel_care").hide();
     }
   });
   $(".remove_more_personel_care_2").click(function(){
     if($(this).html()=='-'){
       $("#personel_care_store_5").prop('selectedIndex',0);
       $(".personel_care_two").hide();
       $(".add_more_personel_care_2").hide();
       $(".remove_more_personel_care_2").hide();
       $(".add_more_personel_care_1").show();
       $(".remove_more_personel_care_1").show();
     }
   });
   $(".remove_more_personel_care_3").click(function(){
     if($(this).html()=='-'){
       $("#personel_care_store_6").prop('selectedIndex',0);
       $(".personel_care_three").hide();
       $(".remove_more_personel_care_3").hide();
       $(".add_more_personel_care_2").show();
       $(".remove_more_personel_care_2").show();
     }
   });
   //end 19march16

 
});
</script>

 
<script>
  //other text box reason//

  $(document).ready(function(){
    //other text for tablet//
    $("#purchase_reason_for_offline_tablet_10").click(function(){
      if($('#purchase_reason_for_offline_tablet_10').is(":checked")){
        $("#tablet_other1").val('');
        $("#tablet_other_div1").show();
      }
      else {
        $("#tablet_other_div1").hide();
        $("#tablet_other1").val('');
      }
    });

    $("#purchase_reason_for_online_tablet_9").click(function(){
      if($('#purchase_reason_for_online_tablet_9').is(":checked")){
        $("#tablet_other2").val('');
        $("#tablet_other_div2").show();
      }
      else {
        $("#tablet_other_div2").hide();
        $("#tablet_other2").val('');
      }
    });

    $("#not_purchase_reason_for_chroma_both_tablet_5").click(function(){
      if($('#not_purchase_reason_for_chroma_both_tablet_5').is(":checked")){
        $("#tablet_other3").val('');
        $("#tablet_other_div3").show();
      }
      else {
        $("#tablet_other_div3").hide();
        $("#tablet_other3").val('');
      }
    });

    $("#not_purchase_from_croma_tablet_8").click(function(){
      if($('#not_purchase_from_croma_tablet_8').is(":checked")){
        $("#tablet_other4").val('');
        $("#tablet_other_div4").show();
      }
      else {
        $("#tablet_other_div4").hide();
        $("#tablet_other4").val('');
      }
    });
    //end other text tablet//

//other text for laptop//
    $("#purchase_reason_for_offline_laptop_10").click(function(){
      if($('#purchase_reason_for_offline_laptop_10').is(":checked")){
        $("#laptop_other1").val('');
        $("#laptop_other_div1").show();
      }
      else {
        $("#laptop_other_div1").hide();
        $("#laptop_other1").val('');
      }
    });

    $("#purchase_reason_for_online_laptop_9").click(function(){
      if($('#purchase_reason_for_online_laptop_9').is(":checked")){
        $("#laptop_other2").val('');
        $("#laptop_other_div2").show();
      }
      else {
        $("#laptop_other_div2").hide();
        $("#laptop_other2").val('');
      }
    });

    $("#not_purchase_reason_for_chroma_both_laptop_5").click(function(){
      if($('#not_purchase_reason_for_chroma_both_laptop_5').is(":checked")){
        $("#laptop_other3").val('');
        $("#laptop_other_div3").show();
      }
      else {
        $("#laptop_other_div3").hide();
        $("#laptop_other3").val('');
      }
    });

    $("#not_purchase_from_croma_laptop_8").click(function(){
      if($('#not_purchase_from_croma_laptop_8').is(":checked")){
        $("#laptop_other4").val('');
        $("#laptop_other_div4").show();
      }
      else {
        $("#laptop_other_div4").hide();
        $("#laptop_other4").val('');
      }
    });
    //end other text laptop//

        //other text for kitchen//
    $("#purchase_reason_for_offline_kitchen_10").click(function(){
      if($('#purchase_reason_for_offline_kitchen_10').is(":checked")){
        $("#kitchen_other1").val('');
        $("#kitchen_other_div1").show();
      }
      else {
        $("#kitchen_other_div1").hide();
        $("#kitchen_other1").val('');
      }
    });

    $("#purchase_reason_for_online_kitchen_9").click(function(){
      if($('#purchase_reason_for_online_kitchen_9').is(":checked")){
        $("#kitchen_other2").val('');
        $("#kitchen_other_div2").show();
      }
      else {
        $("#kitchen_other_div2").hide();
        $("#kitchen_other2").val('');
      }
    });

    $("#not_purchase_reason_for_chroma_both_kitchen_5").click(function(){
      if($('#not_purchase_reason_for_chroma_both_kitchen_5').is(":checked")){
        $("#kitchen_other3").val('');
        $("#kitchen_other_div3").show();
      }
      else {
        $("#kitchen_other_div3").hide();
        $("#kitchen_other3").val('');
      }
    });

    $("#not_purchase_from_croma_kitchen_8").click(function(){
      if($('#not_purchase_from_croma_kitchen_8').is(":checked")){
        $("#kitchen_other4").val('');
        $("#kitchen_other_div4").show();
      }
      else {
        $("#kitchen_other_div4").hide();
        $("#kitchen_other4").val('');
      }
    });
    //end other text kitchen//

    //other text for mobile//
    $("#purchase_reason_for_offline_mobile_10").click(function(){
      if($('#purchase_reason_for_offline_mobile_10').is(":checked")){
        $("#mobile_other1").val('');
        $("#mobile_other_div1").show();
      }
      else {
        $("#mobile_other_div1").hide();
        $("#mobile_other1").val('');
      }
    });

    $("#purchase_reason_for_online_mobile_9").click(function(){
      if($('#purchase_reason_for_online_mobile_9').is(":checked")){
        $("#mobile_other2").val('');
        $("#mobile_other_div2").show();
      }
      else {
        $("#mobile_other_div2").hide();
        $("#mobile_other2").val('');
      }
    });

    $("#not_purchase_reason_for_chroma_both_mobile_5").click(function(){
      if($('#not_purchase_reason_for_chroma_both_mobile_5').is(":checked")){
        $("#mobile_other3").val('');
        $("#mobile_other_div3").show();
      }
      else {
        $("#mobile_other_div3").hide();
        $("#mobile_other3").val('');
      }
    });

    $("#not_purchase_from_croma_mobile_8").click(function(){
      if($('#not_purchase_from_croma_mobile_8').is(":checked")){
        $("#mobile_other4").val('');
        $("#mobile_other_div4").show();
      }
      else {
        $("#mobile_other_div4").hide();
        $("#mobile_other4").val('');
      }
    });
    //end other text mobile//

    //other text for tv//
    $("#purchase_reason_for_offline_tv_10").click(function(){
      if($('#purchase_reason_for_offline_tv_10').is(":checked")){
        $("#tv_other1").val('');
        $("#tv_other_div1").show();
      }
      else {
        $("#tv_other_div1").hide();
        $("#tv_other1").val('');
      }
    });

    $("#purchase_reason_for_online_tv_9").click(function(){
      if($('#purchase_reason_for_online_tv_9').is(":checked")){
        $("#tv_other2").val('');
        $("#tv_other_div2").show();
      }
      else {
        $("#tv_other_div2").hide();
        $("#tv_other2").val('');
      }
    });

    $("#not_purchase_reason_for_chroma_both_tv_5").click(function(){
      if($('#not_purchase_reason_for_chroma_both_tv_5').is(":checked")){
        $("#tv_other3").val('');
        $("#tv_other_div3").show();
      }
      else {
        $("#tv_other_div3").hide();
        $("#tv_other3").val('');
      }
    });

    $("#not_purchase_from_croma_tv_8").click(function(){
      if($('#not_purchase_from_croma_tv_8').is(":checked")){
        $("#tv_other4").val('');
        $("#tv_other_div4").show();
      }
      else {
        $("#tv_other_div4").hide();
        $("#tv_other4").val('');
      }
    });
    //end other text tv//

        //other text for appliance//
    $("#purchase_reason_for_offline_appliance_10").click(function(){
      if($('#purchase_reason_for_offline_appliance_10').is(":checked")){
        $("#appliance_other1").val('');
        $("#appliance_other_div1").show();
      }
      else {
        $("#appliance_other_div1").hide();
        $("#appliance_other1").val('');
      }
    });

    $("#purchase_reason_for_online_appliance_9").click(function(){
      if($('#purchase_reason_for_online_appliance_9').is(":checked")){
        $("#appliance_other2").val('');
        $("#appliance_other_div2").show();
      }
      else {
        $("#appliance_other_div2").hide();
        $("#appliance_other2").val('');
      }
    });

    $("#not_purchase_reason_for_chroma_both_appliance_5").click(function(){
      if($('#not_purchase_reason_for_chroma_both_appliance_5').is(":checked")){
        $("#appliance_other3").val('');
        $("#appliance_other_div3").show();
      }
      else {
        $("#appliance_other_div3").hide();
        $("#appliance_other3").val('');
      }
    });

    $("#not_purchase_from_croma_appliance_8").click(function(){
      if($('#not_purchase_from_croma_appliance_8').is(":checked")){
        $("#appliance_other4").val('');
        $("#appliance_other_div4").show();
      }
      else {
        $("#appliance_other_div4").hide();
        $("#appliance_other4").val('');
      }
    });
    //end other text appliance//

 
    //other text for personel_care//
    $("#purchase_reason_for_offline_personel_care_10").click(function(){
      if($('#purchase_reason_for_offline_personel_care_10').is(":checked")){
        $("#pc_other1").val('');
        $("#personel_care_other_div1").show();
      }
      else {
        $("#personel_care_other_div1").hide();
        $("#pc_other1").val('');
      }
    });

    $("#purchase_reason_for_online_personel_care_9").click(function(){
      if($('#purchase_reason_for_online_personel_care_9').is(":checked")){
        $("#pc_other2").val('');
        $("#personel_care_other_div2").show();
      }
      else {
        $("#personel_care_other_div2").hide();
        $("#pc_other2").val('');
      }
    });

    $("#not_purchase_reason_for_chroma_both_personel_care_5").click(function(){
      if($('#not_purchase_reason_for_chroma_both_personel_care_5').is(":checked")){
        $("#pc_other3").val('');
        $("#personel_care_other_div3").show();
      }
      else {
        $("#personel_care_other_div3").hide();
        $("#pc_other3").val('');
      }
    });

    $("#not_purchase_from_croma_personel_care_8").click(function(){
      if($('#not_purchase_from_croma_personel_care_8').is(":checked")){
        $("#pc_other4").val('');
        $("#personel_care_other_div4").show();
      }
      else {
        $("#personel_care_other_div4").hide();
        $("#pc_other4").val('');
      }
    });
    //end other text personel_care//


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
#purchase_kitchen_product,#purchase_tablet,#purchase_laptop,#purchase_appliances,#purchase_mobile,#purchase_tv,#purchase_personel_care{ width:312px !important;max-width:500px!important;}

#tablet_store_1,#tablet_store_2,#tablet_store_3,#tablet_store_4,#tablet_store_5,#tablet_store_6,#laptop_store_1,#laptop_store_2,#laptop_store_3,#laptop_store_4,#laptop_store_5,#laptop_store_6,#mobile_store_1,#mobile_store_2,#mobile_store_3,#mobile_store_4,#mobile_store_5,#mobile_store_6,#tv_store_1,#tv_store_2,#tv_store_3,#tv_store_4,#tv_store_5,#tv_store_6,#kitchen_store_1,#kitchen_store_2,#kitchen_store_3,#kitchen_store_4,#kitchen_store_5,#kitchen_store_6,#large_appliance_store_1,#large_appliance_store_2,#large_appliance_store_3,#large_appliance_store_4,#large_appliance_store_5,#large_appliance_store_6,#personel_care_store_1,#personel_care_store_2,#personel_care_store_3,#personel_care_store_4,#personel_care_store_5,#personel_care_store_6{ width:250px !important;max-width:500px!important;margin-right:10px;}

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
          <span class="content2_l1_span" style="width:78%">And which of the following products did you buy during the last 2 weeks?</span>
          <div>
            <?php if(isset($_SESSION['buy_product_1']) && $_SESSION['buy_product_1']==1) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onClick="checknone1(this.id,this.value,98,98);" value="1" class="products_bought_last_weekend" id="product_brought_1" name="product_brought_1">
              <label for="product_brought_1">
                <span class="title1">Tablet</span>
              </label>
            </div>
            <?php }?>
            <?php if(isset($_SESSION['buy_product_2']) && $_SESSION['buy_product_2']==2) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onClick="checknone1(this.id,this.value,98,98);" value="2" class="products_bought_last_weekend" id="product_brought_2" name="product_brought_2">
              <label for="product_brought_2"><span class="title1">Laptop, Computer (Desktop)</span></label>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['buy_product_3']) && $_SESSION['buy_product_3']==3) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onClick="checknone1(this.id,this.value,98,98);" value="3" class="products_bought_last_weekend" id="product_brought_3" name="product_brought_3">
              <label for="product_brought_3"><span class="title1">Mobile Phone</span></label>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['buy_product_4']) && $_SESSION['buy_product_4']==4) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onClick="checknone1(this.id,this.value,98,98);" value="4" class="products_bought_last_weekend" id="product_brought_4" name="product_brought_4">
              <label for="product_brought_4"><span class="title1">Television (LCD/LED/3D)</span></label>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['buy_product_5']) && $_SESSION['buy_product_5']==5) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onClick="checknone1(this.id,this.value,98,98);" value="5" class="products_bought_last_weekend" id="product_brought_5" name="product_brought_5">
              <label for="product_brought_5"><span class="title1">Kitchen Appliances (Microwave, Mixer, Juicer,etc)</span></label>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['buy_product_6']) && $_SESSION['buy_product_6']==6) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onClick="checknone1(this.id,this.value,98,98);" value="6" class="products_bought_last_weekend" id="product_brought_6" name="product_brought_6">
              <label for="product_brought_6"><span class="title1">Large Appliances (Refrigerator,AC,Washing Machine )</span></label>
            </div>
            <?php } ?>

            <!--19march16-->
            <?php if(isset($_SESSION['buy_product_9']) && $_SESSION['buy_product_9']==9) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onClick="checknone1(this.id,this.value,98,98);" value="9" class="products_bought_last_weekend" id="product_brought_9" name="product_brought_9">
              <label for="product_brought_9"><span class="title1">Personal Care Appliances (Electric shavers, Trimmers, Hair Dryers, etc.)</span></label>
            </div>            
            <?php } ?>
            <!--end 19march16-->

            <?php //if(isset($_SESSION['buy_product_7']) && $_SESSION['buy_product_7']==98) { ?>
            <div style="margin-left:10px;float:left;width:400px;">
              <input type="checkbox" onClick="checknone1(this.id,this.value,98,98);" value="98" class="products_bought_last_weekend" id="product_brought_98" name="product_brought_98">
              <label for="product_brought_98"><span class="title1">Didn’t buy any</span></label>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <?php //} ?>
          </div>

           <!--div>
           <?php
              //AddCheckBox1("products_bought.xml",'N',"products_bought_last_weekend","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','98','98'),'1','400px');
              ?>
            </div-->
        </div>
      </div>

      <!--start visit section question-->
      <div class="content2" id="visit_question">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width: 78%">Which all stores/retailers did you visit before you bought this?</span>
        </div>
      </div>
      <!--end visit section question-->
      <!--start visit first 3 stores for tablet section-->
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
       <!--end visit first 3 stores for tablet section-->

    <!--start visit next 3 stores for tablet section-->
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
       <!--end visit next 3 stores for tablet section-->

    <!--start visit first 3 stores for laptop section-->
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

      </div><!--div end-->
      <!--end visit first 3 stores for laptop section-->

      <!--start visit next 3 stores for laptop section-->
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
      <!--end visit next 3 stores for laptop section-->

<!--start visit first 3 stores for mobile section-->
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
      <!--end visit first 3 stores for mobile section-->

      <!--start visit next 3 stores for mobile section-->
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
<!--end visit next 3 stores for mobile section-->

<!--start visit first 3 stores for tv section-->
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
      <!--end visit first 3 stores for tv section-->

      <!--start visit next 3 stores for tv section-->
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
      <!--end visit next 3 stores for tv section-->

      <!--start visit first 3 stores for kitchen section-->
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
      <!--end visit first 3 stores for kitchen section-->

      <!--start visit next 3 stores for kitchen section-->
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
      <!--end visit next 3 stores for kitchen section-->

      <!--start visit first 3 stores for large_appliance section-->
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
      <!--end visit first 3 stores for large_appliance section-->

      <!--start visit next 3 stores for large_appliance section-->
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
      <!--end visit next 3 stores for large_appliance section-->

      <!--start 19march16-->
      <!--start visit first 3 stores for personel care section-->
      <div class="content2" id="visit_personel_care_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:18%">Personel care (Refrigerator,AC,Washing Machine )</span>
           <div style="float:left;">
            <?php AddDropDown("stores_retailers.xml","personel_care_store_1","style_dd", "First Store", "", "", "1");?>
            </div>
            <div style="float:left;">
            <?php
             AddDropDown("stores_retailers.xml","personel_care_store_2","style_dd", "Second Store", "", "", "1");
              ?>
            </div>
            <div style="float:left;">
              <?php
             AddDropDown("stores_retailers.xml","personel_care_store_3","style_dd", "Third Store", "", "", "1");
              ?>
            </div>
          <span class="add_more_personel_care" style="cursor: pointer;font-size: 15pt;">+</span>
        </div>
      </div>
      <!--end visit first 3 stores for personel care section-->

      <!--start visit next 3 stores for personel care section-->
      <div class="content2" id="three_more_personel_care" style="display:none;">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span" style="width:18%">&nbsp;</span>
          <div style="float:left;" class="personel_care_one" style="display:none;">
            <?php
             AddDropDown("stores_retailers.xml","personel_care_store_4","style_dd", "Fourth Store", "", "", "1");
              ?>
          </div>
           <span class="add_more_personel_care_1" style="cursor: pointer;font-size: 15pt;">+</span>
           <span class="remove_more_personel_care_1" style="cursor: pointer;font-size: 15pt;">-</span>
            <div style="float:left;display:none;" class="personel_care_two">
            <?php
             AddDropDown("stores_retailers.xml","personel_care_store_5","style_dd", "Fifth Store", "", "", "1");
              ?>
            </div>
           <span class="add_more_personel_care_2" style="cursor: pointer;font-size: 15pt;display:none;" >+</span>
           <span class="remove_more_personel_care_2" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
            <div style="float:left;display:none;" class="personel_care_three">
              <?php
             AddDropDown("stores_retailers.xml","personel_care_store_6","style_dd", "Sixth Store", "", "", "1");
              ?>
            </div>
           <span class="remove_more_personel_care_3" style="cursor: pointer;font-size: 15pt;display:none;">-</span>
          </div>
      </div>
      <!--end visit next 3 stores for personel care section-->


      <!--end 19march16-->

      <!--start purchase question section-->
      <div class="content2" id="question_div">
        <div class="content2_l1" style="width:995px;  float: none;">
          <span class="content2_l1_span">And from where did you purchase it?</span>
        </div>
      </div>
      <!--end purchase question section-->

    <!--start purchase tablet div section -->
      <div class="content2" id="tablet_div">
        <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("purchase_product.xml","purchase_tablet","style_dd select_shop", "From where did you purchase it - Tablet", "", "", "1"); ?>
            </div>
        </div>
          <!--rt-->
        <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("tablet.xml","tablet_brand","style_dd select_shop", "Which brand did you purchase?", "", "", "1"); ?>
            </div>
        </div>      

        <div class="content2_l1" style="width: 995px;float: none; margin: 0;">
           <div style="float:left;margin-right: 20px;"><input type="text" name="tablet_model_name" id="tablet_model_name" value=""  placeholder="Model Name">
          </div>
      </div>

      <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("brand_price.xml","tablet_brand_range","style_dd select_shop", "Price Range?", "", "", "1"); ?>
            </div>
        </div>
      </div>
    <!--end purchase tablet div section -->

<!--21march-->
 <!--Q16 start purchase reason from new offline/physical stores coded in tablet div section --> 
    <div class="content2" id="purchase_reason_for_offline_tablet">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="tablet_value2"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_offline_tablet.xml",'N',"purchase_reason_for_offline_tablet","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');?>
              <span id="tablet_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tablet_other1" id="tablet_other1" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div>
      <div style="clear:both;"></div>

<!--end purchase reason from new offline/physical stores coded in tablet div section --> 


 <!--Q16 start purchase reason from new online stores coded in tablet div section --> 
    <div class="content2" id="purchase_reason_for_online_tablet">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="tablet_value3"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_online_tablet.xml",'N',"purchase_reason_for_online_tablet","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="tablet_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tablet_other2" id="tablet_other2" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in tablet div section --> 

<!--Q17(not purchased) start purchase reason from ASK Q17 if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is NOT mentioned Q14 n tablet div section --> 
    <div class="content2" id="not_purchase_reason_for_chroma_both_tablet">
       <span class="content2_l1_span">You mentioned you have not purchased the product from Croma. Please state the reasons for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_reason_for_chroma_both_tablet.xml",'N',"not_purchase_reason_for_chroma_both_tablet","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="tablet_other_div3" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tablet_other3" id="tablet_other3" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in tablet div section --> 

<!--ASK Q17a if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is mentioned Q14 tablet div section --> 
    <div class="content2" id="visited_chroma_but_not_purchased_tablet">
       <span class="content2_l1_span">It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php AddCheckBox1("not_purchase_from_croma_tablet.xml",'N',"not_purchase_from_croma_tablet","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="tablet_other_div4" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tablet_other4" id="tablet_other4" placeholder="other reason"></span>
              </div>
        </div>        
      </div><div style="clear:both;"></div>
<!--end purchase reason from new online stores coded in tablet div section --> 
<!--end 21march-->


  <!--start purchase reason from chroma tablet div section -->
    <div class="content2" id="purchase_reason_tablet">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="tablet_value"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_1" value="1"></td>

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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>
            
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="tablet_recommending" id="tablet_recommending" value=""  >
          </div>
      </div>  
  </div>
  <!--end purchase reason from chroma tablet div section -->
    
  <!--start not purchase reason from chroma tablet div section -->
    <div class="content2" id="not_purchase_reason_tablet">
      <div class="content2_l1" id="non_visited_croma_tablet">
        
      </div>
      
      <div style="clear:both;"></div>
      <!--rtt-->    
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="tablet_value1"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="tablet_not_likely_to_recommend" id="tablet_not_likely_to_recommend_10" value="10"></td>
          </tr> 
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>           
          </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="tablet_not_recommending" id="tablet_not_recommending" value=""  >
          </div>
      </div>
    </div>
     <!--end not purchase reason from chroma tablet div section -->

  <!--10May-16 start for tablet-->  
   <!--start visited recommend from tablet div section -->
   <span id="panel_tablet"></span>
  <!--end visited recommend from tablet div section -->
   <!--10May-16 end-->  

 <!--start purchase laptop div section -->    
    <div class="content2" id="laptop_div">
      <div class="content2_l1" style="width:995px; float: none; ">
          <div style="float: left;padding-right: 10px;" id="">
            <?php AddDropDown("purchase_product.xml","purchase_laptop","style_dd select_shop", "From where did you purchase it - Laptop", "", "", "1"); ?>
          </div>
        </div>
        <!-- rrt -->
        <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("laptop.xml","laptop_brand","style_dd select_shop", "Which brand did you purchased?", "", "", "1"); ?>
            </div>
        </div>      

        <div class="content2_l1" style="width: 995px;float: none; margin: 0;">
           <div style="float:left;margin-right: 20px;"><input type="text" name="laptop_model_name" id="laptop_model_name" value=""  placeholder="Model Name">
          </div>
      </div>

      <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("brand_price.xml","laptop_brand_range","style_dd select_shop", "Price Range?", "", "", "1"); ?>
            </div>
        </div>
      </div>
<!--end purchase laptop div section -->

<!--21march-->
 <!--Q16 start purchase reason from new offline/physical stores coded in laptop div section --> 
    <div class="content2" id="purchase_reason_for_offline_laptop">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="laptop_value2"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_offline_laptop.xml",'N',"purchase_reason_for_offline_laptop","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
                <span id="laptop_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="laptop_other1" id="laptop_other1" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new offline/physical stores coded in laptop div section --> 


 <!--Q16 start purchase reason from new online stores coded in laptop div section --> 
    <div class="content2" id="purchase_reason_for_online_laptop">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="laptop_value3"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_online_laptop.xml",'N',"purchase_reason_for_online_laptop","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="laptop_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="laptop_other2" id="laptop_other2" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in laptop div section --> 

<!--Q17(not purchased) start purchase reason from ASK Q17 if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is NOT mentioned Q14 n laptop div section --> 
    <div class="content2" id="not_purchase_reason_for_chroma_both_laptop">
       <span class="content2_l1_span">You mentioned you have not purchased the product from Croma. Please state the reasons for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_reason_for_chroma_both_laptop.xml",'N',"not_purchase_reason_for_chroma_both_laptop","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="laptop_other_div3" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="laptop_other3" id="laptop_other3" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in laptop div section --> 

<!--ASK Q17a if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is mentioned Q14 laptop div section --> 
    <div class="content2" id="visited_chroma_but_not_purchased_laptop">
       <span class="content2_l1_span">It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php AddCheckBox1("not_purchase_from_croma_laptop.xml",'N',"not_purchase_from_croma_laptop","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="laptop_other_div4" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="laptop_other4" id="laptop_other4" placeholder="other reason"></span>
              </div>
        </div>        
      </div><div style="clear:both;"></div>
<!--end purchase reason from new online stores coded in laptop div section --> 
<!--end 21march-->


 <!--start purchase reason from chroma laptop div section -->
    <div class="content2" id="purchase_reason_laptop">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="laptop_value"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>

          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="laptop_likely_to_recommend" id="laptop_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>  
         </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="laptop_recommending" id="laptop_recommending" value=""  >
          </div>
      </div>
    </div>
 <!--end purchase reason from chroma laptop div section -->

 <!--start not purchase reason from chroma laptop div section -->
      <div class="content2" id="not_purchase_reason_laptop">
        <div class="content2_l1" id="non_visited_croma_laptop">      
        </div>  
        
         <div style="clear:both;"></div>
        <!--rtt-->
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="laptop_value1"> _______</span></u> from which you have purchased to a friend or colleague?</span>
       
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>

          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="laptop_not_likely_to_recommend" id="laptop_not_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>
    </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="laptop_not_recommending" id="laptop_not_recommending" value=""  >
          </div>
      </div>
    </div>
     <!--start not purchase reason from chroma laptop div section -->

  <!--10May-16 start for laptop-->  
     <!--start visited recommend from laptop div section -->
      <span id="panel_laptop"></span>
    <!--end visited recommend from laptop div section -->
   <!--10May-16 end-->

<!--start purchase kitchen div section -->
      <div class="content2" id="kitchen_div">
        <div class="content2_l1" style="width:995px; float: none;">

           <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("purchase_product.xml","purchase_kitchen_product","style_dd select_shop", "From where did you purchase it - Kitchen Appliances", "", "", "1"); ?>
            </div>
        </div>
         <!-- rt -->
        <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("kitchen_appliance.xml","kitchen_appliance_brand","style_dd select_shop", "Which brand did you purchased?", "", "", "1"); ?>
               <?php //AddDropDown("laptop.xml","laptop/computer_brand","style_dd select_shop", "Which brand did you purchased?", "", "", "1"); ?>
            </div>
        </div>      

        <div class="content2_l1" style="width: 995px;float: none; margin: 0;">
           <div style="float:left;margin-right: 20px;"><input type="text" name="kitchen_appliance_model_name" id="kitchen_model_name" value=""  placeholder="Model Name">
          </div>
      </div>

      <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("brand_price.xml","kitchen_appliance_brand_range","style_dd select_shop", "Price Range?", "", "", "1"); ?>
            </div>
        </div>
    </div>
<!--end purchase kitchen div section -->


<!--21march-->
 <!--Q16 start purchase reason from new offline/physical stores coded in kitchen div section --> 
    <div class="content2" id="purchase_reason_for_offline_kitchen">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="kitchen_value2"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_offline_kitchen.xml",'N',"purchase_reason_for_offline_kitchen","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="kitchen_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="kitchen_other1" id="kitchen_other1" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new offline/physical stores coded in personel care kitchen div section --> 


 <!--Q16 start purchase reason from new online stores coded in kitchen div section --> 
    <div class="content2" id="purchase_reason_for_online_kitchen">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="kitchen_value3"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_online_kitchen.xml",'N',"purchase_reason_for_online_kitchen","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="kitchen_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="kitchen_other2" id="kitchen_other2" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in kitchen div section --> 

<!--Q17(not purchased) start purchase reason from ASK Q17 if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is NOT mentioned Q14 n kitchen div section --> 
    <div class="content2" id="not_purchase_reason_for_chroma_both_kitchen">
       <span class="content2_l1_span">You mentioned you have not purchased the product from Croma. Please state the reasons for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_reason_for_chroma_both_kitchen.xml",'N',"not_purchase_reason_for_chroma_both_kitchen","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="kitchen_other_div3" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="kitchen_other3" id="kitchen_other3" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in kitchen div section --> 

<!--ASK Q17a if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is mentioned Q14 kitchen div section --> 
    <div class="content2" id="visited_chroma_but_not_purchased_kitchen">
       <span class="content2_l1_span">It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php AddCheckBox1("not_purchase_from_croma_kitchen.xml",'N',"not_purchase_from_croma_kitchen","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="kitchen_other_div4" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="kitchen_other4" id="kitchen_other4" placeholder="other reason"></span>
              </div>
        </div>        
      </div><div style="clear:both;"></div>
<!--end purchase reason from new online stores coded in kitchen div section --> 
<!--end 21march-->


 <!--start purchase reason from chroma kitchen div section -->
    <div class="content2" id="purchase_reason_kitchen">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="kitchen_value"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="kitchen_likely_to_recommend" id="kitchen_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>          
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="kitchen_recommending" id="kitchen_recommending" value=""  >
          </div>
      </div>
    </div>
 <!--end purchase reason from chroma kitchen div section -->

 <!--start not purchase reason from chroma kitchen div section -->
    <div class="content2" id="not_purchase_reason_kitchen">
      <div class="content2_l1" id="non_visited_croma_kitchen">     
        </div>
        
         <div style="clear:both;"></div>
        <!--rtt-->   

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="kitchen_value1"> _______</span></u> from which you have purchased to a friend or colleague?</span>
       
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="kitchen_not_likely_to_recommend" id="kitchen_not_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>     
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="kitchen_not_recommending" id="kitchen_not_recommending" value=""  >
          </div>
      </div>
    </div>
     <!--end not purchase reason from chroma kitchen div section -->

    <!--10May-16 start for purchase_kitchen_product-->  
       <!--start visited recommend from tablet div section -->
        <span id="panel_kitchen_product"></span>
      <!--end visited recommend from purchase_kitchen_product div section -->
   <!--10May-16 end-->

<!--start purchase mobile div section -->
    <div class="content2" id="mobile_div">
        <div class="content2_l1" style="width:995px;float: none">
        <div style="float: left;padding-right: 10px;" id="">
          <?php AddDropDown("purchase_product.xml","purchase_mobile","style_dd select_shop", "From where did you purchase it - Mobile", "", "", "1"); ?>
        </div>
        </div>
        <!-- rttt  -->
         <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("mobile.xml","mobile_brand","style_dd select_shop", "Which brand did you purchased?", "", "", "1"); ?>
            </div>
        </div>      

        <div class="content2_l1" style="width: 995px;float: none; margin: 0;">
           <div style="float:left;margin-right: 20px;"><input type="text" name="mobile_model_name" id="mobile_model_name" value=""  placeholder="Model Name">
          </div>
      </div>

      <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("brand_price.xml","mobile_brand_range","style_dd select_shop", "Price Range?", "", "", "1"); ?>
            </div>
        </div>
      </div>
<!--end purchase mobile div section -->


<!--21march-->
 <!--Q16 start purchase reason from new offline/physical stores coded in mobile div section --> 
    <div class="content2" id="purchase_reason_for_offline_mobile">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="mobile_value2"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_offline_mobile.xml",'N',"purchase_reason_for_offline_mobile","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="mobile_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="mobile_other1" id="mobile_other1" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new offline/physical stores coded in mobile div section --> 


 <!--Q16 start purchase reason from new online stores coded in mobile div section --> 
    <div class="content2" id="purchase_reason_for_online_mobile">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="mobile_value3"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_online_mobile.xml",'N',"purchase_reason_for_online_mobile","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="mobile_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="mobile_other2" id="mobile_other2" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in mobile div section --> 

<!--Q17(not purchased) start purchase reason from ASK Q17 if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is NOT mentioned Q14 n personel care div section --> 
    <div class="content2" id="not_purchase_reason_for_chroma_both_mobile">
       <span class="content2_l1_span">You mentioned you have not purchased the product from Croma. Please state the reasons for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_reason_for_chroma_both_mobile.xml",'N',"not_purchase_reason_for_chroma_both_mobile","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="mobile_other_div3" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="mobile_other3" id="mobile_other3" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in mobile div section --> 

<!--ASK Q17a if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is mentioned Q14 mobile div section --> 
    <div class="content2" id="visited_chroma_but_not_purchased_mobile">
       <span class="content2_l1_span">It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php AddCheckBox1("not_purchase_from_croma_mobile.xml",'N',"not_purchase_from_croma_mobile","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="mobile_other_div4" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="mobile_other4" id="mobile_other4" placeholder="other reason"></span>
              </div>
        </div>        
      </div><div style="clear:both;"></div>
<!--end purchase reason from new online stores coded in mobile div section --> 
<!--end 21march-->

 <!--start purchase reason from chroma mobile div section -->
    <div class="content2" id="purchase_reason_mobile">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="mobile_value"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="mobile_likely_to_recommend" id="mobile_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>
          
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="mobile_recommending" id="mobile_recommending" value=""  >
          </div>
      </div>
    </div>
 <!--end purchase reason from chroma mobile div section -->

 <!--start not purchase reason from chroma mobile div section -->
    <div class="content2" id="not_purchase_reason_mobile">
      <div class="content2_l1" id="non_visited_croma_mobile">  
        </div>
        
        <div style="clear:both;"></div>
       
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="mobile_value1"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="mobile_not_likely_to_recommend" id="mobile_not_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>           
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="mobile_not_recommending" id="mobile_not_recommending" value=""  >
          </div>
      </div>
    </div>
     <!--end not purchase reason from chroma mobile div section -->

  <!--10May-16 start for purchase_mobile-->  
       <!--start visited recommend from purchase_mobile div section -->
        <span id="panel_mobile"></span>
      <!--end visited recommend from purchase_mobile div section -->
   <!--10May-16 end-->

<!--start purchase tv div section -->
    <div class="content2" id="tv_div"> 
        <div class="content2_l1" style="width:995px; float: none;">
          <div style="float: left;padding-right: 10px;"><?php AddDropDown("purchase_product.xml","purchase_tv","style_dd select_shop", "From where did you purchase it - Television", "", "", "1"); ?>
          </div>
        </div>

        <?php //rtt ?>  
        <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("television.xml","television_brand","style_dd select_shop", "Which brand did you purchased?", "", "", "1"); ?>
            </div>
        </div>      

        <div class="content2_l1" style="width: 995px;float: none; margin: 0;">
           <div style="float:left;margin-right: 20px;"><input type="text" name="tv_model_name" id="tv_model_name" value=""  placeholder="Model Name">
          </div>
      </div>

      <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("brand_price.xml","tv_brand_range","style_dd select_shop", "Price Range?", "", "", "1"); ?>
            </div>
        </div><?php //rtt ?>  
      </div>
     <!--end purchase tv div section -->

<!--21march-->
 <!--Q16 start purchase reason from new offline/physical stores coded in tv div section --> 
    <div class="content2" id="purchase_reason_for_offline_tv">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="tv_value2"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_offline_tv.xml",'N',"purchase_reason_for_offline_tv","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="tv_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tv_other1" id="tv_other1" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new offline/physical stores coded in tv div section --> 


 <!--Q16 start purchase reason from new online stores coded in tv div section --> 
    <div class="content2" id="purchase_reason_for_online_tv">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="tv_value3"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_online_tv.xml",'N',"purchase_reason_for_online_tv","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
               <span id="tv_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tv_other2" id="tv_other2" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in tv div section --> 

<!--Q17(not purchased) start purchase reason from ASK Q17 if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is NOT mentioned Q14 n personel tv section --> 
    <div class="content2" id="not_purchase_reason_for_chroma_both_tv">
       <span class="content2_l1_span">You mentioned you have not purchased the product from Croma. Please state the reasons for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_reason_for_chroma_both_tv.xml",'N',"not_purchase_reason_for_chroma_both_tv","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
               <span id="tv_other_div3" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tv_other3" id="tv_other3" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in tv div section --> 

<!--ASK Q17a if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is mentioned Q14 tv div section --> 
    <div class="content2" id="visited_chroma_but_not_purchased_tv">
       <span class="content2_l1_span">It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php AddCheckBox1("not_purchase_from_croma_tv.xml",'N',"not_purchase_from_croma_tv","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
               <span id="tv_other_div4" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tv_other4" id="tv_other4" placeholder="other reason"></span>
              </div>
        </div>        
      </div><div style="clear:both;"></div>
<!--end purchase reason from new online stores coded in tv div section --> 
<!--end 21march-->



     <!--start purchase reason from chroma tv div section -->   
    <div class="content2" id="purchase_reason_tv">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="tv_value"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommendd</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="tv_likely_to_recommend" id="tv_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>          
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="tv_recommending" id="tv_recommending" value=""  >
          </div>
      </div>
    </div>
     <!--end purchase reason from chroma tv div section --> 

  <!--start not purchase reason from chroma tv div section -->
    <div class="content2" id="not_purchase_reason_tv">     
        <div style="clear:both;"></div>
        <!--rtt-->    

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="tv_value1"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="tv_not_likely_to_recommend" id="tv_not_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>         
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="tv_not_recommending" id="tv_not_recommending" value=""  >
          </div>
      </div>
    </div>
  <!--end not purchase reason from chroma tv div section -->

   <!--10May-16 start for purchase_tv-->  
       <!--start visited recommend from purchase_tv div section -->
        <span id="panel_tv"></span>
      <!--end visited recommend from purchase_tv div section -->
   <!--10May-16 end-->


 <!--start purchase appliance div section -->
      <div class="content2" id="appliance_div">
        <div class="content2_l1" style="width:995px; float: none;">
          <div style="float: left;padding-right: 10px;">
          <?php AddDropDown("purchase_product.xml","purchase_appliances","style_dd select_shop", "From where did you purchase it - Large Appliances", "", "", "1"); ?>
            </div>
        </div>
        <!-- rt -->
        <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("large_appliance.xml","large_appliance_brand","style_dd select_shop", "Which brand did you purchased?", "", "", "1"); ?>
            </div>
        </div>      

        <div class="content2_l1" style="width: 995px;float: none; margin: 0;">
           <div style="float:left;margin-right: 20px;"><input type="text" name="large_appliance_model_name" id="large_appliance_model_name" value=""  placeholder="Model Name">
          </div>
      </div>

      <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("brand_price.xml","large_appliance_brand_range","style_dd select_shop", "Price Range?", "", "", "1"); ?>
            </div>
        </div><!--  rtt -->        
      </div>
 <!--end purchase appliance div section -->

<!--21march-->
 <!--start purchase reason from chroma appliance div section --> 
    <div class="content2" id="purchase_reason_appliance">
       <span class="content2_l1_span">You mentioned you have purchased the Large Appliances from Croma. Please state the reasons of purchasing it from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("product_from_croma_appliance.xml",'N',"product_from_croma_appliance","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="appliances_value"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="appliance_likely_to_recommend" id="appliance_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>


        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="appliance_recommending" id="appliance_recommending" value=""  >
          </div>
      </div>
    </div>
<!--end purchase reason from chroma appliance div section --> 

<!--start 23march-->
<!--21march-->
 <!--Q16 start purchase reason from new offline/physical stores coded in appliances div section --> 
    <div class="content2" id="purchase_reason_for_ofline_appliance">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="appliances_value2"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_ofline_appliance.xml",'N',"purchase_reason_for_ofline_appliance","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
               <span id="appliance_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="appliance_other1" id="appliance_other1" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new offline/physical stores coded in personel care div section --> 


 <!--Q16 start purchase reason from new online stores coded in appliance div section --> 
    <div class="content2" id="purchase_reason_for_online_appliance">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="appliances_value3"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_online_appliance.xml",'N',"purchase_reason_for_online_appliance","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="appliance_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="appliance_other2" id="appliance_other2" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in appliance div section --> 

<!--Q17(not purchased) start purchase reason from ASK Q17 if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is NOT mentioned Q14 n personel care div section --> 
    <div class="content2" id="not_purchase_reason_for_chroma_both_appliance">
       <span class="content2_l1_span">You mentioned you have not purchased the product from Croma. Please state the reasons for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_reason_for_chroma_both_appliance.xml",'N',"not_purchase_reason_for_chroma_both_appliance","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="appliance_other_div3" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="appliance_other3" id="appliance_other3" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in appliance div section --> 

<!--ASK Q17a if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is mentioned Q14 appliances div section --> 
    <div class="content2" id="visited_chroma_but_not_purchased_appliance">
       <span class="content2_l1_span">It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_from_croma_appliance.xml",'N',"not_purchase_from_croma_appliance","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="appliance_other_div4" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="appliance_other4" id="appliance_other4" placeholder="other reason"></span>
              </div>
        </div>        
      </div><div style="clear:both;"></div>
<!--end purchase reason from new online stores coded in appliance div section --> 
<!--end 21march-->

<!--end 23march-->

  <!--start not purchase reason from chroma appliance div section -->
    <div class="content2" id="not_purchase_reason_appliance">

        <div style="clear:both;"></div>
        <!--rtt-->   
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="appliances_value1"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="appliance_not_likely_to_recommend" id="appliance_not_likely_to_recommend_1" value="1"></td>
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
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>       
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="appliance_not_recommending" id="appliance_not_recommending" value=""  >
          </div>
      </div>
  </div>
   <!--end not purchase reason from chroma appliance div section -->

    <!--10May-16 start for purchase_appliances-->  
       <!--start visited recommend from purchase_appliances div section -->
        <span id="panel_appliances"></span>
      <!--end visited recommend from purchase_appliances div section -->
   <!--10May-16 end-->

<!--19march16 rt-->
<!--personel care appliances-->
 <!--start purchase personel care div section -->
      <div class="content2" id="personel_care_div">
        <div class="content2_l1" style="width:995px; float: none;">
          <div style="float: left;padding-right: 10px;">
          <?php AddDropDown("purchase_product.xml","purchase_personel_care","style_dd select_shop", "From where did you purchase it - Personal Care Appliances", "", "", "1"); ?>
            </div>
        </div>
        <!-- rt -->
        <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("personel_care_appliance.xml","personel_care_brand","style_dd select_shop", "Which brand did you purchased?", "", "", "1"); ?>
            </div>
        </div>      

        <div class="content2_l1" style="width: 995px;float: none; margin: 0;">
           <div style="float:left;margin-right: 20px;"><input type="text" name="personel_care_model_name" id="personel_care_model_name" value=""  placeholder="Model Name">
          </div>
      </div>

      <div class="content2_l1" style="width:995px; float: none; margin: 0;">
          <div style="float: left;padding-right: 10px;" id="">
              <?php AddDropDown("brand_price.xml","personel_care_brand_range","style_dd select_shop", "Price Range?", "", "", "1"); ?>
            </div>
        </div><!--  rtt -->        
      </div>
 <!--end purchase personel care div section -->

<!--21march-->
 <!--Q16 start purchase reason from new offline/physical stores coded in personel care div section --> 
    <div class="content2" id="purchase_reason_for_offline_personel_care">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="personel_care_value2"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php AddCheckBox1("purchase_reason_for_offline_personel_care.xml",'N',"purchase_reason_for_offline_personel_care","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');?>
             <span id="personel_care_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="pc_other1" id="pc_other1" placeholder="other reason"></span>
          </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new offline/physical stores coded in personel care div section --> 


 <!--Q16 start purchase reason from new online stores coded in personel care div section --> 
    <div class="content2" id="purchase_reason_for_online_personel_care">
       <span class="content2_l1_span">Please state the reasons of purchasing it from <u><span id="personel_care_value3"></span></u></span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("purchase_reason_for_online_personel_care.xml",'N',"purchase_reason_for_online_personel_care","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="personel_care_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="pc_other2" id="pc_other2" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in personel care div section --> 

<!--Q17(not purchased) start purchase reason from ASK Q17 if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is NOT mentioned Q14 n personel care div section --> 
    <div class="content2" id="not_purchase_reason_for_chroma_both_personel_care">
       <span class="content2_l1_span">You mentioned you have not purchased the product from Croma. Please state the reasons for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_reason_for_chroma_both_personel_care.xml",'N',"not_purchase_reason_for_chroma_both_personel_care","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="personel_care_other_div3" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="pc_other3" id="pc_other3" placeholder="other reason"></span>
              </div>
        </div>    
        
      </div><div style="clear:both;"></div>

<!--end purchase reason from new online stores coded in personel care div section --> 

<!--ASK Q17a if CROMA or Cromaretail.com is NOT mentioned in Q15 AND CROMA is mentioned Q14 personel care div section --> 
    <div class="content2" id="visited_chroma_but_not_purchased_personel_care">
       <span class="content2_l1_span">It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("not_purchase_from_croma_personel_care.xml",'N',"not_purchase_from_croma_personel_care","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
              <span id="personel_care_other_div4" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="pc_other4" id="pc_other4" placeholder="other reason"></span>
              </div>
        </div>        
      </div><div style="clear:both;"></div>
<!--end purchase reason from new online stores coded in personel care div section --> 
<!--end 21march-->

 <!--start purchase reason from chroma personel care div section --> 
    <div class="content2" id="purchase_reason_personel_care">
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="personel_care_value"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
         <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_likely_to_recommend" id="personel_care_likely_to_recommend_10" value="10"></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="personel_care_recommending" id="personel_care_recommending" value=""  >
          </div>
      </div>
    </div>
<!--end purchase reason from chroma personel care div section --> 

  <!--start not purchase reason from chroma personel care div section -->
    <div class="content2" id="not_purchase_reason_personel_care">
    <div class="content2_l1" id="non_visited_croma_personel_care">
        
      </div>
        <div style="clear:both;"></div>
        <!--rtt-->
      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span">How likely is that you will recommend <u><span id="personel_care_value1"> _______</span></u> from which you have purchased to a friend or colleague?</span>
        
        <div style="clear:both;"></div>
        <table width="100%">
          <tr>
            <td colspan="3" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="width:100%;text-align:left;color:#626262!important;">Not at all likely to recommend</span></td>
            <td colspan="2" style="border:0px solid #cccccc;"><span class="content2_l1_span" style="text-align: left; color: #626262!important;">Extreme likely to recommend</span></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:12%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_1" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_2" value="1"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_3" value="3"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_4" value="4"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_5" value="5"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_6" value="6"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_7" value="7"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_9" value="9"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="radio" name="personel_care_not_likely_to_recommend" id="personel_care_not_likely_to_recommend_10" value="10"></td>
          </tr>
          <tr style="text-align: center; width: 65%;  margin: 0px auto;">
            <td style="width:11%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_1" name="tablet_likely_to_recommend">1</td>

            <td style="width:12.5%;border:0px solid #cccccc;"><input type="hidden" value="1" id="tablet_likely_to_recommend_2" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="3" id="tablet_likely_to_recommend_3" name="tablet_likely_to_recommend"></td>
            <td style="width:10%;border:0px solid #cccccc;"><input type="hidden" value="4" id="tablet_likely_to_recommend_4" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="5" id="tablet_likely_to_recommend_5" name="tablet_likely_to_recommend">5</td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="6" id="tablet_likely_to_recommend_6" name="tablet_likely_to_recommend"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="7" id="tablet_likely_to_recommend_7" name="tablet_likely_to_recommend"></td>
            <td style=" width:10.85%;border:0px solid #cccccc;"><input type="hidden" name="tablet_likely_to_recommend" id="tablet_likely_to_recommend_8" value="8"></td>
            <td style=" width:10%;border:0px solid #cccccc;"><input type="hidden" value="9" id="tablet_likely_to_recommend_9" name="tablet_likely_to_recommend"></td>
            <td style=" width:11%;border:0px solid #cccccc;"><input type="hidden" value="10" id="tablet_likely_to_recommend_10" name="tablet_likely_to_recommend">10</td>
          </tr>       
        </table>
      </div><div style="clear:both;"></div>

        <div class="content2_l1" style="width: 995px;">
          <span class="content2_l1_span" style="width:37%">Please mention for recommending or not recommending?</span>
            <div style="float:left;margin-right: 20px;"><input type="text" name="personel_care_not_recommending" id="personel_care_not_recommending" value=""  >
          </div>
      </div>
  </div><!--19march-->

  <!--10May-16 start for purchase_personel_care -->  
   <!--start visited recommend from purchase_personel_care div section -->
   <span id="panel_personel_care"></span>
  <!--end visited recommend from purchase_personel_care div section -->
   <!--10May-16 end-->
  
  <a onClick="return validate();" class="submit_btn" id="fp_submit" href="javascript:void(0);" style="display:none;"></a>
</form>
</body>

<script>
get_id('tablet_store_1').onchange=function(){_checkDuplicateDropSix('tablet_store_1','tablet_store_2','tablet_store_3','tablet_store_4','tablet_store_5','tablet_store_6',6);}
get_id('tablet_store_2').onchange=function(){_checkDuplicateDropSix('tablet_store_2','tablet_store_1','tablet_store_3','tablet_store_4','tablet_store_5','tablet_store_6',6);}
get_id('tablet_store_3').onchange=function(){_checkDuplicateDropSix('tablet_store_3','tablet_store_2','tablet_store_1','tablet_store_4','tablet_store_5','tablet_store_6',6);}
get_id('tablet_store_4').onchange=function(){_checkDuplicateDropSix('tablet_store_4','tablet_store_3','tablet_store_2','tablet_store_1','tablet_store_5','tablet_store_6',6);}
get_id('tablet_store_5').onchange=function(){_checkDuplicateDropSix('tablet_store_5','tablet_store_4','tablet_store_3','tablet_store_2','tablet_store_1','tablet_store_6',6);}
get_id('tablet_store_6').onchange=function(){_checkDuplicateDropSix('tablet_store_6','tablet_store_5','tablet_store_4','tablet_store_3','tablet_store_2','tablet_store_1',6);}

get_id('mobile_store_1').onchange=function(){_checkDuplicateDropSix('mobile_store_1','mobile_store_2','mobile_store_3','mobile_store_4','mobile_store_5','mobile_store_6',6);}
get_id('mobile_store_2').onchange=function(){_checkDuplicateDropSix('mobile_store_2','mobile_store_1','mobile_store_3','mobile_store_4','mobile_store_5','mobile_store_6',6);}
get_id('mobile_store_3').onchange=function(){_checkDuplicateDropSix('mobile_store_3','mobile_store_2','mobile_store_1','mobile_store_4','mobile_store_5','mobile_store_6',6);}
get_id('mobile_store_4').onchange=function(){_checkDuplicateDropSix('mobile_store_4','mobile_store_3','mobile_store_2','mobile_store_1','mobile_store_5','mobile_store_6',6);}
get_id('mobile_store_5').onchange=function(){_checkDuplicateDropSix('mobile_store_5','mobile_store_4','mobile_store_3','mobile_store_2','mobile_store_1','mobile_store_6',6);}
get_id('mobile_store_6').onchange=function(){_checkDuplicateDropSix('mobile_store_6','mobile_store_5','mobile_store_4','mobile_store_3','mobile_store_2','mobile_store_1',6);}

get_id('laptop_store_1').onchange=function(){_checkDuplicateDropSix('laptop_store_1','laptop_store_2','laptop_store_3','laptop_store_4','laptop_store_5','laptop_store_6',6);}
get_id('laptop_store_2').onchange=function(){_checkDuplicateDropSix('laptop_store_2','laptop_store_1','laptop_store_3','laptop_store_4','laptop_store_5','laptop_store_6',6);}
get_id('laptop_store_3').onchange=function(){_checkDuplicateDropSix('laptop_store_3','laptop_store_2','laptop_store_1','laptop_store_4','laptop_store_5','laptop_store_6',6);}
get_id('laptop_store_4').onchange=function(){_checkDuplicateDropSix('laptop_store_4','laptop_store_3','laptop_store_2','laptop_store_1','laptop_store_5','laptop_store_6',6);}
get_id('laptop_store_5').onchange=function(){_checkDuplicateDropSix('laptop_store_5','laptop_store_4','laptop_store_3','laptop_store_2','laptop_store_1','laptop_store_6',6);}
get_id('laptop_store_6').onchange=function(){_checkDuplicateDropSix('laptop_store_6','laptop_store_5','laptop_store_4','laptop_store_3','laptop_store_2','laptop_store_1',6);}

get_id('tv_store_1').onchange=function(){_checkDuplicateDropSix('tv_store_1','tv_store_2','tv_store_3','tv_store_4','tv_store_5','tv_store_6',6);}
get_id('tv_store_2').onchange=function(){_checkDuplicateDropSix('tv_store_2','tv_store_1','tv_store_3','tv_store_4','tv_store_5','tv_store_6',6);}
get_id('tv_store_3').onchange=function(){_checkDuplicateDropSix('tv_store_3','tv_store_2','tv_store_1','tv_store_4','tv_store_5','tv_store_6',6);}
get_id('tv_store_4').onchange=function(){_checkDuplicateDropSix('tv_store_4','tv_store_3','tv_store_2','tv_store_1','tv_store_5','tv_store_6',6);}
get_id('tv_store_5').onchange=function(){_checkDuplicateDropSix('tv_store_5','tv_store_4','tv_store_3','tv_store_2','tv_store_1','tv_store_6',6);}
get_id('tv_store_6').onchange=function(){_checkDuplicateDropSix('tv_store_6','tv_store_5','tv_store_4','tv_store_3','tv_store_2','tv_store_1',6);}

get_id('kitchen_store_1').onchange=function(){_checkDuplicateDropSix('kitchen_store_1','kitchen_store_2','kitchen_store_3','kitchen_store_4','kitchen_store_5','kitchen_store_6',6);}
get_id('kitchen_store_2').onchange=function(){_checkDuplicateDropSix('kitchen_store_2','kitchen_store_1','kitchen_store_3','kitchen_store_4','kitchen_store_5','kitchen_store_6',6);}
get_id('kitchen_store_3').onchange=function(){_checkDuplicateDropSix('kitchen_store_3','kitchen_store_2','kitchen_store_1','kitchen_store_4','kitchen_store_5','kitchen_store_6',6);}
get_id('kitchen_store_4').onchange=function(){_checkDuplicateDropSix('kitchen_store_4','kitchen_store_3','kitchen_store_2','kitchen_store_1','kitchen_store_5','kitchen_store_6',6);}
get_id('kitchen_store_5').onchange=function(){_checkDuplicateDropSix('kitchen_store_5','kitchen_store_4','kitchen_store_3','kitchen_store_2','kitchen_store_1','kitchen_store_6',6);}
get_id('kitchen_store_6').onchange=function(){_checkDuplicateDropSix('kitchen_store_6','kitchen_store_5','kitchen_store_4','kitchen_store_3','kitchen_store_2','kitchen_store_1',6);}

get_id('large_appliance_store_1').onchange=function(){_checkDuplicateDropSix('large_appliance_store_1','large_appliance_store_2','large_appliance_store_3','large_appliance_store_4','large_appliance_store_5','large_appliance_store_6',6);}
get_id('large_appliance_store_2').onchange=function(){_checkDuplicateDropSix('large_appliance_store_2','large_appliance_store_1','large_appliance_store_3','large_appliance_store_4','large_appliance_store_5','large_appliance_store_6',6);}
get_id('large_appliance_store_3').onchange=function(){_checkDuplicateDropSix('large_appliance_store_3','large_appliance_store_2','large_appliance_store_1','large_appliance_store_4','large_appliance_store_5','large_appliance_store_6',6);}
get_id('large_appliance_store_4').onchange=function(){_checkDuplicateDropSix('large_appliance_store_4','large_appliance_store_3','large_appliance_store_2','large_appliance_store_1','large_appliance_store_5','large_appliance_store_6',6);}
get_id('large_appliance_store_5').onchange=function(){_checkDuplicateDropSix('large_appliance_store_5','large_appliance_store_4','large_appliance_store_3','large_appliance_store_2','large_appliance_store_1','large_appliance_store_6',6);}
get_id('large_appliance_store_6').onchange=function(){_checkDuplicateDropSix('large_appliance_store_6','large_appliance_store_5','large_appliance_store_4','large_appliance_store_3','large_appliance_store_2','large_appliance_store_1',6);}

get_id('personel_care_store_1').onchange=function(){_checkDuplicateDropSix('personel_care_store_1','personel_care_store_2','personel_care_store_3','personel_care_store_4','personel_care_store_5','personel_care_store_6',6);}
get_id('personel_care_store_2').onchange=function(){_checkDuplicateDropSix('personel_care_store_2','personel_care_store_1','personel_care_store_3','personel_care_store_4','personel_care_store_5','personel_care_store_6',6);}
get_id('personel_care_store_3').onchange=function(){_checkDuplicateDropSix('personel_care_store_3','personel_care_store_2','personel_care_store_1','personel_care_store_4','personel_care_store_5','personel_care_store_6',6);}
get_id('personel_care_store_4').onchange=function(){_checkDuplicateDropSix('personel_care_store_4','personel_care_store_3','personel_care_store_2','personel_care_store_1','personel_care_store_5','personel_care_store_6',6);}
get_id('personel_care_store_5').onchange=function(){_checkDuplicateDropSix('personel_care_store_5','personel_care_store_4','personel_care_store_3','personel_care_store_2','personel_care_store_1','personel_care_store_6',6);}
get_id('personel_care_store_6').onchange=function(){_checkDuplicateDropSix('personel_care_store_6','personel_care_store_5','personel_care_store_4','personel_care_store_3','personel_care_store_2','personel_care_store_1',6);}

</script>
</html>
