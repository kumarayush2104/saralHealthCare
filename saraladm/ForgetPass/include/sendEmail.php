<?php
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'saral');
    $result = $conn -> query('SELECT * from users where username="'.$_REQUEST['email'].'"');
    $row = $result -> fetch_assoc();
    $conn -> close();
    if($row) {
        include('../../Assets/modules/phpmailer/sendmail.php');
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['id'] = $row['email'];
        $mail->addAddress($row['email']);
        $mail->Body = 'Your OTP for password reset request is <b>'.$otp.'</b>';
        $mail->send();
        echo 1;
    } else {
        echo 0;
    }
?>