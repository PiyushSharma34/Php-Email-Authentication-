<?php
$stu_name = $_POST['name'] ;
 $stu_id = $_POST['id'] ;
 $stu_contact = $_POST['contact'] ;
 $stu_address = $_POST['address'] ;
 $conn = mysqli_connect("localhost","root","","allahabad-nsti")or die("connection failed");
 $sql = "INSERT INTO student(S_NAME,S_ID,S_CONTACT,S_ADDRESS) values ('{$stu_name}','{$stu_id}','{$stu_contact}','{$stu_address}')";
$result = mysqli_query($conn,$sql)or die("query unsuccesful.");
header("Location: http://localhost/crud/index.php");
 mysqli_close($conn);
?>