<html>
<head>
	<title>view</title>
	<link rel="stylesheet" type="text/css" href="css/record.css" />
</head>
<style>
	body{overflow:scrolling;}
</style>
<body>
<?php

	include'dbconn.php';
	$sql="SELECT * FROM details";
	$res=mysql_query($sql,$con);
		while($a=mysql_fetch_array($res))
		{
				echo "<div align='center'>" ;
				echo "<table id='wrap'>" ;
				echo "<tr>";
				echo "<td>Account id :</td>";
				echo "<td>customer name :</td>";
				echo "<td>Phone</td>";
				echo "<td>Savings</td>";
				echo"<td>Current</td>";
				echo "</tr>";
				echo "<tr>"
				echo"<td>".$a['acc_id']."</td>";
				echo"<td>".$a['name']."</td>";
				echo"<td>".$a['phone']."</td>";
				echo"<td>".$a['current']."</td>";
				echo"<td>".$a['savings']."</td>";
				echo"</tr>"  ;
				echo "</table>" ;
				echo"</div>";
		}
	mysql_close($con);
		
?>
<a href="insert.php">back</a>
</body>
</html>