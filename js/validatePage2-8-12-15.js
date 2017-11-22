function validate(){
	var chkVar = true;

	if(chkVar==true){
		var elements = document.querySelectorAll('.products_bought_last_weekend');
		var checked = false;
		for (counter = 0; counter < elements.length; counter++)
		{
			if (elements[counter].checked==true)
			{
				checked = true;
			}
		}
		if(!checked){
			alert('Please Select And which of the following products did you bought during last weekend i.e 8th August or 9th August 2015?');
			chkVar = true;
			return false;
		}
	}

  if(chkVar==true){
    if(get_id("product_brought_1").checked==true && $("#tablet_store_1 option:selected").val()=="0"){
      chkVar = isFilledSelect("tablet_store_1","0",'Please select Which first stores/retailers did you visit for tablet?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_1").checked==true && $("#tablet_store_2 option:selected").val()=="0"){
      chkVar = isFilledSelect("tablet_store_2","0",'Please select Which second stores/retailers did you visit for tablet?',0);
    }
  }
 if(chkVar==true){
    if(get_id("product_brought_1").checked==true && $("#tablet_store_3 option:selected").val()=="0"){
      chkVar = isFilledSelect("tablet_store_3","0",'Please select Which third stores/retailers did you visit for tablet?',0);
    }
  }


  if(chkVar==true){
    if(get_id("product_brought_2").checked==true && $("#laptop_store_1 option:selected").val()=="0"){
      chkVar = isFilledSelect("laptop_store_1","0",'Please select Which first stores/retailers did you visit for laptop?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_2").checked==true && $("#laptop_store_2 option:selected").val()=="0"){
      chkVar = isFilledSelect("laptop_store_2","0",'Please select Which second stores/retailers did you visit for laptop?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_2").checked==true && $("#laptop_store_3 option:selected").val()=="0"){
      chkVar = isFilledSelect("laptop_store_3","0",'Please select Which third stores/retailers did you visit for laptop?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_3").checked==true && $("#mobile_store_1 option:selected").val()=="0"){
      chkVar = isFilledSelect("mobile_store_1","0",'Please select Which first stores/retailers did you visit for mobile?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_3").checked==true && $("#mobile_store_2 option:selected").val()=="0"){
      chkVar = isFilledSelect("mobile_store_2","0",'Please select Which second stores/retailers did you visit for mobile?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_3").checked==true && $("#mobile_store_3 option:selected").val()=="0"){
      chkVar = isFilledSelect("mobile_store_3","0",'Please select Which third stores/retailers did you visit for mobile?',0);
    }
  }

  if(chkVar==true){
    if(get_id("product_brought_4").checked==true && $("#tv_store_1 option:selected").val()=="0"){
      chkVar = isFilledSelect("tv_store_1","0",'Please select Which first stores/retailers did you visit for television?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_4").checked==true && $("#tv_store_2 option:selected").val()=="0"){
      chkVar = isFilledSelect("tv_store_2","0",'Please select Which second stores/retailers did you visit for television?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_4").checked==true && $("#tv_store_3 option:selected").val()=="0"){
      chkVar = isFilledSelect("tv_store_3","0",'Please select Which third stores/retailers did you visit for television?',0);
    }
  }

  if(chkVar==true){
    if(get_id("product_brought_5").checked==true && $("#kitchen_store_1 option:selected").val()=="0"){
      chkVar = isFilledSelect("kitchen_store_1","0",'Please select Which first stores/retailers did you visit for kitchen appliances?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_5").checked==true && $("#kitchen_store_2 option:selected").val()=="0"){
      chkVar = isFilledSelect("kitchen_store_2","0",'Please select Which second stores/retailers did you visit for kitchen appliances?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_5").checked==true && $("#kitchen_store_3 option:selected").val()=="0"){
      chkVar = isFilledSelect("kitchen_store_3","0",'Please select Which third stores/retailers did you visit for kitchen appliances?',0);
    }
  }

  if(chkVar==true){
    if(get_id("product_brought_6").checked==true && $("#large_appliance_store_1 option:selected").val()=="0"){
      chkVar = isFilledSelect("large_appliance_store_1","0",'Please select Which first stores/retailers did you visit for large appliances?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_6").checked==true && $("#large_appliance_store_2 option:selected").val()=="0"){
      chkVar = isFilledSelect("large_appliance_store_2","0",'Please select Which second stores/retailers did you visit for large appliances?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_6").checked==true && $("#large_appliance_store_3 option:selected").val()=="0"){
      chkVar = isFilledSelect("large_appliance_store_3","0",'Please select Which third stores/retailers did you visit for large appliances?',0);
    }
  }


	if(chkVar==true)
	{
    if(get_id("product_brought_1").checked==true){
      chkVar = isFilledSelect("purchase_tablet","0",'Please select From where did you purchase Tablet?',0);
    }
	}
  if(chkVar==true)
	{
    if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()=="2" || $("#purchase_tablet option:selected").val()=="12")){

      var elements = document.querySelectorAll('.product_from_croma_tablet');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have purchased the tablet from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }

    }else {
    if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()!="2" || $("#purchase_tablet option:selected").val()!="12")){
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
	}


if(chkVar==true)
{
  if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()!="2" && $("#purchase_tablet option:selected").val()!="12")){
      chkVar = isRadioSelected("tablet_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
    } else {
      if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()=="2" || $("#purchase_tablet option:selected").val()=="12")){
        chkVar = isRadioSelected("tablet_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
      }
    }
}


if(chkVar==true)
{
  if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()!="2" && $("#purchase_tablet option:selected").val()!="12")){
      chkVar = isFilledText("tablet_not_recommending","",'Please mention for recommending or not recommending ?.');
    } else {
      if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()=="2" || $("#purchase_tablet option:selected").val()=="12")){
        chkVar = isFilledText("tablet_recommending","",'Please mention for recommending or not recommending ?.');
      }
    }
}



  /*
  if(chkVar==true)
	{
    if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()!="2" || $("#purchase_tablet option:selected").val()!="12")){

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
	}*/

 	if(chkVar==true)
	{
    if(get_id("product_brought_2").checked==true){
      chkVar = isFilledSelect("purchase_laptop","0",'Please select where did you purchase Laptop?',0);
    }
	}
  if(chkVar==true)
	{
    if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()=="2" || $("#purchase_laptop option:selected").val()=="12")){

      var elements = document.querySelectorAll('.product_from_croma_laptop');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have purchased the laptop from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }

    }else {
    if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()!="2" || $("#purchase_laptop option:selected").val()!="12")){
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
	}


  if(chkVar==true)
{
  if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()!="2" && $("#purchase_laptop option:selected").val()!="12")){
      chkVar = isRadioSelected("laptop_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
    } else {
      if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()=="2" || $("#purchase_laptop option:selected").val()=="12")){
        chkVar = isRadioSelected("laptop_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
      }
    }
}


if(chkVar==true)
{
  if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()!="2" && $("#purchase_laptop option:selected").val()!="12")){
      chkVar = isFilledText("laptop_not_recommending","",'Please mention for recommending or not recommending ?.');
    } else {
      if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()=="2" || $("#purchase_laptop option:selected").val()=="12")){
        chkVar = isFilledText("laptop_recommending","",'Please mention for recommending or not recommending ?.');
      }
    }
}



  /*
  if(chkVar==true)
	{
    if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()!="2" || $("#purchase_laptop option:selected").val()!="12")){

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
	}*/

	if(chkVar==true)
	{
    if(get_id("product_brought_3").checked==true){
      chkVar = isFilledSelect("purchase_mobile","0",'Please select where did you purchase Mobile?',0);
    }
	}
  if(chkVar==true)
	{
    if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()=="2" || $("#purchase_mobile option:selected").val()=="12")){

      var elements = document.querySelectorAll('.product_from_croma_mobile');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have purchased the mobile from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }else {
    if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()!="2" || $("#purchase_mobile option:selected").val()!="12")){
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
	}


  if(chkVar==true)
{
  if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()!="2" && $("#purchase_mobile option:selected").val()!="12")){
      chkVar = isRadioSelected("mobile_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
    } else {
      if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()=="2" || $("#purchase_mobile option:selected").val()=="12")){
        chkVar = isRadioSelected("mobile_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
      }
    }
}


if(chkVar==true)
{
  if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()!="2" && $("#purchase_mobile option:selected").val()!="12")){
      chkVar = isFilledText("mobile_not_recommending","",'Please mention for recommending or not recommending ?.');
    } else {
      if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()=="2" || $("#purchase_mobile option:selected").val()=="12")){
        chkVar = isFilledText("mobile_recommending","",'Please mention for recommending or not recommending ?.');
      }
    }
}

/*  if(chkVar==true)
	{
    if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()!="2" || $("#purchase_mobile option:selected").val()!="12")){

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
	}*/
  if(chkVar==true)
	{
    if(get_id("product_brought_4").checked==true){
      chkVar = isFilledSelect("purchase_tv","0",'Please select where did you purchase Television?',0);
    }
	}
  if(chkVar==true)
	{
    if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()=="2" || $("#purchase_tv option:selected").val()=="12")){

      var elements = document.querySelectorAll('.product_from_croma_tv');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have purchased the television from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }else {
    if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()!="2" || $("#purchase_tv option:selected").val()!="12")){
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
	}

  if(chkVar==true)
{
  if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()!="2" && $("#purchase_tv option:selected").val()!="12")){
      chkVar = isRadioSelected("tv_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
    } else {
      if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()=="2" || $("#purchase_tv option:selected").val()=="12")){
        chkVar = isRadioSelected("tv_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
      }
    }
}


if(chkVar==true)
{
  if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()!="2" && $("#purchase_tv option:selected").val()!="12")){
      chkVar = isFilledText("tv_not_recommending","",'Please mention for recommending or not recommending ?.');
    } else {
      if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()=="2" || $("#purchase_tv option:selected").val()=="12")){
        chkVar = isFilledText("tv_recommending","",'Please mention for recommending or not recommending ?.');
      }
    }
}

/*  if(chkVar==true)
	{
    if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()!="2" || $("#purchase_tv option:selected").val()!="12")){

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
	}*/
  if(chkVar==true)
	{
    if(get_id("product_brought_5").checked==true){
      chkVar = isFilledSelect("purchase_kitchen_product","0",'Please select where did you purchase Kitchen Products?',0);
    }
	}
   if(chkVar==true)
	{
    if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()=="2" || $("#purchase_kitchen_product option:selected").val()=="12")){

      var elements = document.querySelectorAll('.product_from_croma_kitchen');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have purchased the kitchen appliances from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }else {
    if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()!="2" || $("#purchase_kitchen_product option:selected").val()!="12")){
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
	}

  if(chkVar==true)
{
  if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()!="2" && $("#purchase_kitchen_product option:selected").val()!="12")){
      chkVar = isRadioSelected("kitchen_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
    } else {
      if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()=="2" || $("#purchase_kitchen_product option:selected").val()=="12")){
        chkVar = isRadioSelected("kitchen_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
      }
    }
}


if(chkVar==true)
{
  if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()!="2" && $("#purchase_kitchen_product option:selected").val()!="12")){
      chkVar = isFilledText("kitchen_not_recommending","",'Please mention for recommending or not recommending ?.');
    } else {
      if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()=="2" || $("#purchase_kitchen_product option:selected").val()=="12")){
        chkVar = isFilledText("kitchen_recommending","",'Please mention for recommending or not recommending ?.');
      }
    }
}

/*  if(chkVar==true)
	{
    if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()!="2" || $("#purchase_kitchen_product option:selected").val()!="12")){

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
	}*/

  if(chkVar==true)
	{
    if(get_id("product_brought_6").checked==true){
      chkVar = isFilledSelect("purchase_appliances","0",'Please select where did you purchase Large appliances?',0);
    }
	}
   if(chkVar==true)
	{
    if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()=="2" || $("#purchase_appliances option:selected").val()=="12")){

      var elements = document.querySelectorAll('.product_from_croma_appliance');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have purchased the large appliances from Croma. Please state the reasons of purchasing it from Croma?');
        chkVar = true;
        return false;
      }
    }else {
    if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()!="2" || $("#purchase_appliances option:selected").val()!="12")){
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
	}

  if(chkVar==true)
{
  if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()!="2" && $("#purchase_appliances option:selected").val()!="12")){
      chkVar = isRadioSelected("appliance_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
    } else {
      if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()=="2" || $("#purchase_appliances option:selected").val()=="12")){
        chkVar = isRadioSelected("appliance_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
      }
    }
}


if(chkVar==true)
{
  if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()!="2" && $("#purchase_appliances option:selected").val()!="12")){
      chkVar = isFilledText("appliance_not_recommending","",'Please mention for recommending or not recommending ?.');
    } else {
      if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()=="2" || $("#purchase_appliances option:selected").val()=="12")){
        chkVar = isFilledText("appliance_recommending","",'Please mention for recommending or not recommending ?.');
      }
    }
}


/*  if(chkVar==true)
	{
    if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()!="2" || $("#purchase_appliances option:selected").val()!="12")){

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
	}*/


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
