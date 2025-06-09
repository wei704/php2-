<?php
  // 關閉錯誤訊息
    error_reporting(0);
     // 啟用 session，用來檢查使用者是否已登入
    session_start();
      // 檢查是否登入，若未登入，顯示提示並跳轉到登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        // 連接到資料庫（db4free.net 伺服器）
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 組合 SQL 指令：將 user 資料表中 id 為 $_POST['id'] 的密碼更新為 $_POST['pwd']
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
             // 若 SQL 執行失敗，顯示錯誤訊息並跳轉回使用者頁面
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }else{
            // 修改成功提示
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
