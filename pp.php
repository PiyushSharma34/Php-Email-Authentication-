<?php
$server="localhost";
$user="root";
$password="";
$database="try";


$conn=mysqli_connect($server,$user,$password,$database);
if ($conn) {
    echo "connection is ready";
} else {
    echo "connection is not ready";
}
$sql ="create table trytable (name varchar(25) not null, email varchar(25),password varchar(25) not null)";
$table=mysqli_query($conn,$sql);
if ($table) {
   echo "ready";
} else {
    echo "not ready";
}
if (isset($_POST['save'])) {
$name='name';
$email='email';
$password='password';

$sql= "insert into trytable(name,email,password)  values('$name','$email','password')";
$insert=mysqli_query($conn,$sql);
if ($insert) {
    echo "data insert ";
} else {
    echo "data not  insert ";
}



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post">
    Name<input type="name" name="name"><br><br>
    Email<input type="email" name="email"><br><br>
    Password<input type="password" name="password"><br><br>
<button type="submit" name="save">save</button>







    </form>
    
</body>
</html>