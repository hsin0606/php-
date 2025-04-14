<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";   //如果輸入以上密碼會顯示登入成功
    else
        echo "登入失敗";   //否則顯示登入失敗
?>