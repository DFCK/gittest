<?php
echo 'hello ';
echo "<br>";
$cars = array("Toyoto","BMW");
echo "toi thich " .$cars[0].", toi khong thich " .$cars[1];
echo "<br>";
echo count($cars);
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old." ;
echo "<br>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";
$car=array("Volvo","BMW","Toyota");
$arrlength=count($car);

for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
//-----------------
$t = date("H");
if($t<8){
    echo 'have a nice';
    echo "<br>" ;
}
else{
    echo 'have a good day';
    echo "<br>";
}
//---------------------
$x = 5985;
var_export($x);
echo "<br>";
var_dump($x);
echo "<br>";
$x = -345; // negative number
var_dump($x);
echo "<br>";
var_export($x);
echo "<br>";
$x = 0x8C; // hexadecimal number
var_dump($x);
echo "<br>";
$x = 047; // octal number
var_dump($x);
echo "<br>";
//=====================
define("Hello","welcome to Dong Thap!") ;
echo Hello;
echo "<br>";
//======================
define("Hello","welcome to Dong Thap!", true) ;
echo Hello;
echo "<br>";
echo hello;
echo "<br>";
//switch
$color ="yellow";
switch($color)
{
    case "red": echo "your favorite color is red"; echo "<br>";    break;
    case "yellow": echo "your favorite color is yellow"; echo "<br>";    break;
}
//while
$x =1;
while($x<10){
    echo $x;
    echo "<br>";
    $x++;
}
// do....while
$y = 1;
do{
    echo $y;
    echo "<br>";
    $y++;
}   while($y<5)    ;
// for
for($x =0; $x<10;$x++){
    echo $x;
    echo "<br>";
}
// foreach array
$numbers = array("1","2","3","4","5");
  foreach($numbers as $value){
      echo $value;
      echo "<br>";
  }
// array ascending sort
$colors = array("red","yellow","black","white","pink");
sort($colors);
$lenghtclolor = count($colors);
for($x=0;$x<$lenghtclolor;$x++){
    echo $colors[$x];
    echo "<br>";
}
// array descending sort
$num = array(1,5,2,9,3);
rsort($num);
$lenghtnum = count($num);
for($x=0;$x<$lenghtnum; $x++){
    echo $num[$x];
    echo "<br>";
}
// $GLOBAL super global variable
$x = 10;
$y = 5;
function subtract($x, $y){
    $w = $x -$y;
    return $w;
}
echo "10 -5 =".subtract(10,5)."<br>";
function add(){
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo $z."<br>";
// $_SERVER
echo $_SERVER['PHP_SELF']."<br>";  // tra ve ten tap tin dang thuc hien
echo $_SERVER['GATEWAY_INTERFACE']."<br>";   //Trả về phiên bản của Common Gateway Interface (CGI) máy chủ đang sử dụng
echo $_SERVER['SERVER_ADDR']."<br>";   //Trả về địa chỉ IP của máy chủ lưu trữ
echo $_SERVER['SERVER_NAME']."<br>";  //Trả về tên của các máy chủ lưu trữ
echo $_SERVER['SERVER_SOFTWARE']."<br>";    //Trả về chuỗi nhận dạng máy chủ
echo $_SERVER['SERVER_PROTOCOL']."<br>";     //Trả lại tên và sửa đổi các giao thức thông tin
echo $_SERVER['SCRIPT_NAME']."<br>";          //Trả về đường dẫn của kịch bản hiện tại
//$_REQUEST
$name = $_REQUEST['fname'];
echo $name."<br>";
//$_GET
echo "Study " . $_GET['subject'] . " at " . $_GET['web']."<br>";
//$_post
echo "Name:". $_POST['name']."<br>"."Email:".$_POST['email']."<br>"   ;
 //form vadication
$name="";
$nameError="";
$email="";
 $web ="";
$cmt ="";
$gender="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if (empty($_POST["name1"]))
    {
         $nameError = "Name is required";
    }
    else
    {
       $name = test_data($_POST["name1"])."<br>";
    }
 echo   $email = test_data($_POST["email1"])."<br>";
  echo $web = test_data($_POST["web"])."<br>";
 echo   $cmt = test_data($_POST["cmt"])."<br>";
   echo $gender = test_data($_POST["gender"])."<br>";
}
function test_data($data){
    $data = trim($data);     //Loại bỏ những khoảng trắng ở đầu và cuối của chuỗi.
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo $name;
?>