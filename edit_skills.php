<?php
//處理新增資料的請求
$dsn="mysql:host=localhost;charset=utf8;dbname=myresume";
$pdo=new PDO($dsn,'root','1114');

$design=$_POST["design"];
$UIDesign=$_POST["UIDesign"];
$WebDesign=$_POST["WebDesign"];
$id=$_POST['id'];

$sql="update skills set design='$design',UIDesign='$UIDesign',WebDesign='$WebDesign'WHERE id='$id'";
//echo $sql="INSERT INTO myData(`name`, `birthday`, `addr`, `tel`, `grad_at`, `grad_at2`, `grad_at3`, `aboutMe`,`email`) VALUES ('$name','$birthday','$addr','$tel','$grad_at','$grad_at2','$grad_at3','$aboutMe','$email')";
$pdo->exec($sql);
echo "<script>alert('編輯完成')</script>";
header("refresh:0.1;url=member_center.php");
?>
