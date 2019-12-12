<?php

include_once "base.php";

$data['acc']=$_POST['acc'];
$data['pw']=$_POST['pw'];
$data['name']=$_POST['name'];
$data['addr']=$_POST['addr'];
$data['tel']=$_POST['tel'];
$data['birthday']=$_POST['birthday'];
$data['email']=$_POST['email'];

//判斷是否新增成功;
if(insert("user",$data)){
   header("location:index.php?s=1");
}else{
   header("location:index.php?e=1");
}
?>