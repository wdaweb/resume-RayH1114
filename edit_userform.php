<?php
//處理新增資料的請求
$dsn="mysql:host=localhost;charset=utf8;dbname=myresume";
$pdo=new PDO($dsn,'root','1114');

$name=$_POST["name"];
$birthday=$_POST["birthday"];
$addr=$_POST["addr"];
$tel=$_POST["tel"];
$grad_at=$_POST["grad_at"];
$grad_at2=$_POST["grad_at2"];
$grad_at3=$_POST["grad_at3"];
$aboutMe=$_POST["aboutMe"];
$email=$_POST["email"];
$id=$_POST['id'];

$sql="update myData set name='$name',birthday='$birthday',addr='$addr',tel='$tel',grad_at='$grad_at',grad_at2='$grad_at2',grad_at3='$grad_at3',aboutMe='$aboutMe',email='$email' WHERE id='$id'";
//echo $sql="INSERT INTO myData(`name`, `birthday`, `addr`, `tel`, `grad_at`, `grad_at2`, `grad_at3`, `aboutMe`,`email`) VALUES ('$name','$birthday','$addr','$tel','$grad_at','$grad_at2','$grad_at3','$aboutMe','$email')";
echo $pdo->exec($sql);
echo "<script>alert('編輯完成')</script>";
header("refresh:0.1;url=member_center.php");
?>
