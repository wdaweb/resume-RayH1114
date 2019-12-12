<?php
include_once "base.php";

if(!empty($_FILES) && $_FILES['file']['error']==0){
    $note=$_POST['note'];
    $type=$_FILES['file']['type'];
    $filename=$_FILES['file']['name'];
    $path="./img/" . $filename;
    $updateTime=date("Y-m-d H:i:s");
    $id=$_POST['id'];
    move_uploaded_file($_FILES['file']['tmp_name'] , $path );

    //刪除原本的檔案
    $sql="select * from files where id='$id'";
    $origin=$pdo->query($sql)->fetch();
    $origin_file=$origin['path'];
    unlink($origin_file);

    //更新資料
    $sql="update files set name='$filename',type='$type',update_time='$updateTime',path='$path',note='$note' where id='$id'";

    $result=$pdo->exec($sql);
    if($result==1){

        echo "<script>alert('更新成功')</script>";
        header("location:member_center.php");
    }else{
        echo "<script>alert('DB有誤')</script>";
    }
    
}

$id=$_GET['id'];
$sql="select * from files where id='$id'";
$data=$pdo->query($sql)->fetch();

?>
<style>
#box{
    width: 420px;
    height: 450PX;
    border: 1px solid #ccc;
    /* box-shadow: 0 0 5px #ccc; */
    margin: 20px auto;
    text-align: center;
    padding: 30px;
    font-family: "微軟正黑體";
}
#cancel4{
    display: inline-block;
    width: 25px;
    height: 23px;
    background: #ccc;
    border-radius: 25px;
    position: relative;
    left: 195px;
    top: -423px;
    text-align: center;
    padding-top: 2px;
    font-family: "微軟正黑體";
    text-decoration: none;
}

</style>
<div id="box">
    <form action="edit_file.php" method="post" enctype="multipart/form-data">
        <table >
            <tr>
                <td colspan="2">
                    <img src="<?=$data['path'];?>" style="width:280px;height:200px">
                </td>

            </tr>
            <tr>
                <td>name</td>
                <td><?=$data['name'];?></td>
            </tr>
            <tr>
                <td>path</td>
                <td><?=$data['path'];?></td>
            </tr>
            <tr>
                <td>type</td>
                <td><?=$data['type'];?></td>
            </tr>
            <tr>
                <td>create_time</td>
                <td><?=$data['create_time'];?></td>
            </tr>
        </table><br>
        更新檔案:<input type="file" name="file"><br><br>
        說明:<input type="text" name="note" value="<?=$data['note'];?>"><br><br>
        <input type="hidden" name="id" value="<?=$data['id'];?>">
        <input type="submit" value="更新">
        <a id="cancel4" href="./member_center.php">X</a>
       
    </form>
</div>