<?php
/**
 * Created by IntelliJ IDEA.
 * User: MINHPHUONG
 * Date: 1/16/14
 * Time: 9:16 AM
 * To change this template use File | Settings | File Templates.
 */
$arrCourse = array();
$arrCourse[]="A";
$arrCourse[]="B";
$arrCourse[]="C";

$arrCourse1=array();

$length = count(@$arrCourse);
echo "So phan tu: " . $length;

//1
echo "</br /> 1. Length </br />";
if($length>0)
{
    echo "^^ Co ai kia";
}
else
{
    echo "Khong co gi het ^^";
}

echo "<br />";
//2
echo "</br /> 2. Empty </br />";
if(!empty($arrCourse1))
{
    echo "O-o Co ai kia";
}
else
{
    echo "Khong co gi het O-o";
}

echo "<br />";
//3
echo "</br /> 3. Print </br />";
echo "<pre>";
print_r($arrCourse);
echo "</pre>";

echo "<br />";
echo "<br /> 4.Cac gia tri phan tu trong 3 mang Array";
//4. Cac cach khai bao mang array
//Cach 1
$arrMP1 = array();
$arrMP1[]="Minh 1";
$arrMP1[]="Minh Phuong 1";
$arrMP1[]="Minh Phuong SU 1";
echo "</br /> Array1:" . $arrMP1[0];

//Cach 2
$arrMP2 = array();
$arrMP2[0]="Minh 2";
$arrMP2[1]="Minh Phuong 2";
$arrMP2[2]="Minh Phuong SU 2";
echo "</br /> Array2:" . $arrMP2[1];

//Cach 3
$arrMP3=array("Minh 3","Minh Phuong 3","Minh Phuong SU 3");
//$arrMP3=array();
echo "</br /> Array3:" . $arrMP3[2];

echo "<br />";
echo "<br /> 5.For <br />";
@$lengthArr=count($arrMP3);
if(!empty($arrMP3))
{
    for($i=0;$i<$lengthArr;$i++)
    {
        echo $arrMP3[$i] . "<br />";
    }
}
else
{
    echo "Khong co gi het ^^";
}

echo "<br />";
echo "<br /> 6.Foreach <br />";
echo "<pre>";
print_r($arrMP3);
echo "</pre>";
if(!empty($arrMP3))
{
    foreach($arrMP3 as $key=>$value)
    {
        //echo $value . "<br />";
    }
}
else
{
    echo "Khong co gi het ^^";
}

//cach 1
$arrArray = array();
$arrArray["a"] = "A";
$arrArray["b"] = "B";
$arrArray[] = "1";

echo "<br />";
echo "<br /> 7.Mang khong lien tuc <br />";
echo "<pre>";
print_r($arrArray);
echo "</pre>";

//cach 2
echo "<br />";
$arrArray1=array("a"=>"A","b"=>"B",0=>"Mot",1=>2);
echo "<pre>";
print_r($arrArray1);
echo "</pre>";






