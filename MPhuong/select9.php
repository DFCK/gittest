<?php
include("Smarty/libs/Smarty.class.php");
$df=new Smarty();
$df->display("select9.tpl");
echo "Student " . $_POST["student"] . " study in Grade " . $_POST["grade"];