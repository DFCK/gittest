<meta content="text/html"charset="utf-8" http-equiv="content-type">
<?php
/**
 * Created by IntelliJ IDEA.
 * User: MINHPHUONG
 * Date: 1/16/14
 * Time: 1:56 PM
 * To change this template use File | Settings | File Templates.
 */
//echo "Username: " . $_GET["username"]  . "<br />";
//echo "Password: " . $_GET["password"];

//echo "Username: " . $_POST["username"]  . "<br />";
//echo "Password: " . $_POST["password"];

//echo "Username: " . $_REQUEST["username"]  . "<br />";
//echo "Password: " . $_REQUEST["password"];


$postUsername = $_POST["username"];
$postPassword = $_POST["password"];
if($postUsername=="abc" && $postPassword==123)
{
    echo "Username: " . $_POST["username"]  . "đã đăng nhập thành công vào THẾ GIỚI CỔ TÍCH HIS của chúng tôi";
}
else
{
    echo "<br /> Đăng nhập thất bại - Bị lạc đường rồi =))";
}



