<?php

include "connection.php";

$id=$_GET['id'];

// echo $id;

// die();

$sql="delete from signuptable where sno='{$id}'";

$res=mysqli_query($conn,$sql);

if($res){
    echo '<script>
    alert("data has been removed")
    location.replace("http://localhost/email/read.php")
    </script>';
    // header("location: read.php");

}else{
    echo "not deleted";
}







?>