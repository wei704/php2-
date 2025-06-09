<?php
// 關閉錯誤訊息顯示
    error_reporting(0);
      // 啟動 session，確認使用者登入狀態
    session_start();
    // 判斷是否有登入（session 裡有沒有 id）
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
         // 已登入，連接資料庫   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
         // 執行 SQL 更新指令，更新 bulletin 表中指定 bid 的資料
        // 更新欄位包括：title、content、time、type
        // 其中資料皆從 $_POST 表單取得
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
           // 如果更新失敗，顯示錯誤訊息，並 3 秒後跳轉回佈告欄列表
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }else{
             // 更新成功，提示成功訊息，3 秒後跳回佈告欄列表
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }

?>
