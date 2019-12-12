<?php
//處理新增資料的請求
$dsn="mysql:host=localhost;charset=utf8;dbname=myresume";
$pdo=new PDO($dsn,'root','1114');

$company1=$_POST["company1"];
$date1=$_POST["date1"];
$job1=$_POST["job1"];
$salary1=$_POST["salary1"];
$aboutJob1=$_POST["aboutJob1"];

$company2=$_POST["company2"];
$date2=$_POST["date2"];
$job2=$_POST["job2"];
$salary2=$_POST["salary2"];
$aboutJob2=$_POST["aboutJob2"];

$company3=$_POST["company3"];
$date3=$_POST["date3"];
$job3=$_POST["job3"];
$salary3=$_POST["salary3"];
$aboutJob3=$_POST["aboutJob3"];
$id=$_POST['id'];

$sql="update workExperience set company1='$company1',date1='$date1',job1='$job1',salary1='$salary1',aboutJob1='$aboutJob1',company2='$company2',date2='$date2',job2='$job2',salary2='$salary2',aboutJob2='$aboutJob2',company3='$company3',date3='$date3',job3='$job3',salary3='$salary3',aboutJob3='$aboutJob3' WHERE id='$id'";
//echo $sql="INSERT INTO myData(`name`, `birthday`, `addr`, `tel`, `grad_at`, `grad_at2`, `grad_at3`, `aboutMe`,`email`) VALUES ('$name','$birthday','$addr','$tel','$grad_at','$grad_at2','$grad_at3','$aboutMe','$email')";
$pdo->exec($sql);
echo "<script>alert('編輯完成')</script>";
header("refresh:0.1;url=member_center.php");
?>
