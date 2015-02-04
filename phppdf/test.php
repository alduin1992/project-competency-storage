<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-size: 16px;
	font-family: Verdana, Geneva, sans-serif;
	color: #060;
}
h1 {
	font-size: 12px;
}
</style>
</head>

<body> 
<h3 align="center"><strong>PHP To PDF Writer Version 1.0</strong></h3>
<h3 align="center"><strong>Created By: Mr. Jake Rodriguez Pomperada, MAED - Instructional Technology</strong></h3>
<FORM ACTION="generate_pdf.php" METHOD="POST">
<p><strong>Name </strong>
  <label for="textfield"></label>
  <input type="text" name="name" id="textfield" />
</p>
<p><strong>Course</strong>
  <input type="text" name="course" id="textfield2" />
</p>
<p><strong>School</strong>
  <input type="text" name="school" id="textfield3" />
</p>
<p><strong>Age</strong><strong></strong>
  <input type="text" name="age" id="textfield4" />
</p>

<TR>
			<TD height="86" COLSPAN=2 ALIGN="left">
			  <p>
			    <INPUT TYPE="SUBMIT" VALUE="SEND">
			    <INPUT TYPE="RESET" VALUE="Reset">
  </p></TD>
</TR>
</FORM>
</body>
</html>
