<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
    <table class="table bordered table-success m-4 
    col-md-10 table-hover text-center font-weight-bold float-lg-right ">
<tr>
<th>SR NO.</th>
<th>NAME</th>
<TH>FATHER NAME</TH>
<TH>MOTHER name</TH>
<TH>EMAIL</TH>
</tr>
<tr>
<td>1</td>
<td>PIYUSH</td>
<td>rakesh</td>
<td>PIYUSH</td>
<td>rakesh</td>
</tr>
<tr>
    <td class="bg-danger text-warning">2</td>
    <td>PIYUSH</td>
    <td>rakesh</td>
    <td>PIYUSH</td>
    <td>rakesh</td>
    </tr>


    </table>
   
   
    <h1 class="text-center text-warning ">APPLICATION FROM </h1>
<form method ="post">
    <div class="m-4 bg-warning ">

<div class="col-6 FORM-GROUP">
<lable>NAME</lable>
<input type="text" placeholder="NAME" class="form-control text-center mt-2 " required autocomplete="on" name="sname">
</div>

<div class="col-6 FORM-GROUP">
    <lable>LAST NAME</lable>
    <input type="text" placeholder="LAST NAME" class="form-control text-center mt-2" required autocomplete="on" name="lname">
    </div>
    <div class="col-6 FORM-GROUP">
        <lable>father name</lable>
        <input type="text" placeholder="FATHER NAME" class="form-control text-center mt-2" name="fname">
        </div>

        <div class="col-6 FORM-GROUP">
            <lable>EMAIL</lable>
            <input type="text" placeholder="EMAIL" class="form-control text-center mt-2" name="email">
            </div>
            <div class="col-6 FORM-GROUP">
                <lable>PASSWORD</lable>
<input type="number" placeholder="password" class="form-control text-center mt-2" name="pass">
</div>



<div class="col-6 FORM-GROUP">
<lable>DATE</lable>
<input type="date"class="form-control text-center mt-2" name="date">
</div>

<button type="button" class="btn btn-primary m-4" name="save">submit</button>

</div>
</form>
</body>
</html>

<?php


// for connection to the database

$server = "localhost";
$user ="root";
$pass = "";
$db ="swati";

$conn =   mysqli_connect($server,$user,$pass,$db);
if ($conn) {
    echo "connection is successfully";
}
else {
    echo "connection is no successfully";
}

echo "<br>";

if(isset($_POST['save'])){
$name =$_POST['sname'];
$lname =$_POST['lname'];
$fname =$_POST['fname'];
$email =$_POST['email'];
$pass =$_POST['pass'];
$date =$_POST['date'];


$sql = "INSERT INTO rahulsharma(name,last_name, father_name, email,password,date)
values('$name','$lname','$fname','$email','$pass','$date')";

$output = mysqli_query($conn, $sql);

if ($output) {
    echo "<br>Inserted";
}else{echo "<br>Not Inserted";}
}



?>