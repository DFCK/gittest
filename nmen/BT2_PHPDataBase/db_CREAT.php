<?php
$con=mysqli_connect("localhost","root","");

if (mysqli_connect_errno())
{
    echo "Error " . mysqli_connect_error();
}


$sql="CREATE DATABASE my_db";
if (mysqli_query($con,$sql))
{
    echo " successfully";
}
else
{
    echo "Error creating " . mysqli_error($con);
}
?>