<html>

<?php        
    error_reporting(0);         //關閉錯誤訊息
    session_start();            //啟用session
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";     //如果沒有登入的話就引導到你的登入頁面
    }
    else{                                                                   //如果有登入就顯示增加帳號
        echo "   
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>