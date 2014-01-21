<?php
$first_date = strtotime('2012-07-11');
$second_date = strtotime('2012-07-14');
$datediff = abs($first_date - $second_date);
echo floor($datediff/(60*60*24));
?>