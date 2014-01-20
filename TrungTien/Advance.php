<?php //session_start();
//  if(isset($_SESSION["views"])) $_SESSION["views"]+=1;
//else $_SESSION["views"]=1;
//?>
<!--<html>-->
<!--<body>-->
<!---->
<?php
include("Smarty/libs/Smarty.class.php");
$df = new Smarty();

if(isset($_POST["submit"]))
{
    echo "submit" ;
    $abc="a";
    $df->assign("abc",$abc);
}
phpinfo();
//$df->assign("abc","xyz");
$df->display("ff.tpl");
//    include 'menu.php';
//    echo "PageView: ".$_SESSION["views"];
//    echo '<a href = "basic.php"> Basic </a><br>';
//    $file = fopen("D:\\as.txt","r") or exit("unable to open file");
//    while(!feof($file))
//    {
//        echo fgets($file)."<br>";
//    }
//    fclose($file);
//
//    $con = mysqli_connect("localhost","root","",histudb);
//    if(mysqli_connect_errno()) echo "connection failed";
//    else echo "connect successfully";
//    $query = "SELECT NAME,login_id FROM care_users";
//    $result = mysqli_query($con,$query);
//
//    echo "<table border = '1'>
//<th>Name</th>
//<th>id</th>
//";
//    while($row = mysqli_fetch_array($result))
//    {
//        echo "<tr>";
//        echo "<td>" . $row['NAME'] . "</td>";
//        echo "<td>" . $row['login_id'] . "</td>";
//        echo "</tr>";
//    }
//    echo '</table>';
//    mysqli_close($con);
//?>
<!---->
<!--</body>-->
<!--</html>-->