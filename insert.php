<?php session_start();

	include 'dbconn.php';
	if(isset($_POST["insert"]))
	{
		$sql="INSERT INTO project(proj_code,cust_name,type,location,file_type,po_date)VALUES('$_POST[code]','$_POST[name]','$_POST[radio1]','$_POST[location]','$_POST[type]','$_POST[date]')";
		$res=mysql_query($sql,$con);
		if($res)
		{
			print'<script>inserted successfully</script>' ;
			header("location:home.php");
			//echo ("<SCRIPT LANGUAGE='JavaScript'>
			//		window.alert('Succesfully Inserted')
			////		window.location.href='home.php';
			//		</SCRIPT>");
		}
		else
			die("insert failed".mysql_error());
	}
?>