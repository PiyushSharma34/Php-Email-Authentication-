<?php
$server="localhost";
$user="root";
$pass="";
$db ="swati";
$conn= mysqli_connect($server,$user,$pass,$db);
if ($conn) {
 echo "ok";
} else {
 echo "not ok";
}



$select = "select * from details";
$result =mysqli_query($conn, $select);

// db creation
// $db = "create database details";
// $check = mysqli_query($conn,$db);
// if ($check) {
//   echo "db ok";
// } else {
// echo "db is no ok";
// }

$sqp= "create table details(name varchar(200) not null,city varchar(30) not null,class varchar(30) not null ,mobi)"



?>
<!DOCTYPE html>
<html>
<body>
<h1>CRUD TABLE</h1>
<table border='2px solid' width='95%'>
<tr>
<th>Name</th>
<th>City</th>
<th>Class</th>
<th>Contact</th>
</tr>

<?php
while($data = mysqli_fetch_array($result)){
echo '<tr>';
echo '<td>'.$data['name'].'</td>';
echo '<td>'.$data['city'].'</td>';
echo '<td>'.$data['class'].'</td>'; 
echo '<td>'.$data['mobile'].'</td>';
echo '</tr>';}

?>

</table>
<hr>
<h1>op form</h1>
<form method = 'post'>
Name : <input type = 'text' name = 'name'><br><br>
Enter your City : <input type ='text' name = 'location'><br><br>
Class : <input type = 'text' name = 'subject'><br><br>
Mobile ( 10 digit mpobile number) : <input type='number' name = 'phone'><br><br>
<input type = 'submit'  name = 'submit'>

</form>
<!-- 
echo '<button><a href = 'update.php'>Update</a></button>';
echo '<button><a href = 'delete.php'>Delete</a></button>'; -->



<?php

if(isset($_POST['submit']))
{
$a = $_POST['name'];
$b = $_POST['location'];
$c = $_POST['subject'];
$d = $_POST['phone'];

$e = "insert into details(name, city, class,mobile) values('$a', '$b', '$c', '$d')";
$pp= mysqli_query($conn, $e);
if ($pp) {
 echo "ok";
} else {
echo "not ok";
}

}


?>

</body>
</html>