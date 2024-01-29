<?php
$stu_name = $_POST['sname'] ;
 $stu_id = $_POST['sid'] ;
 $stu_contact = $_POST['scontact'] ;
 $stu_address = $_POST['saddress'] ;
 $conn = mysqli_connect("localhost","root","","allahabad-nsti")or die("connection failed");
 $sql = "UPDATE student SET S_NAME = '{$stu_name}',S_ID = '{$stu_id}',S_CONTACT = '{$stu_contact }',S_ADDRESS = '{$stu_address}'WHERE S_ID= {$stu_id}";
$result = mysqli_query($conn,$sql)or die("query unsuccesful.");
header("Location : http://localhost/crud/index.php");
 mysqli_close($conn);
?>

