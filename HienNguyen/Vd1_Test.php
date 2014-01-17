<html xmlns="http://www.w3.org/1999/html">
<head>
    <style>
        header { font-size: 30; color: deepskyblue; margin-left:100; }
        h1{font-size: 18; color: crimson; margin-left: 30;}
        h2{font-size: 18; color: blue; margin-left: 50;}
    </style>
</head>
<body>
<center>
<?php
$type=$_POST["pheptinh"];
$s1=$_POST["s1"];
$s2=$_POST["s2"];
if($s1 <> null){
switch ($type){
    case cong:
        $kq=$s1+$s2;
        break;

    case tru:
        $kq=$s1-$s2;
        break;

    case nhan:
        $kq=$s1*$s2;
        break;

    case chia:
        $kq=$s1/$s2;
        break;
}
?>
    <header>
        PHEP TINH TREN HAI SO  <br>
    </header>
    <h1> THUC HIEN PHEP TINH: <?php echo $type; ?> </h1>

    <h2> So thu nhat <input type="text" value="<?php echo $s1;?>">   <br>
        So thu hai <input type="text" value="<?php echo $s2;?>">        <br>
        Ket Qua <input type="text" value="<?php echo $kq;?>"> </h2>         <br>
    <a href="javascript:window.history.back(-1)"> Quay ve trang truoc</a>

<?php
}
function Test($fString){
    $fString=trim($fString);
    if(preg_match("/^[a-zA-Z0-9]*@/", $fString)) return $fString;
    else return null;
}

$id= $_POST["user"];
    $pass= $_POST["pass"];
    $email= Test($_POST["email"]);

if($id <> null && $pass <> null && $email<>null)
{   if($id=="admin" and $pass=="123")  {
        ?>
     <header>Chuc mung, ban da dang nhap thanh cong </header>
<?php }
    else
    { if($email== null){?>
    <header> Dang nhap that bai :((((((((( </header>
    <h2> Nhap sai Email </h2>
    <?php } else {
    ?>
    <header>Dang nhap that bai :((((((((( </header>
    <?php
    }
    } ?>
</center>
<br> <br>
<?php
}
?>
</body>
</html>