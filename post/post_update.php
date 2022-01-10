<?php
if (isset($_POST['update_posts'])){
$id=$_GET['idPost'];
$title=$_POST['title'];
$content=$_POST['content'];
$image=$_POST['image'];
$openday=$_POST['openday'];
 
$sql = "UPDATE posts SET title='$title', content='$content', image='$image',openday='$openday' WHERE idPost='$id'";
 
if ($conn->query($sql) === TRUE) {
echo "<b>Record updated successfully</b>";
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>