<html>
  
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");     //建立資料庫連結
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");  //從資料庫取出修改過的使用者資料
        $row=mysqli_fetch_array($result);    //取出查詢的結果
        echo      //顯示使用者的帳號
        "    
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>