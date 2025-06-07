<?php

    error_reporting(0);      //關閉錯誤訊息
    session_start();         //啟用session 確認是否登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";      // 3秒後跳到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    //建立資料庫連結
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}'      
        ,content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){ // 檢查 SQL 能不能成功，執行 UPDATE，根據POST資料修改對應bulletin 資料
            echo "修改錯誤";   
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";      //新增失敗後3秒後返回11.bulletin(布告頁面)
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";     //新增成功後3秒後返回11.bulletin(布告頁面)
        }
    }

?>