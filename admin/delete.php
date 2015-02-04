<html>
<head>
	<title>delete</title>
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
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="maincontent">
	<img src = "../images/logo.gif" style="position:fixed;right:0px;bottom:0px;"></img>
		<div class="innertube">
			<table id="f1" style="margin-left:auto;margin-right:auto;width:400px;height:300px;">
				<form action="delete.php" method="POST" >
					<tr>
						<td>ENTER PROJECT CODE FOE RECORD TO BE DELETED</td>
						<td><input type="text" name="text1" /></td>
					</tr>
					<tr>
						<td>
							<input type="submit" class="button" name="delete" value="delete" />
						</td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST["delete"]))
	{
		
		$var=mysql_query("DELETE from project WHERE proj_code='$_POST[text1]'",$con)or die(mysql_error());
		if($var)
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Delete successful.')
					window.location.href='delete.php';
					</SCRIPT>");
		else
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Failed to delete.Check whether code no is correct.')
					window.location.href='delete.php';
					</SCRIPT>");
			
	}
?>