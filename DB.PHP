<?php
$server = "localhost";
$user="root";
$pass="";
$db ="swati";
$con=mysqli_connect($server,$user,$pass,$db);

if ($con) {
    echo "ok";
}else {
    echo "no";
}

?>