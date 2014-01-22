<HTML>
<HEAD>

    <TITLE>Hyperlink</TITLE>
    <STYLE TYPE='text/css'>
        A:link { Font-family:Arial,Helvetica; size:13pt; color:blue; Text-Decoration:none }
        A:visited { Font-size:13pt; color:black; Text-Decoration:none }
        A:active {Font-size:13pt; color:black; Text-Decoration:none }
        A:hover { Color:red; Text-Decoration:Underline }
    </STYLE>

</HEAD>
<BODY>
<A HREF=″http://www.tinhte.vn/″>Trang tin tuc</A>
<p>Khong  co  gi  quy  hon  <span style="font-weight: bold">doc  lap</span>,  <span  style="font-weight: bold">tu do</span>.</p>

<p>Danh Sach Cac Tinh, Thanh Pho Viet Nam:</p>
<ul>
    <div style="color: #FF0000">
        <li>Ha Noi</li>
        <li>TP. Ho Chi Minh</li>
        <li>Đa Nang</li>
    </div>
    <div style="color: #0000FF">
        <li>Thua Thien Hue</li>
        <li>Khanh Hoa</li>
        <li>Quang Ninh</li>
        <li>Tien Giang</li>
    </div>
</ul>

<a ><img SRC="hinhanh/184314_533192116703038_1072519955_n.jpg" WIDTH="403" HEIGHT="403" border="0"></a>

    <div style="color: #CC0000 ; width: 100px; height: 100px">
       <p>Nguyen Thi Cam Nang</p>
    </div>


<a href="#">Link 1</a>
<a href="#">Link 2</a>
<a href="#">Link 3</a>

<a href="#">Link 1</a>
<a href="#" style="position: fixed; top: 100px; right: 100px;">Link 2</a>
<a href="#">Link 3</a>

<a href="#">Link 1</a>
<a href="#" style=" position: relative; left: 100">Link 2</a>
<a href="#">Link 3</a>

<div style="width: 200px; margin: 0 auto; position: relative">
    <a href="#">Link 1</a>
    <a href="#" style="position: absolute; bottom: 0px; right: 0px">Link 2</a>
    <a href="#">Link 3</a>
</div>

<div style="height: 280px; margin: 20px; position: relative;">

    <div style="background-color: blue; height: 200px; left: 0px; position: absolute; top: 0px; width: 200px;z-index: 1"></div>

    <div style="background-color: black; height: 200px; left: 40px; position: absolute; top: 40px; width: 200px;z-index: 3"></div>

    <div style="background-color: red; height: 200px; left: 80px; position: absolute; top: 80px; width: 200px;z-index: 5"></div>

</div>
</BODY>
</HTML>
<?php

//A:link: Thiết lập các thuộc tính của hyperlink khi chưa chọn tới.
//A:visited: Thiết lập các thuộc tính của hyperlink khi đã chọn tới.
//A:active: Thiết lập thuộc tính của hyperlink ngay sau khi được kích hoạt, tương tự như A:visited.
//A:hover: Thiết lập thuộc tính của hyperlink khi đưa con trỏ chuột tới.
?>