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
7, KQ: 2
Vi su dung gobal $a, cho phep bien a duoc su dung nhu 1 bien toan cuc.
 **/
Session_start();
setcookie("c_name", "HienNguyen",time()+ 3600);
?><html>
<body>

<?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
         $_SESSION['name']=$_POST["name"];
         $_SESSION['email']=$_POST["email"];
     }
    else if(!empty($_SESSION["name"])) session_destroy();
?>
<form action="Session Cookies.php" method="POST">
    Test   <br>
    Name  <input type="text" name="name">           <br>
    Email <input type="text" name="email">           <br>
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