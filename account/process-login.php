<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnLogIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPassWord'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        require "connect_sql.php";
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM users WHERE email = '$email' AND pass ='$pass'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) == 1){
            // CẤP THẺ LÀM VIỆC
            $_SESSION['isLoginOK'] = $email;
            header("location: ../home.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
           echo "Error: ".$error;
            //header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        echo "sai";
       // header("location:login.php");
    }
?>