<?php
    error_reporting(0);        //關閉錯誤訊息
    session_start();           //啟用session
    if (!$_SESSION["id"]) {     //檢查是否登入了
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";   // 3秒後跳到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   //建立資料庫連線
        $sql="delete from user where id='{$_GET["id"]}'";    //刪除指定使用者帳號
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";     //失敗的話 顯示使用者刪除錯誤
        }else{
            echo "使用者刪除成功";     //成功的話 顯示使用者刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";     //新增成功就跳回18.user.php
    }
?>