<?php
$con=mysqli_connect("localhost","root","","my_db");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO Persons (Id,FirstName, LastName, Age)
VALUES (1,'NGUYEN', 'A',25)");

mysqli_query($con,"INSERT INTO Persons (Id,FirstName, LastName, Age)
VALUES (2,'NGUYEN', 'B',22)");

        echo"sucessful";
mysqli_close($con);
?>