<?php
$user=$_POST["txtuser"];
$pass=$_POST["txtpass"];
//truy cap bang tai khoan
if($user=="admin" && $pass=="123456")
echo "Dang nhap thanh cong";
else
echo"Sai tai khoan hoac mat khau";
?>