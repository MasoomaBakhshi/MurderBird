/////Form inputs Functions
//check id
//check name
//check password
//check email
//check URL
//check fontSiize
//check phone
//check address
//check descrption text area
//overall submission
var error=[];
var msg=[];
//////check id/////
function checkid(input_field)
		{
			var temp=input_field;
			var tst=/^[0-9]{1,6}$/;
			msg["id"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["id"]=1;
			  msg["id"]="Id can not be blanked.";
			  }
				else if (tst.test( temp.value ))
				{
				error["id"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["id"]=1;
			  msg["id"]="Id should be number and maximum length of 6";
			  }
	  }
//////check name/////
function checkname(input_field)
		{
			var temp=input_field;
			var tst=/^[A-Za-z\s]+$/;
			msg["name"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["name"]=1;
			  msg["name"]="Name can not be blanked.";
			  }
				else if (tst.test( temp.value ))
				{
				error["name"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["name"]=1;
			  msg["name"]="Name should be characters";
			  }
	  }  
//password check/////
function checkpassword(input_field)
		{
			var temp=input_field;
			var tst=/^[a-z0-9_-]{6,18}$/;
			msg["password"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["password"]=1;
			  msg["password"]="Password can not be blanked";
			  }
				else if (tst.test( temp.value ))
				{
				error["password"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["password"]=1;
			  msg["password"]="Password should be greater than 6 and should include alphbets or numbers or both ";
			  }
	  }	
//url check/////
function checkurl(input_field)
		{
			var temp=input_field;
			var tst=/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
			msg["url"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["url"]=1;
			  msg["url"]="Url can not be blanked";
			  }
				else if (tst.test( temp.value ))
				{
				error["url"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["url"]=1;
			  msg["url"]="Url is wrong pattern";
			  }
	  }
	  //font check/////
function checkfont(input_field)
		{
			var temp=input_field;
			var tst= /^[1-9]\d*$/;
			msg["font"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["font"]=1;
			  msg["font"]="Font Size can not be blanked";
			  }
				else if (tst.test( temp.value ))
				{
				error["font"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["font"]=1;
			  msg["font"]="Wrong font size.";
			  }
	  }
	 		  	    	   
	  ////addresss///
	  function checkaddress(input_field)
		{
			var temp=input_field;
			var tst=/^[a-zA-Z0-9\s,'-]*$/;
			msg["address"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["address"]=1;
			  msg["address"]="Address is blank";
			  }
				else if (tst.test( temp.value ))
				{
				error["address"]=0;
				temp.style.background="white";
				}
			  else 
			  {
			  temp.style.background="red";
			  error["address"]=1;
			  msg["address"]="Address is wrong";
			  }
	  }
	  //////empty des/////
	 function checkdesciption(input_field)
		{
			var temp=input_field;
			msg["desciption"]="";
			if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["desciption"]=1;
			  msg["desciption"]="Blank field or Unselected field";
			  }
			  else 
			  {
			  error["desciption"]=0;
			  temp.style.background="white";
			  }
	  }
 	  
///////check email///////
	  function checkmail(input_field)
	  {
				var temp=input_field;
				msg["mail"]="";
			  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
			 if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["mail"]=1;
			  msg["mail"]="Email is blank";
			  }
				else
			 if (mailformat.test( temp.value ))
				{  
				error["mail"]=0;
				temp.style.background="white";
				}  
				else  
				{
			  	temp.style.background="red";
			  	error["mail"]=1;	
				msg["mail"]="Email is wrong";
				}
		}
///////check phone///////
	  function checkpone(input_field)
	  {
				var temp=input_field;
				msg["phone"]="";
			  var mailformat = /^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/;  //Australian phone number format
			 if(temp.value=="" || temp.value==null )
			{
			  temp.style.background="red";
			  error["phone"]=1;
			  msg["phone"]="Phone is blank";
			  }
				else
			 if (mailformat.test( temp.value ))
				{  
				error["phone"]=0;
				temp.style.background="white";
				}  
				else  
				{
			  	temp.style.background="red";
			  	error["phone"]=1;	
				msg["phone"]="Phone number is not valid.";
				}
		}		
//add submission
function checksubmit()
	  { 
	  var temp=0;
	document.getElementById("alert").innerHTML="<strong>Please correct input value/s in red field/es</strong>"; 
	  for(var key in error ) 
	      {
			  if (error[key]==1)
			  {			
			  	event.preventDefault();
			  	document.getElementById("alert").innerHTML+="<li>"+msg[key]+"</li>";
				temp=1;
				 }	 
	      }
	  if(temp==1)
	  {
		 event.preventDefault();
		 $("#alert").css("display","block");
	  	return false;
	  }
	   else
		 $("#alert").css("display","none");
		  return true;
	  }
