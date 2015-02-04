<html>
<head>
<title>search</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
	<div id="framecontent">
		<div class="innertube">
			<div class="container">
				<a href="../home.php">Insert</a>&nbsp;&nbsp;
				<a href="search.php">Search</a>&nbsp;&nbsp;
				<a href="../index.html">Logout</a>&nbsp;&nbsp;
				<div align="right">
					<?php 
						session_start(); 
						$name=$_SESSION["username"];
						echo"Welcome ";
						echo $name;
						include '../dbconn.php';
						$a=mysql_query("SELECT * FROM users WHERE username='$name'",$con);
						$arr=mysql_fetch_array($a);
						echo "your last login was on ".$arr["last"];
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="maincontent">
	<img src = "../images/logo.gif" style="position:fixed;right:0px;bottom:0px;"></img>
		<p align = "center"><u>SEARCH BY ID</u></p>
		<div class="innertube">
			<table id="f1" style="margin-left:auto;margin-right:auto;width:400px;height:300px;">
				<form action="searching.php" method="POST" >
					<tr>
						<td>ENTER PROJECT CODE TO VIEW FORM DETAILS</td>
						<td><input type="text" name="text1" /></td>
					</tr>
					<tr>
						<td><input type="submit" class="button" name="submit1" value="go" /></td>
						<td><input type="submit" class="button" name="submit2" value="View your files" /></td>
						
					</tr>
				</form>
			</table>
			<hr>
			<p align = "center"><u>SEARCH BY NAME</u></p>
			<table style="margin-left:auto;margin-right:auto;width:400px;height:300px;">
				<form action="searching.php" method="POST">
					<tr>
						<td>ENTER CUSTOMER NAME TO VIEW FORM DETAILS</td>
						<td><input type="text" name="text2" /></td>
					</tr>
					<tr>
						<div align="center">
						<td><input type="submit" class="button" name="submit3" value="go" /></td>
						</div>
					</tr>
				</form>
			</table>
		</div>
	</div>
</body>
</html>

	
