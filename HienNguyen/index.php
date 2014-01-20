<?php
include("Smarty/libs/Smarty.class.php");
$df = new Smarty();
$df->display("abc.tpl");

if(isset($_POST["DangNhap"]))
{
    $username=$_POST["username"];
    $email=$_POST["email"];
    if($username=="abc" && $email="bcd")
    {
        echo "Login success";
    }
}


