<?php
$con=mysqli_connect("localhost","root","","my_db");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql="CREATE TABLE Persons(Id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(Id),FirstName CHAR(30),LastName CHAR(30),Age INT)";

if (mysqli_query($con,$sql))
{
    echo "successfully";
}
else
{
    echo "Error creating table: " . mysqli_error($con);
}
?>