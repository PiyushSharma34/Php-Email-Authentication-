<?php
include "connection.php";

if(isset($_POST['submit'])){

$email=$_POST['fmail'];

$sql="select * from signuptable where email='{$email}'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_assoc($result);

$key=$row['uniquekey'];
$name=$row['name'];

// echo $name;

// die();

    $to=$email;
    $subject="Reset Password";
    $body="hi $name click here to reset your password http://localhost/email/reset.php?id=$key";
    $sender="From :nishanksharma34@gmail.com";

    if(mail($to,$subject,$body,$sender)){
        echo "check your mail to reset password";
    }else{
        echo "mail not sent";
    }




}else{
    echo "email not found";
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

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
<div class="contaier">
    <div class="row">
        <div class="col-5 mx-2">
            <form action="" method="post">
            <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="fmail">
    
  </div></br>
  <button type="submit" class="btn btn-warning" name="submit">Send</button>

            </form>
        </div>
    </div>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>