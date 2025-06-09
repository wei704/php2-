<?php
// 關閉錯誤訊息（開發階段建議設為 error_reporting(E_ALL)）
    error_reporting(0);
    // 啟用 Session 功能
    session_start();
        // 檢查使用者是否已登入
    if (!$_SESSION["id"]) {
         // 若未登入，顯示提示訊息並在 3 秒後跳轉至登入頁面
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        // 使用者已登入，開始執行後續動作
         // 建立資料庫連線
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
         // 取得該筆佈告的資料（根據 URL 傳來的 bid）
        $row=mysqli_fetch_array($result);
        // 根據佈告類型(type)設定單選按鈕預選狀態
        $checked1="";
        $checked2="";
        $checked3="";
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
         // 顯示 HTML 表單，並填入原有的佈告內容供編輯
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
