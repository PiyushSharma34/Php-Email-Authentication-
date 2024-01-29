

<!DOCTYPE html>
<html lang>
<body>
  <form action ="" method ="post">
 <input type="text" name="FNAME" placeholder="FNAME"><br><br>
 <input type="text" name="LNAME" placeholder="LNAME"><br><br>
<INPUT TYPE="text" name="AGE" placeholder="AGE"><br><br>
<INPUT TYPE="number" name="mobile" placeholder="mobile"><br><br>
<input type="submit" name="onclick" value="save"><br><br>
<button type="button" name="delete">delete</button>
  </form>
<?php

$server ="localhost";
$user = "root";
$pass ="";
$db ="swati";

$con = mysqli_connect($server,$user,$pass,$db);

if ($con) {
echo "ok";
}
else {
    echo "no";
}

// $db ="demo";
// $sql ="create database $db";

// $data=mysqli_query($con,$sql);



// if ($data) {
//  echo "yes";
// }



if(isset($_POST['onclick'])){
$fname=$_POST['FNAME'];
$lastname=$_POST['LNAME'];
$AGE=$_POST['AGE'];
$mobile =$_POST['mobile'];




// create a table
// $sql = "CREATE TABLE adit11(
//    FNAME varchar(100)not null,
//  LNAME varchar(50) not null,
//    AGE int not null,
//     MOBILE INT not null
//     )";
// $output = mysqli_query($con, $sql);

// if (!$output) {
//     echo "<br>Table not created";
// }else{echo "<br>Table created";}



$query ="INSERT INTO adit1 (FNAME,LNAME,AGE,MOBILE) VALUES ('$fname','$lastname','$AGE','$mobile')";

$data =mysqli_query($con,$query);

if ($data) {
  echo "data is inserted";
}
else {
  echo "data is not inserted";
}
}

// // delete
if(isset($_POST['delete'])){
  $fname = $_POST['FNAME'];

$d_sql = "DELETE FROM adit1 WHERE adit1.reg_no=$reg";
$output = mysqli_query($con, $d_sql);
if ($output) {
    echo "<br>Record Deleted";
}else{echo "<br>Not Deleted";}
}








?>









</body>
</html>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>















