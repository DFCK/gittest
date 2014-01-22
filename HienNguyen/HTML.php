<?php
/*
  * 1. Doctype là thành phần chính của các web document chuẩn mực. Nó không phải là một tag, mà nó chỉ cho trình duyệt web biết được phiên bản ngôn
 * ngữ nào đang được sử dụng. Nếu trang web không có doctype, browser sẽ dịch và hiển thị website theo cách khác. Doctype thường chứa đường dẫn
 * tới một tiêu chuẩn nào đó, để browser có thể hiểu và sử dụng đúng doctype theo đúng cách bạn muốn.
 * Hiện tại đã có HTML 5, nhưng chuẩn doctype mới tới phiên bản HMTL 4.01
 * 2, Thẻ <meta/> cung cấp thông tin dữ liệu về văn bản HTML. thông tin dữ liệu sẽ không được hiển thị trên trình duyệt. Thẻ này thường sử dụng để
 * mô tả trang, từ khóa,... Thẻ <meta/> luôn được truyền dưới dạng cặp tên và giá trị.
 * 3. Đoạn code cho phép hiển thị tên của website trên trình duyệt.
 * <html>     => thẻ lệnh của html
        <head> => phần khai báo thông tin cho trang Html
            <title>test webpage</title>      => Xác định tiêu đề cho trang Html
        </head>
        <body>     => định nghĩa phần thân cho Html
        </body>
  </html>
  * 4. Câu lệnh if/else được đặt trong cặp thẻ <?php câu lệnh ?> khi dùng trong Html
 * 5. Để chèn file .css vào Html, ta khai báo trong cặp thẻ <head> ... </head>. Hoặc có thể tạo .css trực tiếp trong Html.
 *  - Chèn file .css
 * <html>
 *  <head>
 *      <link href="đường dẫn tới file .css" rel="stylesheet" type="text/css">
 *  </head>
 *  <body>
 *  ...
 *  </body>
 * </html>
 *    - thêm câu lệnh tạo giao diện trực tiếp
 * <html>
    <head>
         <style>
            header { font-size: 30; color: deepskyblue; margin-left:100; }
            h1{font-size: 18; color: crimson; margin-left: 30;}
            h2{font-size: 18; color: blue; margin-left: 50;}
         </style>
    </head>
    <body>
    </body>
   </html>
 * 6. thẻ <map> dùng để định nghĩa khu vực có thể click được bên trong một hình ảnh. <img> dùng để đưa hình ảnh lên, 2 thẻ này sẽ liên kết với nhau
 * theo thuộc tính name để xác định vùng được click.
 * VD:
 *  <html>
        <head>
            <title > Bai test Html </title>
        </head>
        <body>
            <img src="/gittest/HienNguyen/Image/aq.png" usemap="#Map" />
            <map name="Map" id="abc">
            <area shape="default" coords="0, 100, 100" href="Vd1.php">
        </body>
    </html>
  *7. Marquee là thẻ cho phép nội dung có thể di chuyển theo chiều ngang hoặc dọc
 *   VD:
 * <html>
        <head>
            <title > Bai test Html </title>
        </head>
        <body>
            <img src="/gittest/HienNguyen/Image/aq.png" usemap="#Map" />
            <map name="Map" id="M">
            <area shape="default" coords="0, 100, 100" href="Vd1.php">
            <marquee direction="right"> he he hihi</marquee>
        </body>
    </html>
 * direction là định dạng, cho phép nội dung di chuyển theo các chiều từ bên trái, từ bên phải, từ trên, hoặc từ dưới
 *
 *   */
?>

<html>
<head>
    <title > Bai test Html </title>
    <link href="css_HTML.css" rel="stylesheet" type="text/css">
    <style>
        a1{font-size: 30; color: #FF0000; margin-left: 200;}
        a2{font-size: 20; color: aquamarine; margin-left: 300; }
    </style>
</head>
<body>

<img src="/gittest/HienNguyen/Image/aq.png" usemap="#Map" />
<map name="Map" id="M">
    <area shape="default" coords="0, 100, 100" href="Vd1.php">
  <br> <br> <br> <br>
    <form action="HTML.php" method="post">
  Ban thich style nao:
        <input type="radio" name="chaychu" value="r"> Qua trai
        <input type="radio" name="chaychu" value="l"> Qua phai
        <input type="radio" name="chaychu" value="u"> Xuong duoi
        <input type="radio" name="chaychu" value="d"> Len tren
        <input type="submit">
    </form>
    <b1>aaaaaaaaaaaaaaaa </b1>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["chaychu"]=="r")
            {?>
           <b2> Chao mung ban, moi ban xem chu chay chu qua phai nhe' =))) </b2>
            <a1> <marquee direction="right"> Cai nay chay qua phai ne </marquee> </a1>
        <?php
            }else if($_POST["chaychu"]=="l"){
                ?>
            <b1> Hello, bay gio hay xem chu chay qua trai nhu the nao nhe :x :x :x </b1>
                <a2> <marquee direction="left"> Cai nay chay qua trai ne </marquee> </a2>
            <?php
            }  else if($_POST["chaychu"]=="u"){
                ?>
               <a2>  Oh, ban chon chay len tren. Xem nhe!    </a2>
                <b1> <marquee direction="up"> Cai nay chay nguoc len nua ne</marquee> </b1>
            <?php
            } else if($_POST["chaychu"]=="d"){
                ?>
               <a1> Met qua, chay chu xuong duoi ne -_- </a1>
                <b2> <marquee direction="down"> Them cai nay chay xuong nua, xong oy ^^ </marquee> </b2>
            <?php
            }
        }
    ?>




</body>
</html>