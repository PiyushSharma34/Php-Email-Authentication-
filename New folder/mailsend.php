<?php


// mail($to,$subject,$body,$headers)

$to="nishanksharma34@gmail.com";
$subject="Good Morning Team";
$body="Hello Piyush Bharadwaj. Good Morning ! My name is Mukesh Kumar Awasthi and I want to join You";
$headers = "From : bharadwajpiyush78@gmail.com";


if (mail($to,$subject,$body,$headers)) {
echo "Mail send Successfully";

}
else {
    
    echo "Mail Not Send ";
}



?>