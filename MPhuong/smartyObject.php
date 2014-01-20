<meta content="text/html"charset="utf-8" http-equiv="content-type">
<?php
/**
 * Created by IntelliJ IDEA.
 * User: MINHPHUONG
 * Date: 1/20/14
 * Time: 9:08 AM
 * To change this template use File | Settings | File Templates.
 */
include("Smarty/libs/Smarty.class.php");
$df=new Smarty();
//1. truyền biến abc qua file object.tpl
if(isset($_POST["Value"]))
{
    $abc="HELLO SMARTY";
    $df->assign("abc",$abc);
}
$df->display("object.tpl");
//2. đăng nhập
if(isset($_POST["Login"]))
{
    $postUsername = $_POST["username"];  //lấy biến username từ file object.tpl
    $postPassword = $_POST["password"];
    if($postUsername=="abc" && $postPassword==123)
    {
        echo "Username: " . $_POST["username"]  . " đã đăng nhập thành công vào THẾ GIỚI CỔ TÍCH HIS của chúng tôi";
    }
    else
    {
        echo "<br /> Đăng nhập thất bại - Bị lạc đường rồi =))";
    }
}
