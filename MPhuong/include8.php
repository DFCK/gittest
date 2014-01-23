<?php
/**
 * include & require được sử dụng để insert code đã viết vào file khác
 * require: sẽ hiển thị ra thông báo dạng fatal(nghiêm trọng)
 *          (lỗi biên dịch- compile error) và ngừng thực thi script ngay sau đó
 * include: sẽ hiển thị ra thông báo dạng warning(cảnh báo) và vẫn tiếp tục
 *          thực thi script.
 * include_once và require_once có chức năng tương tự nhau như 2 hàm include
 *          và require. Và 2 hàm include_once và require_once chỉ chèn file một
 *          lần duy nhất cho dù khai báo nhiều lần.
 */
//1.
//echo "<h3> Part I. </h3>" ;
//include 'include8_1.php';
////require 'include8_1.php';
//echo "Sum(10+20) = " . Add(10,20);
//
//echo "<br />";
//2.
echo "<h3> Part II. </h3>" ;
include 'include8_1.php';
//require 'include8_.php';
echo "<br/>";
echo  "TUI DAY NE - Sum(10+20) = " . Add(10,30);

echo "<br/>";
//3.
echo "<h3> Part III. </h3>" ;
//include 'abc.php'; echo "<br />";
//include 'abc.php'; echo "<br />";
//include 'abc.php'; echo "<br />";

//include_once 'abc.php';
//include_once 'abc.php';
//include_once 'abc.php';
//
//include_once 'ab.php';
//include_once 'ab.php';
//include_once 'ab.php';

require_once 'abc.php';
require_once 'abc.php';
require_once 'abc.php';

require_once 'ab.php';
require_once 'ab.php';
require_once 'ab.php';
echo "<br />The end";

