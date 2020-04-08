<?php
    $to = "murshedatasnim@gmail.com";
    $sub = "test subject";
    $msg = "<br>short msg<br>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

    $headers .= "to: john <john@gmail.com>, Jane <jane@gmail.com>" . "\r\n";
    $headers .= "from: that guy  keya <keya@gmail.com>" . "\r\n";
    $headers .= "cc: keya@gmail.com" . "\r\n";
    $headers .= "bcc: keya@gmail.com" . "\r\n";
    $headers .= "reply-to: keya@gmail.com" . "\r\n";
    mail($to, $sub, $msg, $headers);
?>
