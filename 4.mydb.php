<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");    //查資料庫儲存的資料
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);     //查詢第一筆資料
    echo $row["id"] . " " . $row["pwd"]."<br>";   //顯示第一筆的ID和密碼
    $row=mysqli_fetch_array($result);     //查詢下一筆資料
    echo $row["id"] . " " . $row["pwd"];          //顯示下一筆的ID和密碼
?>