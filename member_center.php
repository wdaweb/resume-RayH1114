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
  <style>
    *{
  box-sizing:border-box;
  margin:0;
  padding:0;
  font-family:"Microsoft JhengHei",Arial, Helvetica, sans-serif;
  list-style-type:none;
  text-decoration: none;
}
.nav{
  position: relative;
  z-index: 1;
  background: rgba(0,0,0,0.5);
  color: white;
  font-size: 1em;
  border-radius:10px 10px 0 0;  
  
}
.left a{
  display: inline-block;
  padding: 15px 20px;
  color:rgb(50,0,150);
}
.content{
  width:100%;
  height: 100vh;
}

body{
  background-image: linear-gradient(180deg, rgb(255, 255, 255),  #ccc);
  background-size:contain;
  height: 150vh;
  font-family: "Microsoft-JhengHei";
  
}
.top{
  width: 100%;
  height: 245px;
  background: #ccc;
  border-radius:10px 10px 0 0;
  /* background-image: url(./img/bg.jpg); */
}
.top_name{
  color: white;
}
.content{
  width: 100%;
  height: 850px;
  background:#f2f2f1;
  position: relative;
}
.main{
  box-shadow: 0px 3px 15px rgba(0,0,0,0.2);
  width: 960px;
  margin: 0 auto;
  border-radius:10px 10px 10px 10px;
  margin-top: 50px;
}
.nav{
  position: relative;
  z-index: 1;
  background: rgba(0,0,0,0.5);
  color: white;
  padding: 5px ;
  font-size: 1em;
  border-radius:10px 10px 0 0;
  
}
.textResume{
  padding: 10px 10px 10px 10px;
  font-size: 18px;
}
.left{
  background: white;
  width: 180px;
  height: 500px;
  position: relative;
  z-index: 1;
  top: -115px;
  left: 50px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
  border-radius:5px ;
  text-align: center;
  padding-top: 30px;
}
.right{
  width: 600px;
  height: 100px;
  position: relative;
  z-index: 1;
  top: -620px;
  left: 280px;
}
.rightContent{
  width: 635px;
  height: 600px;
  padding-top: 85px;
}
.footer{
  position: relative;
  z-index: 1;
  width: 100%;
  height: 30px;
  background: rgba(0,0,0,0.5);
  border-radius:0 0 10px 10px;
}
.wellcome{
  font-size: 2em;
  color: white;
}
.member .wellcome{
  font-size: 1em;
}
#pic{
  width: 100px;
  height: 100px;
  background:#ccc;
  border-radius:50px;
  margin:auto;
  overflow: hidden;
  /* background-image:url(./img/bg.jpg); */
}
#topShadow{
  background: linear-gradient(180deg, rgba(250, 250, 250,0), rgba(0, 0, 0, 0.5));
  width: 100%;
  height: 100%;
}
.logout{
  padding-top:0px;
}
#inputRayp{
  display:none;
  width:100%;
  height:100vh;
  background:rgba(200,200,200,0.5);
  position:absolute;
  z-index: 90;
  top:0;
  left:0;
}
#inputShow{
  width:250px;
  height:170px;
  margin:auto;
  margin-top:200px;
  background: white;
  border-radius:10px;
  padding:20px;  
}
.RayP img{
  width: 100px;
  height: 100px;
}
#cancel{
  display:inline-block;
  width:26px;
  height:26px;
  background: #ccc;
  border-radius:25px;
  position:relative;
  left: 200px;
  top: -120px;
  text-align: center;
  padding-top:2px;
  font-family: "微軟正黑體";
}
/* #cance3{
  display:inline-block;
  width:26px;
  height:26px;
  background: #ccc;
  border-radius:25px;
  position:relative;
  left: 340px;
  top: -428px;
  text-align: center;
  padding-top:2px;
  font-family: "微軟正黑體";
  
} */
  </style>
  <title>會員中心</title>
</head>
<body>
  <div class="main">
    <?php
      $sql="select * from user where id='".$_SESSION['id']."'";
      $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="top">
        <div class="nav">
        <a class="textResume">Resume</a> 
        </div>
        <div id="topShadow"></div>
    </div>
    <div class="content">
        <div class="left">
        <div id="pic">
        <?php
          $Prows=all3("Ray_photo");
          // print_r($Prows);
          
        ?>
          <div class='RayP' id="<? echo $Prows['id']?>">
					  <img src="<?echo $Prows['path']?>">
				  </div>
        </div>
        <a style="color:black;"><?=$user['acc'];?></a>
        <a href="#" onclick="loadpage('edit_member_center.php')">編輯帳號</a>
        <a id="myData" href="#" onclick="loadpage('edit.php')">個人資料</a>
        <a id="skill" href="#" onclick="loadpage('skills.php')">技能編輯</a>
        <a id="workExperience" href="#" onclick="loadpage('workexperience.php')">工作經驗</a>
        <a id="workExperience" href="#" onclick="loadpage('manage.php')">作品集</a>
        <div class="logout"><a href="logout.php">登出</a></div>
        </div>
        <div class="right">
          <div>
            <div class="wellcome">HI!</div>
            <div class="top_name"><?=$user['name']?></div>
          </div>
          <div class="rightContent">
                <!--顯現其他頁內容 -->
          </div>
        </div>
    </div>
    <div class="footer">
    </div>
    </div>
  </div>
  
  <div id="inputRayp">
    <?php  include("edit_file_Ray_photo.php") ?>
  </div>

</body>
</html>
<script>
    loadpage("edit_member_center.php");
    // loadpage("./resume/resume.html");
    function loadpage(page){
      $(".rightContent").load(page)
    }
  $("#pic").on("click",function(){
    $("#inputRayp").css("display","inline");
    $("body").css("overflow","hidden");
  })
  $("#cance3").on("click",function(){
    $("#inputRayp").css("display","none");
    $("body").css("overflow","auto");
  })
 </script>