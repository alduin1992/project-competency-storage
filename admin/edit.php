<html>
<head>
<title>edit</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
	<div id="framecontent">
		<div class="innertube">
			<div class="container">
				<a href="index.php">Insert</a>&nbsp;&nbsp;
				<a href="search.php">Search</a>&nbsp;&nbsp;
				<a href="edit.php">Edit</a>&nbsp;&nbsp;
				<a href="view.php">View</a>&nbsp;&nbsp;
				<a href="delete.php">Delete</a>&nbsp;&nbsp;
				<a href="../index.html">Logout</a>&nbsp;&nbsp;
				<div align="right">
					<?php
						session_start();
						$name=$_SESSION["username"];
						echo"Hello admin ";
						echo $name;
						include '../dbconn.php';
						$a=mysql_query("SELECT * FROM users WHERE username='$name'",$con);
						$arr=mysql_fetch_array($a);
						echo "your last login was on ".$arr["last"];
						mysql_close($con);
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="maincontent">
	<img src = "../images/logo.gif" style="position:fixed;right:0px;bottom:0px;"></img>
		<div class="innertube">
			<table id="f1" style="margin-left:auto;margin-right:auto;width:400px;height:300px;">
				<form action="func.php" method="POST" />
					<tr>
						<td>ENTER PROJECT CODE</td>
						<td><input type="text" name="text1" /></td>
					</tr>
					<tr>
						<td><input type="submit" class="button" name="submit1" value="go" /></td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</body>
</html>
