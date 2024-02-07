<?php
    $mailTo = "godwinchuks032@gmail.com";
    $subject = "Congratulation!, you have been offered a role";
    $body = "We are glad to welcome you in our Team!";
    $headers = "from: modestychuks@gmail.com";

    if (mail($mailTo, $subject, $body, $headers))
    {
        echo "We hope tpo you quickly join our team!";
    }
    else
    {
        echo "Tell us when you can Resume!";
    }
?>