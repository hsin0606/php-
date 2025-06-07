<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   //建立資料庫連結
        $sql="insert into bulletin(title, content, type, time)     
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";    //輸入SQL指令，插入布告的資料
        if (!mysqli_query($conn, $sql)){    //執行SQL
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";     //新增成功後3秒後返回11.bulletin(布告頁面)
        }
    }
?>