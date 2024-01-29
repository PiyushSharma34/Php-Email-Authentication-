<?php
session_start();
include "connection.php";

if(isset($_GET['id'])){

    $key=$_GET['id'];

    // echo $key;

    $sql="update signuptable set status='active' where uniquekey='$key'";

    $res=mysqli_query($conn,$sql);

    if($res){
        if(isset($_SESSION['alert'])){
            $_SESSION['alert']="account updated successfully";
            header("location: login.php");
        }else{
            $_SESSION['alert']="logged out";
            header("location: login.php");
        }
        
    }else{
        $_SESSION['alert']="account not acctivated";
            header("location: signup.php");
    }



}

?>