<?php
 // 關閉錯誤訊息顯示
    error_reporting(0);
     // 啟動 session，管理使用者登入狀態
    session_start();
     // 檢查是否已登入（判斷 session 是否有 id）
    if (!$_SESSION["id"]) {
        // 若未登入，提示使用者並在3秒後跳轉回登入頁面
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{ 
         // 已登入，連接遠端資料庫  
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 組合 SQL 刪除語句，根據 GET 輸入的 bid 刪除對應佈告
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        #echo $sql;
         // （除錯用）可印出 SQL 指令查看
        
        // 執行刪除指令，失敗顯示錯誤訊息，成功顯示成功訊息
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
         // 無論成功或失敗，3秒後跳轉回佈告列表頁
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
