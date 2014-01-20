<?php
/**
 * Created by IntelliJ IDEA.
 * User: MINHPHUONG
 * Date: 1/17/14
 * Time: 11:20 AM
 * To change this template use File | Settings | File Templates.
 */
//isset check when "views" set
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

//visit
if(empty($_SESSION["visit"]))
{
    $_SESSION["visit"]=1;
}
else
{
    $_SESSION["visit"]=$_SESSION["visit"]+1;
}
echo "<br />";
echo "Visit " . $_SESSION["visit"] . " times";
?>