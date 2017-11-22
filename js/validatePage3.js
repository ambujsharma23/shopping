function validate(){
	var chkVar = true;
	if(chkVar==true)
	{
		chkVar = isFilledSelect("irda","0",'Please select Are you aware that the IRDA (Insurance Regulatory and Development Authority) provides for a free look up period',0);
	}
	
	if(chkVar==true)
	{
		chkVar = isFilledSelect("try_to_return","0",'Please select Did you ever try to return the insurance policy during the free look-up period?',0);
	}
  if(chkVar==true){
    if($("#try_to_return option:selected").val()=='1'){
      if(chkVar==true){
        chkVar = isFilledSelect("policy_lookup_period","0",'Please select  Have you ever returned any policies during the free lookup period',0);  
      }
    }
  }
  if(chkVar==true){
    if($("#try_to_return option:selected").val()=='1'){
      if(chkVar==true){
        chkVar = isFilledSelect("free_lookup_policy","0",'Please select how much was the free lookup period?',0);
      }
    }  
  }
  
  if(chkVar==true){    
    if($("#try_to_return option:selected").val()=='1'){
      var elements = document.querySelectorAll('.return_policy');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select Why did you return that policy? ');
        chkVar = true;
        return false;
      }           
    }  
  }
  if(chkVar==true){
    chkVar = isFilledSelect("surrendered","0",'Please select Which following types of policies have you ever surrendered/closed and after how many years?',0);
  }
  if(chkVar==true){
    if($("#surrendered option:selected").val()!='1' || $("#surrendered option:selected").val()!='0'){
      chkVar = isFilledSelect("surrendered_times","0",'Please select After how many years?',0);
    }    
  }
  if(chkVar==true){
    if($("#surrendered option:selected").val()!='1' || $("#surrendered option:selected").val()!='0'){
      var elements = document.querySelectorAll('.surrender_it');
      var checked = false;
      for (counter = 0; counter < elements.length; counter++)
      { 
        if (elements[counter].checked==true)
        {
          checked = true; 
        }
      }
      if(!checked){
        alert('Please Select Why did you surrender it?');
        chkVar = true;
        return false;
      }
    }
  }
  
  if(chkVar==true){
    if($("input[name='n30_1']").val()==''){
        alert("Please select The agents/salesmen were helpful and cleared all my doubts before closing the deal.");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_2']").val()==''){
        alert("Please select Clarity and accuracy of the specimen (forms) in use");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_3']").val()==''){
        alert("Please select I got the my policy paper on time");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_4']").val()==''){
        alert("Please select Customer service were quick enough to respond to customer requests");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_5']").val()==''){
        alert("Please select Private insurance company staff are well trained and confident people");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_6']").val()==''){
        alert("Please select Government insurance company staff are well trained and confident people");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_7']").val()==''){
        alert("Please select I get regular alerts about premium");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_8']").val()==''){
        alert("Please select Return on insurance policy is well below the benefit illustration shown during the sales of the policy");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_9']").val()==''){
        alert("Please select Private insurance company has very troublesome process for making the claims");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_10']").val()==''){
        alert("Please select Government insurance company has very troublesome process for making the claims");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_11']").val()==''){
        alert("Please select After purchasing the insurance product, the objective of purchasing it has been meet");
        chkVar=true;
        return false;        
    }
  }
  if(chkVar==true){
    if($("input[name='n30_12']").val()==''){
        alert("Please select Insurance maturity or claim money is easily paid/safe with the private companies");
        chkVar=true;
        return false;        
    }
  }
  
  if(chkVar==true){    
    var elements = document.querySelectorAll('.objectives');
    var checked = false;
    for (counter = 0; counter < elements.length; counter++)
    { 
      if (elements[counter].checked==true)
      {
        checked = true; 
      }
    }
    if(!checked){
      alert('Please Select  Which of the following objectives are you planning to achieve by buying new insurance products next year?');
      chkVar = true;
      return false;
    }           
  }  
	if(chkVar){
		document.form1.submit();
	}
	return chkVar;
}
