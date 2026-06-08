<?php

    if(isset($_POST['submit'])) {
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        $to = 'devme@lsaciasi.ro';
        $subject = "Question from website | " . $email;
        $message = "Email: " . $email . "\r\nIntrebare: " . $msg;
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if(mail($to, $subject, $message, $headers)) {
            header("Location: index2.html");
            exit;
        }
        else {
            echo "Ceva nu a mers bine...";
        }
    }
?>