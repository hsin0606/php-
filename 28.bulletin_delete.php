<?php
    error_reporting(0);       //關閉錯誤訊息
    session_start();          //啟用session 確認是否登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";   // 3秒後跳到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   //建立資料庫連結
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";     //從bulletin表格裡刪除指定bid資料
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";   //列印佈告刪除錯誤
        }else{
            echo "佈告刪除成功";   //列印佈告刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";   //3秒後返回11.bulletin
    }
?>