<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;      //還沒有登入
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;     //如果符合ID和密碼的話就可以登入
     }
   } 
   if ($login==TRUE)
     echo "登入成功";         //如果判斷TRUE，就列印登入成功
  else
     echo "帳號/密碼 錯誤";   //否則列印登入失敗
?>