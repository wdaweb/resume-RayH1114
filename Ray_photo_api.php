<?php

include_once "base.php";

if(!empty($_FILES) && $_FILES['file']['error']==0){

    $note=$_POST['note'];
    $type=$_FILES['file']['type'];
    $filename=$_FILES['file']['name'];
    $path="./Ray_photo/" . $filename;
    
    move_uploaded_file($_FILES['file']['tmp_name'] , $path);

    echo $sql="insert into ray_photo (`name`,`type`,`path`,`note`) values('$filename','$type','$path','$note')";

    $result=$pdo->exec($sql);

    if($result==1){

        echo "<script>alert('上傳成功')</script>";
        header("refresh:0;url=member_center.php");

    }else{
        
        echo "<script>alert('DB有誤')</script>";
        header("refresh:0;url=member_center.php");
    }
}else{
    echo "<script>alert('請選擇檔案')</script>";
    header("refresh:0;url=member_center.php");
}

?>
