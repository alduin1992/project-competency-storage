<html>
<head>
<title>Admin home</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script type="text/javascript" src="../validate.js"></script>
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
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="maincontent">
	<img src = "../images/logo.gif" style="position:fixed;right:0px;bottom:0px;"></img>
		<div class="innertube">
			<p align = "center"><u>PROJECT DETAILS</u></p>
			<div id="wrapper">
				<table id="fo" align="center" >
					<form action="index.php" method="POST" >
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
							<td><input type="submit" class="button" name="insert" value="Insert" /></td>
						</tr>
					</form>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
if(isset($_POST["insert"]))
{
	$sql="INSERT INTO project(proj_code,cust_name,type,location,file_type,po_date)VALUES('$_POST[code]','$_POST[name]','$_POST[radio1]','$_POST[location]','$_POST[type]','$_POST[date]')";
	$res=mysql_query($sql,$con);
	if($res)
	{
		//print'<script>inserted successfully</script>' ;
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Inserted successfully')
					window.location.href='index.php';
					</SCRIPT>");
	
	}
	else
		die("insert failed".mysql_error());
}
?>

