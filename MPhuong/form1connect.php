<meta content="text/html"charset="utf-8" http-equiv="content-type">
<?php
/**
 * Created by IntelliJ IDEA.
 * User: MINHPHUONG
 * Date: 1/17/14
 * Time: 4:09 PM
 * To change this template use File | Settings | File Templates.
 */
include("Smarty/libs/Smarty.class.php");
$df=new Smarty();
$df->display("form1connect.tpl");
if(isset($_POST["Login"]))
{
    $con=mysqli_connect("localhost","root","","histudb") or die(mysql_error());
    echo "Message <br />-MySql connected";
    if($_POST["username"]!=""&&$_POST["password"]!="")
    {

        $strQuery="INSERT INTO amphuong (username,pass) values ('$_POST[username]','$_POST[password]')";
        mysqli_query($con,@$strQuery) or die(mysql_error($con));
        echo "<br >-Data inserted";

        $con=mysqli_connect("localhost","root","","histudb") or die(mysql_error());
        echo "Message <br />-MySql connected";

        if($_POST["username"]!=""&&$_POST["password"]!="")
        {
            $strQuery="INSERT INTO amphuong (username,pass) values ('" . $_POST[username] . "','" . $_POST[password] ."')";
            mysqli_query($con,@$strQuery) or die(mysql_error($con));
            echo "<br >-Data inserted";
        }
        else
        {
            echo "<br /> Chưa nhập đầy đủ sao cho đi tiếp được, quay lại nhập đi. hề hề =))";
        }

        mysqli_close($con);

    }
    else
    {
        echo "<br /> Chưa nhập đầy đủ sao cho đi tiếp được, quay lại nhập đi. hề hề =))";
    }
}

?>