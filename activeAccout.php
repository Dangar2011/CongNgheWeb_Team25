<?php
    if(isset($_POST['btn_signup'])){
        if(isset($_POST['email']) && $_POST['email'] !=''){
            include "send_email.php";
            if(sendEmailLogin($_POST['email'])){
                echo 'email đã được gửi đi';
            }
            else{
                echo 'email chưa được gửi đi';
            }
        }
    }

?>