<?php
    $receiving_email_address = 'hello@alphanalytix.com';
    $header = "From:".$_POST['email']." \r\n";
    $header .= "Cc:jahaziel@alphanalytix.org, frenel@alphanalytix.org, jehu@alphanalytix.org, kaelreyes12@hotmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    mail($receiving_email_address,$_POST['subject'],$_POST['message'],$header);
?>
