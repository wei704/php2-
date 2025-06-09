<?php
 // 關閉 PHP 錯誤訊息（開發階段建議使用 error_reporting(E_ALL)）
    error_reporting(0);
     // 啟用 Session 機制
    session_start();
     // 檢查是否登入
    if (!$_SESSION["id"]) {
     // 若未登入，提示訊息並自動跳轉至登入頁面
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
                // 連接資料庫
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 組成 SQL 語句，將 POST 表單中的資料寫入 bulletin 表格
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
         // 執行 SQL，判斷是否成功
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";// 若 SQL 執行失敗，顯示錯誤訊息
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
