<head>
    <title>Edit Post</title>
    <link rel="stylesheet" href="css/style_add_post.css" />
    <link rel="shortcut icon" href="../image/Meetup_Logo.png">
</head>

<body>
    <?php
// Kết nối Database
    require_once 'C:\xampp\htdocs\CongNgheWeb_Team25\post\post_connect.php';
    $id=$_GET['id'];
    $sql1="SELECT * FROM posts WHERE idPost='$id'";
    $query=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($query);
    $imageURL = '../photo/'.$row["images"];
?>
    <!-- <form method="POST" class="form" action="../post/post_update.php">
        <table>
            <h2>Edit post</h2>
            
            <label style="display:flex;">Title:<br />
                <input style="display:flex;" type="text" value="<?php echo $row['title']; ?>" name="txtTitle"
                    id="title" /></label><br />
            <label style="display:flex;">Content:<br />
                <textarea style="display:flex;" value="" name="txtContent" id="content" rows="10"
                    cols="80"><?php echo $row['content']; ?></textarea></label><br />
            <label style="display:flex;">Image: <br />
                <input style="display:flex;" type="file" value="<?php echo $imageURL; ?>" name="txtImage" /></label><br />
            <img style="display:flex;" src="<?php  echo $imageURL?>" alt="">
            <label style="display:flex;margin-top:10px;">Address:<br />
                <input style="display:flex;"type="text" value="<?php echo $row['address']; ?>" name="txtAddress"
                    id="address" /></label><br />
            <label style="display:flex;">Openday:<br />
                <input style="display:flex;" type="date" value="<?php echo $row['openDay']; ?>" name="txtOpenday"
                    id="openday" /></label><br />
            <input type="submit" value="Update" name="update_post">
        </table>

    </form> -->
    <form action="../post/post_update.php" enctype="multipart/form-data" method="post" class="form" >
            <table width="600" height="600" border="1" cellspacing="5" cellpadding="5" align="center">
                <tr>
                    <td width="230">Title: </td>
                    
                    <td> <input  style="height:40px;width:99%;" type="text" value="<?php echo $row['title']; ?>" name="txtTitle"
                    id="title" /></label></td>
                </tr>
                <tr>
                    <td>Content: </td>
                    <td><textarea  value="" name="txtContent" id="content" rows="10"
                    cols="80"><?php echo $row['content']; ?></textarea></td>
                </tr>
                <tr>
                    <td>Image: </td>
                    <td>
                    <input  type="file" value="<?php echo $imageURL; ?>" name="txtImage" /><br />
                    <h5>Old Image:</h5> <img  src="<?php  echo $imageURL?>" alt="">
                    </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td><input  style="height:40px;width:99%;" type="text" value="<?php echo $row['address']; ?>" name="txtAddress"
                    id="address" /><br/><br /></td>
                </tr>

                <tr>
                    <td>Openday</td>
                    <td>  <input  style="height:40px;width:99%;" type="date" value="<?php echo $row['openDay']; ?>" name="txtOpenday"
                    id="openday" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btn_Update" value="Add Post" /></td>
                </tr>
            </table>
        </form>
<?php
  
?>
</body>

</html>