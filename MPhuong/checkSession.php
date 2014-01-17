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
echo "T doc HIS views " . $_SESSION["views"] . " lan roi. M khong biet ha =))";
if($_SESSION["views"]==2)
{
    unset($_SESSION["views"]);
}
//visit
if($_SESSION["visit"]==10)
{
    $_SESSION["visit"]=$_SESSION["visit"]+1;
}
else
{
    $_SESSION["visit"]=1;
}
echo "<br />";
echo "T doc HIS visit " . $_SESSION["visit"] . " lan roi. M khong biet ha =))";
?>