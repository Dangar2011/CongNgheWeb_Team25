<?php

// b1 Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "btl";

// b2 Kết nối sql
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);//tương đương mysqli_connect

//b3 kiểm tra có lỗi hay không
if (!$conn) {//cú pháp -> truy cập thuộc tính phương thức của 1 đối tượng trong php
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'UTF8');
?>