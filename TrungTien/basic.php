<?php
$x=5; // global scope

function myTest()
{
    $y=10; // local scope
    //global $x;
    echo "<p>Test variables inside the function:<p>";
    echo "Variable x is: " . $GLOBALS['x'];
    echo "<br>";
    echo "Variable y is: $y";
}

myTest();

echo "<p>Test variables outside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y <p>";

function myTest1()
{
    static $x=0;
    echo $x;
    $x++;
}

myTest1();
myTest1();
myTest1();

//---
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This". " string". " was", " made", " with multiple parameters.";

//---
echo "<p>";
$txt1="Learn PHP";
$txt2="W3Schools.com";
$cars=array("Volvo","BMW","Toyota");
echo $txt1 ,"<br>";
echo "Study PHP at ". $txt2."<br>";
echo "My car is a {$cars[1]}<br>";
print "{$cars[1]}";
var_dump($cars);
var_export($cars);

//---
echo "<p>";
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // negative number
var_dump($x);
echo "<br>";
$x = 0x8C; // hexadecimal number
var_dump($x);
echo "<br>";
$x = 047; // octal number
var_dump($x);
?>

<?php
class xe
{
    var $mausac;
    function xe($color = "xanh")
    {
        $this->mausac = $color;
    }
    function what_color()
    {
        echo "<p>xe mau ".$this->mausac;
    }
}
$car = new xe("xanh");
$car->what_color();

$x="Hello world!";
echo "<br>".strlen($x)."<br>";
echo strpos($x,"world")."<br>";

//màu trắng là file bình thường
//màu lục là file mới add và git
//màu đỏ là file chưa adđ vào git
//màu lam là file có sửa đổi

/* Cách sử dụng github
 cd xampp/htdocs
git clone https://github.com/DFCK/gittest.git
cd gittest
git pull
mkdir tên-sv
git pull
git add .
git commit -m "init"
git push
 */
?>


