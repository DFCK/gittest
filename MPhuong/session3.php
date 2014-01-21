<?php
/**
 * 3. Cookies dùng lưu trữ dữ liệu trên client.
 * Cookies là một file, server nhúng file này vào máy tính của user
 */
//set cookies
$data="Hello kitty";
setcookie("loginCookie",$data,time()+10);//expire after one minute
//get cookies value : $_COOKIE["loginCookie"]
echo "Data lose after 10s: " . $_COOKIE["loginCookie"];




