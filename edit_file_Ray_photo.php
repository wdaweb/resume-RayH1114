<style>
#Ray_photo{
    margin:auto;
    background: white;
    border-radius:10px; 
    width: 400px;
    padding: 30px;
    margin-top: 200px;
}
</style>
<?php
include_once "base.php";
if(!empty($_FILES) && $_FILES['file']['error']==0){
    $note=$_POST['note'];
    $type=$_FILES['file']['type'];
    $filename=$_FILES['file']['name'];
    $path="./Ray_photo/" . $filename;
    $updateTime=date("Y-m-d H:i:s");
    $id=$_POST['id'];
    move_uploaded_file($_FILES['file']['tmp_name'] , $path );

    //刪除原本的檔案
    $sql="select * from ray_photo where id='$id'";
    $origin=$pdo->query($sql)->fetch();
    $origin_file=$origin['path'];
    unlink($origin_file);

    //更新資料
    $sql="update ray_photo set name='$filename',type='$type',update_time='$updateTime',path='$path',note='$note' where id='$id'";

    $result=$pdo->exec($sql);
    if($result==1){

        echo "<script>alert('更新成功')</script>";
        header("location:member_center.php");
    }else{
        echo "<script>alert('DB有誤')</script>";
    }
    header("location:member_center.php");
}
$Prows=all3("Ray_photo");
$id=$Prows['id'];
$sql="select * from ray_photo where id='$id'";
$data=$pdo->query($sql)->fetch();

?>
<div id="Ray_photo">
<form action="edit_file_Ray_photo.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td colspan="2">
            <img src="<?=$data['path'];?>" style="width:200px;height:200px;vertical-align:center;">
        </td>

    </tr>
    <tr>
        <td>name</td>
        <td><?=$data['name'];?></td>
    </tr>
    <tr>
        <!-- <td>path</td> -->
        <td style="display:none;"><?=$data['path'];?></td>
    </tr>
    <tr>
        <!-- <td>type</td> -->
        <td style="display:none;"><?=$data['type'];?></td>
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
<input type="reset" value="取消" id="cance3">
</form>
<!-- <a >X</a> -->
</div>