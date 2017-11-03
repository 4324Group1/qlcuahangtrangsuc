<?php
session_start();
if(isset($_SESSION["user"]) && isset($_SESSION["authority"])){
	session_destroy();//xóa dữ liệu đăng nhập
}

	header("Location: http://localhost/Shop/index.php");//quay về trang home

?>