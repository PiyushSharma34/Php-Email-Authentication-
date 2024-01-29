<input type="text" placeholder="name" name="name"><br><br>
<input type="text" placeholder="lastname" name="lname"><br><br>
<input type="text" placeholder="email" name="email"><br><br>
<input type="number" placeholder="phone" name="mobile"><br><br>
<input type="text" placeholder="city" name="city"><br><br>
<input type="text" placeholder="gender" name="gender"><br><br>
<input type="text" placeholder="course" name="course"><br><br>
<br>





<?php





$servername = "localhost";
$username = "root";
$password = "";
$db="piyush";

$conn = mysqli_connect($servername,$username,$password,$db);
if ($conn) {
echo "ok";
}
else {
    echo "no";
}

// $sql ="create database piyush";

// $data = mysqli_query($conn,$sql);
// if ($data) {
//    echo "db ok";
// } else {
//  echo "db is not ok";
// }

// $sql = "create table data (
// name varchar(30) not null,
// last_name varchar(30),
// s_email varchar(20),
// s_phone int not null,
// city varchar(30) not null,
// gender varchar(10) not null,
// course varchar(30) not null
// )";

// $table =mysqli_query($conn,$sql);

// if ($table) {
//    echo "table ok";
// } else {
// echo "table is not ok";
// }


?>