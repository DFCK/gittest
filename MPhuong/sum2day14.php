<?php

/**
 * strtotime() tính số giây
 * abs() lấy giá trị tuyệt đối của 2 ngày vì không biết ngày nào lớn hơn
 * floor() để làm tròn số ngày trả về
 */
function sum2date($startDate,$endDate)
{
    $startDateSecond = strtotime($startDate);
    $endDateSecond=strtotime($endDate);
    $subDate=abs($startDateSecond-$endDateSecond);
    $sum2Date =  floor($subDate/(60*60*24));//(tổng số giây / tổng số giây trong 1 ngày)
    return $sum2Date;
}
$abc = sum2date('2014-01-22','2014-01-25');
//echo $abc;
//$abc = sum2date(2014-01-22,2014-01-25);

echo "Sum(2014-01-22,2014-01-25) = " . $abc . " days";