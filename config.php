<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "v1.0_htpt";

// Create connection
$connect_db = mysql_connect($servername,$username, $password);
     
// Check connection
if (!isset($connect_db)) {
	
die("Connection failed: " . mysqli_connect_error());

}else{
	$select_db= mysql_select_db($dbname,$connect_db);
	$set_lang=mysql_query("SET NAMES 'utf8'");
}

 
?>