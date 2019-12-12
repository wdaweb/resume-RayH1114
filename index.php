<?php
session_start();
if(!empty($_SESSION['login'])){
  header("location:member_center.php");
}
?>
<!DOCTYPE html>
<!-- login頁面 -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./jquery/jquery-2.1.4.min.js"></script>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
  *{
  box-sizing:border-box;
  margin:0;
  padding:0;
  font-family:"Microsoft JhengHei",Arial, Helvetica, sans-serif;
  list-style-type:none;
  text-decoration: none;
}
#acc_1,#pw_1 {
  display:inline-block;
  /* display:none; */
  position:relative;
}
#inputAccPw{
  display:none;
  width:100%;
  height:100vh;
  background:rgba(200,200,200,0.5);
  position:absolute;
  z-index: 90;
  top:0;
  left:0;
}
#inputreg{
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
#acc_1 input{
  width:140px;
  height:24px;
  border:0px blue none;
  background:rgb(221, 221, 221);
}
#pw_1 input{
  width:140px;
  height:24px;
  border:0px blue none;
  background:rgb(221, 221, 221);

}
.nav{
  position: relative;
  z-index: 1;
  background: rgba(0,0,0,0.5);
  color: white;
  font-size: 1em;
  border-radius:10px 10px 0 0;  
  
}
p{
  display: inline-block;
  padding: 20px 10px 10px 10px;
}
.content{
  width:100%;
  height: 100vh;
}

body{
  background-image: linear-gradient(360deg, rgb(255, 255, 255),  #ccc);
  height: 200vh;
  font-family: "Microsoft-JhengHei";
}
.top{
  width: 960px;
  background:#f2f2f1;
  border-radius:10px 10px 0px 0px;
  box-shadow: 0px 3px 15px rgba(0,0,0,0.2);
  
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
  /* box-shadow: 0px 3px 15px rgba(0,0,0,0.2); */
  width: 960px;
  margin: 0 auto;
  border-radius:10px 10px 10px 10px;
  margin-top: 50px;
  padding-bottom: 50px;
}
.nav{
  position: relative;
  width:960px;
  z-index: 1;
  background: rgba(0,0,0,0.5);
  color: white;
  padding: 0px ;
  font-size: 1em;
  border-radius:10px 10px 0 0;
  
}
.textResume{
  padding: 10px 830px 10px 10px;
  font-size: 18px;
}
.left{
  background: white;
  width: 180px;
  height: 450px;
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
  top: -570px;
  left: 280px;
}
.rightContent{
  width: 500px;
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
}
#topShadow{
  background: linear-gradient(180deg, rgba(250, 250, 250,0), rgba(0, 0, 0, 0.5));
  width: 100%;
  height: 100%;
}
.logout{
  padding-top:80px;
}
/* .loginTable div{

} */
input {
  width:40px;
  height:24px;
  border:0px blue none;
  background: white;
  border-radius: 2px;
  margin-left: 5px;
  margin-top: 15px;
  font-size: 14px;
  color: rgb(0, 0, 0);
}
#cancel{
  display:inline-block;
  width:26px;
  height:26px;
  background: #ccc;
  border-radius:25px;
  position:relative;
  left: 30px;
  top: -115px;
  text-align: center;
  padding-top:2px;
  font-family: "微軟正黑體";
}
#cancel2{
  display:inline-block;
  width:26px;
  height:26px;
  background: #ccc;
  border-radius:25px;
  position:relative;
  left: 135px;
    top: -305px;
  text-align: center;
  padding-top:2px;
  font-family: "微軟正黑體";
}
#reg{
  padding-left:20px; 
}
#inputRegTable{
  display:none;
  z-index:999;
  width:100%;
  height:100vh;
  background:rgba(200,200,200,0.5);
  position:absolute;
  top:0;
  left:0;
  
}
.wrapper{
  margin:auto;
  border-radius: 10px;
  width:290px;
  height:170px;
  margin:auto;
  margin-top:200px;
  background: white;
  border-radius:10px;
  padding:20px;  
}
#acc_reg input , #pw_reg input, #name_reg input, #addr_reg input, #tel_reg input, #birthday_reg input, #email_reg input{
  width:140px;
  height:24px;
  border:0px blue none;
  background:rgb(221, 221, 221);
}
.btnCent{
  margin-left: 40px;
  margin-top:25px;

}

  </style>
  <title>My Resume</title>
  </head>
  <body>
    <?php
    if(!empty($_GET['s'])){
      echo "<script>alert('註冊成功，請輸入帳密以登入')</script>";
    }
    if(!empty($_GET['err'])){
      echo "<script>alert('請重新輸入')</script>";
    }
    ?>
    <div class="main">
      <div class="top">
          <form action="login_api.php" method="post"> 
            <div class="nav">
              <p class="textResume">Resume</p> 
            <a id="login">登入</a>
              <!-- <a id="reg">註冊會員</a>  -->
            </div>
            <div id="inputAccPw">
              <div id="inputShow">
                <div id="acc_1">帳號<input  type="text" name="acc"></div>
                <div id="pw_1">密碼<input type="password" name="pw" id="pw"></div>
                <input class="btnCent" type="submit" value="登入">
                <input class="btnCent" type="reset" value="重置">
                <a id="cancel">X</a>
              </div>
            </div>
          </form> 
      </div>
      <div class="loginTable">
          <?php  include("printResume.php") ?>
      </div>  
    </div>
    <?php
    if(!empty($_GET['e'])){
      echo "<script>alert('註冊失敗，請檢查輸入或聯絡工程師')</script>";
      // header("location:index.php");
    }
    ?>


  </body>
</html>
<script>
  $("#login").on("click",function(){
    $("#inputAccPw").css("display","inline");
    $("body").css("overflow","hidden");
  })

  $("#reg").on("click",function(){
    $("#inputRegTable").css("display","inline");
    $("body").css("overflow","hidden");
  })

  $("#cancel2").on("click",function(){
    $("#inputAccPw").css("display","none");
    $("body").css("overflow","auto");
    $("#inputRegTable").css("display","none");
  })
  $("#cancel").on("click",function(){
    $("#inputAccPw").css("display","none");
    $("#inputreg").css("display","none");
    $("body").css("overflow","auto");
    $("#regTable").css("display","none");
  })
</script>
