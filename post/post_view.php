<?php

// // Kết nối Database
// require_once 'post_connect.php';

// // Chọn bảng posts
// $id=$_GET['idPost'];
// $sql = "SELECT * FROM posts WHERE idPost='$id'";
// $result = mysqli_query($conn, $sql);
// while ($rowli_fetch_array($result)) {
// echo "<h2>Title: ".$row['title = mysq']."</h2><br/>";
// echo "<em>Posted:" .$row['date']. "</em><br/>";
// echo "<p>Content: ".$row['content']."</p><br/>";
// echo "<em>Openday:" .$row['openday']. "</em><br/>";
// echo "<div><img src='../photo/".$row['image']."'></div>";
// }










?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>

<body>

    <a href="../home.php">Back</a>
    <body>
        <form action="post_load.php" enctype="multipart/form-data" method="post" class="form" >
            <table width="600" height="600" border="1" cellspacing="5" cellpadding="5" align="center">
               <?php
                require_once 'post_connect.php';

                $id=$_GET['id'];
                 $sql = "SELECT * FROM posts WHERE idPost='$id'";
                $result = mysqli_query($conn, $sql);
                    echo $result['title'];
                    echo('<br>');
                    echo $result['images'];
                    echo('<br>');
                    echo $result['content'];
                    echo('<br>');
                    echo $result['openday'];
                    echo('<br>');
                    echo $result['created'];
                    echo('<br>');

               ?>

        
            </table>
        </form>
        <h2>Old Post </h2>
        <?php //require 'C:\xampp\htdocs\CongNgheWeb_Team25\post\post_load.php';?>
    </body>
</body>

</html>