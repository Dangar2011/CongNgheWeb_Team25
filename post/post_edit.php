<head>
    <title>Update</title>
    <link rel="stylesheet" href="css/style_add_post.css" />
</head>

<body>
    <?php
// Kết nối Database
    require_once 'C:\xampp\htdocs\CongNgheWeb_Team25\post\post_connect.php';
    $id=$_GET['idPost'];
    $sql1="SELECT * FROM posts WHERE idPost='$id'";
    $query=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($query);
?>
    <form method="POST" class="form">
        <h2>Edit post</h2>
        <label>Title:<br />
            <input type="text" value="<?php echo $row['title']; ?>" name="title" id="title" /></label><br />
        <label>Content:<br />
            <textarea value="" name="content" id="content" rows="10" cols="80" /><?php echo $row['content']; ?></textarea></label><br />
        <label>Image: <br />
            <input type="text" value="<?php echo $row['image']; ?>" name="image" /></label><br />
        <label>Title:<br />
            <input type="date" value="<?php echo $row['openday']; ?>" name="openday" id="openday" /></label><br />
        <input type="submit" value="Update" name="update_posts">
        <?php require_once 'post_update.php';?>
    </form>
</body>

</html>