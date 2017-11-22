objdataAjax = getAjaxObj();
updateAjax = getAjaxObj();
function noBack()
{ 
	window.history.forward();
}

String.prototype.trim = function() 
{
	var x = this;
	x = x.replace(/^\s*(.*)/, "$1");
	x = x.replace(/(.*?)\s*$/, "$1");
	return x;
}

//Email Validation
function isEmailAddr(email, errMsg)
{
  var result = false;
  email = get_id(email);
  var theStr = new String(email.value);
  var index = theStr.indexOf("@");
  if (index > 0)
  {
    var pindex = theStr.indexOf(".",index);
    if ((pindex > index+1) && (theStr.length > pindex+1))
	{
		result = true;
	}
  }
  if(result == false)
  {
	alert(errMsg);
	email.focus();
  }
  return result;
}

//Validate checkbox
function validateCheckbox(chkvarnames,reqCount,optioncount,errMsg)
{
	var temp = false;
	varArray = chkvarnames.split(",");
    checkedcount = 0;
     for(i=0; i<optioncount;i++)
	{
		chkname = varArray[i];
		chkVar1= get_id(chkname).checked;
		if(chkVar1== true)
		{
			checkedcount++;
		}
	}
    if(checkedcount < reqCount )
	{
      alert(errMsg);
	  	get_id(varArray[0]).focus();
	 // tooltip(errMsg,get_id(varArray[0]),25);
	  //setTimeout("hidetooltip()",5000);
	   return false;
	}
	else
	{
		return true;
	}
};

function checkSpace(id,msg)
{
	var alpha;
	var flag = true;
	str = trim(get_id(id).value);
	for (i = 0; i < str.length; i++)
	{
		alpha = str.charAt(i);
		if(alpha==" " || alpha=="")
		{
			alert(msg);
			get_id(id).focus();
			flag = false;
			break;
		}
	}
	return flag;
}

//Validate Numeric Value
function isNumeric(st, errMsg)
{
	var Char;
  if(!(st))
  {
  	st = get_id(st);
  }
	sText = st.value;
	var IsNumeric = true;
	var blnk = "0123456789.-";
	var blnkcnt = 0;
	for (i = 0; i < sText.length; i++)
	{
		Char = sText.charAt(i);
		if (blnk.indexOf(Char) == -1)
		{
			IsNumeric = false;
		}
	}
	if(IsNumeric == false)
	{
		if(errMsg != '')
		{
			alert(errMsg);
			st.focus();
		}
	}
	return IsNumeric;
}

//value is numeric
function isAnyNumeric(st, mode, errMsg)
{
	// Function to check if user input has any Numeric value.
	// For example, user enters 1232s324 OR sw23232 OR 2342343sdhs, it would return TRUE.
	// But if user enters "asgshsgd", it would return FALSE
	var Char;
	var chkMode = mode;
	st =  get_id(st);
	sText = st.value;
	var IsNumeric = false;
	var blnk = "0123456789.-";
	var blnkcnt = 0;
	for (i = 0; i < sText.length; i++)
	{
		Char = sText.charAt(i);
		if (blnk.indexOf(Char) > -1)
		{
			IsNumeric = true;
		}
	}
	if(IsNumeric == chkMode)
	{
		if(errMsg != '')
		{
			alert(errMsg);
			st.focus();
		}
		return false;
	}
	else
	{
		return true;
	}	
}

//Remove all option from the drop down list
function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}

function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;
	sel = document.getElementById(selectbox);
	sel.options.add(optn);
}

function removeOption(sel,value)
{
    var i;
	selectbox = document.getElementById(sel);
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		if(selectbox.options[i].value==value)
		{
		    selectbox.remove(i);
		}
	}
}

//validate text box is filled or not
function isFilledText(textbox, spStr, errMsg)
{
	var strVal;
	textbox = get_id(textbox);
	strVal = textbox.value;
	strVal = trim(strVal);
	if((strVal=='') || (strVal==spStr))
	{
		if(errMsg != '')
		{
			alert(errMsg);
			textbox.focus();
			//tooltip(errMsg, textbox, 225);
			//setTimeout("hidetooltip()",5000);
		}
		return false;
	}
	else
	{
		return true;
	}
}

function hidetooltip()
{
	hidetip();
}

//is filled email
function isFilledEmail(textbox, spStr, errMsg)
{
	var strVal;
	textbox =  get_id(textbox);
	strVal = textbox.value;
	strVal = trim(strVal);
	if((strVal=='') || (strVal==spStr))
	{
		if(errMsg != '')
		{
			alert(errMsg);
			textbox.focus();
		}
		return false;
	}
	else
	{
		v=isEmailAddr(textbox, errMsg);
		return v;
	}
}

//is filled numeric
function isFilledNumeric(textbox, spStr, errMsg)
{
	var strVal;
	textbox =  get_id(textbox);
	strVal = textbox.value;
	strVal = trim(strVal);
	if((strVal=='') || (strVal==spStr))
	{
		if(errMsg != '')
		{
			alert(errMsg);
			textbox.focus();
		}
		return false;
	}
	else
	{
		v=isNumeric(textbox,errMsg);
		return v;
	}
}

//is drop down selected
function isFilledSelect(selectbox, spStr, errMsg, cmpOpt)
{
	// Possible values for cmpOpt are
	// 0 when values are supposed to be compared but in numbers, variable spStr is mentioned in number
	// 1 when text needs to be compared, variable spStr is mentioned in text
	// 2 when values are supposed to be compared but in text, variable spStr is mentioned in text
	var strVal;
	if(cmpOpt == 0)
	{
		selectbox = get_id(selectbox);
		strVal = selectbox.selectedIndex;
		if(strVal==spStr)
		{
			alert(errMsg);
			selectbox.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
	else if(cmpOpt == 1)
	{
		strVal = selectbox.options[selectbox.selectedIndex].text;
		spStr = trim(spStr);
		if(strVal==spStr)
		{
			alert(errMsg);
			selectbox.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
	else if(cmpOpt == 2)
	{
		strVal = selectbox.options[selectbox.selectedIndex].value;
		spStr = trim(spStr);
		if(strVal==spStr)
		{
			alert(errMsg);
			selectbox.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
}

//if checkbox checked
function isCBoxChecked(checkBox, numChecked, errMsg, countCBox)
{
	var numCBox, chkTemp, chkCount;	
	if(countCBox == 1)
	{
		if(checkBox.checked == false)
		{
			if(errMsg != "")
			{
				alert(errMsg);
				checkBox.focus();
			}
			return false;
		}
		else
		{
			return true;
		}
	}
	else
	{
		chkTemp = false;
		chkCount = 0;
		numCBox = checkBox.length;
		for(i=0;i<numCBox;i++)
		{
			if(checkBox[i].checked == true)
			{
				chkCount++;
				if(chkCount==numChecked)
				{
					chkTemp = true;
				}
			}
		}
		if(chkTemp==false)
		{
			if(errMsg != "")
			{
				alert(errMsg);
			}
		}
		return chkTemp;
	}
}

//compare two strings
function compareString(strObject1, strObject2, objType)
{
	var str1, str2;
	var isEqual = false;
	if(objType == "Text")
	{
		str1 = strObject1.value;
		str1 = trim(str1);
		str2 = strObject2.value;
		str2 = trim(str2);
		if(str1 == str2)
		{
			isEqual = true;
		}
	}
	else if(objType == "Select")
	{
		str1 = strObject1.options[strObject1.selectedIndex].text;
		str1 = trim(str1);
		str2 = strObject2.options[strObject2.selectedIndex].text;
		str2 = trim(str2);
		if(str1 == str2)
		{
			isEqual = true;
		}
	}
	return isEqual;
}

//generate string for different form values
function createStrSubmit(frmName)
{
	var strSubmit = "";
	var currElement, lstElement;
	lstElement = "";
	for(i=0; i<frmName.elements.length; i++)
	{
		currElement = frmName.elements[i];
		switch(currElement.type)
		{
			case 'text':
            case 'select-one':
            case 'hidden':
            case 'password':
            case 'textarea':
            strSubmit += currElement.name + '=' + escape(currElement.value) + '&'
            break;
			case 'checkbox':
				if(currElement.checked == true)
				{
					if(lstElement != currElement.name)
					{
						strSubmit += currElement.name + '=' + escape(trim(currElement.value)) + '&'
					}
					else
					{
						if(strSubmit.substring(strSubmit.length - 1, strSubmit.length) == '&')
						strSubmit = strSubmit.substring(0, strSubmit.length - 1)
						strSubmit += ',' + escape(currElement.value)
					}
					lstElement = currElement.name
				}				
			break;
		}
		if(strSubmit.substring(strSubmit.length - 1, strSubmit.length) != '&')
		{
			strSubmit += '&';
		}
	}
	if(strSubmit.substring(strSubmit.length - 1, strSubmit.length) == '&')
	{
		strSubmit = strSubmit.substring(0,strSubmit.length-1);
	}
	return strSubmit;
}

//check for all form fields
function checkFormAllFields(frmName)
{
	var strSubmit = true;
	var currElmVal;
	var currI = -1;
	for(i=0; i<frmName.elements.length; i++)
	{
		currElement = frmName.elements[i];
		switch(currElement.type)
		{
			case 'text':
            case 'select-one':
            case 'password':
            case 'textarea':
			case 'checkbox':
				currElmVal = currElement.value;
				currElmVal = trim(currElmVal);
				if(escape(currElmVal) == "")
				{
					if(strSubmit == true)
					{
						currI = i;
					}
					strSubmit = false;
				}
            break;
		}
	}	
	if(strSubmit == false)
	{
		alert('No field can be left blank.');
		currElement = frmName.elements[currI];
		currElement.focus();
	}
	return strSubmit;
}

//check for special characters
function chkspChar(str)
{
	var alpha;
	var flag= true;
	for (i = 0; i < str.length; i++)
	{
		alpha = str.charAt(i);
		if(!((alpha>="A" && alpha<="Z") || (alpha>="a" && alpha<="z") || (alpha>="0" && alpha<="9")))
		{
			flag=false;
			break;
		}
	}
	return flag;
}

function _allowNumeric(e)
{
	var keyp;
	keyp = getKeyCode(e);

	if(keyp >= 48 && keyp <= 57)
	{
		return true;
	}
	else if(keyp == null)
	{
		return true;
	}
	else
	{
		if(keyp == 8 || keyp == 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
};


//Only Alpha allowed
function isAlpha(st,errMsg)
{
	str = st.value;
	flag=true;
	for (i = 0; i < str.length; i++)
	{
		alpha = str.charAt(i);
		if(!((alpha>="A" && alpha<="Z") || (alpha>="a" && alpha<="z") || (alpha=='_')))
		{
			if(errMsg!='')
			{
				alert(errMsg);
				st.focus();
			}
			flag=false;
			break;
		}
	}
return flag;
};

//is filled and alpha
function isFilledAlpha(textbox, spStr, errMsg)
{
	var strVal;
	textbox = get_id(textbox);
	strVal = textbox.value;
	strVal = trim(strVal);
	if((strVal=='') || (strVal==spStr))
	{
		if(errMsg != '')
		{
			alert(errMsg);
			textbox.select();
		}
		return false;
	}
	else
	{
		v=isAlpha(textbox,errMsg);
		return v;
	}
};

//Only Alpha Numeric allowed
function isAlphaNumeric(st,errMsg)
{
	str = st.value;
	flag=true;
	for (i = 0; i < str.length; i++)
	{
		alpha = str.charAt(i);
		if(!((alpha>="A" && alpha<="Z") || (alpha>="a" && alpha<="z") || (alpha>="0" && alpha<="9")))
		{
			if(errMsg!='')
			{
				alert(errMsg);
				st.select();
			}
			flag=false;
			break;
		}
	}
return flag;
};

//is filled and alphanum
function isFilledAlphaNum(textbox, spStr, errMsg)
{
	var strVal;
	strVal = textbox.value;
	strVal = trim(strVal);
	if((strVal=='') || (strVal==spStr))
	{
		if(errMsg != '')
		{
			alert(errMsg);
			textbox.select();
		}
		return false;
	}
	else
	{
		v=isAlphaNumeric(textbox,errMsg);
		return v;
	}
};

//is 1 option selected from option list 
function isRadioSelected(radio,errMsg)
{
robj = document.forms[0].elements[radio];
if(robj.length > 0)
{
	flag = false;
	for(var i=0;i<robj.length;i++)
	{
		if(robj[i].checked == true)
		{
			flag = true;
			break;
		}
	}
	if(flag==false)
	{
		if(errMsg!='')
		{
			alert(errMsg);
		}
		robj[0].focus();
	}
}
return flag;
};

function get_id(element)
{
	if(document.getElementById(element))
	{
		return document.getElementById(element);
	}
	else
	{
		return false;
	}
};

//return form elements value
function $F(element)
{
	if(get_id(element).value)
	{
		return get_id(element).value;
	}
	else
	{
		return false;
	}
};

function trim(s)
{
	var l=0; var r=s.length -1;
	while(l < s.length && s[l] == ' ')
	{	l++; }
	while(r > l && s[r] == ' ')
	{	r-=1;	}
	return s.substring(l, r+1);
};

function _allowAlpha(e)
{
	var keyp;
	keyp = getKeyCode(e);
	if((keyp>=65 && keyp<=90) || (keyp>=97 && keyp<=122) || keyp==32 || keyp==8 || keyp==0)
	{
		return true;
	}
	else if(keyp == null)
	{
		return true;
	}
	else
	{
		return false;
	}
};

function getKeyCode(e)
{
	if (window.event)
	{
		return window.event.keyCode;
	}
	 else if (e)
	{
		return e.which;
	}
	 else
	{
		return null;
	}
};

// allow true alpha space backspace and del
function _allowAlpha(e)
{
	var keyp;
	keyp = getKeyCode(e);
	if((keyp>=65 && keyp<=90) || (keyp>=97 && keyp<=122) || keyp==32 || keyp==8 || keyp==0)
	{
		return true;
	}
	else if(keyp == null)
	{
		return true;
	}
	else
	{
		return false;
	}
};

//allow alpha and numeric
function _allowAlphaNumeric(e)
{
	var keyp;
	keyp = getKeyCode(e);
	if((keyp>=65 && keyp<=90) || (keyp>=97 && keyp<=122)  || keyp==8 || keyp==0 ||(keyp>=48 && keyp<=57) || (keyp==95))
	{
		return true;
	}
	else if(keyp == null)
	{
		return true;
	}
	else
	{
		return false;
	}
};

function _allowAlphaNumericSpace(e)
{
	var keyp;
	keyp = getKeyCode(e);
	if((keyp>=65 && keyp<=90) || (keyp>=97 && keyp<=122)  || keyp==8 || keyp==0 ||(keyp>=48 && keyp<=57) || (keyp==95) || (keyp==32))
	{
		return true;
	}
	else if(keyp == null)
	{
		return true;
	}
	else
	{
		return false;
	}
};

function returnAllChecked(chkname)
{
	var countchk = chkname.length;
	var check = true;
	for(i=0;i<countchk;i++)
	{
		if(chkname[i].checked == false)
		{
			var check = false;
			break;
		}
	}
	return check;
};

function anyChecked(chkname,countchk)
{
	var check = false;
	for(i=1;i<=countchk;i++)
	{
		chk = chkname + "_" + i;
		if(get_id(chk).checked == true)
		{
			check = true;
			break;
		}
	}
	return check;
};


function isAnyChecked(chktest)
{
	var countchk = chktest.length;
	var check = false;
	for(i=0;i<countchk;i++)
	{
		if(chktest[i].checked == true)
		{
			check = true;
			break;
		}
	}
	if(check== false)
	{
		document.frmdeloption.sbutton.disabled = true;
	}
	else
	{		
		document.frmdeloption.sbutton.disabled = false;
	}
};

function _checkDuplicateAct(v1,v2,v3,dropcount) 
{
        //v1 = document.getElementById(d1);
        //v2  = document.getElementById(d2);
        if(dropcount==3)
        {
            //v3 = document.getElementById(d3);
        }
        if(!(v1.value==97 || v1.value==98 || v1.value==0))
        {
            if(dropcount==3 && (v1.value==v2.value || v1.value==v3.value))
            {
                alert("you have already selected this option");
                v1.selectedIndex = 0;
            }
            else if(dropcount==2 && (v1.value==v2.value))
            {
                alert("you have already selected this option");
                v1.selectedIndex = 0;
            }
        }
}

function _checkDuplicateDrop(d1,d2,d3,dropcount) 
{
        v1 = document.getElementById(d1);
        v2  = document.getElementById(d2);
        if(dropcount==3)
        {
            v3 = document.getElementById(d3);
        }
        if(!(v1.value==97 || v1.value==98 || v1.value==0))
        {
            if(dropcount==3 && (v1.value==v2.value || v1.value==v3.value))
            {
                alert("you have already selected this option");
                v1.selectedIndex = 0;
            }
            else if(dropcount==2 && (v1.value==v2.value))
            {
                alert("you have already selected this option");
                v1.selectedIndex = 0;
            }
        }
}

///11may16
function _checkDuplicateDropSix(d1,d2,d3,d4,d5,d6,dropcount) 
{
	//alert('kkk');
    v1 = document.getElementById(d1);
    v2  = document.getElementById(d2);
    v3  = document.getElementById(d3);
    v4  = document.getElementById(d4);
	v5 = document.getElementById(d5);
	v6 = document.getElementById(d6);

    if(!(v1.value==97 || v1.value==98 || v1.value==0))
    {
        if(dropcount==6 && (v1.value==v2.value || v1.value==v3.value || v1.value==v4.value || v1.value==v5.value|| v1.value==v6.value))
        {
            alert("You have already selected this option");
            v1.selectedIndex = 0;
        }
    }
}

function uncheckAll(id,count)
{
	for(i=1;i<=count;i++)
	{
		chkid = id+"_"+i;
		get_id(chkid).checked = false;
	}
}

function checkFilled(txt_id,msg)
{
	if(get_id(txt_id).value=='' || get_id(txt_id).value==' ')
	{
		get_id(txt_id).style.color = '#a0a0a0';
		get_id(txt_id).value = msg;
	}
}

function removeDefault(txt_id,msg)
{
	if(get_id(txt_id).value==msg)
	{
		get_id(txt_id).style.color = '#000000';
		get_id(txt_id).value = '';
	}
}

function checkFilled(txt_id,msg)
{
	if(get_id(txt_id).value=='' || get_id(txt_id).value==' ')
	{
		get_id(txt_id).style.color = '#a0a0a0';
		get_id(txt_id).value = msg;
	}
}

function removeDefault(txt_id,msg)
{
	txtstr = get_id(txt_id).value;
	//if(get_id(txt_id).value==msg || get_id(txt_id).value=='')
	if(txtstr.search(msg)!=-1 || get_id(txt_id).value=='')
	{
		get_id(txt_id).style.color = '#000000';
		get_id(txt_id).value = '';
	}
}

function countChecked(id,count)
{
	chkcount = 0;
	for(i=1;i<=count;i++)
	{
		chkid = id+"_"+i;
		if(get_id(chkid).checked)
		{
			chkcount++;
		}
	}
	return chkcount;
}

function getAjaxObj()
{
	var AjaxObj = null;
	try
	{
		// Firefox, Opera 8.0+, Safari
		AjaxObj = new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
			AjaxObj = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			AjaxObj = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return AjaxObj;
};

function showHideOther2(value,divid,txtoth)
{
	if(value==97)
	{
		get_id(divid).style.display = "block";
		get_id(txtoth).focus();
	}
	else
	{
		get_id(divid).style.display = "none";
		get_id(txtoth).value = '';
	}
};

function returnAnyChecked(chkname)
{
	var countchk = chkname.length;
	var check = false;
	for(i=0;i<countchk;i++)
	{
		if(get_id(chkname[i]).checked == true)
		{
			check = true;
			break;
		}
	}
	return check;
};


function showHideOther(divid,chkoth)
{
	chkbrand = document.getElementsByName("e9[]");
	chkid = chkbrand[26];
	if(chkid.checked)
	{
		get_id(divid).style.display = "block";
		get_id(chkoth).focus();
	}
	else
	{
		get_id(divid).style.display = "none";
		get_id(chkoth).value = '';
	}
}

function upPriority(tab,id)
{
	txtid = "txt"+id;
	tvalue = get_id(txtid).value;
	var myRandom = parseInt(Math.random()*99999999);
	
	updateAjax.open("GET","updpriority.php?rand=" + myRandom + "&rowid=" + id + "&priority=" + tvalue + "&tab=" + tab,true);
	updateAjax.onreadystatechange = function _httpUpdate()
	{
		if(updateAjax.readyState == 4)
		{
			//alert(updateAjax.responseText);
			window.location.reload(true);
		}
	}
	updateAjax.send(null);
}

function checknoneArr(chkidArr,value)
{
	chkcollect = document.getElementsByName(chkidArr);
	len =chkcollect.length;
	noneid = chkcollect[chkcollect.length-1];
	if(value!=98)
	{
		cid =  chkcollect[value-1];
		if(cid.checked)
		{
			if(noneid.checked)
			{
				alert("You can\'t select any other option dd with \'None\' option");
				cid.checked = false;
			}
		}
	}
	else
	{
		for(i=0;i<(len-1);i++)
		{
			chkid = chkcollect[i];
			if(chkid.checked)
			{
				alert("You can\'t select \'None\' option with any other option");
				noneid.checked = false;
				break;
			}
		}
	}
}

//Restricts for checkbox selected with none option or vice versa
function checknone(id,value,countchk,qid)
{
	prevar = id.substr(0,2);
	noneid = prevar + qid + "_" + countchk;
	if(value!=98 && value!=99)
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
			chkid = prevar + qid + "_" + i;
			if(get_id(chkid).checked)
			{
				alert("You can\'t select \'None\' option with any other option");
				get_id(noneid).checked = false;
				break;
			}
		}
	}
}