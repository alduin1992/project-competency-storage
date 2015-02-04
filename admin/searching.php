<html>
<head>
<script>
function printt()
{
	window.print();
}
</script>
<link rel="stylesheet" type="text/css" href="../css/record.css" />
</head>
<body>
<form action="searching.php" method="POST" />
<?php
	include '../dbconn.php';
	if(isset($_POST["submit1"]))
	{
		$key=$_POST["text1"];
		$sql="SELECT * FROM project WHERE proj_code='$key'";
		$res=mysql_query($sql,$con) or die(mysql_error());
		while($a=mysql_fetch_array($res))
		{
			if(($key==$a["proj_code"]))
			{
				$flag=0;
				echo"<div id='wrap'>";
				echo "<table>" ;
				echo "<tr>";
				echo "<th align='center'>PROJECT RECORD</th>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>project code :</td>";
				echo"<td>".$a['proj_code']."</td>";
				echo"</tr>"  ;
				echo "<tr>";
				echo "<td>customer name :</td>";
				echo"<td>".$a['cust_name']."</td>";
				echo"</tr>"  ;
				echo "<tr>";
				echo "<td>type:</td>";
				echo"<td>".$a['type']."</td>";
				echo"</tr>"  ;
				echo "<tr>";
				echo "<td>location :</td>";
				echo"<td>".$a['location']."</td>";
				echo"</tr>"  ;
				echo"<tr>";
				echo"<td>file type :</td>";
				echo"<td>".$a['file_type']."</td>";
				echo"</tr>"  ;
				echo "<tr>";
				echo"<td>po date :</td>";
				echo"<td>".$a['po_date']."</td>";
				echo"</tr>"  ;
				echo "</table>" ;
				echo"</div>";
				
			}
		}
	}
	else if(isset($_POST["submit3"]))
	{
		$key=$_POST["text2"];
		$sql="SELECT * FROM project WHERE cust_name='$key'";
		$res=mysql_query($sql,$con) or die(mysql_error());
		while($a=mysql_fetch_array($res))
		{
			if(($key==$a["cust_name"]))
			{
				$flag=0;
				echo"<div id='wrap'>";
				echo "<table>" ;
				echo "<tr>";
				echo "<th align='center'>PROJECT RECORD</th>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>project code :</td>";
				echo"<td>".$a['proj_code']."</td>";
				echo"</tr>"  ;
				echo "<tr>";
				echo "<td>customer name :</td>";
				echo"<td>".$a['cust_name']."</td>";
				echo"</tr>"  ;
				echo "<tr>";
				echo "<td>type:</td>";
				echo"<td>".$a['type']."</td>";
				echo"</tr>"  ;
				echo "<tr>";
				echo "<td>location :</td>";
				echo"<td>".$a['location']."</td>";
				echo"</tr>"  ;
				echo"<tr>";
				echo"<td>file type :</td>";
				echo"<td>".$a['file_type']."</td>";
				echo"</tr>"  ;
				echo "<tr>";
				echo"<td>po date :</td>";
				echo"<td>".$a['po_date']."</td>";
				echo"</tr>"  ;
				echo "</table>" ;
				echo"</div>";
				
			}
		}
	}
	else if(isset($_POST["submit2"]))
		header("location:../loc.php");
	
	echo "<input type = 'submit' name='submit' value='back'  />" ;
	mysql_close($con);
	if(isset($_POST["submit"]))
	{
		header("location:search.php");
	}
?>
<input type = "button" name="print" align="center" value="print" onclick="printt()" />
</form>
</body>
</html>