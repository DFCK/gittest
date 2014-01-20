<?php

/**
 * 1. Session dùng lưu trữ dữ liệu qua các trang web , session data lưu trên server
 */
session_start();
if(isset($_SESSION["views"]))
{
    $_SESSION["views"]=$_SESSION["views"]+1;
}
else
{
    $_SESSION["views"]=1;
}
//Hủy session "Views" sau 5 lần
echo "Views " . $_SESSION["views"] . " times.";
if($_SESSION["views"]==5)
{
    unset($_SESSION["views"]);
}


