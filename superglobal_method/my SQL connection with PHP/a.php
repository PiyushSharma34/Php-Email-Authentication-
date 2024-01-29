<?php
$servername='localhost';
$username='root';
$password='';
$database='adit';
//$db='create database adit';
//mysqli_query($conn, $db);
$conn= mysqli_connect($servername, $username, $password, $database);
$table="create table `student`
(`reg_no` INT(6),
`name` varchar(20),
`location` varchar(30))";


//$delete ='drop database adit';
//mysqli_query($conn, $delete);
//echo'connection started';
mysqli_query($conn, $table);
?>  