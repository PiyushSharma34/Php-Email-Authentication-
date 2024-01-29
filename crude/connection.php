<?php
$conn= new mysqli('localhost','root','','crudeopration');
if (!$conn) 
{
die(mysqli_error($conn));
}
else{
    echo " connect";
}

?>