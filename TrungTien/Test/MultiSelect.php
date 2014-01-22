<?php
if(isset($_POST['chonso1']))
{
    echo "<h2> So duoc chon 1 <h2>";
    foreach($_POST['chonso1'] as $value)
    {
        echo $value."\n";
    }
}
if(isset($_POST['chonso']))
{
    echo "<h2> So duoc chon 2 <h2>";
    echo $_POST['chonso'];
}
?>

<html>
     <body>
        <form action="MultiSelect.php" method="post">
            <select name="chonso1[]" multiple = "multiple" size="10" tabindex="1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <select name="chonso">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="submit" value="ok" name="OK">
        </form>
     </body>
</html>

