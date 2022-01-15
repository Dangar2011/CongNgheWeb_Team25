

<?php
  // Trước khi cho người dùng xâm nhập vào bên trong
    //Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginad'])){
        header("location:index.php");
    }

?>
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
    $sql1="SELECT * FROM Users WHERE idUser='$id'";
    $query=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($query);
    $imageURL = 'avatar/'.$row["avatar"];
    $idPost= $row['idUser'];
?>
    <form action="process-update-user.php" enctype="multipart/form-data" method="post" class="form" >
            <table width="600" height="600" border="1" cellspacing="5" cellpadding="5" align="center">
                
                  
                        <input type="hidden" readonly id="txtidUser" name="txtidUser" value= <?php echo $row['idUser']?>>
                  
                
                <tr>
                    
                    
                    <td width="230">UserName: </td>
                    
                    <td> <input  style="height:40px;width:99%;" type="text" value="<?php echo $row['username']; ?>" name="txtUsername"
                    id="username" /></label></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><textarea  value="" name="txtEmail" id="Email" rows="10"
                    cols="80"><?php echo $row['email']; ?></textarea></td>
                </tr>
                <tr>
                    <td>Avatar: </td>
                    <td>
                    <input  type="file" value="<?php echo $imageURL; ?>" name="txtAvatar" /><br />
                    <h5>Old Avatar:</h5> <img  width="660" height="370" src="<?php  echo $imageURL?>" alt="">
                    </td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td><input  style="height:40px;width:99%;" type="text" value="<?php echo $row['gender']; ?>" name="txtGender"
                    id="gender" /><br/><br /></td>
                </tr>

                <tr>
                    <td>Birthday: </td>
                    <td>  <input  style="height:40px;width:99%;" type="date" value="<?php echo $row['birthday']; ?>" name="txtBirthday"
                    id="birthday" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btn_Update" value="Update User" />
                
                </tr>
            </table>
        </form>
<?php
  
?>
</body>

</html>