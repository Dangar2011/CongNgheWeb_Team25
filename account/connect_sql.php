<?php
//Kết nối Database Server
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "User Registration";
    $conn = mysqli_connect($host, $username, $password, $dbname);
    if (!$conn) {
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
?>