<html>

    <?php
        error_reporting(0);       //關閉錯誤訊息
        session_start();          //啟用session
        if (!$_SESSION["id"]) {      //檢查是否登入了
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";    // 3秒後跳到2.login.html
        }
        else{                                        //顯示操作的選單
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";           //建立表格的標題
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");     //建立資料庫連線
            $result=mysqli_query($conn, "select * from user");       //查使用者的資料
            while ($row=mysqli_fetch_array($result)){                //一筆一筆列出使用者的資料
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";    //結束表格
        }
    ?> 
    </body>
</html>