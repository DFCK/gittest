<html>
<body>

<form action="getextension.php" method="post"
      enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file"><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<?php
function getExten($file)
{
    if ($_FILES["$file"]["error"] > 0)
    {
        echo "Error: " . $_FILES["$file"]["error"] . "<br>";
    }
    else
    {
        echo "Upload: " . $_FILES["$file"]["name"] . "<br>";
        echo "Extension: ".substr($_FILES["$file"]["name"],strpos($_FILES["file"]["name"],'.') +1)."<br>";
        echo "Type: " . $_FILES["$file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["$file"]["size"] / 1024) . " kB<br>";
        echo "Stored in: " . $_FILES["$file"]["tmp_name"];
    }
}
getExten("file");
?>