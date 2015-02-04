
<?php 
	$con = mysql_connect("localhost","vijay","vij@y");
	mysql_select_db("project storage",$con);
	
	
	function scrub($string) {
		global $mysql_content_conn;
		return mysql_real_escape_string(htmlspecialchars(trim(preg_replace('/\s\s+/', ' ',$string))));
	}
	
	function convert_smart_quotes($string) 
{ 
    $search = array(chr(145), 
                    chr(146), 
                    chr(147), 
                    chr(148), 
                    chr(151)); 
 
    $replace = array("'", 
                     "'", 
                     '"', 
                     '"', 
                     '-'); 
 
    return str_replace($search, $replace, $string); 
} 
$round = 2;
?>
