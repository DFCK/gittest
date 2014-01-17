<html>
<body>

<?php


$c1 = "Red";
   $c2 = array("yamaha", "Toyota", "bla bla");
echo "tui di xe" .$c2[0].". Anh di xe".$c2[1].$c2[2]." aaaaaaaaaaaa";
print "<br>Alo mot hai ba bon"."<br> alo alo";
print "<br>tui di xe".$c2[0].". Anh di xe".$c2[1].$c2[2]." aaaaaaaaaaaa";
echo "<br>Alo mot hai ba bon"."<br> alo alo";
echo "<h2> ABC $c1  </h2>";


$a1=1.68126;
$a2=2+3*2;
$a3=3E-4;

 $a4=$a1+$a2;
echo "$a4 abc xyz $a1 + $a2<br>";
echo "<br>".strpos("abcdef", "ef");
echo "<br>". strlen("asdkajsldka<br>");

foreach($c2 as $c){
echo "Xe $c <br>";
}

$numbers=array(4,6,2,22,11);
rsort($numbers);
foreach($numbers as $n){
        echo "$n, ";
}

$cars=array("Volvo","BMW","Toyota");
rsort($cars);
foreach($cars as $c){
     echo "$c, ";
}

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
foreach($age as $key => $value){
    echo "Key= $key, Value= $value;<br> ";
}

$name=$_POST["name"];
$email=$_POST["email"];
$data="<br>".$_POST["email"];

if($name <> null){
echo "<b>Ten cua ban: $name</b><br>";
echo "<b>Email cua ban: $email</b> <br>";
    echo $data;
    echo "Test ham trim(), stripslashes(), htmlspecialchars()";
    $data = trim($data);
    echo $data;
    $data = stripslashes($data);
    echo $data;
    $data = htmlspecialchars($data);
    echo $data;
}

$website = "h.nguyen_nguyen@gmail.com";
//echo "<br>".preg_match('@^(?:http://)?([^/]+)@i',"http://www.php.net/index.html");
if (preg_match('@^(?:http://)?([^/]+)@i',"http://www.php.net/index.html", $matches))
{
    echo "A match was found.<br>";
    var_dump($matches);
} else {
    echo "A match was not found.<br> <br> <br>";
}

echo "<br><br><br>";
$ab="ab cdacedcsas kasdcxsb";
echo preg_match('/[^ad(\s)]c/',$ab);
?>
    </body>
</html>