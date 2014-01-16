<?php
/*
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
echo strpos($x,"world")."<p>";

//---operator
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y; // union of $x and $y
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);

//---if..else
$t=date("H");
if ($t<"20")
{
    echo "<p>Have a good day!";
}

$favcolor="re";
switch ($favcolor)
{
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "<p>Your favorite color is neither red, blue, or green!";
}

//---Loop
echo "<p>";
$z=6;
do
{
    echo "The number is: $z <br>";
    $z++;
}
while ($z<=5);

echo "<p>";
$color = array("red","green","blue");
foreach($color as $value)
{
    echo "$value<br>";
}

//---array
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['HTTP_REFERER']."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";
echo $_SERVER['SCRIPT_NAME']."<br>";
 ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = $_REQUEST['fname'];
echo $name;
*/?>

<?php
$name = $email = $gender = $comment = $website = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["cmt"]);
    $gender = test_input($_POST["sex"]);
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" > <br>
    Email: <input type="text" name="email">  <br>
    Comments: <textarea name="cmt" rows="4" cols="40"> </textarea>  <br>
    Sex: <input type="radio" name="sex" value="Female"> Female
        <input type="radio" name="sex" value="Male"> Male
    <input type="submit"  name="submit" value="Submit">
</form>

<?php
echo $name + "<br>";
echo $email + "<br>";
echo $cmt + "<br>";
echo $sex + "<br>";
?>

<?php
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
 */           ?>



