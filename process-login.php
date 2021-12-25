<?php
    if(isset($_POST['btnSignIn']) && isset($_POST['txtUser'])){
        require("config.php");
        $sql ="SELECT * FROM db_nguoidung WHERE email=? AND matkhau=?";
        $stmt=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"ss",$email,$pass);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt,$tennd,$emailnd,$matkhaund);
            if(mysqli_stmt_fetch($stmt)){
                echo $emailnd;
            }else{
                echo 'Dữ liệu không khớp';
            }
        }else{
                echo 'không có dữ liệu';
            }
    }
?>