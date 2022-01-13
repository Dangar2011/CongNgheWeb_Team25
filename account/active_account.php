<?php
if (isset($_POST['btn_signup']) && $_POST['email']) // Kiểm tra người dùng nhấn vào nút đăng ký
{
    // Kết nối database
    require "connect_sql.php";
    // Thực hiện truy vấn
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
    $row = mysqli_num_rows($result);
    // Xử lý kết quả
    if ($row <= 0) // Kiểm tra xem email được dùng chưa
    {
        $token = md5($_POST['email']) . rand(10, 9999); // Sử dụng dải thuật md5 sinh ra 1 chuỗi ngẫu nhiên
        // Lưu thông tin đăng ký vào PHPMySQL
        $user = $_POST['name'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(name, email, email_verification_link ,password) VALUES('$user', '$email', '$token', '$pass')";
        mysqli_query($conn, $sql);

        //Sau khi lưu xong gửi xác nhận đến email để người dùng kích hoạt 
        $link = "<a href='localhost/email-verification/verify-email.php?key=" . $_POST['email'] . "&token=" . $token . "'>Comfirm my Email</a>";
        // Quá trình gửi email
        include  "send_email.php";
        if (sendEmailForAccountActive($email, $link)) {
            echo 'Message has been sent';
        } else {
            echo 'Message could not be sent.';
        }
    }
}
?>
