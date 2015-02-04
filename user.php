<?php
	session_start();
	session_regenerate_id(true); 
	include 'dbconn.php';
	if(isset($_POST["register"]))
	{
		$c=$_POST["username"];
		$d=$_POST["password"];
		$sql2="SELECT * FROM users WHERE username='$c' and password='$d'";
		$uniq=mysql_query($sql2,$con) or die(mysql_error());
		while($arr1=mysql_fetch_array($uniq))
		{
			if(($c==$arr1['username'])&&($d==$arr1['password']))
			{
				$f=1;
			}
		}
		if($f)
			header("location:index.html?error=user already exists,please register with different user name");
		else
		{
			$sql="INSERT INTO users(empid,username,password,email)VALUES('$_POST[id]','$_POST[username]','$_POST[password]','$_POST[email]')";
			$res=mysql_query($sql,$con);
			if(!$res)
				die(mysql_error());
			//header("location:index.html?error=registration successful.please login");
		}
	}
	else if(isset($_POST["login"]))
	{
		$a=$_POST["username"];
		$b=$_POST["password"];
		$sql1="SELECT * FROM users WHERE username='$a' and password='$b'";
		$log=mysql_query($sql1,$con) or die(mysql_error());
		while($arr=mysql_fetch_array($log))
		{
			if(($a==$arr['username'])&&($b==$arr['password']))
			{
				mysql_query("UPDATE users SET last=now() WHERE username='$a'and password='$b'",$con);
				$_SESSION["username"]=$a;
				$_SESSION["password"]=$b;
				header("location:home.php");
		
			}
		}
		//echo"unable to log in";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Unable to log in.verify username or passsword.Please contact admin for further assistance')
					window.location.href='index.html';
					</SCRIPT>");
	}
	else if(isset($_POST["admin"]))
	{
		$a=$_POST["username"];
		$b=$_POST["password"];
		$sql1="SELECT * FROM users WHERE username='$a' and password='$b'";
		$log=mysql_query($sql1,$con) or die(mysql_error());
		while($arr=mysql_fetch_array($log))
		{
			if(($a==$arr['username'])&&($b==$arr['password'])&&($arr['admin']==1))
			{
				$_SESSION["username"]=$a;
				$_SESSION["password"]=$b;
				header("location:admin/index.php");
				
			}
		}
		//print'<script>alert("You are not an admin.Go back and please contact a known admin for further assistance");document.open("index.html");</script>';
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('You are not a designated admin.verify username or passsword or please contact a known admin for further assistance')
					window.location.href='index.html';
					</SCRIPT>");
	}
	mysql_close($con);
?>