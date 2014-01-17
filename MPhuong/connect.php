<?php
/**
 * Created by IntelliJ IDEA.
 * User: MINHPHUONG
 * Date: 1/17/ 14
 * Time: 3:48 PM
 * To change this template use File | Settings | File Templates.
 */
//create connection
$con=mysqli_connect("localhost","root","","histudb") or die(mysql_error());
echo "connected";
//$strQuery="INSERT INTO amphuong (username,pass) values ('ios','567')";
$strQuery="CREATE VIEW view_amphuong AS SELECT * FROM amphuong";

mysqli_query($con,@$strQuery) or die(mysql_error());
echo "<br >Views created";
//close connection
mysqli_close($con);
?>