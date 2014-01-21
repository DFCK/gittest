<?php
//Session được hiểu là khoảng thời gian người sử dụng giao tiếp với 1 ứng dụng.
//Một session được bắt đầu khi người sử dụng truy cập vào ứng dụng lần đầu tiên,
//và kết thúc khi người sử dụng thoát khỏi ứng dụng.
//Mỗi session sẽ có được cấp một định danh (ID) khác nhau và nội dung được lưu trong thư mục thiết lập trong file php.ini
session_start();   //thiet lap session
if(isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view'] +1;
}   else{
    $_SESSION['view'] =1;
}
echo "Views=". $_SESSION['view']."<br>";
//echo "SesionId:". session_id();
?>
<?php
session_start()  ;
//if(isset($_SESSION['view'])){
//  unset($_SESSION['view']); // Cho phép hủy bỏ session .
//}
//?>
<?php
session_destroy();   //Cho phép hủy bỏ toàn bộ giá trị của session
//?>
<?php
echo "SessionId:".session_id();
//?>
<?php
//Cookie là 1 đoạn dữ liệu được ghi vào đĩa cứng hoặc bộ nhớ của máy người sử dụng. Nó được trình duyệt gởi ngược lên lại server mỗi khi browser tải 1 trang web từ server.
//Những thông tin được lưu trữ trong cookie hoàn toàn phụ thuộc vào website trên server. Mỗi website có thể lưu trữ những thông tin khác nhau trong cookie, ví dụ thời điểm lần cuối ta ghé thăm website, đánh dấu ta đã login hay chưa, v.v...
//Cookie được tạo ra bởi website và gởi tới browser, do vậy 2 website khác nhau (cho dù cùng host trên 1 server) sẽ có 2 cookie khác nhau gởi tới browser. Ngoài ra, mỗi browser quản lý và lưu trữ cookie theo cách riêng của mình, cho nên 2 browser cùng truy cập vào 1 website sẽ nhận được 2 cookie khác nhau.

setcookie("user","camnang",time()+3600);      //thiet lap cookie
//?>
<?php
echo $_COOKIE["user"]."<br>";
//print_r($_COOKIE);           //view tat ca cookie
//?>
<?php
setcookie("user","camnang",time()-3600);
//?>
<?php
$string ="camnang269@gmail.com";
echo $string."<br>";
print_r(explode('@',$string));
?>
<?php
$a=1; $b=2;
Function trans($a,$b){
    $a=$b;
    $b=0;
}
Trans($a,$b);
echo "<br>";
Echo $a."<br>";
Echo $b."<br>";

?>
<?php
$a = 1;
Function sum(){
    global $a;
    $a+=1;
}
Sum();
Echo $a;
?>
<?php
$message ="camnang";
echo "<br>".$message;
echo "<br>"."$$message";
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
$name="";
$nameError="";
$email="";
$emailError="";
$web ="";
$webError="";
$cmt ="";
$cmtError ="";
$gender="";
$genderError="";
$sex="";
$sexError="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if (empty($_POST["name"]))
    {
        $nameError = "Name is required";
    }
    else
    {
        $name = test_data($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailError ="Name is required";
    }else{
        $email = test_data($_POST["email"]) ;
    }
    if(empty($_POST["web"])){
        $webError="";
    }else{
        $web = test_data($_POST["web"]);
    }
    if(empty($_POST["cmt"])){
        $cmtError="";
    }else{
        $cmt = test_data($_POST["cmt"]);
    }
    if(empty($_POST["gender"])){
        $genderError ="";
    }   else{
        $gender = test_data($_POST["gender"]);
    }
    if(empty($_POST["sex"])){
        $sexError="";
    }else{
        $sex= test_data($_POST["sex"]) ;
    }

}
function test_data($data){
    $data = trim($data);     //Loại bỏ những khoảng trắng ở đầu và cuối của chuỗi.
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form action="../testphp.php" method="post">
    Name:<input type="text" name="name">
    <span class="error">*<?php echo $nameError;?></span><br><br>
    Email:<input type="text" name ="email">
    <span class="error">*<?php echo $emailError;?></span><br><br>
    Website:<input type="text" name="web"><br><br>
    Comment:<textarea type="text" name="cmt" cols="40" rows ="5"></textarea><br> <br>
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female   <br>  <br>
    <Select name ="sex">
        <option value ="Male">Male </option>
        <option value ="Female">Female </option>
    </select>   <br><br>
    <input type="submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $web;
echo "<br>";
echo $cmt;
echo "<br>";
echo $gender;
echo "<br>";
echo $sex;
?>
</body>
</html>
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

