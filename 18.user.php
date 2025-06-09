<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
     // 關閉錯誤報告
        error_reporting(0);
        session_start();
           // 啟用 session 功能，讓程式可以存取登入資訊
        if (!$_SESSION["id"]) {
             // 如果尚未登入（$_SESSION["id"] 不存在），提示並跳轉到登入頁面
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{  // 已登入，顯示使用者管理介面
            // 顯示標題與功能連結 
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            // 建立資料庫連線
            $result=mysqli_query($conn, "select * from user");
            // 從 user 資料表撈出所有使用者資料

            while ($row=mysqli_fetch_array($result)){
                // 用 while 迴圈讀出每一筆資料
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }// 每一列顯示「修改」與「刪除」的超連結，以及帳號與密碼
            echo "</table>";
        }
    ?> 
    </body>
</html>
