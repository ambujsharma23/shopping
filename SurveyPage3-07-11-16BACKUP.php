<?php
require("config.php");
require("../survey/assets/lib/htmlfunction.php");
/*if(isset($_POST['product_brought_98']) && $_POST['product_brought_98']!=''){
 $_SESSION['product_brought_98']=$_POST['product_brought_98'];
}*/

/*if(isset($_POST['product_brought_1']) && $_POST['product_brought_1']!=''){
 $_SESSION['product_brought_1']=$_POST['product_brought_1'];
}
*/
//print_r($_SESSION);

/*
echo "<pre>";
print_r($_POST)."<br />";
echo "</pre>";*/
//exit;

$sql = mysql_query("SELECT buy_product_1, buy_product_2, buy_product_3, buy_product_4, buy_product_5, buy_product_6, buy_product_7, buy_product_8, buy_product_9 FROM jc_shopping_home WHERE home_SessionId='".$_REQUEST['SessionId']."' LIMIT 0,1");

$data1 = mysql_fetch_assoc($sql);

$count1 = 0;

if($data1['buy_product_1']!=''){
  $count1 = $count1 + 1;
}

if($data1['buy_product_2']!=''){
  $count1 = $count1 + 1;
}

if($data1['buy_product_3']!=''){
  $count1 = $count1 + 1;
}

if($data1['buy_product_4']!=''){
  $count1 = $count1 + 1;
}

if($data1['buy_product_5']!=''){
  $count1 = $count1 + 1;
}

if($data1['buy_product_6']!=''){
  $count1 = $count1 + 1;
}

if($data1['buy_product_9']!=''){
  $count1 = $count1 + 1;
}

$sql1 = mysql_query("SELECT product_brought_1, product_brought_2, product_brought_3, product_brought_4, product_brought_5, product_brought_6, product_brought_9 FROM jc_shopping_page2 WHERE page2_SessionId='".$_REQUEST['SessionId']."' LIMIT 0,1");

//echo "SELECT product_brought_1, product_brought_2, product_brought_3, product_brought_4, product_brought_5, product_brought_6, product_brought_9 FROM jc_shopping_page2 WHERE page2_SessionId='".$_REQUEST['SessionId']."' LIMIT 0,1";

$data2 = mysql_fetch_assoc($sql1);
/*print_r($data1);
print_r($data2);*/

//exit;

$count2 = 0;

if($data2['product_brought_1']!=''){
  $count2 = $count2 + 1;
}

if($data2['product_brought_2']!=''){
  $count2 = $count2 + 1;
}

if($data2['product_brought_3']!=''){
  $count2 = $count2 + 1;
}

if($data2['product_brought_4']!=''){
  $count2 = $count2 + 1;
}

if($data2['product_brought_5']!=''){
  $count2 = $count2 + 1;
}

if($data2['product_brought_6']!=''){
  $count2 = $count2 + 1;
}

if($data2['product_brought_9']!=''){
  $count2 = $count2 + 1;
}

//echo $count2."-----".$count1;

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
var chkVar = true;

//start first section//

<?php if((isset($_SESSION['product_brought_98']) && $_SESSION['product_brought_98']=='98') || $count1!=$count2){?>
  <?php //if(isset($_SESSION['product_brought_98']) && $_SESSION['product_brought_98']=='98'){ ?>

  if($('#reason_not_buying1 option:selected').val()=="0"){
    alert("Please select 1st reason Tablet");
    return false;
  }
  if($('#reason_not_buying1_2 option:selected').val()=="0"){
    alert('Please slect 2nd reason Tablet');
    return false;
  }

  if($('#reason_not_buying2 option:selected').val()=="0"){
    alert("Please select 1st reason Laptop");
    return false;
  }

  if($('#reason_not_buying2_2 option:selected').val()=="0"){
    alert('Please slect 2nd reason Laptop');
    return false;
  }

   if($('#reason_not_buying3 option:selected').val()=="0"){
    alert("Please select 1st reason Mobile");
    return false;
  }

  if($('#reason_not_buying3_2 option:selected').val()=="0"){
    alert('Please slect 2nd reason Mobile');
    return false;
  }

  if($('#reason_not_buying4 option:selected').val()=="0"){
    alert("Please select 1st reason Tv");
    return false;
  }

  if($('#reason_not_buying4_2 option:selected').val()=="0"){
    alert('Please slect 2nd reason Tv');
    return false;
  }


  if($('#reason_not_buying5 option:selected').val()=="0"){
    alert("Please select 1st reason Kitchen Product");
    return false;
  }

  if($('#reason_not_buying5_2 option:selected').val()=="0"){
    alert('Please slect 2nd reason Kitchen Product');
    return false;
  }

  if($('#reason_not_buying6 option:selected').val()=="0"){
    alert("Please select 1st reason Large Appliances ");
    return false;
  }

  if($('#reason_not_buying6_2 option:selected').val()=="0"){
    alert('Please slect 2nd reason Large Appliances ');
    return false;
  }

  if($('#reason_not_buying9 option:selected').val()=="0"){
    alert("Please select 1st reason Personal Care Appliances");
    return false;
  }

  if($('#reason_not_buying9_2 option:selected').val()=="0"){
    alert('Please slect 2nd reason Personal Care Appliances');
    return false;
  }



<?php if((isset($_SESSION['buy_product_1']) && $_SESSION['buy_product_1']=='1') && ($data1['buy_product_1'] !="" && $data2['product_brought_1'] =="")) { ?>
<?php //if(isset($_SESSION['buy_product_1'])) {
//if($_SESSION['buy_product_1']==1){?>
  if($('#future_tablet option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy tablet?");
    return false;
  }
  if($('#future_tablet option:selected').val()=="2" || $('#future_tablet option:selected').val()=="13"){
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
    if($('#future_tablet option:selected').val()!="2" || $('#future_tablet option:selected').val()!="13"){
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
<?php if((isset($_SESSION['buy_product_2']) && $_SESSION['buy_product_2']=='2') && ($data1['buy_product_2'] !="" && $data2['product_brought_2'] =="")) { ?>
<?php //if(isset($_SESSION['buy_product_2'])) {
//if($_SESSION['buy_product_2']==2){?>
  if($('#future_laptop option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy Laptop?");
    return false;
  }
  if($('#future_laptop option:selected').val()=="2" || $('#future_laptop option:selected').val()=="13"){
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
    if($('#future_laptop option:selected').val()!="2" || $('#future_laptop option:selected').val()!="13"){
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
<?php if((isset($_SESSION['buy_product_3']) && $_SESSION['buy_product_3']=='3') && ($data1['buy_product_3'] !="" && $data2['product_brought_3'] =="")) { ?>
<?php //if(isset($_SESSION['buy_product_3'])){
//if($_SESSION['buy_product_3']==3){?>
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
<?php if((isset($_SESSION['buy_product_4']) && $_SESSION['buy_product_4']=='4') && ($data1['buy_product_4'] !="" && $data2['product_brought_4'] =="")) { ?>
<?php //if(isset($_SESSION['buy_product_4'])){
//if($_SESSION['buy_product_4']==4){?>
  if($('#future_tv option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy Television?");
    return false;
  }
  if($('#future_tv option:selected').val()=="2" || $('#future_tv option:selected').val()=="13"){
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
    if($('#future_tv option:selected').val()!="2" || $('#future_tv option:selected').val()!="13"){
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
<?php if((isset($_SESSION['buy_product_5']) && $_SESSION['buy_product_5']=='5') && ($data1['buy_product_5'] !="" && $data2['product_brought_5'] =="")) { ?>
<?php //if(isset($_SESSION['buy_product_5'])){
//if($_SESSION['buy_product_5']==5){?>
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
<?php if((isset($_SESSION['buy_product_6']) && $_SESSION['buy_product_6']=='6') && ($data1['buy_product_6'] !="" && $data2['product_brought_6'] =="")) { ?>
<?php //if(isset($_SESSION['buy_product_6'])){
  //if(isset($_SESSION['buy_product_6'])==6){?>

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

//personel care//
<?php if((isset($_SESSION['buy_product_9']) && $_SESSION['buy_product_9']=='9') && ($data1['buy_product_9'] !="" && $data2['product_brought_9'] =="")) { ?>
<?php //if(isset($_SESSION['buy_product_9'])==9){?>
  if($('#future_personel_care option:selected').val()=="0"){
    alert("Please select In future from which retailer/store do you intend to buy personel_care Appliances?");
    return false;
  }
    if($('#future_personel_care option:selected').val()=="2" || $('#future_personel_care option:selected').val()=="13"){
    var elements = document.querySelectorAll('.purchase_product_from_croma_personel_care');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you will purchase the personel_care appliances from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
  }else {
   if($('#future_personel_care option:selected').val()!="2" || $('#future_personel_care option:selected').val()!="13"){
      var elements = document.querySelectorAll('.not_purchase_from_croma_personel_care');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the personel_care appliances from Croma.Please state the reasons for not purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }
  }
<?php }?>

//29march//
if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency1","0",'Purchase movie tickets on-line',0);
  }

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency2","0",'Purchase bus/train/flight tickets on-line',0);
  }

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency3","0",'Do Banking transactions like fund transfer etc. on-line',0);
  }

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency4","0",'Download movies, music, etc.',0);
  }

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency5","0",'Browse emails',0);
  }
 if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency6","0",'Browse social networking websites like Facebook, Twitter, etc.',0);
  }
   if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency7","0",'Play Games online',0);
  }

   if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency8","0",'Shop Online',0);
  }

if(get_id("online_shopping_frequency8").value!= '8'){
   if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_device","0",'Through which device do you usually shop online?',0);
  }
}


if(get_id("online_shopping_frequency8").value!= '8'){
    if(chkVar==true){
        var elements = document.querySelectorAll('.category_bought_online');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert('Please Select Which of the following categories have you ever bought online?');
          chkVar = true;
          return false;
        }
    }
}

if(get_id("online_shopping_frequency8").value!= '8'){
    if(chkVar==true){
        var elements = document.querySelectorAll('.shopping_for_electronics_items');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert('Which of the following online shopping portal applications/Mobile Apps do you use on your mobile phone for shopping for electronics items?');
          chkVar = true;
          return false;
        }
    }
   }



//end first section//

//start second section//
<?php }
if(isset($_SESSION['product_brought_1']) || isset($_SESSION['product_brought_2']) || isset($_SESSION['product_brought_3']) || isset($_SESSION['product_brought_4']) || isset($_SESSION['product_brought_5']) || isset($_SESSION['product_brought_6']) || isset($_SESSION['product_brought_7']) || isset($_SESSION['product_brought_8']) || isset($_SESSION['product_brought_9'])){ ?>

<?php if(!isset($_SESSION['product_brought_98'])){ ?>

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency1","0",'Purchase movie tickets on-line',0);
  }

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency2","0",'Purchase bus/train/flight tickets on-line',0);
  }

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency3","0",'Do Banking transactions like fund transfer etc. on-line',0);
  }

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency4","0",'Download movies, music, etc.',0);
  }

  if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency5","0",'Browse emails',0);
  }
 if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency6","0",'Browse social networking websites like Facebook, Twitter, etc.',0);
  }
   if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency7","0",'Play Games online',0);
  }

   if(chkVar==true)
  {
    chkVar = isFilledSelect("online_shopping_frequency8","0",'Shop Online',0);
  }



if(get_id("online_shopping_frequency8").value!= '8'){
    if(chkVar==true){
        var elements = document.querySelectorAll('.category_bought_online');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert('Please Select Which of the following categories have you ever bought online?');
          chkVar = true;
          return false;
        }
    }
}

if(get_id("online_shopping_frequency8").value!= '8'){
    if(chkVar==true){
        var elements = document.querySelectorAll('.shopping_for_electronics_items');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert('Which of the following online shopping portal applications/Mobile Apps do you use on your mobile phone for shopping for electronics items?');
          chkVar = true;
          return false;
        }
    }
   }

<?php }?>


<?php } //end of second block ?>

//18 august
   if(chkVar==true)
        {
          chkVar = isFilledSelect("your_complete_age","0",'Please select your age?',0);
        }
//
  if(chkVar){
    document.forms["form2"].submit();
  }
    return chkVar;
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

///
//surveypage4 start
$(document).ready(function(){
  $("#device_div").hide();
  $("#category_bought_online_div").hide();
  $("#shopping_for_electronics_items_div").hide();

     $("#online_shopping_frequency8").change(function(){
       if($(this).val()!='8'){
          $("#device_div").show();
          $("#category_bought_online_div").show();
          $("#shopping_for_electronics_items_div").show();
        }else {
          $("#device_div").hide();
          $("#category_bought_online_div").hide();
          $("#shopping_for_electronics_items_div").hide();
       }
    });

});
//end page4

</script>

<script>
  //other text box reason//

  $(document).ready(function(){
    //other text for tablet//
    $("#purchase_product_from_croma_tablet_7").click(function(){
      if($('#purchase_product_from_croma_tablet_7').is(":checked")){
        $("#tablet_other1").val('');
        $("#tablet_other_div1").show();
      }
      else {
        $("#tablet_other_div1").hide();
        $("#tablet_other1").val('');
      }
    });

    $("#future_purchase_from_croma_tablet_5").click(function(){
      if($('#future_purchase_from_croma_tablet_5').is(":checked")){
        $("#tablet_other2").val('');
        $("#tablet_other_div2").show();
      }
      else {
        $("#tablet_other_div2").hide();
        $("#tablet_other2").val('');
      }
    });
    //end other text tablet//

//other text for laptop//
    $("#purchase_product_from_croma_laptop_7").click(function(){
      if($('#purchase_product_from_croma_laptop_7').is(":checked")){
        $("#laptop_other1").val('');
        $("#laptop_other_div1").show();
      }
      else {
        $("#laptop_other_div1").hide();
        $("#laptop_other1").val('');
      }
    });

    $("#future_purchase_from_croma_laptop_5").click(function(){
      if($('#future_purchase_from_croma_laptop_5').is(":checked")){
        $("#laptop_other2").val('');
        $("#laptop_other_div2").show();
      }
      else {
        $("#laptop_other_div2").hide();
        $("#laptop_other2").val('');
      }
    });
    //end other text laptop//

        //other text for kitchen//
    $("#purchase_product_from_croma_kitchen_7").click(function(){
      if($('#purchase_product_from_croma_kitchen_7').is(":checked")){
        $("#kitchen_other1").val('');
        $("#kitchen_other_div1").show();
      }
      else {
        $("#kitchen_other_div1").hide();
        $("#kitchen_other1").val('');
      }
    });

    $("#future_purchase_from_croma_kitchen_5").click(function(){
      if($('#future_purchase_from_croma_kitchen_5').is(":checked")){
        $("#kitchen_other2").val('');
        $("#kitchen_other_div2").show();
      }
      else {
        $("#kitchen_other_div2").hide();
        $("#kitchen_other2").val('');
      }
    });
    //end other text kitchen//

    //other text for mobile//
    $("#purchase_product_from_croma_mobile_7").click(function(){
      if($('#purchase_product_from_croma_mobile_7').is(":checked")){
        $("#mobile_other1").val('');
        $("#mobile_other_div1").show();
      }
      else {
        $("#mobile_other_div1").hide();
        $("#mobile_other1").val('');
      }
    });

    $("#future_purchase_from_croma_mobile_5").click(function(){
      if($('#future_purchase_from_croma_mobile_5').is(":checked")){
        $("#mobile_other2").val('');
        $("#mobile_other_div2").show();
      }
      else {
        $("#mobile_other_div2").hide();
        $("#mobile_other2").val('');
      }
    });
    //end other text mobile//

    //other text for tv//
    $("#purchase_product_from_croma_tv_7").click(function(){
      if($('#purchase_product_from_croma_tv_7').is(":checked")){
        $("#tv_other1").val('');
        $("#tv_other_div1").show();
      }
      else {
        $("#tv_other_div1").hide();
        $("#tv_other1").val('');
      }
    });

    $("#future_purchase_from_croma_tv_5").click(function(){
      if($('#future_purchase_from_croma_tv_5').is(":checked")){
        $("#tv_other2").val('');
        $("#tv_other_div2").show();
      }
      else {
        $("#tv_other_div2").hide();
        $("#tv_other2").val('');
      }
    });
    //end other text tv//

        //other text for appliance//
    $("#purchase_product_from_croma_appliance_7").click(function(){
      if($('#purchase_product_from_croma_appliance_7').is(":checked")){
        $("#appliance_other1").val('');
        $("#appliance_other_div1").show();
      }
      else {
        $("#appliance_other_div1").hide();
        $("#appliance_other1").val('');
      }
    });

    $("#future_purchase_from_croma_appliance_5").click(function(){
      if($('#future_purchase_from_croma_appliance_5').is(":checked")){
        $("#appliance_other2").val('');
        $("#appliance_other_div2").show();
      }
      else {
        $("#appliance_other_div2").hide();
        $("#appliance_other2").val('');
      }
    });
    //end other text appliance//


    //other text for personel_care//
    $("#purchase_product_from_croma_personel_care_7").click(function(){
      if($('#purchase_product_from_croma_personel_care_7').is(":checked")){
        $("#pc_other1").val('');
        $("#personel_care_other_div1").show();
      }
      else {
        $("#personel_care_other_div1").hide();
        $("#pc_other1").val('');
      }
    });

    $("#future_purchase_from_croma_personel_care5").click(function(){
      if($('#future_purchase_from_croma_personel_care5').is(":checked")){
        $("#pc_other2").val('');
        $("#personel_care_other_div2").show();
      }
      else {
        $("#personel_care_other_div2").hide();
        $("#pc_other2").val('');
      }
    });
    //end other text personel_care//

    //future intension dropdown//
    //Tablet
    $("#reason_not_buying1").change(function(){
        if($(this).val()=='6'){
          $("#other_reason1").val('');
          $('#other_reason_div1').show();
        }else {
          $("#other_reason1").val('');
          $('#other_reason_div1').hide();
        }
    });

    $("#reason_not_buying1_2").change(function(){
        if($(this).val()=='6'){
          $("#other_reason1_2").val('');
          $('#other_reason_div1_2').show();
        }else {
          $("#other_reason1_2").val('');
          $('#other_reason_div1_2').hide();
        }
    });

    //13may16//
    //laptop
    $("#reason_not_buying2").change(function(){
        if($(this).val()=='6'){
          $("#other_reason2").val('');
          $('#other_reason_div2').show();
        }else {
          $("#other_reason2").val('');
          $('#other_reason_div2').hide();
        }
    });

    $("#reason_not_buying2_2").change(function(){
        if($(this).val()=='6'){
          $("#other_reason2_2").val('');
          $('#other_reason_div2_2').show();
        }else {
          $("#other_reason2_2").val('');
          $('#other_reason_div2_2').hide();
        }
    });
    //Mobile
   $("#reason_not_buying3").change(function(){
        if($(this).val()=='6'){
          $("#other_reason3").val('');
          $('#other_reason_div3').show();
        }else {
          $("#other_reason3").val('');
          $('#other_reason_div3').hide();
        }
    });

    $("#reason_not_buying3_2").change(function(){
        if($(this).val()=='6'){
          $("#other_reason3_2").val('');
          $('#other_reason_div3_2').show();
        }else {
          $("#other_reason3_2").val('');
          $('#other_reason_div3_2').hide();
        }
    });
    //tv
  $("#reason_not_buying4").change(function(){
        if($(this).val()=='6'){
          $("#other_reason4").val('');
          $('#other_reason_div4').show();
        }else {
          $("#other_reason4").val('');
          $('#other_reason_div4').hide();
        }
    });

    $("#reason_not_buying4_2").change(function(){
        if($(this).val()=='6'){
          $("#other_reason4_2").val('');
          $('#other_reason_div4_2').show();
        }else {
          $("#other_reason4_2").val('');
          $('#other_reason_div4_2').hide();
        }
    });
    //kitchen app
       $("#reason_not_buying5").change(function(){
        if($(this).val()=='6'){
          $("#other_reason5").val('');
          $('#other_reason_div5').show();
        }else {
          $("#other_reason5").val('');
          $('#other_reason_div5').hide();
        }
    });

    $("#reason_not_buying5_2").change(function(){
        if($(this).val()=='6'){
          $("#other_reason5_2").val('');
          $('#other_reason_div5_2').show();
        }else {
          $("#other_reason5_2").val('');
          $('#other_reason_div5_2').hide();
        }
    });

    //large appliances
       $("#reason_not_buying6").change(function(){
        if($(this).val()=='6'){
          $("#other_reason7").val('');
          $('#other_reason_div6').show();
        }else {
          $("#other_reason6").val('');
          $('#other_reason_div6').hide();
        }
    });

    $("#reason_not_buying6_2").change(function(){
        if($(this).val()=='6'){
          $("#other_reason6_2").val('');
          $('#other_reason_div6_2').show();
        }else {
          $("#other_reason6_2").val('');
          $('#other_reason_div6_2').hide();
        }
    });
    //personel care
      $("#reason_not_buying9").change(function(){
        if($(this).val()=='6'){
          $("#other_reason9").val('');
          $('#other_reason_div9').show();
        }else {
          $("#other_reason9").val('');
          $('#other_reason_div9').hide();
        }
    });

    $("#reason_not_buying9_2").change(function(){
        if($(this).val()=='6'){
          $("#other_reason9_2").val('');
          $('#other_reason_div9_2').show();
        }else {
          $("#other_reason9_2").val('');
          $('#other_reason_div9_2').hide();
        }
    });

    //category online//
    $("#category_bought_online_17").click(function(){
      if($('#category_bought_online_17').is(":checked")){
        $("#cat_other1").val('');
        $("#cat_other_div1").show();
      }
      else {
        $("#cat_other_div1").hide();
        $("#cat_other1").val('');
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
.content2 {
    border-top: 2px solid #f05523;
    margin: 10px 0 !important;
    padding-top: 10px;
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
      <INPUT type="hidden" name="subId" id="subId" value="<?php echo $_REQUEST["subId"] ?>">


      <br>
      <?php if((isset($_SESSION['product_brought_98']) && $_SESSION['product_brought_98']=='98') || $count1!=$count2)
      {
        ?>
       <?php //if(isset($_SESSION['product_brought_98']) && $_SESSION['product_brought_98']=='98' ){ ?>
       <?php //if($_SESSION['future_intension']){ ?>
       <h1 style="line-height:35px;">Future Intention</h1>

      <!--22march new qsn added-->
      <!--
      <div class="content2">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span">You said that you did not buy “X” in the last week. Please can you state the top 2 reasons for not buying “X”.</span>
        </div>
      </div>

      <div class="content2" id="reason_not_buying_any_product">
        <div class="content2_l1" style="width:995px;">

          <div style="float: left;padding-right: 10px;">
            <?php AddDropDown("reason_not_buying_any_product_last_week.xml","reason_not_buying","style_dd ", "Select 1st Reason", "", "", "1"); ?>
             <div style="margin-top:5px;display:none;" id="other_reason_div1"><input type="text" name="other_reason1" id="other_reason1" placeholder="Other reason" style="width:180px;"></div>
          </div>
          <div style="float: left;padding-right: 10px;">
            <?php AddDropDown("reason_not_buying_any_product_last_week.xml","reason_not_buying2","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
              <div style="margin-top:5px;display:none;" id="other_reason_div2"><input type="text" name="other_reason2" id="other_reason2" placeholder="Other reason" style="width:180px;"></div>
          </div>
        </div>
      </div>
      -->

      <!-- 13May16===================== -->
        <?php
        //  FOR TABLET
        if((isset($_SESSION['buy_product_1']) && $_SESSION['buy_product_1']=='1') && ($data1['buy_product_1'] !="" && $data2['product_brought_1'] =="")) {
          ?>
        <div class="content2">
          <div class="content2_l1" style="width:995px;">
            <span class="content2_l1_span">You said that you did not buy <b>Tablet</b> in the last week. Please can you state the top 2 reasons for not buying <b>Tablet</b>.</span>
          </div>
        </div>

        <div class="content2" id="reason_not_buying_any_product1">
          <div class="content2_l1" style="width:995px;">

            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week.xml","reason_not_buying1","style_dd ", "Select 1st Reason", "", "", "1"); ?>
               <div style="margin-top:5px;display:none;" id="other_reason_div1"><input type="text" name="other_reason1" id="other_reason1" placeholder="Other reason" style="width:180px;"></div>
            </div>
            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week.xml","reason_not_buying1_2","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
                <div style="margin-top:5px;display:none;" id="other_reason_div1_2"><input type="text" name="other_reason1_2" id="other_reason1_2" placeholder="Other reason" style="width:180px;"></div>
            </div>
          </div>
        </div>
          <?php
        }

        //  FOR LAPTOP
        if((isset($_SESSION['buy_product_2']) && $_SESSION['buy_product_2']=='2') && ($data1['buy_product_2'] !="" && $data2['product_brought_2'] =="")) { ?>
        <div class="content2">
          <div class="content2_l1" style="width:995px;">
            <span class="content2_l1_span">You said that you did not buy <b>Laptop</b> in the last week. Please can you state the top 2 reasons for not buying <b>Laptop</b>.</span>
          </div>
        </div>

        <div class="content2" id="reason_not_buying_any_product2">
          <div class="content2_l1" style="width:995px;">

            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week2.xml","reason_not_buying2","style_dd ", "Select 1st Reason", "", "", "1"); ?>
               <div style="margin-top:5px;display:none;" id="other_reason_div2"><input type="text" name="other_reason2" id="other_reason2" placeholder="Other reason" style="width:180px;"></div>
            </div>
            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week2.xml","reason_not_buying2_2","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
                <div style="margin-top:5px;display:none;" id="other_reason_div2_2"><input type="text" name="other_reason2_2" id="other_reason2_2" placeholder="Other reason" style="width:180px;"></div>
            </div>
          </div>
        </div>
          <?php
        }

         //  FOR Mobile
        if((isset($_SESSION['buy_product_3']) && $_SESSION['buy_product_3']=='3') && ($data1['buy_product_3'] !="" && $data2['product_brought_3'] =="")) { ?>
        <div class="content2">
          <div class="content2_l1" style="width:995px;">
            <span class="content2_l1_span">You said that you did not buy <b>Mobile</b> in the last week. Please can you state the top 2 reasons for not buying <b>Mobile</b>.</span>
          </div>
        </div>

        <div class="content2" id="reason_not_buying_any_product3">
          <div class="content2_l1" style="width:995px;">

            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week3.xml","reason_not_buying3","style_dd ", "Select 1st Reason", "", "", "1"); ?>
               <div style="margin-top:5px;display:none;" id="other_reason_div3"><input type="text" name="other_reason3" id="other_reason3" placeholder="Other reason" style="width:180px;"></div>
            </div>
            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week3.xml","reason_not_buying3_2","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
                <div style="margin-top:5px;display:none;" id="other_reason_div3_2"><input type="text" name="other_reason3_2" id="other_reason3_2" placeholder="Other reason" style="width:180px;"></div>
            </div>
          </div>
        </div>
          <?php
        }

        //  FOR TV
        if((isset($_SESSION['buy_product_4']) && $_SESSION['buy_product_4']=='4') && ($data1['buy_product_4'] !="" && $data2['product_brought_4'] =="")) { ?>
        <div class="content2">
          <div class="content2_l1" style="width:995px;">
            <span class="content2_l1_span">You said that you did not buy <b>Television</b> in the last week. Please can you state the top 2 reasons for not buying <b>Television</b>.</span>
          </div>
        </div>

        <div class="content2" id="reason_not_buying_any_product4">
          <div class="content2_l1" style="width:995px;">

            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week4.xml","reason_not_buying4","style_dd ", "Select 1st Reason", "", "", "1"); ?>
               <div style="margin-top:5px;display:none;" id="other_reason_div4"><input type="text" name="other_reason4" id="other_reason4" placeholder="Other reason" style="width:180px;"></div>
            </div>
            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week4.xml","reason_not_buying4_2","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
                <div style="margin-top:5px;display:none;" id="other_reason_div4_2"><input type="text" name="other_reason4_2" id="other_reason4_2" placeholder="Other reason" style="width:180px;"></div>
            </div>
          </div>
        </div>
          <?php
        }

        //  FOR Kitchen Appliances
        if((isset($_SESSION['buy_product_5']) && $_SESSION['buy_product_5']=='5') && ($data1['buy_product_5'] !="" && $data2['product_brought_5'] =="")) { ?>
        <div class="content2">
          <div class="content2_l1" style="width:995px;">
            <span class="content2_l1_span">You said that you did not buy <b>Kitchen Appliances </b> in the last week. Please can you state the top 2 reasons for not buying <b>Kitchen Appliances </b>.</span>
          </div>
        </div>

        <div class="content2" id="reason_not_buying_any_product5">
          <div class="content2_l1" style="width:995px;">

            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week5.xml","reason_not_buying5","style_dd ", "Select 1st Reason", "", "", "1"); ?>
               <div style="margin-top:5px;display:none;" id="other_reason_div5"><input type="text" name="other_reason5" id="other_reason5" placeholder="Other reason" style="width:180px;"></div>
            </div>
            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week5.xml","reason_not_buying5_2","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
                <div style="margin-top:5px;display:none;" id="other_reason_div5_2"><input type="text" name="other_reason5_2" id="other_reason5_2" placeholder="Other reason" style="width:180px;"></div>
            </div>
          </div>
        </div>
          <?php
        }

        //  FOR Large Appliances
        if((isset($_SESSION['buy_product_6']) && $_SESSION['buy_product_6']=='6') && ($data1['buy_product_6'] !="" && $data2['product_brought_6'] =="")) { ?>
        <div class="content2">
          <div class="content2_l1" style="width:995px;">
            <span class="content2_l1_span">You said that you did not buy <b>Large Appliances </b> in the last week. Please can you state the top 2 reasons for not buying <b>Large Appliances </b>.</span>
          </div>
        </div>

        <div class="content2" id="reason_not_buying_any_product6">
          <div class="content2_l1" style="width:995px;">

            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week6.xml","reason_not_buying6","style_dd ", "Select 1st Reason", "", "", "1"); ?>
               <div style="margin-top:5px;display:none;" id="other_reason_div6"><input type="text" name="other_reason6" id="other_reason6" placeholder="Other reason" style="width:180px;"></div>
            </div>
            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week6.xml","reason_not_buying6_2","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
                <div style="margin-top:5px;display:none;" id="other_reason_div6_2"><input type="text" name="other_reason6_2" id="other_reason6_2" placeholder="Other reason" style="width:180px;"></div>
            </div>
          </div>
        </div>
          <?php
        }

         //  FOR Personal Care Appliances
        if((isset($_SESSION['buy_product_9']) && $_SESSION['buy_product_9']=='9') && ($data1['buy_product_9'] !="" && $data2['product_brought_9'] =="")) { ?>
        <div class="content2">
          <div class="content2_l1" style="width:995px;">
            <span class="content2_l1_span">You said that you did not buy <b>Personal Care Appliances</b> in the last week. Please can you state the top 2 reasons for not buying <b>Personal Care Appliances</b>.</span>
          </div>
        </div>

        <div class="content2" id="reason_not_buying_any_product9">
          <div class="content2_l1" style="width:995px;">

            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week9.xml","reason_not_buying9","style_dd ", "Select 1st Reason", "", "", "1"); ?>
               <div style="margin-top:5px;display:none;" id="other_reason_div9"><input type="text" name="other_reason9" id="other_reason9" placeholder="Other reason" style="width:180px;"></div>
            </div>
            <div style="float: left;padding-right: 10px;">
              <?php AddDropDown("reason_not_buying_any_product_last_week9.xml","reason_not_buying9_2","style_dd ", "Select 2nd Reason", "", "", "1"); ?>
                <div style="margin-top:5px;display:none;" id="other_reason_div9_2"><input type="text" name="other_reason9_2" id="other_reason9_2" placeholder="Other reason" style="width:180px;"></div>
            </div>
          </div>
        </div>
          <?php
        }

        ?>
      <!-- 13 May 16===================== -->
      <!--end-->
      <?php //} ?>


       <?php //if(isset($_SESSION['product_brought_98']) && $_SESSION['product_brought_98']=='98'){ ?>
      <?php
    /*  echo "<pre>";
      print_r($_POST)."<br />";
      print_r($_SESSION)."<br />";
      echo "</pre>";*/
      //exit;
      ?>
      <div class="content2">
        <div class="content2_l1" style="width:995px;">
          <span class="content2_l1_span">In future from which retailer/store do you intend to buy earlier mentioned products?</span>
        </div>



    <?php //if($_SESSION['buy_product_1']==1 || $_SESSION['buy_product_2']==2 || $_SESSION['buy_product_5']==5) {?>
     <?php if((isset($_SESSION['buy_product_1']) && $_SESSION['buy_product_1']=='1') && ($data1['buy_product_1'] !="" && $data2['product_brought_1'] =="")) { ?>
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
              <span id="tablet_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tablet_other1" id="tablet_other1" placeholder="other reason"></span>
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
              <span id="tablet_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tablet_other2" id="tablet_other2" placeholder="other reason"></span>
          </div>
        </div>
    </div>
     <?php }?>

       <?php if((isset($_SESSION['buy_product_2']) && $_SESSION['buy_product_2']=='2') && ($data1['buy_product_2'] !="" && $data2['product_brought_2'] =="")) { ?>
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
              <span id="laptop_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="laptop_other1" id="laptop_other1" placeholder="other reason"></span>

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
              <span id="laptop_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="laptop_other2" id="laptop_other2" placeholder="other reason"></span>
          </div>
        </div>
    </div>
      <?php }?>
        <?php if((isset($_SESSION['buy_product_5']) && $_SESSION['buy_product_5']=='5') && ($data1['buy_product_5'] !="" && $data2['product_brought_5'] =="")) { ?>
      <?php// if(isset($_SESSION['buy_product_5']) && $_SESSION['buy_product_5']!='' && $data2['product_brought_5'] =="") { ?>
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
              <span id="kitchen_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="kitchen_other1" id="kitchen_other1" placeholder="other reason"></span>
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
              <span id="kitchen_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="kitchen_other2" id="kitchen_other2" placeholder="other reason"></span>
          </div>
        </div>
    </div>
      <?php } ?>

  <?php if((isset($_SESSION['buy_product_3']) && $_SESSION['buy_product_3']=='3') && ($data1['buy_product_3'] !="" && $data2['product_brought_3'] =="")) { ?>
    <?php //if(isset($_SESSION['buy_product_3']) && $_SESSION['buy_product_3']!='' && $data2['product_brought_3'] =="") { ?>
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
                <span id="mobile_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="mobile_other1" id="mobile_other1" placeholder="other reason"></span>
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
              <span id="mobile_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="mobile_other2" id="mobile_other2" placeholder="other reason"></span>
          </div>
        </div>
    </div>
    <?php } ?>
  <?php if((isset($_SESSION['buy_product_4']) && $_SESSION['buy_product_4']=='4') && ($data1['buy_product_4'] !="" && $data2['product_brought_4'] =="")) { ?>
    <?php //if(isset($_SESSION['buy_product_4']) && $_SESSION['buy_product_4']!='' && $data2['product_brought_4'] =="") { ?>
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
              <span id="tv_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tv_other1" id="tv_other1" placeholder="other reason"></span>
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
              <span id="tv_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="tv_other2" id="tv_other2" placeholder="other reason"></span>
          </div>
        </div>
    </div>
    <?php } ?>
       <?php if((isset($_SESSION['buy_product_6']) && $_SESSION['buy_product_6']=='6') && ($data1['buy_product_6'] !="" && $data2['product_brought_6'] =="")) { ?>
    <?php //if(isset($_SESSION['buy_product_6']) && $_SESSION['buy_product_6']!='' && $data2['product_brought_6'] =="") { ?>
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
               <span id="appliance_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="appliance_other1" id="appliance_other1" placeholder="other reason"></span>
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
               <span id="appliance_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="appliance_other2" id="appliance_other2" placeholder="other reason"></span>
          </div>
        </div>
    </div>
    <?php } ?>

<!--new product added-->
  <?php if((isset($_SESSION['buy_product_9']) && $_SESSION['buy_product_9']=='9') && ($data1['buy_product_9'] !="" && $data2['product_brought_9'] =="")) { ?>
    <?php //if(isset($_SESSION['buy_product_9']) && $_SESSION['buy_product_9']!='' && $data2['product_brought_9'] =="") { ?>
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
              <span id="personel_care_other_div1" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="pc_other1" id="pc_other1" placeholder="other reason"></span>
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
              <span id="personel_care_other_div2" style="display:none; padding-left:2px; margin-top:10px;"><input type="text" value="" name="pc_other2" id="pc_other2" placeholder="other reason"></span>
          </div>
        </div>
    </div>
    <?php } ?>


<?php if(isset($_SESSION['product_brought_98']) && $_SESSION['product_brought_98']=='98'){ ?>
        <!--start surveypage4 -->
        <h1 style="line-height:35px;">ONLINE SHOPPING BEHAVIOUR</h1>
    <div><span style="margin:10 0px" class="content2_l1_span">How frequently do you do each of the following activities online?</span></div>
   <div class="content2-" id="online_shopping_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Purchase movie tickets on-line</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency1","style_dd", "Purchase movie tickets on-line", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Purchase bus/train/flight tickets on-line</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency2","style_dd", "Purchase bus/train/flight tickets on-line", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Do Banking transactions like fund transfer etc. on-line</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency3","style_dd", "Do Banking transactions like fund transfer etc. on-line", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Download movies, music, etc.</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency4","style_dd", "Download movies, music, etc.", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Browse emails</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency5","style_dd", "Browse emails", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Browse social networking websites like Facebook, Twitter, etc.</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency6","style_dd", "Browse social networking websites like Facebook, Twitter, etc.", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Play Games online</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency7","style_dd", "Play Games online", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Shop Online</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency8","style_dd", "Shop Online", "", "", "1");?>
            </div>
        </div>

  </div>
<!--q22 end-->

<div style="clear:both;"></div>
  <div class="content2_l1" style="width:995px; padding-left:0px;" id="device_div">
        <span class="content2_l1_span" style="width:70%">Through which device do you usually shop online?</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("device_usualy_shop_online.xml","online_shopping_device","style_dd", "Select Device", "", "", "1");?>
            </div>
        </div>
<div style="clear:both;"></div>



    <div class="content2" id="category_bought_online_div">
      <span class="content2_l1_span">Which of the following categories have you ever bought online?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("category_bought_online.xml",'N',"category_bought_online","#7FB3E6","0","0","5","7",'100%','checknone1',false,array('this.id','this.value','20','12'),'1','300px');
              ?>
              <span id="cat_other_div1" style="display:none; margin-left: -70px; margin-top:10px;"><input type="text" value="" name="cat_other1" id="cat_other1" placeholder="other reason"></span>

              </div>
        </div>
    </div>
 <div class="content2" id="shopping_for_electronics_items_div">
      <span class="content2_l1_span">Which of the following online shopping portal applications/Mobile Apps do you use on your mobile phone for shopping for electronics items?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("shopping_for_electronics_items.xml",'N',"shopping_for_electronics_items","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>


</div>

<!--new end-->
       <?php }?>
<?php }?>

<!--start second section-->
<?php if(!isset($_SESSION['product_brought_98'])){ ?>
       <!--start surveypage4 -->
         <h1 style="line-height:35px;">ONLINE SHOPPING BEHAVIOUR</h1>
         <span style="margin:10 0px" class="content2_l1_span">How frequently do you do each of the following activities online?</span>
   <div class="content2-" id="online_shopping_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Purchase movie tickets on-line</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency1","style_dd", "Purchase movie tickets on-line", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Purchase bus/train/flight tickets on-line</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency2","style_dd", "Purchase bus/train/flight tickets on-line", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Do Banking transactions like fund transfer etc. on-line</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency3","style_dd", "Do Banking transactions like fund transfer etc. on-line", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Download movies, music, etc.</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency4","style_dd", "Download movies, music, etc.", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Browse emails</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency5","style_dd", "Browse emails", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Browse social networking websites like Facebook, Twitter, etc.</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency6","style_dd", "Browse social networking websites like Facebook, Twitter, etc.", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Play Games online</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency7","style_dd", "Play Games online", "", "", "1");?>
            </div>
        </div>

      <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Shop Online</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("online_frequency.xml","online_shopping_frequency8","style_dd", "Shop Online", "", "", "1");?>
            </div>
        </div>


<!--q22 end-->

    <div class="content2" id="device_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Through which device do you usually shop online?</span>
           <div style="float:left;margin-right: 20px;">
            <?php AddDropDown("device_usualy_shop_online.xml","online_shopping_device","style_dd", "Select Device", "", "", "1");?>
            </div>
        </div>
      </div>

    <div class="content2" id="category_bought_online_div">
      <span class="content2_l1_span">Which of the following categories have you ever bought online?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("category_bought_online.xml",'N',"category_bought_online","#7FB3E6","0","0","5","7",'100%','checknone1',false,array('this.id','this.value','20','12'),'1','300px');
              ?></div>
        </div>
    </div>
 <div class="content2" id="shopping_for_electronics_items_div">
      <span class="content2_l1_span">Which of the following online shopping portal applications/Mobile Apps do you use on your mobile phone for shopping for electronics items?</span>
        <div class="content2_l1">
          <div style="float: left;margin-right: 20px;">
             <?php
              AddCheckBox1("shopping_for_electronics_items.xml",'N',"shopping_for_electronics_items","#7FB3E6","0","0","2","7",'100%','checknone1',false,array('this.id','this.value','12','12'),'1','300px');
              ?></div>
        </div>
    </div>



   </div>
  <!---end surveypage4-->
 <?php }?>

  <!--19 august add new age question dropdown-->
   <div class="content2" id="your_age_div">
        <div class="content2_l1" style="width:995px;">
        <span class="content2_l1_span" style="width:70%">Your completed age</span>
           <div style="float:left;margin-right: 20px;">
           <select  name="your_complete_age"  class="1-100 style_dd" id="your_complete_age">
          </select>
            <?php //AddDropDown("device_usualy_shop_online.xml","online_shopping_device","style_dd", "Select Device", "", "", "1");?>
            </div>
        </div>
      </div> 

<div style="clear:both;"></div>



  <!--19 august add new age question dropdown-->
<!--   <div class="content2" id="your_age_div" >
    <div style="float:left; width:70%;"> <span class="content2_l1_span" style="width:1000px;">Your completed age</span> </div>
    <div style="float:right; width:30%;">
      <div class="content2_l1">
        <div style="float:left;margin-right: 20px;">
          <select  name="your_complete_age"  class="1-100 style_dd" id="your_complete_age">
          </select>
          <?php //AddDropDown("assets_you_own.xml","assets_you_own","style_dd", "Select", "", "", "1"); ?>
        </div>
      </div>
    </div>
  </div> -->
<!--end-->



  <a onClick="return validate();" class="submit_btn" id="fp_submit" href="javascript:void(0);" style="display:none;"></a>
</form>
</body>
</html>

<script type="text/javascript">
     $(function(){
        var $select = $(".1-100");
        for (i=1;i<=100;i++){
            $select.append($('<option></option>').val(i).html(i))
        }
    });


</script>