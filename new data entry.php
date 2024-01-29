<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADIT ALLAHABAD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

    <form method="post">

  <div class="m-3  col-md-4">
    <label for="reg_no" class="form-label">Reg_no: </label>
    <input type="number" class="form-control" id="reg_no" name="Reg_No" placeholder="Registraion Number" required>
  </div>

  <div class="m-3 col-md-4">
    <label for="s_name" class="form-label">STUDENTS NAME </label>
    <input type="text" class="form-control" id="s_name" name="s_name" placeholder="STUDENT Name">
  </div>

  <div class="m-3 col-md-4">
    <label for="e_mail" class="form-label">STUDENTS EMAIL </label>
    <input type="text" class="form-control" id="e_mail" name="e_mail" placeholder=" STUDENTS EMAIL">
  </div>


  <div class="m-3  col-md-4">
    <label for="password" class="form-label">PASSWORD </label>
    <input type="number" class="form-control" id="password" name="password" placeholder="POSSWORD " required>
  </div>




  <div class="m-3  col-md-4">
    <label for="adh_no" class="form-label">ADHAAR NUMBER </label>
    <input type="number" class="form-control" id="adh_no" name="adh_no" placeholder="ADHAAR Number" required>
  </div>



  <div class="form-check m-3 ">
  <input class="form-check-input" type="radio" name="gender" id="male">
  <label class="form-check-label" for="male">
    MALE
  </label>
</div>
<div class="form-check m-3 ">
  <input class="form-check-input" type="radio" name="gender" id="female" >
  <label class="form-check-label" for="female">
FEMALE
  </label>
</div>

  <div class="m-3 col-md-4">
    <label for="f_name" class="form-label">FATHER NAME </label>
    <input type="text" class="form-control" id="f_name" name="f_name" placeholder="FATHER Name">
  </div>



  <div class="m-3 col-md-4">
    <label for="t_mobile" class="form-label">Mobile: </label>
    <input type="number" class="form-control" id="t_mobile" name="Mobile" placeholder="Mobile">
  </div>

  <div class="m-3 col-md-4">
    <label for="city" class="form-label">CITY</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="CITY">
  </div>


 
  <button type="submit" class="btn btn-outline-primary m-3" name="Onclick">Submit</button>
 
</form>





</body>
</html>

<?php
$server = "localhost";
$user  ="root";
$pass = "";
$db = "BHARADWAJ_3";

$conn =mysqli_connect($server,$user,$pass,$db);

if($conn){
echo "connection is successfully";
}
else {
    echo "connection is not successfully";
}

echo "<br>";

// db creation 
$sql= "create database BHARADWAJ_3";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "database create successfully";
}
else {
    echo "database is not  create successfully";
}


// create table

$sql = "create table allahabad (reg_no int not null primary key,
student_name varchar(50) not null,
student_mail varchar(50) not null,
password int not null,
adhar_no int not null,
gender varcha(10),
mobile int not null ,
nsti varchar(40)

)";

$output = mysqli_query($conn, $sql);

if (!$output) {
    echo "<br>Table not created";
}else{echo "<br>Table created";}

// insert records into adit table
if(isset($_POST['Onclick'])){
  $reg = $_POST['Reg_No'];
  $sname = $_POST['s_name'];
  $email = $_POST['e_mail'];
  $password = $_POST['password'];
  $adhno = $_POST['adh_no'];
  $gender = $_POST['gender'];
  $f_name = $_POST['f_name'];
  $Mobile = $_POST['Mobile'];
  $city = $_POST['city'];


}





?>
































