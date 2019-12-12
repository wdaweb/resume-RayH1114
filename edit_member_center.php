<?php
  include_once "base.php";

  if(empty($_SESSION['login'])){
    header("location:index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="./jquery/jquery-2.1.4.min.js"></script>
  <title>會員中心</title>
  <style>
  table{
    border-collapse:collapse;
    border-spacing:0;
  }

  td{
    
    padding:5px;
  }

  #id{
    display: none;
  }
  #animation{
    display: none;
  }

  </style>
</head>
<body>
  <div class="member">
    <div class="private">
      <!--撈出履歷表資料-->
      <?php
        $sql="select * from user where id='".$_SESSION['id']."'";
        $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
      ?>
      <form action="edit_user.php" method="post">
      <table>
        <tr id="id">
          <td>id</td>
          <td><?=$user['id'];?></td>
        </tr>
        <tr>
          <td>ID</td>
          <td><?=$user['acc'];?></td>
        </tr>
        <tr>
          <td>密碼</td>
          <td><input type="text" name="pw" style="width: 230px;"  id="pw" value="<?=$user['pw'];?>"></td>
        </tr>
        <tr>
          <td>姓名</td>
          <td><input type="text" name="name" style="width: 230px;"  id="name" value="<?=$user['name'];?>"></td>
        </tr>
        <tr>
          <td>地址</td>
          <td><input type="text" name="addr" style="width: 230px;"  id="addr" value="<?=$user['addr'];?>"></td>
        </tr>
        <tr>
          <td>電話</td>
          <td><input type="text" name="tel" style="width: 230px;"  id="tel" value="<?=$user['tel'];?>"></td>
        </tr>
        <tr>
          <td>生日</td>
          <td><input type="date" name="birthday" id="birthday" style="width: 230px;"  value="<?=$user['birthday'];?>"></td>
        </tr>
        <tr>
          <td>email</td>
          <td><input type="text" name="email" id="email" style="width: 230px;" value="<?=$user['email'];?>"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="hidden" name="id" value="<?=$user['id'];?>">
            <input type="submit" value="更新">
            <!-- <a href="admin.php">刪除帳號</a> -->
          </td>
        </tr>
      </table>
    </form>
    </div>
    <!-- <br>
    <hr style="width:95% ">
    
    <br>
        <p>照片上傳</p>
        <form action="Ray_photo_api.php" method="post" enctype="multipart/form-data">
          檔案：<input type="file" name="file" ><br><br>
          說明：<input type="text" name="note" ><br>
          <input type="submit" value="上傳">
        </form>
    </div> -->
  </div>
</body>
</html>
