<?php

// echo "<pre>";
// print_r($_POST);
// echo  "</pre>";

$host="localhost";
$user="root";
$passwprd="";
$db="form";

$conn=mysqli_connect($host,$user,$passwprd,$db);
if ($conn) {
echo "Connection is  ready";
}else {
    echo "NO Connection is ready";
}

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $father=$_POST['father'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $city=$_POST['city'];


$insert="insert into appli(name,father,email,password,dob,city) values('$name','$father','$email','$password','$dob','$city')";
$data=mysqli_query($conn,$insert);
if ($data) {
    echo '<script>';
    echo 'alert("Data Insert Successfully inserted");';
    echo '</script>';
} else {
    echo '<script>';
    echo 'alert("Data Insertion Failed");';
    echo '</script>';
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
    <fieldset><legend>  <h3>Application Form</h3></legend>
<form action="" method="POST">
Name : <input type="text" name="name" required ><br><br>
Father Name: <input type="text" name="father" required><br><br>
Email :<input type="text" name="email" required><br><br>
Password :<input type="password" name="password" required><br><br>
DOB :<input type="date" name="dob" required><br><br>

<label for="city" name="city">City</label>
<select name="city">
<option value="Rura">Rura</option>
<option value="Allahabad">Allahabad</option>
<option value="Kanpur">Kanpur</option>


</select>

<input type="submit" name="submit">

</form>


</fieldset>

<table border=2 style="background:yellow";>
<tr>
    <th>Id</th>
    <th>Name</th>
<th>Father</th>
<th>Email</th>
<!-- <th>Password</th> -->
<th>Dob</th>
<th>City</th>
</tr>
<?php
$select="select * from appli";
$query=mysqli_query($conn,$select);

if (mysqli_num_rows($query)>0)
 {
foreach ($query as $rows) 
{
 ?> 
 
 <tr>
    <td><?= $rows['id']; ?></td>
    <td><?= $rows['name']; ?></td>
    <td><?= $rows['father']; ?></td>
    <td><?= $rows['email']; ?></td>
    <!-- <td><?= $rows['password']; ?></td> -->
    <td><?= $rows['dob']; ?></td>
    <td><?= $rows['city']; ?></td>

 </tr>
 <?php


}}
else {
    echo "No Data Found";
}
?>


</table>





</body>
</html>