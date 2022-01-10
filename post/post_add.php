<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>

<body>

    <body>
        <form action="post_load.php" enctype="multipart/form-data" method="post" class="form" >
            <table width="600" height="600" border="1" cellspacing="5" cellpadding="5" align="center">
                <tr>
                    <td width="230">Title: </td>
                    
                    <td width="550"><input type="text" name="title" /></td>
                </tr>
                <tr>
                    <td>Content: </td>
                    <td><textarea name="content" id="content" placeholder="Write Content.." class="noidung" rows="10"
                            cols="80"></textarea></td>
                </tr>
                <tr>
                    <td>Image: </td>
                    <td>
                        <input type="file" name="image" class="hinhanh"><br /><br />
                    </td>
                </tr>

                <tr>
                    <td>Openday</td>
                    <td> <input style="height:40px;width:100%;" type="date" id="openday" name="openday"></input></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btn_Upload" value="Add Post" /></td>
                </tr>
            </table>
        </form>
        <h2>Old Post </h2>
        <?php //require 'C:\xampp\htdocs\CongNgheWeb_Team25\post\post_load.php';?>
    </body>
</body>

</html>