<?php
$to="bharadwajpiyush78@gmail.com,vinaykumarstp1634@gmail.com,sharmanishank163@gmail.com";
$subject="happy new year";
$body="i love you";
$sender="From : nishanksharma34@gmail.com";

if(mail($to,$subject,$body,$sender)){
    echo "mail send";
}
else {
    echo "mail is not send";
}

?>