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
?>