<?php
$id=$_GET['id'];
include '../post/post_connect.php';


$sql = "DELETE FROM posts WHERE idPost='$id'";
$delete = mysqli_query($conn,$sql);

if($delete > 0){
    header("location: ../events.php"); //Chuyển hướng về Trang quản trị
}else{
    header("location: ../post_view.php?=".$id); //Chuyển hướng, hiển thị thông báo lỗi
}

// Bước 03: Đóng kết nối
mysqli_close($conn);
?>