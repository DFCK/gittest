<?php
session_start();
echo "Chao ".$_COOKIE['c_name'].". Ban da dang nhap thanh cong <br>";
echo "Ten tai khoan cua ban: ".$_SESSION['name']."<br>";
echo "Ten Email cua ban: ".$_SESSION['email'];
echo "ID cua Session la: ".session_id();
?>