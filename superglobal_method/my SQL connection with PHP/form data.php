
<!DOCTYPE html>
<body>
    <form method="post">
Name: <input type="text" name="name"><br><br>
mail: <input type="text" name="mail" ><br><br>
mobile: <input type="text" name="mobile"><br><br>
<input type="submit" name="click">
</form>
<?php
$server="localhost";
$user= "root";
$password="";
$database="form data";
$conn=mysqli_connect($server,$user,$password, $database);
{
if(isset($_POST['click']))
$a =$_POST['name'];
$b =$_POST['mail'];
$c =$_POST['mobile'];
$query = "insert into stu_info(name, mail, mobile) values('$a','$b','$c')";
mysqli_query($conn,$query);
}
?>
</body>
</html>


