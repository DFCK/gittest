<?php
$con=new mysqli("localhost","root","","test");
if($con->connect_error)
{
    trigger_error('Lỗi kết nối: ' . $con->connect_error, E_USER_ERROR);
}
else
{
    $sql='select * from persons';
    $kq=$con->query($sql);
    if($kq==false)
    {
        trigger_error('Sai câu lệnh: ' . $sql . 'Error: ' . $con->error, E_USER_ERROR);
    }
    else
    {
        $row_return=$kq->num_rows;
       $arr=$kq->fetch_array();
        echo $row_return;
       echo '<br>';
        var_dump($arr);
    }
    echo '<br>';
}
$kq->data_seek(0);
while($row=$kq->fetch_row())
{

    echo $row[0] . ' | ' . $row[1] . '<br>';
}
?>