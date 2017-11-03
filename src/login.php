<?php


if(isset($_POST["login"])){//nếu nút login được click
   if(isset($_POST["user"]) && isset($_POST["pass"])){ // kiểm tra text field
   
      $user =$_POST["user"];//lấy dữ liệu text field
      $pass =$_POST["pass"];
    
require("config.php");//chuỗi kết nối
$SQL = "SELECT * FROM ttdangnhap inner join chucvu on ttdangnhap.macv=chucvu.macv where Email='$user' and Pass='$pass'" ;//câu lệnh truy vấn

	$query = mysql_query($SQL);
    $num_row = mysql_num_rows($query); 	
    echo $num_row;					   
      if($num_row>0){
		  $_SESSION["user"] = $user;//ghi lại thông tin đăng nhập vào hệ thống
		  $row=mysql_fetch_array($query);

           if ($row[MaCV]=="01") {
           	 $_SESSION["authority"] ="admin";

           }else{
           	$_SESSION["authority"] = "member";
           }
             header("location:index.php");// chuyển trang
    	           
      
           }else{
           	echo"<script> alert('Tài khoản không hợp lệ !')</script> " ;//bắt lỗi truy cập

           }
}
}

