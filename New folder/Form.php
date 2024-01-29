<?php
 
// echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";
$host="localhost";
$user = "root";
$password="";
$db="Form";

$conn=mysqli_connect($host,$user,$password,$db);

if ($conn) {
echo "Connection is successfully";
}
else {
echo "connection is nooot";
}

// $database="create database Form";

// $query=mysqli_query($conn,$database);

// if ($query) {
//   echo "Data created successfully";
// }
// else {
//   echo "database Not create";
// }

// $sql = "CREATE TABLE Application(
//   Id INT not null,
//    Name varchar(100)not null,
//  Email varchar(50) not null,
//    Password int not null,
//     dob date not null
//     )";
// $output = mysqli_query($conn, $sql);

// if (!$output) {
//     echo "<br>Table not created";
// }else{echo "<br>Table created";}


// $sql="alter table Application add column gender varchar(200)";
// $data=mysqli_query($conn,$sql);

// if ($data) {
//   echo "add successfully";
// }
// else {
//   echo "add not";
// }

if(isset($_POST['save'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $dob =$_POST['dob'];
  $father=$_POST['father'];
  $city=$_POST['city'];
  $gender=$_POST['gender'];
  $file=$_POST['file'];



  $query ="INSERT INTO Application (Name,Email,Password,dob,father,city,gender,file) VALUES ('$name','$email','$password','$dob','$father','$city','$gender','$file')";

$data =mysqli_query($conn,$query);

if ($data) {
  echo "data is inserted";
}
else {
  echo "data is not inserted";
}
}



  

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<h1 class="text-danger text-center mt-4 border border-2 w-50 bg-warning border-danger">Application Form</h1>

<form action="" method="post" >

<div class="form-group m-3">
Name :<input type="text" class="form-control col-6 " placeholder="Name" name="name">
</div>

<div class="form-group m-3">
    Email :<input type="email" class="form-control col-6 " placeholder="E-mail" name="email" value="@gmail.com">
    </div>

    <div class="form-group m-3">
        Passwprd :<input type="password" name="password" class="form-control col-6 " placeholder="Password">
        </div>


        <div class="form-group m-3">
            DOB :<input type="date" class="form-control col-6 " name="dob">
            </div>
    

            <div class="form-group m-3">
            Father :<input type="text" class="form-control col-6 " name="father">
            </div>

<div class="form-group col-6 m-3">
<label for="City">Choose Your City</label>
  <select class="form-control " name="city">
    <option value="allahabad">Allahabad</option>
    <option value="rura">Rura</option>
    <option value="kanpur">Kanpur</option>
    <option value="akabarpur">Akabarpur</option>
    <option value="Prayag">Prayag Raj</option>
  </select>
</div>
            
<div class="form-group col-6 m-3">
<label for="gender">Gender</label>
  <select class="form-control " name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="others">Others</option>
    
  </select>
</div>
<label for="file">Upload Your File</label>
<input type="file" name="file" class="form-control col-6 m-3">
          

<button type="submit"  name="save" class="btn btn-outline-danger text-warning m-3">Save</button>




</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>