<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin");     //查所有資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";  //建立表格
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];    //建立編號
        echo "</td><td>";
        echo $row["type"];   //建立類別
        echo "</td><td>"; 
        echo $row["title"];  //建立標題
        echo "</td><td>";
        echo $row["content"];  //建立內容
        echo "</td><td>";
        echo $row["time"];   //建立時間
        echo "</td></tr>";
    }
    echo "</table>"   //結束表格
?>