<?php
function getFibonaci($n)
{
    if($n == 1 || $n == 2)
        return 1;
    else
        return (getFibonaci($n - 1) + getFibonaci($n - 2));
}
echo getFibonaci(4)."<br>";
?>
<?php
function getExt($filename)
{
    return substr($filename, strrpos($filename, '.') + 1);
    //substr($string, $start, $length ): tách chuỗi con từ một chuỗi
    //strops($str, $chuoi_tim) Tìm vì trí xuất hiện đầu tiên của $chuoi_tim trong chuỗi $str.

}
echo getExt($_SERVER['PHP_SELF']);
?>
<?php
$date1="2014-01-01";
$date2 ="2014-01-19";
$diff = abs(strtotime($date2) - strtotime($date1));
//strtotime() đổi ra giây  , lấy trị tuyệt đối
//floor() làm tròn
$days =floor($diff/(60*60*24));
echo "<br />".$days." days";
?>
<?php
$message ="camnang";
echo "<br>".$message;
echo "<br>"."$$message";
?>
