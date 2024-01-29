<?php
$server ="localhost";
$user ="root";
$pass="";
$db ="swati";
$conn = mysqli_connect($server,$user,$pass,$db);


if ($conn) {
echo "yes ";
}
else {
    echo "no";
}
?>

<!DOCTYPE html>
<html>
<body>
     
<h1>APPLICATION FORM</h1>
<form method="post">
    name :<input type="text" placeholder="name"name="sname"><br><br>
email :<input type="text" placeholder="email"name="semail"><br><br>
password :<input type="number" placeholder="password"name="spassword"><br><br>
father name :<input type="text" placeholder="father name"name="fname"><br><br>
mother name :<input type="text" placeholder="mother name"name="mothername"><br><br>

<input type="submit" name="save">


</form>










</body>
</html>

<?php
// db creation

// $sql = "CREATE DATABASE BHARADWAJ__";

// $output = mysqli_query($conn, $sql);
// if (!$output) {
//     echo "<br>DB Not Created";
// }else{echo "<br>DB Created";}

// $sql= "create table studentdata(
// name varchar(100) not null,
// email varchar(100)  not null,
// password int not null,
// father_name varchar(20),
// mother_name varchar(30)
// )";

// $table =mysqli_query($conn,$sql);

// if ($table) {
//     echo "table creayed";
// }
// else {
//     echo "table is not created";
// }

if(isset($_POST["save"])){
$name =$_POST["sname"];
$email =$_POST["semail"];
$pass =$_POST["spassword"];
$fname =$_POST["fname"];
$mname =$_POST["mothername"];

$sql = "INSERT INTO studentdata(name, email, password, father_name,  mother_name)
values('$name','$email', '$pass','$fname','$mnane')";

$output = mysqli_query($conn, $sql);

if ($output) {
    echo "<br>Inserted";
}else{echo "<br>Not Inserted";}}



?>










