<?php

require_once('connect_to_mysql.php');

$link = mysql_connect($db_host,$db_username,$db_pass);
if(!$link){
die('Failed to connect to server.' .mysql_error());
}

$db = mysql_select_db($db_name);
if(!$db){
die('Unable to select database');
}

//Function to sanitize values received from the Flash interface (prevent SQL injection)
function clean($str)
{
	$str = @trim($str);
	if (get_magic_quotes_gpc())
	{
		$str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
}

//sanitize any free-input variables and declare PHP variables to store POST values
$UserID = clean($_POST['userid']);
$Condition_ID = $_POST['conditionid'];
$AttemptNumber = $_POST['attemptnum'];
$NumHidden = $_POST['numhidden'];
$_1 = $_POST['one'];
$_0 = $_POST['zero'];
$_1_1 = $_POST['oneone'];
$_1_0 = $_POST['onezero'];
$_0_1 = $_POST['zeroone'];
$_0_0 = $_POST['zerozero'];
$_1_1_1 = $_POST['oneoneone'];
$_1_0_1 = $_POST['onezeroone'];
$_1_1_0 = $_POST['oneonezero'];
$_1_0_0 = $_POST['onezerozero'];
$_0_1_1 = $_POST['zerooneone'];
$_0_0_1 = $_POST['zerozeroone'];
$_0_1_0 = $_POST['zeroonezero'];
$_0_0_0 = $_POST['zerozerozero'];
$visrate = $_POST['visrate'];
$hid1rate = $_POST['hid1rate'];
$hid2rate = $_POST['hid2rate'];
$Vis_On_Rate = $_POST['visonrate'];
$Vis_Off_Rate = $_POST['visoffrate'];
$Click_X = $_POST['clickX'];
$Click_Y = $_POST['clickY'];
$Submit_Type = $_POST['submitType'];



$results = mysql_query($sqlquery); 


echo "success=true";

/* { 
 Print "<table class='editor'>"; 
 Print "<tr>"; 
 Print "<th>Name:</th> <td>$UserID</td> ";
 Print "<tr>"; 
 Print "<th>Location:</th> <td>$visrate</td> "; 

 } 
 Print "</table>"; 
*/




//Create INSERT query
$qry = "INSERT INTO DetHc (UserID, Condition_ID, Attempt_Number, Num_Hidden, `1`, `0`, 1_1, 1_0, 0_1, 0_0, 1_1_1, 1_0_1, 1_1_0, 1_0_0, 0_1_1, 0_0_1, 0_1_0, 0_0_0, visrate, hid1rate, hid2rate, Vis_On_Rate, Vis_Off_Rate, Click_X, Click_Y, Submit_Type) VALUES('$UserID', '$Condition_ID', '$AttemptNumber', '$NumHidden', '$_1', '$_0', '$_1_1', '$_1_0', '$_0_1', '$_0_0', '$_1_1_1', '$_1_0_1', '$_1_1_0', '$_1_0_0', '$_0_1_1','$_0_0_1', '$_0_1_0', '$_0_0_0', '$visrate', '$hid1rate', '$hid2rate', '$Vis_On_Rate', '$Vis_Off_Rate', '$Click_X', '$Click_Y','$Submit_Type')";
$result = @mysql_query($qry) or die(mysql_error());;
echo "writing=Ok";

exit();
mysql_close();
?>