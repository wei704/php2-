<?php
// 關閉所有錯誤訊息（開發階段建議改為 error_reporting(E_ALL)）
error_reporting(0);
// 啟動 Session，用來判斷是否已登入
session_start();
// 檢查使用者是否已登入（是否存在 $_SESSION["id"]）
if (!$_SESSION["id"]) {
    echo "請登入帳號";
     // 3 秒後自動跳轉回登入頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

   #mysqli_connect() 建立資料庫連結
    // 建立資料庫連線（主機、帳號、密碼、資料庫名稱）
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   else{
    // 新增成功，提示訊息並 3 秒後跳轉回使用者頁面
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
