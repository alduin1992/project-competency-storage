<html>
<head>
<title>validate</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
#fo
{
	margin-left:auto;
	margin-right:auto;
	border-style:solid;
	width:400px;
	height:400px;
}
</style>
</head>
<body>
	<div id="framecontent">
		<div class="innertube">
			<div align="left">
				<a href="index.html">User</a>&nbsp;&nbsp;
				<a href="val.php">Admin</a>&nbsp;&nbsp;
			</div>
		</div>
	</div>
	<div id="maincontent">
	<img src = "images/logo.gif" style="position:fixed;right:0px;bottom:0px;"></img>
		<div class="innertube">
			<div>
				<table id="fo">
					<div align="center">
						<p><u>ENTER ADMINISTRATOR LOGIN DETAILS</u></p>
					</div>
						<form action="user.php" method="POST" >
							<tr>
								<td>USER NAME</td>
							</tr>
							<tr>
								<td><input type="text" name="username" /></td>
							</tr>
							<tr>
								<td>PASSWORD</td>
							</tr>
							<tr>
								<td><input type="password" name="password" id="pass" /></td>
							</tr>
							<tr>
								<td><input type ="submit" class="button"  name="admin" value="LOGIN" /></td>
							</tr>
						</form>
				</table>
			</div>
		</div>
	</div>
</body>
</html>