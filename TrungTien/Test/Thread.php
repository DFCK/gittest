<?php
session_start();
 if(isset($_POST['user']) && isset($_POST['pass']))
{
    $all = $_POST['user'] + $_POST['pass'];
    if(isset($_SESSION['manage'])) $_SESSION['manage']= $_SESSION['manage']." ".$all;
    else $_SESSION['manage'] = $all;
    echo $_SESSION['manage'];
    $users = count(glob(session_save_path() . '/*'));
    echo "<br>".$users;
    if(strlen($_SESSION['manage']) >=15) unset($_SESSION['manage']); //hủy toàn bộ session: session_destroy();

}
?>

<html>
    <body>
    <form action="thread.php" method="post">
        Username: <input type="text" name="user"><br>
        Password: <input type="password" name="pass">
        <input type="submit" value="OK">
    </form>
    </body>
</html>