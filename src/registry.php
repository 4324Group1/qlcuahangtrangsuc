<?php
if(isset($_POST["registry"])){
	
	require("config.php");//chuỗi kết nối
//kiểm tra trùng lặp user	
    $SQL = "SELECT * FROM ttdangnhap where User='".$_POST['user']."'" ;
    echo $SQL;
	$query = mysql_query($SQL);	
	$num_row = mysql_num_rows($query); 	
	if($num_row>0){
					  echo"<td><i><font color=#F00> User đã tồn tại </font> </i></td></tr>";

	}
	else
	{

	 $user=$_POST["user"]; $pass=$_POST["pass"]; $name=$_POST["name"];
    $chucvu="02"; $sdt=$_POST["phonenumber"]; $email= $_POST["email"];
	$SQL = "INSERT INTO ttdangnhap (User,Pass,FullName,Email,PhoneNumber,MaCV) Values('".$user."','".$pass."','".$name."','".$sdt."','".$email."','".$chucvu."')" ;
	echo $SQL;
	$query = mysql_query($SQL);	
	 $SQL = "SELECT * FROM ttdangnhap where User='".$_POST['user']."'" ;
	$query = mysql_query($SQL);	
	$num_row = mysql_num_rows($query); 	
	if($num_row==1){
		echo"<td><i><font color=#F00> Đăng ký thành công </font> </i></td></tr>";
		header("location: index.php");
	}	
	
	}
}
?>