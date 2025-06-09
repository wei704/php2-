<html>
    <head><title>明新科技大學資訊管理系</title>
     <!-- 設定網頁字元編碼為 UTF-8 -->
    <meta charset="utf-8">
      <!-- 引入 Flexslider CSS 樣式 -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
     <!-- 引入 jQuery 函式庫 -->
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
     <!-- 引入 Flexslider 插件 -->
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
    <script>
         // 當頁面及所有資源載入完成時執行
        $(window).load(function() {
             // 初始化 Flexslider，設定動畫為滑動，並使用 RTL（由右至左）
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>
    <style>
          /* 全域設定：取消 margin、字體顏色灰色、文字置中 */
        *{
            margin:0;
            color:gray;
            text-align:center;
        }
        
        /* top */
        .top{
             /* 上方 header 區塊 */
             background-color: white;
        }
        .top .container{
            display: flex;/* 使用 flexbox 排版 */
            align-items: center;/* 垂直置中 */
            justify-content: space-between;/* 左右兩端對齊 */
            padding:10px;
        }
        .top .logo{
            /*border:1px solid red;*/
            font-size: 35px;
            font-weight: bold;
        }
        .top .logo img{
            width: 100px;
            vertical-align: middle;/* 圖片與文字垂直置中 */
        }
        .top .top-nav{
            /*border:1px solid red;*/
            font-size: 25px;
            font-weight: bold;       
        }
        .top .top-nav a{
            text-decoration: none;/* 移除超連結底線 */
        }
        /* nav */
        .nav {
            background-color:#333; /* 深色背景 */
            display: flex;
            justify-content: center;/* 置中所有項目 */
        }
        .nav ul {
            list-style-type: none;  /* 移除項目符號 */

            margin: 0; 
            padding: 0; 
            overflow: hidden; 
            background-color: #333; 
        }
        .nav li {
            float: left; /* 項目水平排列 */
        }
        .nav li a {    
            display: block;  
            color: white;   /* 白色文字 */
            text-align: center;  
            padding: 14px 16px;  
            text-decoration: none;  
        }
        .nav li a:hover {
            background-color: #111; /* 滑鼠移入變暗 */
        }
        /*下拉式選單*/
        .dropdown:hover .dropdown-content {
            display: block;   /* 滑鼠懸停時顯示下拉內容 */
                              /*使用block呈現上下排列*/
        }
        li.dropdown:hover{
            background-color: #333;   /* 下拉選單背景 */
                                     /*設定背景顏色*/
        }
        .dropdown-content {  /*設定下拉選單內容格式*/
            display: none;/* 預設不顯示 */
            position: absolute;/* 絕對定位 */
            background-color: #333;
            min-width: 160px;
            z-index: 1;/* 蓋在其他元素上方 */
        }
        .dropdown-content a {/*設定下拉選單連結內容格式*/
            color: black; /* 下拉選單文字顏色 */
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* slider */
             /* 輪播區塊 */
        .slider{
            background-color: black;
        }
        /* banner*/
         /* banner 區塊，漸層背景 */
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }
        .banner h1{
            padding: 20px;
        }        
        /*faculty*/
         /* 師資介紹區 */
        .faculty {
            display: block;
            justify-content: center;
            background-color:white;
            padding:40px;
        }
        .faculty h2 {
            font-size: 25px;
            color: rgb(50,51,52);
            padding-bottom:40px;
        }
        .faculty .container {
            /*border:1px solid red;*/
            display: flex; /* 使用 flexbox 排版 */
            justify-content: space-around; /* 均分間距 */
            align-items: center;/* 垂直置中 */
        }
        .faculty .teacher{
            /*border:1px solid blue;*/
            display:block;
            text-decoration: none;/* 移除超連結底線 */
        }
        .faculty .teacher img{
            height: 200px;
            width: 200px;
        }
        .faculty .teacher h3{
            color: White;
            background-color: rgba(39,40,34,.500); /* 半透明背景 */
            text-align: center;           
        }
        /*contact*/
        .contact {
            display: block;
            justify-content: center;
            margin-top: 30px;
            margin-bottom: 30px;                
        }
        /* 聯絡資訊區 */
        .contact h2{
            color: rgb(54, 82, 110);
            font-size: 25px;
        }
        .contact .infos{
            display:flex;
            margin-top: 30px; 
            justify-content: center;
        }
        .contact .infos .left{
            display:block;
            text-align: left;
            margin-right: 30px;
        }
        .contact .infos .left b{
            display:block;
            text-align: left;
            margin-top: 10px;
            text-decoration: bold;
            color: Gray;
            font-size: 18px;
            line-height: 18px;
        }
        .contact .infos .left span{
            display:block;
            text-align: left;
            margin-top: 10px;
            color: rgba(39,40,34,0.5);
            font-size: 16px;
            padding-left: 27px;
        }
        .contact .infos .right{
            height: 200px;               
        }
        .contact .infos .right iframe{
            width: 100%;
            height: 100%;
            border: 1px solid rgba(39,40,34,0.50);
        }
        /*footer*/  /* 頁尾 */
        .footer{
            display: flex;
            justify-content: center;
            background-color: rgb(25,26,30);
            padding: 30px 0;
        }
        /*登入畫面css*/
         /* 登入畫面 CSS，預設隱藏 */
        .modal {
            display: none; /* Hidden by default */ 
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            right: 50;
            top: 50;
            width: 20%; /* Full width */
            height: 20%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(255,255,255,0.9); /* Black w/ opacity */
            padding-top: 50px;
        }  /*登入畫面css*/
        /*佈告欄*/
        .bulletin{
            display: block;
            justify-content: center;
            background-color: rgb(255,204,153);
            padding: 30px 0;

        }
        .bulletin h1{
            padding:10px;
        }
        .bulletin table{
            border-collapse:collapse;/* 合併表格邊框 */
            font-family: 微軟正黑體;
            font-size:16px; 
            border:1px solid #000;
        }
        .bulletin table th{
            background-color: #abdcff;
            color: #ffffff;
        }
        .bulletin table td{
            background-color: #ffffff;
            color: #0396ff;
        }
    </style>
    </head>
    <body>
         <!-- 頁面頂部區塊 -->
        <div class="top">
            <div class="container">
                <!-- 左側 Logo 及系名 -->
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <!-- 右側頂部導覽 -->
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!---跳出登入畫面-->
                  <!-- 登入按鈕，點擊後顯示登入畫面 -->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <!-- 登入彈出視窗 -->
                  <div id="login" class="modal">
                        <!-- 關閉按鈕，點擊後隱藏登入視窗 -->
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <!-- 登入表單 -->
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                    <!-- 登入彈出視窗結束 -->
                  </div>  
                  <!---登入畫面-->
                </div>
              </div>
        </div>
         <!-- 主導覽列 -->
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                 <!-- 含下拉式選單的導覽項目 -->
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
         <!-- 輪播區塊 -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!---佈告欄--->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                $result=mysqli_query($conn, "select * from bulletin");
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!-- 佈告欄結束 -->
        <!---佈告欄--->
        <!-- 系所簡介區塊 -->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <!-- 師資介紹區塊 -->
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                        <!-- 黃老師介紹 -->
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                       <!-- 李老師介紹 -->
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                  <!-- 應老師介紹 -->
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div><!-- 佈告欄結束 -->
        </div>
         <!-- 系所簡介區塊 -->
          <!-- 聯絡資訊區塊 -->
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                        <!-- 右側 Google 地圖嵌入 -->
                    <div class="right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        <!-- 頁腳區塊 -->
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>
