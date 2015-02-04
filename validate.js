function validate()
{
	
	var a = document.forms["form1"]["code"].value;
	var b = document.forms["form1"]["name"].value;
	var c = document.forms["form1"]["radio1"].value;
	var d =	document.forms["form1"]["location"].value;
	var e =	document.forms["form1"]["type"].value;
	var f =	document.forms["form1"]["size"].value;
	var f =	document.forms["form1"]["date"].value;
	if(a=="null"||a==""||b=="null"||b==""||c=="null"||c==""||d=="null"||d==""||e=="null"||e==""||f=="null"||f=="")
	{
		 alert("Kindly complete the form before proceeding");
		  return false;
	}

}

	
	
	
	