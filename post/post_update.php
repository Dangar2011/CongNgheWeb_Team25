<?php
if (isset($_POST['update_posts'])){
$id=$_GET['idPost'];
$title=$_POST['txtTitle'];
$content=$_POST['txtContent'];
$image=$_POST['txtImage'];
$openday=$_POST['txtOpenday'];
 
$sql = "UPDATE posts SET title='$title', content='$content', image='$image',openday='$openday' WHERE idPost='$id'";
 
if ($conn->query($sql) === TRUE) {
echo "<b>Record updated successfully</b>";
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>