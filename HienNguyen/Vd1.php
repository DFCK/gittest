<html>
<head>
    <style>
        header { font-size: 30; color: deepskyblue; margin-left:100; }
        h1{font-size: 18; color: crimson; margin-left: 30;}
        h2{font-size: 18; color: blue; margin-left: 50;}
    </style>
</head>
<bodyy>
    <?php
    $kq="";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $type=$_POST["pheptinh"];
    $s1=$_POST["s1"];
    $s2=$_POST["s2"];
        $kq="Ket qua phep tinh = ";
    if($s1 <> null){
        switch ($type){
            case cong:
                $kq .=$s1+$s2;
                break;

            case tru:
                $kq .=$s1-$s2;
                break;

            case nhan:
                $kq .=$s1*$s2;
                break;

            case chia:
                $kq .=$s1/$s2;
                break;
        }
    }

    }
    ?>
    <form action="Vd1_Test.php" method="post" id="bt1">
        <header>
            Bai 1
        </header>
    <h1>
        Chon phep tinh:
        <input type="radio" value="cong" name="pheptinh" checked> Cong
        <input type="radio" value="tru" name="pheptinh">Tru
        <input type="radio" value="nhan" name="pheptinh">Nhan
        <input type="radio" value="chia" name="pheptinh">Chia
    </h1>
    <h2>
        So thu nhat <input type="text" name="s1">   <br>
        So thu hai <input type="text" name="s2">        <br>
        <input type="submit" value="Tinh">
    </h2>
    </form>

    <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
    <header>
        Bai 2
    </header>
    <h1>
        Chon phep tinh:
        <input type="radio" value="cong" name="pheptinh" checked> Cong
        <input type="radio" value="tru" name="pheptinh">Tru
        <input type="radio" value="nhan" name="pheptinh">Nhan
        <input type="radio" value="chia" name="pheptinh">Chia
    </h1>
    <h2>
        So thu nhat <input type="text" name="s1">   <br>
        So thu hai <input type="text" name="s2">        <br>
        <input type="submit" value="Tinh">  <br>
         <?php echo $kq; ?>
    </h2>
    </form>

    <form action="Vd1_Test.php" method="post" id="bt2">
         <header>Bai 3</header>
     <h2>   USERNAME<input type="text" name="user"><br>
        PASSWORD<input type="text" name="pass"> <br>
         EMAIL<input type="text" name="email"><br>
        <input type="submit" value="LOGIN">
     </form>      </h2>
</bodyy>
</html>