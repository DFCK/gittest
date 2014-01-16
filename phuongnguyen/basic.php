<?php
for($i=1;$i<=100;$i++)
{
    if($i%2 ==0)
    {
        echo " <b>$i</b> ";
    }
    else
    {
        echo $i;
    }
}
echo "</br>";
echo "<b>My first php Script</b>";
echo "<br>";
$color="red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
$t=date("i");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
echo "<br>";
$favcolor="red";
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
        echo "Your favorite color is neither red, blue, or green!";
}
echo "<br>";

$x=1;
do
{
    echo "The number (do while) is: $x <br>";
    $x++;
}
while ($x<=4) ;
while($x<=6)
{
    echo "The number (while) is: $x <br>";
    $x++;
}
?>
<form action="Welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
