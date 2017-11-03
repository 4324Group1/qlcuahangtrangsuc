<?php   if(!isset($_SESSION)) 
    {
session_start();
}
include_once("src/info.php");

$chekpage=false;
if($authority =='admin'){
	$lispage= array('profile','qlymembers','register','login','logout');
}else{
	$lispage= array('register','login','logout','profile');
}
foreach ($lispage as $page) {

	if(isset($_GET['page'])){
	if($_GET['page'] == $page){
		$chekpage = true;
		break;
	}	
}else {
	$_GET['page']= 'profile';
	$chekpage = true;
}
	
}

if($chekpage)
{
$icl = false;
if(isset($_GET['page']) && !$icl){
	if($_GET['page'] =="register"){
		include_once("view/access/register.php");
		$icl = true;
	}
}
if(isset($_GET['page']) && !$icl){
	if($_GET['page'] =="login"){
		include_once("view/access/login.php");
		$icl = true;
	}
}
if(isset($_GET['page']) && !$icl){
	if($_GET['page'] =="logout"){
		include_once("src/logout.php");
		$icl = true;
	}
}
if(isset($_SESSION['user']) && isset($_SESSION['authority']) && !$icl)
{
	
if(!isset($GET['page'])){
	$GET['page']="profile";

}

include_once("view/".$_SESSION["authority"]."_view/index.php");
$icl = true;


}
else if(!$icl){

	include_once("view/member_view/index.php");
	$icl = true;
}

}
else
{

		include_once("view/access/404.php");
		$icl = true;
	

}