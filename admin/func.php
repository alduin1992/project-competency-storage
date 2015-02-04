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
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="maincontent">
	<img src = "../images/logo.gif" style="position:fixed;right:0px;bottom:0px;"></img>
		<div class="innertube">
			<div align="center">
				<table>
					<form action="update.php" method="POST" />
						<?php
							if(isset($_POST["submit1"]))
							{
								$var=mysql_query("SELECT * FROM project WHERE proj_code='$_POST[text1]'",$con);
								while($res=mysql_fetch_array($var))
								{
									$a=$res["proj_code"];
									$b=$res["cust_name"];
									$c=$res["type"];
									$d=$res["location"];
									$e=$res["file_type"];
									$f=$res["po_date"];
								}
							}
						?>
						<p>EDIT DETAILS</p>
						<tr>
							<td>PROJECT CODE:</td>
							<td><input type="text" name="code" value="<?=htmlspecialchars($a) ?>" /></td>
						</tr>
						<tr>
							<td>CUSTOMER NAME:</td>
							<td><input type="text" name="name" value="<?=htmlspecialchars($b) ?>" /></td>
						</tr>
						<tr>
							<td>TYPE:</td>
							<td><input type="text" name="radio1" value="<?=htmlspecialchars($c) ?>" /></td>
						</tr>
						<tr>
							<td>LOCATION:</td>
							<td><input type="text" name="location" value="<?=htmlspecialchars($d) ?>" /></td>
						</tr>
						<tr>
							<td>FILE TYPE:</td>
							<td><input type="text" name="type" value="<?=htmlspecialchars($e) ?>" /></td>
						</tr>
						<tr>
							<td>PO DATE:</td>
							<td><input type="text" name="date" value="<?=htmlspecialchars($f) ?>"/></td>
						</tr>
						<tr>
							<td><input type="submit" class="button" name="edit" value="edit" /></td>
						</tr>
					</form>
				</table>
			</div>
		</div>
	</div>
</body>
</html>

		
		
			
			