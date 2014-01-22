<?php
if(isset($_POST['ngaybdau']) && isset($_POST['ngaykthuc']))
{
    $ngay1 = new DateTime($_POST['ngaybdau']);
    $ngay2 = new DateTime($_POST['ngaykthuc']);
    $hieu = round(($ngay2->format('U') - $ngay1->format('U')) / (60*60*24));
    echo $hieu." days";
}
?>

<html>
<head>
    <link href="design.css" type="text/css" rel="stylesheet" >
</head>
    <body>
        <form action="date.php" method="post">
            <div><p>HOC WEB CHUAN</p></div>
           Ngay bat dau: <input type="text" name="ngaybdau"> <br>
           Ngay ket thuc: <input type="text" name="ngaykthuc"><br>
            <input type="submit" value="submit" name="ok"> <br>
            <marquee direction = "right" width = "500"  scrolldelay = "2" scrollamount = "10" behavior= "scroll">Tinh hieu 2 ngay.</marquee>
        </form>

    </body>
</html>