<?php
/**
 * Created by IntelliJ IDEA.
 * User: MINHPHUONG
 * Date: 1/17/14
 * Time: 10:43 AM
 * To change this template use File | Settings | File Templates.
 */
session_start();

$_SESSION["views"]++;
?>
<html>
<body>
<?php
echo "Di lam duoc " . $_SESSION["views"] . " roi a' nhen =)). ";
?>
</body>
</html>