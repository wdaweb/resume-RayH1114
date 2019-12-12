<?php
include_once "base.php";
$sql="select * from myData where id='".$_SESSION['id']."'";
$user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
<style>
  li{
    padding:5px;
  }
</style>
<form  id="userform"  action="edit_userform.php" method="post">
  <li><label for="name">姓名</label>：<input type="text" name="name" id="name" style="width: 230px;"  value="<?=$user['name'];?>"></li>
  <li><label for="birthday">生日</label>：<input type="date" name="birthday" id="birthday" style="width: 230px;"  value="<?=$user['birthday'];?>"></li>
  <li><label for="addr">住址</label>：<input type="text" name="addr" id="addr" style="width: 230px;"  value="<?=$user['addr'];?>"></li>
  <li><label for="tel">電話</label>：<input type="text" name="tel" id="tel" style="width: 230px;"  value="<?=$user['tel'];?>"></li>
  <li><label for="email">email</label>：<input type="text" name="email" style="width: 220px;"  id="email" value="<?=$user['email'];?>"></li>
  <li><label for="grad_at">國中</label>：<input type="text" name="grad_at" id="grad_at" style="width: 230px;"  value="<?=$user['grad_at'];?>"></li>
  <li><label for="grad_at2">高中</label>：<input type="text" name="grad_at2" id="grad_at2" style="width: 230px;"  value="<?=$user['grad_at2'];?>"></li>
  <li><label for="grad_at3">大學</label>：<input type="text" name="grad_at3" id="grad_at3" style="width: 230px;"  value="<?=$user['grad_at3'];?>"></li>
  <li>自我介紹</li>
  <li><label for="aboutMe"></label>
    <textarea cols="50" rows="5" style="margin: 0px; width: 545px; height: 170px;" name="aboutMe" id="aboutMe" ><?=$user['aboutMe'];?></textarea>
  </li>
  <input type="hidden" name="id" value="<?=$user['id'];?>">
  <input type="submit" value="更新" id="updateBtn">
  <!-- <input type="reset" value="取消" id="cancelBtn"> -->
</form>
