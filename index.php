<?php   if(!isset($_SESSION)) 
    {
session_start();
}
if(isset($_GET['page'])){
	if($_GET['page'] =="register"){
		include_once("view/access/register.php");
	}
}
if(isset($_SESSION['user']) && isset($_SESSION['authority'])){
	
if(!isset($GET['page'])){
	$GET['page']="index";
}

include_once("view/".$_SESSION["authority"]."_view/".$GET['page'].".php");



}
else{

	include_once("view/access/login.php");
}

