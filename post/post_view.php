<?php

// Kết nối Database
require_once 'post_connect.php';
// Chọn bảng posts
$id=$_GET['idPost'];
$sql = "SELECT * FROM posts WHERE idPost='$id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
echo "<h2>Title: ".$row['title']."</h2><br/>";
echo "<em>Posted:" .$row['date']. "</em><br/>";
echo "<p>Content: ".$row['content']."</p><br/>";
echo "<em>Openday:" .$row['openday']. "</em><br/>";
echo "<div><img src='../photo/".$row['image']."'></div>";
}

?>