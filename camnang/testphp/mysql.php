
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","my_db");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
     if($_POST["submit"]){
    $sql="INSERT INTO Sinhvien (ho, ten, tuoi) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
         if (!mysqli_query($con,$sql))
         {
             die('Error: ' . mysqli_error($con));
         }
     }
mysqli_close($con);
?>
<form action="mysql.php" method="post">
    Ho sinh vien: <input type="text" name="firstname">
    Ten sinh vien: <input type="text" name="lastname">
    Tuoi: <input type="text" name="age">
    <input type="submit" name="submit" value="OK">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo "Ten sinh vien:". $_POST["firstname"]."<br>";
echo "Ho sinh vien".$_POST["lastname"]."<br>";
echo "Tuoi".$_POST["age"]."<br>";
?>

</body>
</html