<?php 
require("config.php");
require("../survey/assets/lib/htmlfunction.php");
if(isset($_POST['product_brought_98']) && $_POST['product_brought_98']!=''){
  $_SESSION['product_brought_98']=$_POST['product_brought_98'];
}

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
function validate(){
<?php if($_SESSION['buy_product_1']==1){?>
  if($('#future_tablet option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy tablet?");
    return false;
  }
  if($('#future_tablet option:selected').val()=="2" || $('#future_tablet option:selected').val()=="12"){
    var elements = document.querySelectorAll('.purchase_product_from_croma_tablet');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you will purchase the tablet from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
  }else {
    if($('#future_tablet option:selected').val()!="2" || $('#future_tablet option:selected').val()!="12"){    
      var elements = document.querySelectorAll('.not_purchase_from_croma_tablet');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the tablet from Croma.Please state the reasons for not purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }
  } 
<?php }?>
<?php if($_SESSION['buy_product_2']==2){?>
  if($('#future_laptop option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy Laptop?");
    return false;
  }
  if($('#future_laptop option:selected').val()=="2" || $('#future_laptop option:selected').val()=="12"){
    var elements = document.querySelectorAll('.purchase_product_from_croma_laptop');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you will purchase the laptop from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
  }else {
    if($('#future_laptop option:selected').val()!="2" || $('#future_laptop option:selected').val()!="12"){    
      var elements = document.querySelectorAll('.not_purchase_from_croma_laptop');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the laptop from Croma.Please state the reasons for not purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }
  }  
<?php }?>
<?php if($_SESSION['buy_product_3']==3){?>
  if($('#future_mobile option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy Mobile?");
    return false;
  }
  if($('#future_mobile option:selected').val()=="2" || $('#future_mobile option:selected').val()=="13"){
    var elements = document.querySelectorAll('.purchase_product_from_croma_mobile');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you will purchase the mobile from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
  }else {
    if($('#future_mobile option:selected').val()!="2" || $('#future_mobile option:selected').val()!="13"){    
      var elements = document.querySelectorAll('.not_purchase_from_croma_mobile');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the mobile from Croma.Please state the reasons for not purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }
  }  
<?php }?>
<?php if($_SESSION['buy_product_4']==4){?>
  if($('#future_tv option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy Television?");
    return false;
  }
  if($('#future_tv option:selected').val()=="2" || $('#future_tv option:selected').val()=="12"){
    var elements = document.querySelectorAll('.purchase_product_from_croma_tv');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you will purchase the television from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
  }else {
    if($('#future_tv option:selected').val()!="2" || $('#future_tv option:selected').val()!="12"){    
      var elements = document.querySelectorAll('.not_purchase_from_croma_tv');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the television from Croma.Please state the reasons for not purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }
  }  
<?php }?>
<?php if($_SESSION['buy_product_5']==5){?>
  if($('#future_kitchen option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy Kitchen Products?");
    return false;
  }
  if($('#future_kitchen option:selected').val()=="2" || $('#future_kitchen option:selected').val()=="13"){
    var elements = document.querySelectorAll('.purchase_product_from_croma_kitchen');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you will purchase the kitchen appliances from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
  }else {
    if($('#future_kitchen option:selected').val()!="2" || $('#future_kitchen option:selected').val()!="13"){    
      var elements = document.querySelectorAll('.not_purchase_from_croma_kitchen');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the kitchen appliances from Croma.Please state the reasons for not purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }
  }  
<?php }?>
<?php if(isset($_SESSION['buy_product_6'])==6){?>
  if($('#future_appliance option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy Large Appliances?");
    return false;
  }
    if($('#future_appliance option:selected').val()=="2" || $('#future_appliance option:selected').val()=="13"){
    var elements = document.querySelectorAll('.purchase_product_from_croma_appliance');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you will purchase the large appliances from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
  }else {
   if($('#future_appliance option:selected').val()!="2" || $('#future_appliance option:selected').val()!="13"){    
      var elements = document.querySelectorAll('.not_purchase_from_croma_appliance');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the large appliances from Croma.Please state the reasons for not purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }
  }
<?php }?>
  document.forms["form2"].submit();
}
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
   //alert('hhh');
  $("#future_purchase_tablet").hide();      
  $("#not_future_purchase_tablet").hide();      
  $("#future_purchase_laptop").hide();
  $("#not_future_purchase_laptop").hide();  
  $("#future_purchase_kitchen").hide();
  $("#not_future_purchase_kitchen").hide();  
  $("#future_purchase_mobile").hide();
  $("#not_future_purchase_mobile").hide();
  $("#future_purchase_tv").hide();
  $("#not_future_purchase_tv").hide();            
  $("#future_purchase_appliance").hide();
  $("#not_future_purchase_appliance").hide();
  $("#future_purchase_personel_care").hide();
  $("#not_future_purchase_personel_care").hide();
      
  $("#future_tablet").change(function(){
    //alert('here');
    if($(this).val()=='2' || $(this).val()=='13'){
      $("#future_purchase_tablet").show();
      $("#not_future_purchase_tablet").hide();          
    }else {
      $("#not_future_purchase_tablet").show();
      $("#future_purchase_tablet").hide();          
    }
  });
  
  $("#future_laptop").change(function(){
    if($(this).val()=='2' || $(this).val()=='13'){
      $("#future_purchase_laptop").show();
      $("#not_future_purchase_laptop").hide();          
    }else {
      $("#not_future_purchase_laptop").show();
      $("#future_purchase_laptop").hide();          
    }
  });
  
  $("#future_kitchen").change(function(){
    if($(this).val()=='2' || $(this).val()=='13'){
      $("#future_purchase_kitchen").show();
      $("#not_future_purchase_kitchen").hide();          
    }else {
      $("#not_future_purchase_kitchen").show();
      $("#future_purchase_kitchen").hide();          
    }
  });
  $("#future_mobile").change(function(){
    if($(this).val()=='2' || $(this).val()=='13'){
      $("#future_purchase_mobile").show();
      $("#not_future_purchase_mobile").hide();          
    }else {
      $("#not_future_purchase_mobile").show();
      $("#future_purchase_mobile").hide();          
    }
  });
  
  $("#future_tv").change(function(){
    if($(this).val()=='2' || $(this).val()=='13'){
      $("#future_purchase_tv").show();
      $("#not_future_purchase_tv").hide();          
    }else {
      $("#not_future_purchase_tv").show();
      $("#future_purchase_tv").hide();          
    }
  });
  
  
  $("#future_appliance").change(function(){
    if($(this).val()=='2' || $(this).val()=='13'){
      $("#future_purchase_appliance").show();
      $("#not_future_purchase_appliance").hide();          
    }else {
      $("#not_future_purchase_appliance").show();
      $("#future_purchase_appliance").hide();          
    }
  });  


//new added personel care
  $("#future_personel_care").change(function(){
    if($(this).val()=='2' || $(this).val()=='13'){
      $("#future_purchase_personel_care").show();
      $("#not_future_purchase_personel_care").hide();          
    }else {
      $("#not_future_purchase_personel_care").show();
      $("#future_purchase_personel_care").hide();          
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
#future_kitchen,#future_tablet,#future_laptop,#future_appliance,#future_mobile,#future_tv{ width:312px !important;max-width:500px!important;}
       

        .right_section{float: left;text-align: right;width: 20%;}
        .left_section{float: left;width: 20%;}
        .middle_section{float: left;width: 58%;}
        .p1{font-size: 12pt;font-weight: bold;padding: 5px;text-align: center;}
        .p2{font-weight: bold;padding-top: 10px;text-align: center;}
        .withouttable TABLE TR TD { border: 0px solid;}
</style>
<!--script src="js/validatePage2.js" type="text/javascript"></script-->
</head>
<body>
<div class="wealthbutton"></div>
  <div class="parent_main">
   
      <FORM name="form2" id="form2" class="styleThese" method="POST" action="ServerPage3.php">
      <INPUT type="hidden" name="rfr" id="rfr" value="<?php echo $_REQUEST["rfr"] ?>">
      <INPUT type="hidden" name="page3_session_Id" id="page3_session_Id" value="<?php echo $_REQUEST["SessionId"] ?>">
        
                
      <br>     
       <h1 style="line-height:35px;">Future Intention</h1>      
       <?php if(isset($_SESSION['product_brought_98']) && $_SESSION['product_brought_98']=='98'){ ?>    
       <!--22march new qsn added-->
        <div class="content2">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span">You said that you did not buy any product in the last 2 weeks. Please can you tell the reason for not buying any product in the last 2 weeks?</span>
        </div>
      </div>
         
      <div class="content2" id="reason_not_buying_any_product">
        <div class="content2_l1" style="width:995px;">      
          
          <div style="float: left;padding-right: 10px;">
            <?php AddDropDown("reason_not_buying_any_product_last_week.xml","reason_not_buying","style_dd ", "Select 1st Reason", "", "", "1"); ?>
          </div>
          <div style="float: left;padding-right: 10px;">
            <?php AddDropDown("reason_not_buying_any_product_last_week.xml","reason_not_buying","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
          </div>
        </div>
      </div>
      <!--end-->
      <?php } ?>


       <?php if(isset($_SESSION['product_brought_98']) && $_SESSION['product_brought_98']=='98'){ ?>     
      <div class="content2">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span">In future from which retailer/store do you intend to buy earlier mentioned products?</span>
        </div>
      </div>
    <?php //if($_SESSION['buy_product_1']==1 || $_SESSION['buy_product_2']==2 || $_SESSION['buy_product_5']==5) {?>
     <?php if(isset($_SESSION['buy_product_1']) && $_SESSION['buy_product_1']=='1') { ?> 
      <div class="content2" id="future_tablet_div">
        <div class="content2_l1" style="width:995px;">      
          
          <div style="float: left;padding-right: 10px;">
            <?php AddDropDown("buy_earlier_mentioned_products.xml","future_tablet","style_dd future_store", "Tablet", "", "", "1"); ?>
          </div>
        </div>
      </div>
      <div class="content2" id="future_purchase_tablet">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will purchase the tablet from Croma. Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;"> <?php 
              AddCheckBox1("purchase_product_from_croma_tablet.xml",'N',"purchase_product_from_croma_tablet","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
      </div>
      <div class="content2" id="not_future_purchase_tablet">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will not purchase the tablet from Croma.Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;">  <?php 
              AddCheckBox1("future_purchase_from_croma_tablet.xml",'N',"not_purchase_from_croma_tablet","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
    </div>      
     <?php }
      if(isset($_SESSION['buy_product_2']) && $_SESSION['buy_product_2']!='') { ?>
    <div class="content2" id="future_laptop_div">
      <div class="content2_l1" style="width:995px;">              
              <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("buy_earlier_mentioned_products.xml","future_laptop","style_dd future_store", "Laptop, Computer (Desktop)", "", "", "1"); ?>
            </div>          
        </div>
    </div>
      <div class="content2" id="future_purchase_laptop">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will purchase the laptop from Croma. Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;"> <?php 
              AddCheckBox1("purchase_product_from_croma_laptop.xml",'N',"purchase_product_from_croma_laptop","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
      </div>
      <div class="content2" id="not_future_purchase_laptop">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will not purchase the laptop from Croma.Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;">  <?php 
              AddCheckBox1("future_purchase_from_croma_laptop.xml",'N',"not_purchase_from_croma_laptop","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
    </div>    
      <?php }?>
      <?php
        if(isset($_SESSION['buy_product_5']) && $_SESSION['buy_product_5']!='') { ?>
      <div class="content2" id="future_kitchen_div
      ">
        <div class="content2_l1" style="width:995px;">  
          <div>
              <?php AddDropDown("buy_earlier_mentioned_products.xml","future_kitchen","style_dd future_store", "Kitchen Appliances (Microwave, Mixer, Juicer ,Water Purifier, Air Fryer, etc.)", "", "", "1"); ?>
            </div>
               
        </div>
      </div>
      <div class="content2" id="future_purchase_kitchen" >
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will purchase the kitchen appliance from Croma. Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;"> <?php 
              AddCheckBox1("purchase_product_from_croma_kitchen.xml",'N',"purchase_product_from_croma_kitchen","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
      </div>
      <div class="content2" id="not_future_purchase_kitchen" >
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will not purchase the kitchen appliance from Croma.Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;">  <?php 
              AddCheckBox1("future_purchase_from_croma_kitchen.xml",'N',"not_purchase_from_croma_kitchen","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
    </div>      
      <?php } ?>
    <?php //}
    //if($_SESSION['buy_product_1']!='' || $_SESSION['buy_product_2']!='' || $_SESSION['buy_product_5']!='') {
    ?>
    <?php if(isset($_SESSION['buy_product_3']) && $_SESSION['buy_product_3']!='') { ?>    
      <div class="content2"  id="future_mobile_div">
        <div class="content2_l1" style="width:995px;">
          <div style="float: left;padding-right: 10px;">
            <?php AddDropDown("buy_earlier_mentioned_products.xml","future_mobile","style_dd future_store", "Mobile Phone", "", "", "1"); ?>
          </div>
        </div>
      </div>
      <div class="content2" id="future_purchase_mobile">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will purchase the mobile from Croma. Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;"> <?php 
              AddCheckBox1("purchase_product_from_croma_mobile.xml",'N',"purchase_product_from_croma_mobile","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
      </div>
      <div class="content2" id="not_future_purchase_mobile">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will not purchase the mobile from Croma.Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;">  <?php 
              AddCheckBox1("future_purchase_from_croma_mobile.xml",'N',"not_purchase_from_croma_mobile","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
    </div>      
    <?php }
     if(isset($_SESSION['buy_product_4']) && $_SESSION['buy_product_4']!='') { ?>              
      <div class="content2" id="future_tv_div">
        <div class="content2_l1" style="width:995px;">      
          <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("buy_earlier_mentioned_products.xml","future_tv","style_dd future_store", "Television (LCD/LED/3D)", "", "", "1"); ?>
          </div>
        </div>
      </div>
      <div class="content2" id="future_purchase_tv">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will purchase the television from Croma. Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;"> <?php 
              AddCheckBox1("purchase_product_from_croma_tv.xml",'N',"purchase_product_from_croma_tv","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
      </div>
      <div class="content2" id="not_future_purchase_tv">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will not purchase the television from Croma.Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;">  <?php 
              AddCheckBox1("future_purchase_from_croma_tv.xml",'N',"not_purchase_from_croma_tv","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
    </div>      
    <?php } 
    if(isset($_SESSION['buy_product_6']) && $_SESSION['buy_product_6']!='') { ?>              
    <div class="content2" id="future_appliance_div">
      <div class="content2_l1" style="width:995px;">
        <div>
              <?php AddDropDown("buy_earlier_mentioned_products.xml","future_appliance","style_dd future_store", "Large Appliances (Refrigerator,AC,Washing Machine)", "", "", "1"); ?>
            </div>
        </div>
      </div>
      <div class="content2" id="future_purchase_appliance">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will purchase the large appliance from Croma. Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;"> <?php 
              AddCheckBox1("purchase_product_from_croma_appliance.xml",'N',"purchase_product_from_croma_appliance","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
      </div>
      <div class="content2" id="not_future_purchase_appliance">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will not purchase the large appliance from Croma.Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;">  <?php 
              AddCheckBox1("future_purchase_from_croma_appliance.xml",'N',"not_purchase_from_croma_appliance","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
    </div>      
    <?php } ?> 

<!--new product added--> 
    <?php if(isset($_SESSION['buy_product_9']) && $_SESSION['buy_product_9']!='') { ?>              
    <div class="content2" id="future_personel_care_div">
      <div class="content2_l1" style="width:995px;">
        <div>
              <?php AddDropDown("buy_earlier_mentioned_products.xml","future_personel_care","style_dd future_store", "Personal Care Appliances (Electric shavers, Trimmers, Hair Dryers, etc.)", "", "", "1"); ?>
            </div>
        </div>
      </div>
      <div class="content2" id="future_purchase_personel_care">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will purchase the personel care appliance from Croma. Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;"> <?php 
              AddCheckBox1("purchase_product_from_croma_personel_care.xml",'N',"purchase_product_from_croma_personel_care","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
      </div>
      <div class="content2" id="not_future_purchase_personel_care">
        <div class="content2_l1" style="width:995px;margin-top:5px;">
           <span class="content2_l1_span">You mentioned you will not purchase the personel care appliance from Croma.Please state the reasons of purchasing it from Croma?</span>
        </div>
         <div class="content2_l1" style="width:995px;margin-top:5px;">
          <div style="float:left;margin-right:32px;">  <?php 
              AddCheckBox1("future_purchase_from_croma_personel_care.xml",'N',"not_purchase_from_croma_personel_care","#7FB3E6","0","0","2","7",'100%','',false,array('this.id','this.value','12','12'),'1','300px');
              ?>
          </div> 
        </div>
    </div>      
    <?php } ?>   


<!--new end-->
       <?php //} 
       }?>

  <a onClick="return validate();" class="submit_btn" id="fp_submit" href="javascript:void(0);" style="display:none;"></a>
</form>
</body>
</html>