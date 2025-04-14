<?php
    session_start();
    unset($_SESSION["counter"]);    //重置counter
    echo "counter重置成功....";     //列印重置成功
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";   //2秒後回到8.counter.php的頁面

?>