<?php
function DeQuy($index)
{
    if($index==1 || $index == 2) return 1;
    else return (DeQuy($index-1)+DeQuy($index-2));
}
function KhuDeQuy($index)
{
    $flag = 2;
    $f1 = 1;
    $f2 = 1;
    if($index == 1 || $index == 2) return 1;
    else
    {
        while($flag < $index)
        {
            $f2 = $f2 + $f1;
            $f1 = $f2 - $f1;
            $flag+=1;
        }
        return $f2;
    }
}
?>
<html>
    <body>
        <form action="fibonaci.php" method="post">
            <img src="test.jpg" usemap="#test" border="0" height="300" width="600">
            <map name = "test" id="test">
                <area shape="circle" coords="100,100,100" href="date.php" alt="day la hinh vuong" title="day la hinh tron" />
            </map>
            <br>Nhap stt day fibonacy: <input type="text" name="fibo">
            <input type="submit" name="submit" value="OK"><br>
        </form>
    </body>
</html>
<?php
if(isset($_POST["fibo"]))
{
    $rs = DeQuy($_POST["fibo"]);
    echo "<br>"."So fibo index= ".$_POST["fibo"]." la $rs";
    $rs1 = KhuDeQuy($_POST["fibo"]);
    echo "<br>"."So fibo index= ".$_POST["fibo"]." la $rs1";
}