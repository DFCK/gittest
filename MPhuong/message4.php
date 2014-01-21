<?php
//$a=5;
//echo "message$: " . "$a" . "<br />";
//echo "message$$: " . "$$a";
/**
 * $variable = "integer"
 * $$variable : integer
 * $$message khác với $message : 2 dollar trước biến variable để reference tới biến integer và lấy giá trị thực của variable
 */
$variable = "integer";
$integer=5;
echo "Variable: " . $$variable;
