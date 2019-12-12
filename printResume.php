
<?include_once "base2.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./jquery/js.js"></script>
    <script src="./jquery/jquery-1.9.1.min.js"></script>
    <title>我的簡歷</title>
    <style>
        #body1{
            margin: auto;
        }
        #printMain{
            width: 960px;
            height: 900px; 
        }
        .myData{
            width: 960px;
            height: 25%;
            background: white;
            color:black;
            /* padding-top: 19px; */
            /* text-align: center; */
        }
        .myData div{
            display:inline-block;
        }
        .skills{
            width: 960px;
            height: 15%;
            background: white;
        }
        .workexpErience{
            width: 960px;
            height: 25%;
            background: white;
            /* border-radius: 0 0 0px 10px; */
        }
        #picF{
            width: 180px;
            height: 180px;
            margin-left: 20px;
            background: #ccc;
            display: inline-block;
            vertical-align: top;
            border-radius: 97%;
            margin: 35px 0px 0px 160px;
            z-index: 999;
            overflow: hidden;
        }
        #myData_table{
            padding-top:40px;
            padding-left: 150px;
        }
        #myData_table td{
            padding:2px;
        }
        #skills_table{
            padding-top:20px;
            padding-left: 150px;
            padding-top: 40px;
        }
        #skills_table td{
            padding:10px;
            display:inline-block;
            width:220px;
        }
        #bar{
            background:#ccc;
            width:220px;
            margin: 2px;
            height: 22px;
            text-align: center;
            line-height: 3px;
            color:rgb(100,100,100);
        }

        #workexpErience_table{
            display: inline-block;
             width: 180px;
             margin-right: 40px;
             margin-top: 35px;
             vertical-align: center;
        }
        #workexpErience_center{
            margin-left: 155px;
        }
        #portfolio{
            width:  960px !important;
            height: 82% !important;;
            background-image: linear-gradient(180deg, rgb(200, 200, 200), rgb(100, 100, 100));
            /* background: rgb(200,200,200); */
            border-radius: 0px 0px 10px 10px;
            color:white ;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 10px;
        }
        hr{
            background: rgb(250,250,250);
        }
        img{
            width:100%;
        }
        
        .dbor{
	    /* border:#EE7728 double 3px; */
	    margin:1px;
	    padding:2px 10px 2px 10px;
        }
        #btnPN{
            width:100%;
            height:0%;
        }
        #pre{
            background: rgba(0,0,0,0.2);
            width: 30px;
            height: 30px;
            display: inline-block;
            margin-bottom: 0px;
            font-size: 25px;
            position: relative;
            z-index:99;
            top: 320px;
            color: white;
            text-align:center;
            line-height: 30px;
            margin:10px 410px 10px 10px; 
            border-radius: 50px;
            
        }
        #next{
            background: rgba(0,0,0,0.2);
            width: 30px;
            height: 30px;
            display: inline-block;
            margin-bottom: 0px;
            font-size: 25px;
            position: relative;
            z-index:99;
            top: 320px;
            color: white;
            text-align:center;
            line-height: 30px;
            margin:10px 10px 10px 410px; 
            border-radius: 50px;
            
        }
        #pre:hover,#next:hover{
            background: rgba(0,0,0,0.5);
            border-radius: 50px;
        }
    </style>
    
</head>

<body id="body1">
    <?
    $Ray = all("myData");
    ?>
    <div id="printMain">
        <div class="myData">
            <div>
                <table id="myData_table">
                    <tr>
                        <!-- <td>姓名:</td> -->
                        <td><?echo $Ray['name'];?></td>
                    </tr>
                    <tr>
                        <!-- <td>生日:</td> -->
                        <td><?echo $Ray['birthday'];?></td>
                    </tr>
                    <tr>
                        <!-- <td>E-mail:</td> -->
                        <td><?echo $Ray['email'];?></td>
                    </tr>
                    <tr>
                        <!-- <td>電話:</td> -->
                        <td><?echo $Ray['tel'];?></td>
                    </tr>
                    <tr>
                        <!-- <td>地址:</td> -->
                        <td><?echo $Ray['addr'];?></td>
                    </tr>
                    <tr>
                        <!-- <td>E-mail:</td> -->
                        <td><?echo $Ray['grad_at3'];?></td>
                    </tr>
                    <tr>
                        <!-- <td>E-mail:</td> -->
                        <td>自我介紹：<?echo $Ray['aboutMe'];?></td>
                    </tr>
                    
                </table>
            </div>
            <div id="picF">
			<?php
                $Prows=all("Ray_photo");
                // print_r($rows);

            ?>
                <div class='RayP' id='<? echo $Prows['id']?>'>
			    <img src="<?echo $Prows['path']?>">
			    </div>
           
            </div>
            <!-- <hr> -->
        </div>
  
        <?
        $skills = all("skills");
        ?>
        <div class="skills">
        <table id="skills_table">
                    <tr>
                        <td id="bar">Visual design</td>
                        <td id="bar">UI design</td>
                        <td id="bar">Web design</td>
                    </tr>
                    <tr>
                        <td><?echo $skills['design'];?></td>
                        <td><?echo $skills['UIDesign'];?></td>
                        <td><?echo $skills['WebDesign'];?></td>
                    </tr>
                </table>
        </div>
        <?
        $workExp= all("workExperience");
        // print_r($workExp)
        ?>
        <div class="workexpErience">
            <div id="workexpErience_center">
                <table id="workexpErience_table">
                <hr style="width:83% ">
                    <tr>
                        <td><h3><?echo $workExp['company1'];?></h3></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['date1'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['job1'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['salary1'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['aboutJob1'];?></td>
                    </tr>
                </table>

                <table id="workexpErience_table">
                    <tr>
                        <td><h3><?echo $workExp['company2'];?></h3></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['date2'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['job2'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['salary2'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['aboutJob2'];?></td>
                    </tr>
                </table>

                <table id="workexpErience_table">
                    <tr>
                        <td><h3><?echo $workExp['company3'];?></h3></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['date3'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['job3'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['salary3'];?></td>
                    </tr>
                    <tr>
                        <td><?echo $workExp['aboutJob3'];?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="portfolio" style="width:89%; height:480px;" class="dbor">

            <div id="btnPN" class="cent">
				<div id="pre"  onclick="pp(1)"><</div>
                <div id="next" onclick="pp(2)">></div>
			</div>
 
			<?php
                $rows=all2("files");
                // print_r($rows);
				foreach($rows as $k => $r){

            ?>
                	<div class='im' id='ssaa<? echo $k?>'>
					<img src="<?echo $r['path']?>">
				    </div>
            <?
			  }
            ?>

            <script>
				//在num變數中讀出目前可供前台顯示的圖片張數
                var nowpage=0
                var num=<?= nums("files");?>;
				function pp(x){
					var s,t;
					//判斷按下向上按鈕時要進行的動作
					if(x==1&&nowpage-1>=0){
						//將nowpage變數減1
						nowpage--;
					}
					//判斷按下向下按鈕時要進行的動作
					if(x==2&&(nowpage+1)<=num-1){
						//將nowpage變數加1
						nowpage++;
					}
					//先將所有class為im的dom都隱藏
					$(".im").hide()
					//利用迴圈來決定要顯示那三張圖片
					
						//計算要顯示的圖片的id值
						t=nowpage*1;
						//將指定id的dom顯示出來
						$("#ssaa"+t).show()
					
				}
				//在頁面載入完成時先執行一次向上按鈕，藉此先讓前三張圖片顯示，其它圖片隱藏
				pp(1)
            </script>
            
        </div>
    </div>
</body>
</html>
