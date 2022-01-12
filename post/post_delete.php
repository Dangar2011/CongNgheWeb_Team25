<?php
include 'post_connect.php';
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM posts WHERE idPost='$id'";
if ($conn->query($sql) === TRUE) {
echo "Delete complete!";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
header("Location: post_add.php");
?>