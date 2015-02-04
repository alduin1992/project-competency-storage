<html>
	<head>
		<title>home</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script>
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

		</script>
	</head>
<body>
	<div id="framecontent">
		<div class="innertube">
			<div class="container">
				<a href="home.php">Insert</a>&nbsp;&nbsp;
				<a href="search/search.php">Search</a>&nbsp;&nbsp;
				<a href="../index.html">Logout</a>&nbsp;&nbsp;
				<div align="right">
					<?php 
							session_start(); 
							$name=$_SESSION["username"];
							echo"Welcome ";
							echo $name;
							include 'dbconn.php';
							$a=mysql_query("SELECT * FROM users WHERE username='$name'",$con);	
							$arr=mysql_fetch_array($a);
							echo "your last login was on ".$arr["last"];
				
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="maincontent">
	<img src = "images/logo.gif" style="position:fixed;right:0px;bottom:0px;"></img>
		<div class="innertube">
			<p align = "center"><u>PROJECT DETAILS</u></p>
			<div id="wrapper">
				<table id="fo" align="center" >
					<form name="form1" action="insert.php" method="POST">
					<tr>
						<td>PROJECT CODE:</td>
						<td><input type="text" name="code" /></td>
					</tr>
					<tr>
						<td>CUSTOMER NAME:</td>
						<td><input type="text" name="name" /></td>
					</tr>
					<tr>
						<td>TYPE:</td>
						<td><input type="text" name="radio1" /></td>
					</tr>
					<tr>
						<td>LOCATION:</td>
						<td><input type="text" name="location" /></td>
					</tr>
					<tr>
						<td>FILE TYPE:</td>
						<td><input type="text" name="type" /></td>
					</tr>
					<tr>
						<td>PO DATE:</td>
						<td><input type="text" name="date" /></td>
					</tr>
					<tr>
						<td><input type="submit" class="button" name="insert" value="Insert" onmouseover="return validate()" /></td>
					</tr>
					</form>
				</table>
			</div>
		</div>
	</div>
</body>
</html>