<?php
/**
 * Created by IntelliJ IDEA.
 * User: MINHPHUONG
 * Date: 1/16/14
 * Time: 4:43 PM
 * To change this template use File | Settings | File Templates.
 */
session_start();
//echo $_SESSION["username"];
if(isset($_SESSION["username"]))
{
     echo "Hế lô, " . $_SESSION["username"];
}
else
{
    echo "Đăng nhập đê, lười thế =))";
}