<?php

include_once "base.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案管理功能</title>
    <style>
        td{
            padding:25px 10px 0 0 ; 
        }
        .btnCent2{
            margin:2px;
            background:rgb(150, 150, 150);
            display: inline-block;
            width: 85px;
            height:22px;
            border-radius: 5px;
            text-align: center;
            color: white;
        }

    </style>
</head>
<body>
<!----建立上傳檔案表單及相關的檔案資訊存入資料表機制----->
<form action="manage_api.php" method="post" enctype="multipart/form-data">
  檔案：<input type="file" name="file" ><br><br>
  說明：<input type="text" name="note" ><br>
  <input type="submit" value="上傳">
</form>

<!----透過資料表來顯示檔案的資訊，並可對檔案執行更新或刪除的工作----->

<table>

    <?php
        $sql="select * from files";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $file) {  
    ?>
    <tr>
        <td style="display:none;"><?=$file['id'];?></td>
        <td style="display:none;"><?=$file['name'];?></td>
        <td style="display:none;"><?=$file['type'];?></td>
        <td><img src="<?=$file['path'];?>" style="width:140px;height:100px;"></td>
        <td style="display:none;"><?=$file['path'];?></td>
        <td><?=$file['note'];?></td>
        <td style="display:none;"><?=$file['create_time'];?></td>
        <td>
            <a class="btnCent2"  href="edit_file.php?id=<?=$file['id'];?>">更新檔案</a>
            <a class="btnCent2" href="del_file.php?id=<?=$file['id'];?>">刪除檔案</a>
        </td>
    </tr>
    <tr>
        
    </tr>
    <?php
     }
    ?>

</table>


</body>
</html>