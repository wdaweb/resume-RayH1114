<?php
include_once "base.php";
$sql="select * from skills where id='".$_SESSION['id']."'";
$skills=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// print_r($skills);
?>
<style>
  li{
    padding:5px;
  }
</style>
<form action="edit_skills.php" method="post">
  <li>視覺設計</li>
  <li><label for="design"></label>
    <textarea cols="50" rows="5" name="design" id="design" style="margin: 0px; width: 545px; height: 100px;"><?=$skills['design'];?> </textarea>
  </li>
  <li>UI設計</li>
  <li><label for="UIDesign"></label>
    <textarea cols="50" rows="5" name="UIDesign" id="UIDesign" style="margin: 0px; width: 545px; height: 100px;"><?=$skills['UIDesign'];?></textarea>
  </li>
  <li>網頁設計</li>
  <li><label for="WebDesign"></label>
    <textarea cols="50" rows="5" name="WebDesign" id="WebDesign" style="margin: 0px; width: 545px; height: 100px;"><?=$skills['WebDesign'];?></textarea>
  </li>
  <input type="hidden" name="id" value="<?=$skills['id'];?>">
  <input type="submit"value="更新" id="updateBtn">
  <!-- <input type="reset" value="取消" id="cancelBtn"> -->
  <li><label for="job_id"></label><input type="hidden" name="job_id" id="job_id"></li>
</form>