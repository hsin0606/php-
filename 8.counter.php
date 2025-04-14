<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;       //第一次點進去 設置為1
    else
        $_SESSION["counter"]++;       //否則+1

    echo "counter=".$_SESSION["counter"];      //列印目前的數值
    echo "<br><a href=9.reset_counter.php>重置counter</a>";    //顯示重置的按鍵
?>