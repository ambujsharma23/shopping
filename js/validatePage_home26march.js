function validate()
{
	var chkVar = true;
	 	
	if(chkVar==true)
	{
		chkVar = isFilledSelect("state_name","0",'Please select state.',0);
	}
	if(chkVar==true)
	{
		chkVar = isFilledSelect("district","0",'Please select city/town.',0);
	}
  if(chkVar==true)
	{
    if($("#district option:selected").val()=='97'){
			chkVar = isFilledText("other_city",'','Please Enter other city name.');      
    }
	}
  		
	if(chkVar==true)
	{
		chkVar = isFilledSelect("gender","0",'Please select Gender.',0);
	}
	
	if(chkVar==true)
	{
		chkVar = isFilledSelect("age","0",'Please select Age.',0);
	}
  
	
	if(chkVar==true)
	{
		chkVar = isFilledSelect("highest_education","0",'Please select your Highest Education.',0);
	}
	
	if(chkVar==true)
	{
		chkVar = isFilledSelect("current_occupation","0",'Please select your current cccupation.',0);
	}
	
		
	if(chkVar==true)
	{
		chkVar = isFilledSelect("yes_no","0",'Please select Do you contribute the most towards the monthly household expense of your household (household means all members sharing the same kitchen)?',0);
	}
	
	if(chkVar==true)
  {
      if(get_id("yes_no").value == '2')
      {      
        chkVar = isFilledSelect("highest_education_contribute","0",'Please select highest level of education of the person contributing maximum towards monthly household expenses? .',0);
      }
  }
	if(chkVar==true)
  {
      if(get_id("yes_no").value == '2')
      {
        chkVar = isFilledSelect("current_occupation_contribution","0",'Please select current occupation of the person contributing maximum towards monthly household expenses?',0);
      }
  }
		
	
	if(chkVar==true){
			if(get_id("email").value == '') {
				chkVar = isFilledText("email",'',' Please enter your email Id.');
			}
	}
	if(chkVar==true){  
  //  if(($('#contact_me_2').checked==false) || ($('#contact_me_1').checked==false))
    if ((get_id("contact_me_1").checked == false) && (get_id("contact_me_2").checked == false ) ){
      alert("Please select Would you like us to contact you?");
      return false;
      chkVar=true;
    }
  }
    
	if(chkVar==true){
		var elements = document.querySelectorAll('.products');
		var checked = false;
		for (counter = 0; counter < elements.length; counter++)
		{ 
			if (elements[counter].checked==true)
			{
				checked = true; 
			}
		}
		if(!checked){
			alert('Please Select Did you look around to buy any of the following products during the last weekend, i.e., 8th August or 9th August 2015?');
			chkVar = true;
			return false;
		}	
	}
  if(chkVar==true)
	{
    if(get_id("buy_product_8").checked==true){
      chkVar = isFilledText("buy_product_other",'','Please enter other value for Did you look around to buy any of the following products during the last weekend, i.e., 8th August or 9th August 2015?');    
    }
  }
  
  if(chkVar==true){
    if(get_id("buy_product_1").checked==true){
        chkVar = isFilledSelect("search_tablet","0",'Please select where all did you search for Tablet?',0);      
    }  
  }
  if(chkVar==true){
    if(get_id("buy_product_2").checked==true){
        chkVar = isFilledSelect("search_laptop","0",'Please select where all did you search for Laptop?',0);      
    }  
  }
  if(chkVar==true){
    if(get_id("buy_product_3").checked==true){
        chkVar = isFilledSelect("search_mobile","0",'Please select where all did you search for Mobile?',0);      
    }  
  }
  if(chkVar==true){
    if(get_id("buy_product_4").checked==true){
        chkVar = isFilledSelect("search_tv","0",'Please select where all did you search for Television?',0);      
    }  
  }
  if(chkVar==true){
    if(get_id("buy_product_5").checked==true){
        chkVar = isFilledSelect("search_kitchen_product","0",'Please select where all did you search for Kitchen Products?',0);      
    }  
  }
  if(chkVar==true){
    if(get_id("buy_product_6").checked==true){
        chkVar = isFilledSelect("search_appliances","0",'Please select where all did you search for large Appliances?',0);      
    }  
  }

    if(chkVar==true){
    if(get_id("buy_product_9").checked==true){
        chkVar = isFilledSelect("search_personal_care","0",'Please select where all did you search for personel care',0);      
    }  
  }
  
	if(chkVar==true){
		var elements = document.querySelectorAll('.ads_from_retailer');
		var checked = false;
		for (counter = 0; counter < elements.length; counter++)
		{ 
			if (elements[counter].checked==true)
			{
				checked = true; 
			}
		}
		if(!checked){
			alert('Please Select Recently did you see any ads from any retailers for the product you have mentioned earlier?');
			chkVar = true;
			return false;
		}	
	}  
  
  if(chkVar==true)
	{
    if(get_id("retailer_ads_13").checked==true){
      chkVar = isFilledText("recent_other",'','Please enter other value for Recently did you see any ads from any retailers for the product you have mentioned earlier?');    
    }
  }  
  

	if(chkVar){
		document.form2.submit();
	}
	return chkVar;
}
function checknone1(id,value,countchk,qid)
{
	ids = id.split("_");
  check_id = ids[0]+"_"+ids[1]+"_";
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
