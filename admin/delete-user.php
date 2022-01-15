<?php
session_start();
if(!isset($_SESSION['isLoginad'])){
    header("location:index.php");
}
$id=$_GET['id'];

include '../post/post_connect.php';
$sql = "DELETE FROM Users WHERE idUser='$id'";
$delete = mysqli_query($conn,$sql);

if($delete > 0){
    header("location: index.php"); //Chuyển hướng về Trang quản trị
}else{
    header("location:index.php"); //Chuyển hướng, hiển thị thông báo lỗi
}

// Bước 03: Đóng kết nối
mysqli_close($conn);
?>