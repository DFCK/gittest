<?php
$iN=20;
$strPhp="PHP";

echo "I. Lay kieu du lieu </br />";
echo "1. dump </br />";
var_dump($iN);
echo "</br />";
var_dump($strPhp);
echo "</br />";

echo "2. get type </br />";
echo gettype($iN);
echo "</br />";
echo gettype($strPhp);

echo "</br />";
echo "******************";
echo "</br />";

echo "II. Kiem tra kieu du lieu";
echo "</br />";
if(is_numeric($iN))
{
    echo "Numeric";
}
else if(is_string($strPhp))
{
    echo "String";
}
else
{
    echo "Ngồi chơi đi - hông có kiểu nào hết :P";
}