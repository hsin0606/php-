<?php
    session_start();
    unset($_SESSION["id"]);     //移除ID
    echo "登出成功....";        //列印登出成功
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";    //3秒後導到2.login.html

?>