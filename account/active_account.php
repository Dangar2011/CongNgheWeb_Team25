<?php
    
    if(isset($_POST['btn_signup'])){
        if(isset($_POST['email']) && $_POST['email']!=''){
         include  "send_email.php"; 
             if(sendEmailForAccountActive($_POST['email'])){  
             echo'Email da gui';
       
             }else{
              echo 'email chua gui';
            }
        }
    }  
?>