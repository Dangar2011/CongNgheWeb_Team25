<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnLogin'])){
        $email = $_POST['Email'];
        $pass  = $_POST['PassWord'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','btl');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM ad WHERE email = '$email' AND password ='$pass' " ;
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            // CẤP THẺ LÀM VIỆC
            $_SESSION['isLoginad'] = $email;
            header("location:index.php"); //Chuyển hướng đến trang chủ
        }else{
            echo ( "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác. (Check email để kích hoạt tài khoản)");
            //header("location:../account/login.php"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login-ad.php");
    }
?>
