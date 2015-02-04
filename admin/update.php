<?php
		include'../dbconn.php';
		if(isset($_POST["edit"]))
		{
			$po=mysql_query("UPDATE project SET cust_name='$_POST[name]',type='$_POST[radio1]',location='$_POST[location]',file_type='$_POST[type]',po_date='$_POST[date]' WHERE proj_code='$_POST[code]'",$con);
			if($po)
			{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Update successful.')
					window.location.href='edit.php';
					</SCRIPT>");
			}
			else
				die(mysql_error());
		}
?>