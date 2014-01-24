<?php
/**
 *
 */
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db_selected=mysql_select_db("histudb",$con);
$strQuery="SELECT * FROM amphuong";
$result = mysql_query(@$strQuery,$con);
print_r(mysql_fetch_assoc($result));
echo "<br />";
print_r(mysql_fetch_assoc($result));
//echo $result['id'] .  $result['username'] . " " . $result['pass'] ;
mysql_close($con);

//$con=mysql_connect("localhost","root","") or die(mysql_error());
//$db_selected=mysql_select_db("histudb",$con);
//$strQuery="SELECT * FROM amphuong";
//$result = mysql_query(@$strQuery,$con);
//print_r(mysql_fetch_array($result,MYSQL_NUM));
//echo "<br />";
//print_r(mysql_fetch_array($result,MYSQL_NUM));
//mysql_close($con);

//mysqli
//$con=mysqli_connect("localhost","root","","histudb") or die(mysql_error());
//$strQuery="SELECT * FROM amphuong";
//$result = mysqli_query($con,@$strQuery);
//print_r(mysqli_fetch_assoc($result));
//mysqli_close($con);

//$con=mysqli_connect("localhost","root","","histudb") or die(mysql_error());
//$strQuery="SELECT * FROM amphuong";
//$result = mysql_query($con,@$strQuery);
//echo mysqli_fetch_array($result);
//mysqli_close($con);