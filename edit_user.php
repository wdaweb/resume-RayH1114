<?php
include "base.php";
$name=$_POST['name'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$id=$_POST['id'];
$pw=$_POST['pw'];

$sql="update user set name='$name',addr='$addr',tel='$tel',birthday='$birthday',email='$email',pw='$pw' where id='$id'";

$pdo->exec($sql);
 echo "<script>alert('編輯完成')</script>";
header("refresh:0.1;url=member_center.php");
// header("location:member_center.php");


?>