<?php
include 'connection.php';

if(isset($_POST['submit'])) {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $pass=$_POST['password'];
$sql = "INSERT INTO `crude` (name,email,mobile,password) VALUES ('$name','$email','$mobile','$pass')";
$result= mysqli_query($conn,$sql);

if($result) {
echo "DATA INSERT SUCCESSFULLY";
} else {
    // die(mysqli_error($conn));
    echo "Data not inserted";
}


}



?>










<!doctype html>
<html lang="en">

<head>
  <title>CRUDE OPRATION</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<form method="post">
  <div class="mb-3 col-6 m-4">
    <label>NAME</label>
    <input type="name" class="form-control" name="name">
  </div>
  <div class="mb-3 col-6 m-4">
    <label>EMAIL</label>
    <input type="text" class="form-control" name="email">
  </div>


  <div class="mb-3 col-6 m-4">
    <label>MOBILE</label>
    <input type="mobile" class="form-control" name="mobile">
  </div>

  <div class="mb-3 col-6 m-4">
    <label>PASSWORD</label>
    <input type="password" class="form-control" name="password">
  </div>
 
 
 
  <button type="submit" class="btn btn-primary m-5">Submit</button>
</form>
</body>

</html>