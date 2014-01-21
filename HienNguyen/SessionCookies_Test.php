<?php
session_start();
echo "Chao ".$_COOKIE['c_name'].". Ban da dang nhap thanh cong <br>";
echo "Ten tai khoan cua ban: ".$_SESSION['name']."<br>";
echo "Ten Email cua ban: ".$_SESSION['email'];
echo "<br> ID cua Session la: ".session_id()."<br>";

if($_SESSION["lop"]=="a1")
    echo "<br> D09THA1 la con vitttt";
else
{ if($_SESSION["lop"]=="a2")
            echo "<br> D09THA2 la con heoooooo";
    else if($_SESSION["lop"]== "a3")
         echo "<br> D09THA3 la con booooooooo";
}
?>