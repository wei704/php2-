<?php
    error_reporting(0);
    session_start();
    // 檢查是否登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{ 
         // 建立資料庫連線  
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'";
        // 組合出 SQL 指令，用來刪除指定 ID 的使用者資料
        // $_GET["id"] 是從網址參數中取得的，例如 delete.php?id=testuser
        // 最後產生的 SQL 字串可能會是：DELETE FROM user WHERE id='testuser'
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
          // 跳轉回使用者列表
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
