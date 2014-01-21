<?php
/**
1, Session là một phiên làm việc, được tạo ra khi user bắt đầu sử dụng ứng dụng nào đó.
Mỗi phiên làm việc sẽ được gán với 1 ID cụ thể, để định danh trong suốt quá trình, tới khi thoát khỏi ứng dụng hoặc tắt browser.
Session được dùng để lưu trữ các thông tin trong suốt thời làm việc.
Khi sử dụng session, cần thiết lập trước: session_start();
2, VD trong SessionCookie_Test.php
3, Cookies: là thông tin được tạo ra bởi website, lưu trữ một số thông tin về website đó (username, thời gian bắt đầu truy cập, ...)
thông thường, khi vào 1 website, có hiện sẵn user và pass mà bạn đã đăng nhập từ thời gian trước. Đó là do cookie đã lưu lại, và hiển thị lên.
4, $Message la 1 bien.
 Khi: - echo $Message; hien ra value cua Message
      - echo "$$Message"; hien ra: $ + value cua Message
5, split() và explode() đều dùng để tách chuỗi.
 * Split() không dùng được từ các bản 5.x.x trở đi :D
6, KhÔng xác định được cái &$a là gì cả :-s => Báo lỗi
7, KQ: 2
Vi su dung gobal $a, cho phep bien a duoc su dung nhu 1 bien toan cuc.
8, Include() va require() đều dùng để add thêm file vào chương trình hiện thời. Nếu việc thêm file xảy ra lỗi,
 * Include() sẽ cảnh báo lỗi, và tiếp tục biên dịch chương trình
 *Require() sẽ cảnh báo lỗi, và dừng lại.
Include_once() và require_once() có cơ chế hoạt động tương tự 2 hàm include() và require(), nhưng nó chỉ cho phép add file 1 lần
9, VD trong Session Cookie.php
10, "header already sent" là lỗi khi thực hiện câu lệnh echo trước khi thực hiện lệnh header
 hoặc trước khi thực hiện lệnh header, chương trình có xuất hiện warning
 Cách xử lí:
 * khi sử dụng câu lệnh echo: - chuyển câu lệnh echo về sau hàm header
                             - Đưa ob_start() và ob_flush() vào đầu và cuối code
 * Khi bị báo warning: tìm dòng bị báo, đặt @ vào trước dòng lệnh để tắt warning đi
 11,
  **/
Session_start();
setcookie("c_name", "HienNguyen",time()+ 3600);
?><html>
<body>

<?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
         $_SESSION['name']=$_POST["name"];
         $_SESSION['email']=$_POST["email"];
         $_SESSION["lop"]=$_POST["lop"];
     }
    else if(!empty($_SESSION["name"])) session_destroy();
?>
<form action="Session Cookies.php" method="POST">
    Test   <br>
    Name  <input type="text" name="name">           <br>
    Email <input type="text" name="email">    <br>
    Lop:
    <select name="lop">
    <option value="a1" "> D09THA1 </option>
        <option value="a2"> D09THA2 </option>
        <option value="a3"> D09THA3 </option>
    </select>
    <br>
    <input type="submit" value="OK">
   <?php
    if(!empty($_SESSION['name'])){
    ?>
    <a href="SessionCookies_Test.php"> Dang nhap </a>
<?php
}   ?>
</form>
</body>
</html>