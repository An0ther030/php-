<html>
<head>
    <title>明新科技大學資訊管理系</title>
    <meta charset="utf-8">

    <!-- 引入輪播套件 CSS -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">

    <!-- 引入 jQuery -->
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>

    <!-- 引入 Flexslider -->
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>

    <script>
        // 頁面載入完成後啟動圖片輪播
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide", // 滑動效果
                rtl: true           // 由右到左
            });
        });
    </script>

    <style>
        /* 全域設定 */
        *{
            margin:0;
            color:gray;
            text-align:center;
        }

        /* ===== 上方區塊 ===== */
        .top{
            background-color: white;
        }

        .top .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding:10px;
        }

        /* Logo 樣式 */
        .top .logo{
            font-size: 35px;
            font-weight: bold;
        }

        .top .logo img{
            width: 100px;
            vertical-align: middle;
        }

        /* 上方連結 */
        .top .top-nav{
            font-size: 25px;
            font-weight: bold;
        }

        .top .top-nav a{
            text-decoration: none;
        }

        /* ===== 導覽列 ===== */
        .nav {
            background-color:#333;
            display: flex;
            justify-content: center;
        }

        .nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .nav li {
            float: left;
        }

        .nav li a {
            display: block;
            color: white;
            padding: 14px 16px;
            text-decoration: none;
        }

        .nav li a:hover {
            background-color: #111;
        }

        /* 下拉選單 */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            display: block;
            text-align: left;
        }

        /* ===== 輪播 ===== */
        .slider{
            background-color: black;
        }

        /* ===== 系所介紹 ===== */
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }

        .banner h1{
            padding: 20px;
        }

        /* ===== 師資區 ===== */
        .faculty {
            display: block;
            background-color:white;
            padding:40px;
        }

        .faculty .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .faculty .teacher img{
            height: 200px;
            width: 200px;
        }

        /* ===== 聯絡資訊 ===== */
        .contact {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .contact .infos{
            display:flex;
            justify-content: center;
        }

        .contact .infos .right iframe{
            width: 100%;
            height: 100%;
        }

        /* ===== footer ===== */
        .footer{
            display: flex;
            justify-content: center;
            background-color: rgb(25,26,30);
            padding: 30px 0;
        }

        /* ===== 登入視窗 ===== */
        .modal {
            display: none;
            position: fixed;
            right: 50px;
            top: 50px;
            width: 20%;
            height: 20%;
            background-color: rgba(255,255,255,0.9);
            padding-top: 50px;
        }

        /* ===== 佈告欄 ===== */
        .bulletin{
            background-color: rgb(255,204,153);
            padding: 30px 0;
        }

        .bulletin table{
            border-collapse:collapse;
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

<!-- ===== 上方 Logo 與登入 ===== -->
<div class="top">
    <div class="container">

        <div class="logo">
            <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
            明新科技大學資訊管理系
        </div>

        <div class="top-nav">
            <a href=>明新科大</a>
            <a href=>明新管理學院</a>

            <!-- 點擊顯示登入視窗 -->
            <label onclick="document.getElementById('login').style.display='block'">登入</label>

            <!-- 登入視窗 -->
            <div id="login" class="modal">
                <span onclick="document.getElementById('login').style.display='none'">
                    &times; 管理系統登入
                </span>

                <!-- 登入表單 -->
                <form method=post action="10.login.php">
                    帳號：<input type=text name="id"><br />
                    密碼：<input type=password name="pwd"><p></p>
                    <input type=submit value="登入">
                    <input type=reset value="清除">
                </form>
            </div>

        </div>
    </div>
</div>

<!-- ===== 導覽列 ===== -->
<div class="nav">
    <ul>
        <li><a href="#home">首頁</a></li>
        <li><a href="#introduction">系所簡介</a></li>

        <!-- 下拉選單 -->
        <li class="dropdown">
            <a href="#faculty">成員簡介</a>
            <div class="dropdown-content">
                <a href="#faculty">黃老師</a>
                <a href="#faculty">李老師</a>
                <a href="#faculty">應老師</a>
            </div>
        </li>

        <li><a href="#about">相關資訊</a></li>
    </ul>
</div>

<!-- ===== 圖片輪播 ===== -->
<div class="slider">
    <div class="flexslider">
        <ul class="slides">
            <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
            <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
            <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
        </ul>
    </div>
</div>

<!-- ===== 佈告欄（PHP動態資料） ===== -->
<div class="bulletin">
    <h1>最新公告</h1>

<?php
    // 連接資料庫
    $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

    // 查詢公告資料
    $result=mysqli_query($conn, "select * from bulletin");

    echo "<table border=2>
            <tr>
                <th>佈告編號</th>
                <th>佈告類別</th>
                <th>標題</th>
                <th>佈告內容</th>
                <th>發佈時間</th>
            </tr>";

    // 逐筆輸出公告
    while ($row=mysqli_fetch_array($result)){

        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";

        // 類別轉中文
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

<!-- ===== 系所介紹 ===== -->
<div class="banner" id="introduction">
    <h1>系所簡介</h1>
    <h1>歷年教育部評鑑皆榮獲一等</h1>
    <h1>明新科技大學資訊管理系</h1>
    <h1>全國私立科大第一資管系</h1>
</div>

<!-- ===== 師資介紹 ===== -->
<div class="faculty" id="faculty">
    <h2>師資介紹</h2>
    <div class="container">

        <a class="teacher">
            <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg">
            <h3>黃老師</h3>
        </a>

        <a class="teacher">
            <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg">
            <h3>李老師</h3>
        </a>

        <a class="teacher">
            <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg">
            <h3>應老師</h3>
        </a>

    </div>
</div>

<!-- ===== 聯絡資訊 ===== -->
<div class="contact" id="about">
    <h2>相關資訊</h2>

    <div class="infos">

        <div class="left">
            <b>明新科技大學管理學院大樓二樓</b>
            <span>304新竹縣新豐鄉新興路1號</span>
            <b>電話:03-5593142</b>
            <span>分機:3431、3432、3433</span>
            <b>傳真:03-5593142</b>
            <span>分機:3440</span>
        </div>

        <!-- Google Map -->
        <div class="right">
            <iframe src="https://www.google.com/maps/embed?..."></iframe>
        </div>

    </div>
</div>

<!-- ===== footer ===== -->
<div class="footer">
    &copy;Copyright 2022 Department of Information Management, MUST.
</div>

</body>
</html>
