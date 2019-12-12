<?php
include_once "base.php";
$sql="select * from workExperience where id='".$_SESSION['id']."'";
$workExp=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// print_r($skills);
?>
<style>
  li{
    padding:5px;
  }
</style>
<form  id="workExperience" action="edit_workexperience.php" method="post">
   <li><label for="company1">公司名稱</label>：<input type="text" name="company1" id="company1" value="<?=$workExp['company1'];?>"></li>
   <li><label for="date1">就職日期</label>：<input type="date" name="date1" id="date1" value="<?=$workExp['date1'];?>"></li>
   <li><label for="job1">工作職稱</label>：<input type="text" name="job1" id="job1" value="<?=$workExp['job1'];?>"></li>
   <li><label for="salary1">薪資待遇</label>：<input type="text" name="salary1" id="salary1" value="<?=$workExp['salary1'];?>"></li>
   <li>工作內容</li>
   <li><label for="aboutJob1"></label>
     <textarea cols="50" rows="5"  style="margin: 0px; width: 545px; height: 62px;" name="aboutJob1" id="aboutJob1"><?=$workExp['aboutJob1'];?></textarea>
   </li>

   <li><label for="company2">公司名稱</label>：<input type="text" name="company2" id="company2" value="<?=$workExp['company2'];?>"></li>
   <li><label for="date2">就職日期</label>：<input type="date" name="date2" id="date2" value="<?=$workExp['date2'];?>"></li>
   <li><label for="job2">工作職稱</label>：<input type="text" name="job2" id="job2" value="<?=$workExp['job2'];?>"></li>
   <li><label for="salary2">薪資待遇</label>：<input type="text" name="salary2" id="salary2" value="<?=$workExp['salary2'];?>"></li>
   <li>工作內容</li>
   <li><label for="aboutJob2"></label>
     <textarea cols="50" rows="5"  style="margin: 0px; width: 545px; height: 62px;" name="aboutJob2" id="aboutJob2"><?=$workExp['aboutJob2'];?></textarea>
   </li>

   <li><label for="company3">公司名稱</label>：<input type="text" name="company3" id="company3" value="<?=$workExp['company3'];?>"></li>
   <li><label for="date3">就職日期</label>：<input type="date" name="date3" id="date3" value="<?=$workExp['date3'];?>"></li>
   <li><label for="job3">工作職稱</label>：<input type="text" name="job3" id="job3" value="<?=$workExp['job3'];?>"></li>
   <li><label for="salary3">薪資待遇</label>：<input type="text" name="salary3" id="salary3" value="<?=$workExp['salary3'];?>"></li>
   <li>工作內容</li>
   <li><label for="aboutJob3"></label>
     <textarea cols="50" rows="5"  style="margin: 0px; width: 545px; height: 62px;" name="aboutJob3" id="aboutJob3"><?=$workExp['aboutJob3'];?></textarea>
   </li>
   <input type="hidden" name="id" value="<?=$workExp['id'];?>">
   <input type="submit" value="更新" id="updateBtn">
   <!-- <input type="reset" value="取消" id="cancelBtn"> -->

   
 </form>