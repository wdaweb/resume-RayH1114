<?php

include_once "base.php";

$id=$_POST['id'];
$sql="delete from 表單名稱 where uni_id='$id'";

echo $pdo->exec($sql);


?>