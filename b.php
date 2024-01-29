<?php
$server="localhost";
$user="root";
$pass="";
$db="swati";

$conn=mysqli_connect($server,$user,$pass,$db);

if ($conn) {
   echo "divice ready";
} else {
    echo "divice not ready";
}
// Create the SQL query to create the table
// $sql = "CREATE TABLE app (
//     id INT(6) AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     password VARCHAR(50) NOT NULL,
//     dob DATE NOT NULL,
//     age INT(3) NOT NULL,
//     address VARCHAR(100) NOT NULL,
//     fathername VARCHAR(30) NOT NULL,
//     mothername VARCHAR(30) NOT NULL
// )";
// $table=mysqli_query($conn,$sql);

// if ($table) {
//  echo "table is ready";
// } else {
//     echo "table is not  ready";
// }

if (isset($_POST['submit'])) {
    // Retrieve the form data
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['date'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];

    // Create the SQL query to insert the data into the database
    $sql = "INSERT INTO app (firstname, lastname, email, password, dob, age, address, fathername, mothername)
            VALUES ('$firstname', '$lastname', '$email', '$password', '$dob', '$age', '$address', '$fathername', '$mothername')";

    // Execute the query
    // if ($conn->query($sql) === TRUE) {
    //     echo "Data inserted successfully";
    // } else {
    //     echo "Error inserting data: " . $conn->error;
    // }

$insert=mysqli_query($conn,$sql);
if ($insert) {
    echo "Data inserted successfully";
} else {
    echo "Data not inserted successfully";
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
<h2>HTML Forms</h2>

<!-- if we want to redirect a.php page then give action name of a.php -->

<form action="" method="post">
 
  NAME:<input type="text" id="fname" name="fname" required><br><br>

  LAST NAME :<input type="text" id="lname" name="lname" required><br><br>

  Email:<input type="text" id="email" name="email" value="@gmail.com" required><br><br>


  Password:<input type="text" id="password" name="password" required><br><br>

  Date Of Birth:<input type="date" id="date" name="date" required><br><br>

  Age:<input type="number" id="age" name="age" required><br><br>

  Address:<input type="text" id="adderss" name="address" required><br><br>


  FATHER NAME:<input type="text" name="fathername" required><br>

  MOTHER NAME :<input type="text"name="mothername" required><br><br>


  <button name="submit">submit</button>

</form> 
</body>
</html>