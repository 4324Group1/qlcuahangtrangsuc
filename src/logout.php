<?php
session_start();
if($_SESSION["user"] && $_SESSION["authority"]){
	session_destroy();//xóa dữ liệu đăng nhập
}

	header("Location: ../index.php");//quay về trang home

?>