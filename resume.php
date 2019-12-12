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
    <title>我的履歷</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <style>
    table{
      border-collapse: collapse;
    }
    td{
      padding:5px;
    }
    #delete{
      background:white;
      width:300px;
      height:200px;
      position:absolute;
      left:calc(50vw - 150px);
      top:calc(50vh - 150px);
      border:1px solid #999;
      box-shadow: 0 0 5px #ccc;
      text-align: center;
      padding:20px;
    }

    #delete .msg{
      margin:10px;
    }
    #edit{
      position:absolute;
    }
    #edit li label {
      display: inline-block;
      vertical-align: middle;
      width: 100px;
      text-align-last: justify;
      font-size: 18px;
    }
    #skills li label {
      display: inline-block;
      vertical-align: middle;
      width: 100px;
      text-align-last: justify;
      font-size: 18px;
    }
    #workexperience li label {
      display: inline-block;
      vertical-align: middle;
      width: 100px;
      text-align-last: justify;
      font-size: 18px;
    }

    #edit li {
      margin: 5px;
    }
    #skills{
      display: none;
    }
    #myData,#skill,#workExperience{
      margin-right: 30px;
      /* margin-bottom: 30px; */
    }
    #reseumeContent{
      width: 635px;
      height: 600px;
      padding-top: 30px;
    }
    </style>
</head>
<body>
  <a id="myData" href="#" onclick="loadpage('edit.php')">編輯個人資料</a>
  <a id="skill" href="#" onclick="loadpage('skills.php')">技能編輯</a>
  <a id="workExperience" href="#" onclick="loadpage('workexperience.php')">工作經驗</a>
  <div id="reseumeContent">
  
  </div>
</body>
</html>
<script>

  function loadpage(page){
    $("#reseumeContent").load(page)
  }
</script>