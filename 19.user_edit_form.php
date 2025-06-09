<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    // 關閉錯誤報告
    error_reporting(0);
    // 啟動 session 功能，讓系統可以確認是否已登入
    session_start();
      // 若使用者尚未登入，顯示提示並跳轉至登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
         // 建立資料庫連線（主機、帳號、密碼、資料庫名稱）
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 取得從網址傳來的 ID，查詢對應的使用者資料
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
         // 將查詢結果取出為陣列
        $row=mysqli_fetch_array($result);
        // 顯示修改表單，帳號不可修改（用 hidden 保留原 ID 傳回去）
        echo "
        
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
