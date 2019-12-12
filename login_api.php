<?php
include_once "base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$sql="select id from user where acc='$acc' &&  pw='$pw'";

$data=$pdo->query($sql)->fetch();

//判斷登入成功與否

if(!empty($data)){
  $_SESSION['login']=1;
  $_SESSION['id']=$data['id'];
  header("location:member_center.php");
}else{
  header("location:index.php?err=1");
}

?>