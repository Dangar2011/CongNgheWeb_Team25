<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account Activation by Email Verification using PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    if ($_GET['key'] && $_GET['token']) //Kiểm tra giá trị trên URL
    {   
        //Kết nối database
        require "connect_sql.php";
        //Thực hiện truy vấn
        $email = $_GET['key']; // Bắt giá trị trên URL
        $token = $_GET['token'];
        $sql = "SELECT * FROM `users` WHERE `email_verification_link`='" . $token . "' and `email`='" . $email . "';";
        $query = mysqli_query($conn, $sql);

        $d = date('Y-m-d H:i:s'); // Thời gian kích hoạt
        if (mysqli_num_rows($query) > 0) // Kiểm tra có khớp với PHPMySQL
        {
            $row = mysqli_fetch_array($query);
            if ($row['email_verified_at'] == NULL) //Kiểm tra chưa kích hoạt
            {   
                $sql2 = "UPDATE users set email_verified_at ='" . $d . "', status = 1 WHERE email='" . $email . "'";
                mysqli_query($conn, $sql2);
                $msg = "Congratulations! Your email has been verified.";
            } else {
                $msg = "You have already verified your account with us";
            }
        } else {
            $msg = "This email has been registered with us. ";
        }
    } else {
        $msg = "Danger! Your something goes to wrong.";
    }
    ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
                User Account Activation by Email
            </div>
            <div class="card-body">
                <p>
                    <?php echo $msg; ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>

<!-- Xử lý kích hoạt tài khoản -->