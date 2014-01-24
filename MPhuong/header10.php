<?php
/**
 *  Lỗi này xuất hiện khi:
    -	Trước khi gọi hàm header thì echo một nội dung gì đó.
    -	Trước hàm header đã có lệnh nào đó bị lỗi
Cách khắc phục:
   -	Nếu trước hàm header dùng lệnh echo thì có 2 cách khắc phục sau:
    •	Chuyển nội dung echo về sau nội dung hàm header.
    •	Sử dụng lệnh ob_start() ở đầu file để khởi động vùng đệm của server
 *      để chứa tạm thời nội dung echo vào đó và ob_flush() ở cuối file để
 *      đưa dữ liệu từ vùng đệm của server về lại phần nội dung.
   -	Nếu có quyền thiết lập file php.ini của server thì thiết lập lại thuộc tính
 *  output_buffering  = ON trong file php.ini
 */
//ob_start();
echo " ";
header('Location:http://www.vietnamnet.com');
//echo " ";
//header("Content-type:application/pdf");
//header("Content-Disposition:attachment;filename='download.pdf'");
//readfile("original.pdf");       \
//ob_end_flush();