<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;    //預設為登出狀態
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;     //輸入以上兩種帳號和密碼，就登入成功
     }
   } 
   if ($login==TRUE) {      //如果登入成功
    session_start();        //啟動session
    $_SESSION["id"]=$_POST["id"];   //儲存帳號
    echo "登入成功";   //列印登入成功
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";   //3秒後導到11.bulletin.php
   }

  else{
    echo "帳號/密碼 錯誤";    //否則登入失敗
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  //3秒後回到2.login.html
  }
?>