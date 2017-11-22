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
			alert('Please Select And which of the following products did you buy during the last 2 weeks? ');
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

//personel care// 25march16//
if(chkVar==true){
    if(get_id("product_brought_9").checked==true && $("#personel_care_store_1 option:selected").val()=="0"){
      chkVar = isFilledSelect("personel_care_store_1","0",'Please select Which first stores/retailers did you visit for personel care?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_9").checked==true && $("#personel_care_store_2 option:selected").val()=="0"){
      chkVar = isFilledSelect("personel_care_store_2","0",'Please select Which second stores/retailers did you visit for personel care?',0);
    }
  }
  if(chkVar==true){
    if(get_id("product_brought_9").checked==true && $("#personel_care_store_3 option:selected").val()=="0"){
      chkVar = isFilledSelect("personel_care_store_3","0",'Please select Which third stores/retailers did you visit for personel care?',0);
    }
  }



	if(chkVar==true)
	{
    if(get_id("product_brought_1").checked==true){
      chkVar = isFilledSelect("purchase_tablet","0",'Please select From where did you purchase Tablet?',0);
    }
	}

  //5/4/
  if(chkVar==true)
  {
    if(get_id("product_brought_1").checked==true){
     chkVar = isFilledSelect("tablet_brand","0",'Please select Which brand did you purchased',0);
   }
  }

  if(chkVar==true)
  {
    if(get_id("product_brought_1").checked==true){
      chkVar = isFilledText("tablet_model_name","0",'Please select model name',0);
    }
  }

    if(chkVar==true)
  {
    if(get_id("product_brought_1").checked==true){
     chkVar = isFilledSelect("tablet_brand_range","0",'Please select price range',0);
   }
  }

  //start offline tablet//
  if(get_id("purchase_tablet").value== '1' || get_id("purchase_tablet").value== '2' || get_id("purchase_tablet").value== '3'||get_id("purchase_tablet").value== '4' || get_id("purchase_tablet").value== '5' || get_id("purchase_tablet").value== '6' ||get_id("purchase_tablet").value== '9' || get_id("purchase_tablet").value== '10' || get_id("purchase_tablet").value== '15'){  
      if(chkVar==true){
          var elements = document.querySelectorAll('.purchase_reason_for_offline_tablet');
          var checked = false;
          for (counter = 0; counter < elements.length; counter++)
          {
            if (elements[counter].checked==true)
            {
              checked = true;
            }
          }
          if(!checked){
            alert(' Please state the reasons of purchasing it from offline');
            chkVar = true;
            return false;
          }
      } 
    }
    //end offline tablet//

  //start online tablet//
   if(get_id("purchase_tablet").value== '7' || get_id("purchase_tablet").value== '8' || get_id("purchase_tablet").value== '11'||get_id("purchase_tablet").value== '12' || get_id("purchase_tablet").value== '19'){  
    if(chkVar==true){
        var elements = document.querySelectorAll('.purchase_reason_for_online_tablet');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert(' Please state the reasons of purchasing it from online');
          chkVar = true;
          return false;
        }
      } 
    }
    //end online tablet// 

     function checkVisitedExt(visitedName) {
      var visited = false;
      $("select[name^="+visitedName+"_]").each(function() {
        if($(this).val() != 2 || $(this).val() != 13) {
          visited = true;
        }
      });

      return visited;
    }
  //start not purchased not visited chroma tablet//  
  if(chkVar==true)
  {
    if((get_id("product_brought_1").checked==true) 
      && ($("#tablet_store_1 option:selected").val()!="2" && $("#tablet_store_1 option:selected").val()!="13")
      && ($("#tablet_store_2 option:selected").val()!="2" && $("#tablet_store_2 option:selected").val()!="13")
      && ($("#tablet_store_3 option:selected").val()!="2" && $("#tablet_store_3 option:selected").val()!="13")
      && ($("#tablet_store_4 option:selected").val()!="2" && $("#tablet_store_4 option:selected").val()!="13")
      && ($("#tablet_store_5 option:selected").val()!="2" && $("#tablet_store_5 option:selected").val()!="13")
      && ($("#tablet_store_6 option:selected").val()!="2" && $("#tablet_store_6 option:selected").val()!="13")
      ) {
     // alert('here');
      var elements = document.querySelectorAll('.not_purchase_reason_for_chroma_both_tablet');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the product from Croma tablet. Please state the reasons for not purchasing from Croma?');
        chkVar = true;
        return false;
      }
    }
  }
//end not purchased not visited chroma//  

//start visited but not purchased chroma tablet//  
    if(chkVar==true)
    {
    if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()!="2" &&   $("#purchase_tablet option:selected").val()!="13")){ 
      //alert('testst');     
      if(checkVisitedExt('tablet_store') == true){
        //alert('here2');
        //alert(checkVisitedExt('tablet_store') == true);
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
        alert('Please select It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma? ');
        chkVar = true;
        return false;
        }
      }
    }
  }
 //end visited but not purchased chroma//  

  //start recommend friend//
    if(chkVar==true)
    {
      if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()!="2" && $("#purchase_tablet option:selected").val()!="13")){
          chkVar = isRadioSelected("tablet_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
        } else {
          if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()=="2" || $("#purchase_tablet option:selected").val()=="13")){
            chkVar = isRadioSelected("tablet_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
          }
        }
    }

    //start recommend //
    if(chkVar==true)
    {
      if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()!="2" && $("#purchase_tablet option:selected").val()!="13")){
          chkVar = isFilledText("tablet_not_recommending","",'Please mention for recommending or not recommending ?.');
        } else {
          if((get_id("product_brought_1").checked==true) && ($("#purchase_tablet option:selected").val()=="2" || $("#purchase_tablet option:selected").val()=="13")){
            chkVar = isFilledText("tablet_recommending","",'Please mention for recommending or not recommending ?.');
          }
        }
    }

   //11may16//
   //Start only store  visited section For TABLET //
   //start recommend friend//
    if(chkVar==true) {
      if(get_id("product_brought_1").checked==true){
      var validateDone = true;
      $(".ex_visited").each(function() {
        var validationDone = true;
        // alert($('.ex_visited').length);
        var dvId = $(this).attr('id');
        if(!$("#"+dvId+" .visited_radio").is(":checked")) {
          alert('You said that you have visited store before making the purchase. How likely are you to recommend this store to a friend or colleague.?');
          $(this).focus();
          validationDone = false;
        }
        else if($("#"+dvId+" .visited_text").val() == '') {
          alert('Please mention for recommending or not recommending?');
          $(this).focus();
          validationDone = false;
        }

        if(validationDone == false) {
          validateDone = false;
          return false;
        }
      });

      if(validateDone == false) {
        return false;
      }      
    }
   } 
  //end only store  visited section // 

  //start laptop section//
   	if(chkVar==true)
  	{
      if(get_id("product_brought_2").checked==true){
        chkVar = isFilledSelect("purchase_laptop","0",'Please select where did you purchase Laptop?',0);
      }
  	}
 //26march//

 //12may16//
  if(chkVar==true)
  {
    if(get_id("product_brought_2").checked==true){
     chkVar = isFilledSelect("laptop_brand","0",'Please select Which brand did you purchased',0);
   }
  }

  if(chkVar==true)
  {
    if(get_id("product_brought_2").checked==true){
      chkVar = isFilledText("laptop_model_name","0",'Please select model name',0);
    }
  }

    if(chkVar==true)
  {
    if(get_id("product_brought_2").checked==true){
     chkVar = isFilledSelect("laptop_brand_range","0",'Please select price range',0);
   }
  }

 
  //start offline laptop//
  if(get_id("purchase_laptop").value== '1' || get_id("purchase_laptop").value== '2' || get_id("purchase_laptop").value== '3'||get_id("purchase_laptop").value== '4' || get_id("purchase_laptop").value== '5' || get_id("purchase_laptop").value== '6' ||get_id("purchase_laptop").value== '9' || get_id("purchase_laptop").value== '10' || get_id("purchase_laptop").value== '15'){  
      if(chkVar==true){
          var elements = document.querySelectorAll('.purchase_reason_for_offline_laptop');
          var checked = false;
          for (counter = 0; counter < elements.length; counter++)
          {
            if (elements[counter].checked==true)
            {
              checked = true;
            }
          }
          if(!checked){
            alert(' Please state the reasons of purchasing it from offline');
            chkVar = true;
            return false;
          }
      } 
    }
    //end offline laptop//

  //start online laptop//
   if(get_id("purchase_laptop").value== '7' || get_id("purchase_laptop").value== '8' || get_id("purchase_laptop").value== '11'||get_id("purchase_laptop").value== '12' || get_id("purchase_laptop").value== '19'){  
    if(chkVar==true){
        var elements = document.querySelectorAll('.purchase_reason_for_online_laptop');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert(' Please state the reasons of purchasing it from online');
          chkVar = true;
          return false;
        }
      } 
    }
    //end online laptop// 

     function checkVisitedExt(visitedName) {
      var visited = false;
      $("select[name^="+visitedName+"_]").each(function() {
        if($(this).val() == 2 || $(this).val() == 13) {
          visited = true;
        }
      });

      return visited;
    }
  //start not purchased not visited chroma laptop//  
  if(chkVar==true)
  {
     if((get_id("product_brought_2").checked==true) 
      && ($("#laptop_store_1 option:selected").val()!="2" && $("#laptop_store_1 option:selected").val()!="13")
      && ($("#laptop_store_2 option:selected").val()!="2" && $("#laptop_store_2 option:selected").val()!="13")
      && ($("#laptop_store_3 option:selected").val()!="2" && $("#laptop_store_3 option:selected").val()!="13")
      && ($("#laptop_store_4 option:selected").val()!="2" && $("#laptop_store_4 option:selected").val()!="13")
      && ($("#laptop_store_5 option:selected").val()!="2" && $("#laptop_store_5 option:selected").val()!="13")
      && ($("#laptop_store_6 option:selected").val()!="2" && $("#laptop_store_6 option:selected").val()!="13")
      ) {
    //if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()!="2" || $("#purchase_laptop option:selected").val()!="13")){
      //alert('here');
      var elements = document.querySelectorAll('.not_purchase_reason_for_chroma_both_laptop');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the product from Croma laptop. Please state the reasons for not purchasing from Croma?');
        chkVar = true;
        return false;
      }
    }

  }//else {

//end not purchased not visited chroma//  

//start visited but not purchased chroma laptop//  
    if(chkVar==true)
    {
    if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()!="2" && $("#purchase_laptop option:selected").val()!="13")){
      if(checkVisitedExt('laptop_store') == true){
        //alert('hhh');
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
        alert('Please select It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma? ');
        chkVar = true;
        return false;
        }
      }
     //}
    }
  }
 //end visited but not purchased chroma// 

//recommending friend//
  if(chkVar==true)
{
  if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()!="2" && $("#purchase_laptop option:selected").val()!="13")){
      chkVar = isRadioSelected("laptop_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
    } else {
      if((get_id("product_brought_2").checked==true) && ($("#purchase_laptop option:selected").val()=="2" || $("#purchase_laptop option:selected").val()=="13")){
        chkVar = isRadioSelected("laptop_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
      }
    }
}

// recommending //
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

  //12may16//
   //Start only store  visited section For LAPTOP //
   //start recommend friend//
    if(chkVar==true) {
      if(get_id("product_brought_2").checked==true){
      var validateDone = true;
      $(".ex_visited").each(function() {
        var validationDone = true;
        // alert($('.ex_visited').length);
        var dvId = $(this).attr('id');
        if(!$("#"+dvId+" .visited_radio").is(":checked")) {
          alert('You said that you have visited store before making the purchase. How likely are you to recommend this store to a friend or colleague.?');
          $(this).focus();
          validationDone = false;
        }
        else if($("#"+dvId+" .visited_text").val() == '') {
          alert('Please mention for recommending or not recommending?');
          $(this).focus();
          validationDone = false;
        }

        if(validationDone == false) {
          validateDone = false;
          return false;
        }
      });

      if(validateDone == false) {
        return false;
      }      
    }
   } 
  //end only store  visited section // 


//Mobile section start//
	if(chkVar==true)
	{
    if(get_id("product_brought_3").checked==true){
      chkVar = isFilledSelect("purchase_mobile","0",'Please select where did you purchase Mobile?',0);
    }
	} 
 //26march16// 

  //12may16//
  if(chkVar==true)
  {
    if(get_id("product_brought_3").checked==true){
     chkVar = isFilledSelect("mobile_brand","0",'Please select Which brand did you purchased',0);
   }
  }

  if(chkVar==true)
  {
    if(get_id("product_brought_3").checked==true){
      chkVar = isFilledText("mobile_model_name","0",'Please select model name',0);
    }
  }

    if(chkVar==true)
  {
    if(get_id("product_brought_3").checked==true){
     chkVar = isFilledSelect("mobile_brand_range","0",'Please select price range',0);
   }
  }
  //end 12may16//

  //start offline mobile//
  if(get_id("purchase_mobile").value== '1' || get_id("purchase_mobile").value== '2' || get_id("purchase_mobile").value== '3'||get_id("purchase_mobile").value== '4' || get_id("purchase_mobile").value== '5' || get_id("purchase_mobile").value== '6' ||get_id("purchase_mobile").value== '9' || get_id("purchase_mobile").value== '10' || get_id("purchase_mobile").value== '15'){  
      if(chkVar==true){
          var elements = document.querySelectorAll('.purchase_reason_for_offline_mobile');
          var checked = false;
          for (counter = 0; counter < elements.length; counter++)
          {
            if (elements[counter].checked==true)
            {
              checked = true;
            }
          }
          if(!checked){
            alert(' Please state the reasons of purchasing it from offline');
            chkVar = true;
            return false;
          }
      } 
    }
    //end offline mobile//

  //start online mobile//
   if(get_id("purchase_mobile").value== '7' || get_id("purchase_mobile").value== '8' || get_id("purchase_mobile").value== '11'||get_id("purchase_mobile").value== '12' || get_id("purchase_mobile").value== '19'){  
    if(chkVar==true){
        var elements = document.querySelectorAll('.purchase_reason_for_online_mobile');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert(' Please state the reasons of purchasing it from online');
          chkVar = true;
          return false;
        }
      } 
    }
    //end online mobile// 

     
  //start not purchased not visited chroma mobile//  
  if(chkVar==true)
  {
     if((get_id("product_brought_3").checked==true) 
      && ($("#mobile_store_1 option:selected").val()!="2" && $("#mobile_store_1 option:selected").val()!="13")
      && ($("#mobile_store_2 option:selected").val()!="2" && $("#mobile_store_2 option:selected").val()!="13")
      && ($("#mobile_store_3 option:selected").val()!="2" && $("#mobile_store_3 option:selected").val()!="13")
      && ($("#mobile_store_4 option:selected").val()!="2" && $("#mobile_store_4 option:selected").val()!="13")
      && ($("#mobile_store_5 option:selected").val()!="2" && $("#mobile_store_5 option:selected").val()!="13")
      && ($("#mobile_store_6 option:selected").val()!="2" && $("#mobile_store_6 option:selected").val()!="13")
      ) {
    //if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()!="2" || $("#purchase_mobile option:selected").val()!="13")){
      //alert('here');
      var elements = document.querySelectorAll('.not_purchase_reason_for_chroma_both_mobile');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the product from Croma mobile. Please state the reasons for not purchasing from Croma?');
        chkVar = true;
        return false;
      }
    }

  }//else {

//end not purchased not visited chroma//  

//start visited but not purchased chroma mobile//  
    if(chkVar==true)
    {
    if((get_id("product_brought_3").checked==true) && ($("#purchase_mobile option:selected").val()!="2" && $("#purchase_mobile option:selected").val()!="13")){
      if(checkVisitedExt('mobile_store') == true){
      //  alert('hhh');
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
        alert('Please select It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma? ');
        chkVar = true;
        return false;
        }
      }
     //}
    }
  }
 //end visited but not purchased chroma// 

 //recommending friend//
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

//recommending//
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

//12may16//
   //Start only store  visited section For MOBILE //
   //start recommend friend//
    if(chkVar==true) {
      if(get_id("product_brought_3").checked==true){
      var validateDone = true;
      $(".ex_visited").each(function() {
        var validationDone = true;
        // alert($('.ex_visited').length);
        var dvId = $(this).attr('id');
        if(!$("#"+dvId+" .visited_radio").is(":checked")) {
          alert('You said that you have visited store before making the purchase. How likely are you to recommend this store to a friend or colleague.?');
          $(this).focus();
          validationDone = false;
        }
        else if($("#"+dvId+" .visited_text").val() == '') {
          alert('Please mention for recommending or not recommending?');
          $(this).focus();
          validationDone = false;
        }

        if(validationDone == false) {
          validateDone = false;
          return false;
        }
      });

      if(validateDone == false) {
        return false;
      }      
    }
   } 
  //end only store  visited section // 


//start tv section//
  if(chkVar==true)
	{
    if(get_id("product_brought_4").checked==true){
      chkVar = isFilledSelect("purchase_tv","0",'Please select where did you purchase Television?',0);
    }
	}
//26march16//
  //12may16//
  if(chkVar==true)
  {
    if(get_id("product_brought_4").checked==true){
     chkVar = isFilledSelect("tv_brand","0",'Please select Which brand did you purchased',0);
   }
  }

  if(chkVar==true)
  {
    if(get_id("product_brought_4").checked==true){
      chkVar = isFilledText("tv_model_name","0",'Please select model name',0);
    }
  }

    if(chkVar==true)
  {
    if(get_id("product_brought_4").checked==true){
     chkVar = isFilledSelect("tv_brand_range","0",'Please select price range',0);
   }
  }
  //end 12may16//



  //start offline tv//
  if(get_id("purchase_tv").value== '1' || get_id("purchase_tv").value== '2' || get_id("purchase_tv").value== '3'||get_id("purchase_tv").value== '4' || get_id("purchase_tv").value== '5' || get_id("purchase_tv").value== '6' ||get_id("purchase_tv").value== '9' || get_id("purchase_tv").value== '10' || get_id("purchase_tv").value== '15'){  
      if(chkVar==true){
          var elements = document.querySelectorAll('.purchase_reason_for_offline_tv');
          var checked = false;
          for (counter = 0; counter < elements.length; counter++)
          {
            if (elements[counter].checked==true)
            {
              checked = true;
            }
          }
          if(!checked){
            alert(' Please state the reasons of purchasing it from offline');
            chkVar = true;
            return false;
          }
      } 
    }
    //end offline tv//

  //start online tv//
   if(get_id("purchase_tv").value== '7' || get_id("purchase_tv").value== '8' || get_id("purchase_tv").value== '11'||get_id("purchase_tv").value== '12' || get_id("purchase_tv").value== '19'){  
    if(chkVar==true){
        var elements = document.querySelectorAll('.purchase_reason_for_online_tv');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert(' Please state the reasons of purchasing it from online');
          chkVar = true;
          return false;
        }
      } 
    }
    //end online tv// 


  //start not purchased not visited chroma tv//  
  if(chkVar==true)
  {
     if((get_id("product_brought_4").checked==true) 
      && ($("#tv_store_1 option:selected").val()!="2" && $("#tv_store_1 option:selected").val()!="13")
      && ($("#tv_store_2 option:selected").val()!="2" && $("#tv_store_2 option:selected").val()!="13")
      && ($("#tv_store_3 option:selected").val()!="2" && $("#tv_store_3 option:selected").val()!="13")
      && ($("#tv_store_4 option:selected").val()!="2" && $("#tv_store_4 option:selected").val()!="13")
      && ($("#tv_store_5 option:selected").val()!="2" && $("#tv_store_5 option:selected").val()!="13")
      && ($("#tv_store_6 option:selected").val()!="2" && $("#tv_store_6 option:selected").val()!="13")
      ) {
    //if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()!="2" || $("#purchase_tv option:selected").val()!="13")){
      //alert('here');
      var elements = document.querySelectorAll('.not_purchase_reason_for_chroma_both_tv');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the product from Croma tv. Please state the reasons for not purchasing from Croma?');
        chkVar = true;
        return false;
      }
    }

  }//else {

//end not purchased not visited chroma//  

//start visited but not purchased chroma tv//  
    if(chkVar==true)
    {
    if((get_id("product_brought_4").checked==true) && ($("#purchase_tv option:selected").val()!="2" && $("#purchase_tv option:selected").val()!="13")){
      if(checkVisitedExt('tv_store') == true){
       // alert('hhh');
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
        alert('Please select It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma? ');
        chkVar = true;
        return false;
        }
      }
     //}
    }
  }
 //end visited but not purchased chroma// 

//  
//recommending friend//
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

//recommending //
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

//12may16//
   //Start only store  visited section For TV //
   //start recommend friend//
    if(chkVar==true) {
      if(get_id("product_brought_4").checked==true){
      var validateDone = true;
      $(".ex_visited").each(function() {
        var validationDone = true;
        // alert($('.ex_visited').length);
        var dvId = $(this).attr('id');
        if(!$("#"+dvId+" .visited_radio").is(":checked")) {
          alert('You said that you have visited store before making the purchase. How likely are you to recommend this store to a friend or colleague.?');
          $(this).focus();
          validationDone = false;
        }
        else if($("#"+dvId+" .visited_text").val() == '') {
          alert('Please mention for recommending or not recommending?');
          $(this).focus();
          validationDone = false;
        }

        if(validationDone == false) {
          validateDone = false;
          return false;
        }
      });

      if(validateDone == false) {
        return false;
      }      
    }
   } 
  //end only store  visited section // 


//start kitchen section//
  if(chkVar==true)
	{
    if(get_id("product_brought_5").checked==true){
      chkVar = isFilledSelect("purchase_kitchen_product","0",'Please select where did you purchase Kitchen Products?',0);
    }
	}
 //26march16//

   //12may16//
  if(chkVar==true)
  {
    if(get_id("product_brought_5").checked==true){
     chkVar = isFilledSelect("kitchen_appliance_brand","0",'Please select Which brand did you purchased',0);
   }
  }

  if(chkVar==true)
  {
    if(get_id("product_brought_5").checked==true){
      chkVar = isFilledText("kitchen_appliance_model_name","0",'Please select model name',0);
    }
  }

    if(chkVar==true)
  {
    if(get_id("product_brought_5").checked==true){
     chkVar = isFilledSelect("kitchen_appliance_brand_range","0",'Please select price range',0);
   }
  }
  //end 12may16//

 
  //start offline kitchen//
  if(get_id("purchase_kitchen_product").value== '1' || get_id("purchase_kitchen_product").value== '2' || get_id("purchase_kitchen_product").value== '3'||get_id("purchase_kitchen_product").value== '4' || get_id("purchase_kitchen_product").value== '5' || get_id("purchase_kitchen_product").value== '6' ||get_id("purchase_kitchen_product").value== '9' || get_id("purchase_kitchen_product").value== '10' || get_id("purchase_kitchen_product").value== '15'){  
      if(chkVar==true){
          var elements = document.querySelectorAll('.purchase_reason_for_offline_kitchen');
          var checked = false;
          for (counter = 0; counter < elements.length; counter++)
          {
            if (elements[counter].checked==true)
            {
              checked = true;
            }
          }
          if(!checked){
            alert(' Please state the reasons of purchasing it from offline');
            chkVar = true;
            return false;
          }
      } 
    }
    //end offline kitchen//

  //start online kitchen//
   if(get_id("purchase_kitchen_product").value== '7' || get_id("purchase_kitchen_product").value== '8' || get_id("purchase_kitchen_product").value== '11'||get_id("purchase_kitchen_product").value== '12' || get_id("purchase_kitchen_product").value== '19'){  
    if(chkVar==true){
        var elements = document.querySelectorAll('.purchase_reason_for_online_kitchen');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert(' Please state the reasons of purchasing it from online');
          chkVar = true;
          return false;
        }
      } 
    }
    //end online kitchen// 

   
  //start not purchased not visited chroma kitchen//  
  if(chkVar==true)
  {
     if((get_id("product_brought_5").checked==true) 
      && ($("#kitchen_store_1 option:selected").val()!="2" && $("#kitchen_store_1 option:selected").val()!="13")
      && ($("#kitchen_store_2 option:selected").val()!="2" && $("#kitchen_store_2 option:selected").val()!="13")
      && ($("#kitchen_store_3 option:selected").val()!="2" && $("#kitchen_store_3 option:selected").val()!="13")
      && ($("#kitchen_store_4 option:selected").val()!="2" && $("#kitchen_store_4 option:selected").val()!="13")
      && ($("#kitchen_store_5 option:selected").val()!="2" && $("#kitchen_store_5 option:selected").val()!="13")
      && ($("#kitchen_store_6 option:selected").val()!="2" && $("#kitchen_store_6 option:selected").val()!="13")
      ) {
    //if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()!="2" || $("#purchase_kitchen_product option:selected").val()!="13")){
      //alert('here');
      var elements = document.querySelectorAll('.not_purchase_reason_for_chroma_both_kitchen');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the product from Croma kitchen. Please state the reasons for not purchasing from Croma?');
        chkVar = true;
        return false;
      }
    }

  }//else {

//end not purchased not visited chroma//  

//start visited but not purchased chroma kitchen//  
    if(chkVar==true)
    {
    if((get_id("product_brought_5").checked==true) && ($("#purchase_kitchen_product option:selected").val()!="2" && $("#purchase_kitchen_product option:selected").val()!="13")){
      if(checkVisitedExt('kitchen_store') == true){
       // alert('hhh');
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
        alert('Please select It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma? ');
        chkVar = true;
        return false;
        }
      }
     //}
    }
  }
 //end visited but not purchased chroma//  
  
//recommending friend//
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

//recommending//
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

//12may16//
   //Start only store  visited section For KITCHEN PRODUCT //
   //start recommend friend//
    if(chkVar==true) {
      if(get_id("product_brought_5").checked==true){
      var validateDone = true;
      $(".ex_visited").each(function() {
        var validationDone = true;
        // alert($('.ex_visited').length);
        var dvId = $(this).attr('id');
        if(!$("#"+dvId+" .visited_radio").is(":checked")) {
          alert('You said that you have visited store before making the purchase. How likely are you to recommend this store to a friend or colleague.?');
          $(this).focus();
          validationDone = false;
        }
        else if($("#"+dvId+" .visited_text").val() == '') {
          alert('Please mention for recommending or not recommending?');
          $(this).focus();
          validationDone = false;
        }

        if(validationDone == false) {
          validateDone = false;
          return false;
        }
      });

      if(validateDone == false) {
        return false;
      }      
    }
   } 
  //end only store  visited section // 


//start large appliance section//
  if(chkVar==true)
	{
    if(get_id("product_brought_6").checked==true){
      chkVar = isFilledSelect("purchase_appliances","0",'Please select where did you purchase Large appliances?',0);
    }
	}
 //26march16//

   //12may16//
  if(chkVar==true)
  {
    if(get_id("product_brought_6").checked==true){
     chkVar = isFilledSelect("large_appliance_brand","0",'Please select Which brand did you purchased',0);
   }
  }

  if(chkVar==true)
  {
    if(get_id("product_brought_6").checked==true){
      chkVar = isFilledText("large_appliance_model_name","0",'Please select model name',0);
    }
  }

    if(chkVar==true)
  {
    if(get_id("product_brought_6").checked==true){
     chkVar = isFilledSelect("large_appliance_brand_range","0",'Please select price range',0);
   }
  }
  //end 12may16//

  
  //start offline appliances//
  if(get_id("purchase_appliances").value== '1' || get_id("purchase_appliances").value== '2' || get_id("purchase_appliances").value== '3'||get_id("purchase_appliances").value== '4' || get_id("purchase_appliances").value== '5' || get_id("purchase_appliances").value== '6' ||get_id("purchase_appliances").value== '9' || get_id("purchase_appliances").value== '10' || get_id("purchase_appliances").value== '15'){  
      if(chkVar==true){
          var elements = document.querySelectorAll('.purchase_reason_for_ofline_appliance');
          var checked = false;
          for (counter = 0; counter < elements.length; counter++)
          {
            if (elements[counter].checked==true)
            {
              checked = true;
            }
          }
          if(!checked){
            alert(' Please state the reasons of purchasing it from offline');
            chkVar = true;
            return false;
          }
      } 
    }
    //end offline appliances//

  //start online appliances//
   if(get_id("purchase_appliances").value== '7' || get_id("purchase_appliances").value== '8' || get_id("purchase_appliances").value== '11'||get_id("purchase_appliances").value== '12' || get_id("purchase_appliances").value== '19'){  
    if(chkVar==true){
        var elements = document.querySelectorAll('.purchase_reason_for_online_appliance');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert(' Please state the reasons of purchasing it from online');
          chkVar = true;
          return false;
        }
      } 
    }
    //end online appliances// 

     
  //start not purchased not visited chroma appliances//  
  if(chkVar==true)
  {
     if((get_id("product_brought_6").checked==true) 
      && ($("#large_appliance_store_1 option:selected").val()!="2" && $("#large_appliance_store_1 option:selected").val()!="13")
      && ($("#large_appliance_store_2 option:selected").val()!="2" && $("#large_appliance_store_2 option:selected").val()!="13")
      && ($("#large_appliance_store_3 option:selected").val()!="2" && $("#large_appliance_store_3 option:selected").val()!="13")
      && ($("#large_appliance_store_4 option:selected").val()!="2" && $("#large_appliance_store_4 option:selected").val()!="13")
      && ($("#large_appliance_store_5 option:selected").val()!="2" && $("#large_appliance_store_5 option:selected").val()!="13")
      && ($("#large_appliance_store_6 option:selected").val()!="2" && $("#large_appliance_store_6 option:selected").val()!="13")
      ) {
    //if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()!="2" || $("#purchase_appliances option:selected").val()!="13")){
      //alert('here');
      var elements = document.querySelectorAll('.not_purchase_reason_for_chroma_both_appliance');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the product from Croma appliances. Please state the reasons for not purchasing from Croma?');
        chkVar = true;
        return false;
      }
    }

  }//else {

//end not purchased not visited chroma//  

//start visited but not purchased chroma appliances//  
    if(chkVar==true)
    {
    if((get_id("product_brought_6").checked==true) && ($("#purchase_appliances option:selected").val()!="2" && $("#purchase_appliances option:selected").val()!="13")){
      if(checkVisitedExt('appliances_store') == true){
        //alert('hhh');
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
        alert('Please select It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma? ');
        chkVar = true;
        return false;
        }
      }
     //}
    }
  }
 //end visited but not purchased chroma// 

 //
 //recommending friend// 
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

//recommending//
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

//12may16//
   //Start only store  visited section For APPLIANCES //
   //start recommend friend//
    if(chkVar==true) {
      if(get_id("product_brought_6").checked==true){
      var validateDone = true;
      $(".ex_visited").each(function() {
        var validationDone = true;
        // alert($('.ex_visited').length);
        var dvId = $(this).attr('id');
        if(!$("#"+dvId+" .visited_radio").is(":checked")) {
          alert('You said that you have visited store before making the purchase. How likely are you to recommend this store to a friend or colleague.?');
          $(this).focus();
          validationDone = false;
        }
        else if($("#"+dvId+" .visited_text").val() == '') {
          alert('Please mention for recommending or not recommending?');
          $(this).focus();
          validationDone = false;
        }

        if(validationDone == false) {
          validateDone = false;
          return false;
        }
      });

      if(validateDone == false) {
        return false;
      }      
    }
   } 
  //end only store  visited section // 


//start personel care section//

  if(chkVar==true)
  {
    if(get_id("product_brought_9").checked==true){
      chkVar = isFilledSelect("purchase_personel_care","0",'Please select where did you purchase Large personel_care?',0);
    }
  }
 //26march16//

  //12may16//
  if(chkVar==true)
  {
    if(get_id("product_brought_9").checked==true){
     chkVar = isFilledSelect("personel_care_brand","0",'Please select Which brand did you purchased',0);
   }
  }

  if(chkVar==true)
  {
    if(get_id("product_brought_9").checked==true){
      chkVar = isFilledText("personel_care_model_name","0",'Please select model name',0);
    }
  }

    if(chkVar==true)
  {
    if(get_id("product_brought_9").checked==true){
     chkVar = isFilledSelect("personel_care_brand_range","0",'Please select price range',0);
   }
  }
  //end 12may16//
  
  //start offline personel_care//
  if(get_id("purchase_personel_care").value== '1' || get_id("purchase_personel_care").value== '2' || get_id("purchase_personel_care").value== '3'||get_id("purchase_personel_care").value== '4' || get_id("purchase_personel_care").value== '5' || get_id("purchase_personel_care").value== '6' ||get_id("purchase_personel_care").value== '9' || get_id("purchase_personel_care").value== '10' || get_id("purchase_personel_care").value== '15'){  
      if(chkVar==true){
          var elements = document.querySelectorAll('.purchase_reason_for_offline_personel_care');
          var checked = false;
          for (counter = 0; counter < elements.length; counter++)
          {
            if (elements[counter].checked==true)
            {
              checked = true;
            }
          }
          if(!checked){
            alert(' Please state the reasons of purchasing it from offline');
            chkVar = true;
            return false;
          }
      } 
    }
    //end offline personel_care//

  //start online personel_care//
   if(get_id("purchase_personel_care").value== '7' || get_id("purchase_personel_care").value== '8' || get_id("purchase_personel_care").value== '11'||get_id("purchase_personel_care").value== '12' || get_id("purchase_personel_care").value== '19'){  
    if(chkVar==true){
        var elements = document.querySelectorAll('.purchase_reason_for_online_personel_care');
        var checked = false;
        for (counter = 0; counter < elements.length; counter++)
        {
          if (elements[counter].checked==true)
          {
            checked = true;
          }
        }
        if(!checked){
          alert(' Please state the reasons of purchasing it from online');
          chkVar = true;
          return false;
        }
      } 
    }
    //end online personel_care// 

   
  //start not purchased not visited chroma personel_care//  
  if(chkVar==true)
  {
     if((get_id("product_brought_9").checked==true) 
      && ($("#personel_care_store_1 option:selected").val()!="2" && $("#personel_care_store_1 option:selected").val()!="13")
      && ($("#personel_care_store_2 option:selected").val()!="2" && $("#personel_care_store_2 option:selected").val()!="13")
      && ($("#personel_care_3 option:selected").val()!="2" && $("#personel_care_3 option:selected").val()!="13")
      && ($("#personel_care_4 option:selected").val()!="2" && $("#personel_care_4 option:selected").val()!="13")
      && ($("#personel_care_5 option:selected").val()!="2" && $("#personel_care_5 option:selected").val()!="13")
      && ($("#personel_care_6 option:selected").val()!="2" && $("#personel_care_6 option:selected").val()!="13")
      ) {
    //if((get_id("product_brought_9").checked==true) && ($("#purchase_personel_care option:selected").val()!="2" || $("#purchase_personel_care option:selected").val()!="13")){
      //alert('here');
      var elements = document.querySelectorAll('.not_purchase_reason_for_chroma_both_personel_care');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      {
        if (elements[counter].checked==true)
        {
          checked = true;
        }
      }
      if(!checked){
        alert('Please Select You mentioned you have not purchased the product from Croma personel care. Please state the reasons for not purchasing from Croma?');
        chkVar = true;
        return false;
      }
    }

  }//else {

//end not purchased not visited chroma//  

//start visited but not purchased chroma personel_care//  
    if(chkVar==true)
    {
    if((get_id("product_brought_9").checked==true) && ($("#purchase_personel_care option:selected").val()!="2" && $("#purchase_personel_care option:selected").val()!="13")){
      if(checkVisitedExt('personel_care_store') == true){
        //alert('hhh');
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
        alert('Please select It seems you have visited Croma store but have not purchased from Croma. Pleases state the reason for not purchasing from Croma? ');
        chkVar = true;
        return false;
        }
      }
     //}
    }
  }
 //end visited but not purchased chroma// 

 //
 //recommending friend// 
  if(chkVar==true)
{
  if((get_id("product_brought_9").checked==true) && ($("#purchase_personel_care option:selected").val()!="2" && $("#purchase_personel_care option:selected").val()!="12")){
      chkVar = isRadioSelected("personel_care_not_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
    } else {
      if((get_id("product_brought_9").checked==true) && ($("#purchase_personel_care option:selected").val()=="2" || $("#purchase_personel_care option:selected").val()=="12")){
        chkVar = isRadioSelected("personel_care_likely_to_recommend","How likely is that you will recommend from which you have purchased to a friend or colleague ?");
      }
    }
}

//recommending//
if(chkVar==true)
{
  if((get_id("product_brought_9").checked==true) && ($("#purchase_personel_care option:selected").val()!="2" && $("#purchase_personel_care option:selected").val()!="12")){
      chkVar = isFilledText("personel_care_not_recommending","",'Please mention for recommending or not recommending ?.');
    } else {
      if((get_id("product_brought_9").checked==true) && ($("#purchase_personel_care option:selected").val()=="2" || $("#purchase_personel_care option:selected").val()=="12")){
        chkVar = isFilledText("personel_care_recommending","",'Please mention for recommending or not recommending ?.');
      }
    }
}

//12may16//
   //Start only store  visited section For PERSONEL CARE //
   //start recommend friend//
    if(chkVar==true) {
      if(get_id("product_brought_9").checked==true){
      var validateDone = true;
      $(".ex_visited").each(function() {
        var validationDone = true;
        // alert($('.ex_visited').length);
        var dvId = $(this).attr('id');
        if(!$("#"+dvId+" .visited_radio").is(":checked")) {
          alert('You said that you have visited store before making the purchase. How likely are you to recommend this store to a friend or colleague.?');
          $(this).focus();
          validationDone = false;
        }
        else if($("#"+dvId+" .visited_text").val() == '') {
          alert('Please mention for recommending or not recommending?');
          $(this).focus();
          validationDone = false;
        }

        if(validationDone == false) {
          validateDone = false;
          return false;
        }
      });

      if(validateDone == false) {
        return false;
      }      
    }
   } 
  //end only store  visited section // 

  //
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
