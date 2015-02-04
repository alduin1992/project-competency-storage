<?
function Input($name,$course,$school,$age)
{
$HTML = 
"
<HTML>
	<h3>
	===========================
	<br>   
	 
	  Student Information System
	  
	<br>
	===========================
	<br> <br>

	Name   : <i> $name </i>
	<br>
	Course : $course	
		<br>
	School : <i> $school </i>
		<br>
	Age    : $age
	</h3>
</HTML>
";
return $HTML;
}

		$name2 = $_REQUEST["name"];
		$course2 = $_REQUEST["course"];
		$school2 = $_REQUEST["school"];
		$age2 = $_REQUEST["age"];
		
		$HTML = Input($name2,$course2,$school2,$age2);		
		
	

		 	require_once("html2fpdf\html2fpdf.php");
			$myPDF = new HTML2FPDF();
		  	$myPDF->HTML2FPDF("P","mm","A4");
		 	$myPDF->AddPage();
			
			$myPDF->WriteHTML($HTML);
			$myPDF->Output();
		
		
?>