<?php
include("Smarty/libs/Smarty.class.php");
$df=new Smarty();
$df->display("select9.tpl");
echo "Grade: " . $_POST["grade"];