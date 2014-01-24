<?php
/**
 *  Tách các phần tử của chuỗi thành những chuỗi nhỏ hơn.
 */
$str = " Happy day.";
$restr=  explode(" ",$str);
print_r ($restr);//Tách chuỗi gốc thành nhiều chuỗi con dựa vào dấu cách
for($i=0;$i<count($restr);$i++)
{
    echo "-".$restr[$i] . "<br/>";
}
echo "<br/>";

$str1=' one,two,three,four';
$restr1= explode(',',$str1,2);
print_r($restr1);//positive limit
echo "<br/>";
for($i=0;$i<count($restr1);$i++)
{
    echo "-".$restr1[$i] . "<br/>";
}

$re1str1= explode(',',$str1,-1); //negative limit PHP5.1
echo "<br/>";
for($i=0;$i<count($re1str1);$i++)
{
    echo "-".$re1str1[$i] . "<br/>";
}
