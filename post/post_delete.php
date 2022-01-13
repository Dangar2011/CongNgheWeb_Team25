<?php
include '../post/post_connect.php';
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM posts WHERE idPost='$id'";
$delete=mysqli_query($conn,$delete)

if($delete){//kiểm tra việc query thành công
    echo "Delete successful!";
    }else{
    echo = "File upload failed, please try again.";

}
mysqli_close($conn);
header("Location: ../events.php");
?>