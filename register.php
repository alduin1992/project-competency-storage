<html>
	<head>
		<title>register</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<style type="text/css">
			#f1
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
			<a href="index.html">Login</a>&nbsp;&nbsp;
			<a href="register.php">Register</a>&nbsp;&nbsp;
			<a href="val.php">Admin</a>&nbsp;&nbsp;
		</div>
	</div>
	<div id="maincontent">
		<div class="innertube">
			<p align="center"><u>ENTER REGISTRATION DETAILS</p>
			<table id="f1">
				<form action="user.php" method="POST" >
					<tr>
						<td>EMPLOYEE ID</td>
					</tr>
					<tr>
						<td><input type="text" name="id" /></td>
					</tr>
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
						<td>E-MAIL</td>
					</tr>
					<tr>
						<td><input type="text" name="email" /></td>
					</tr>
					<tr>
						<td><input type ="submit" class="button" name="register" value="REGISTER" /></td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</body>
</html>


				