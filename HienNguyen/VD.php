<html>
<head> Header <br > </head>
<body>
<?php
$i=0;
while($i<=20){
    echo "<b>$i, </b>";
    $i++;
}
?>
<br>

<table border="1">
    <tr>
        <th> STT </th>
        <th> Ho Ten </th>
        <th> So CMND </th>
    </tr>
    <?php
    $i=0;
     while($i<10){
    ?>
         <tr>
             <td>
                 <?php echo $i; ?>
             </td>
             <td>
                 <?php echo "Ten: $i"; ?>
             </td>
               <td>
                 <?php echo "So CMDN: $i"; ?>
                  </td>
         </tr>
    <?php
         $i++;
     }
    ?>

</table>

<br>
<?php
$Nam=date("Y");
?>
<select >
    <?php
    while($Nam > 2000){
        ?>
    <option>
        <?php
        echo $Nam;
        ?>
    </option>
    <?php


        $Nam --;
    }
    while ($Nam <2000 and $Nam >1995){
    ?>
    <option>
       <?php echo 0; ?>
    </option>
    <?php
        $Nam --;
    }
    ?>
</select>

<br>

    <form action="Hien.php" method="POST">
Test   <br>
Name  <input type="text" name="name">           <br>
Email <input type="text" name="email">           <br>
<input type="submit" name="Dang Nhap">
    <input type="reset"><br>
   </form>
  <?php
  ?>


</body>
</html>
