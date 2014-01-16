<?php session_start();
  if(isset($_SESSION["views"])) $_SESSION["views"]+=1;
else $_SESSION["views"]=1;
?>
<html>
<body>

<?php
    echo "PageView: ".$_SESSION["views"];
    echo '<a href = "basic.php"> Basic </a><br>';
    //include 'welcome.php';
    $file = fopen("D:\\as.txt","r") or exit("unable to open file");
    while(!feof($file))
    {
        echo fgets($file)."<br>";
    }
    fclose($file);

    setcookie("user", "Alex Porter", time()+10);
    echo $_COOKIE["user"];
    print_r($_COOKIE);
?>

</body>
</html>