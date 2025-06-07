<?php
    error_reporting(0);           //關閉錯誤訊息
    session_start();              //啟用session 確認是否登入
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";   // 3秒後跳到2.login.html
    }
    else{
        
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    //建立資料庫連結
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");    //從URL中取得佈告的bid，查詢該筆資料
        $row=mysqli_fetch_array($result);    //將資料轉為陣列
        $checked1="";              //根據佈告類型設定對應的 radio button 為 checked
        $checked2="";
        $checked3="";
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        
        echo       //顯HTML表單，將查到的值填入欄位
        "
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