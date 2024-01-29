<?php
session_start();
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
<div class="container">
    <div class="row">
        <div class="col-6">
            <form method="post" action="">

 <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="fname">
    
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="fmail">
    
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile no" name="fcontact">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-enter Password" name="cpass">
  </div></br>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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

<?php

include "connection.php";

if(isset($_POST['submit'])){

    $name=$_POST['fname'];
    $email=$_POST['fmail'];
    $contact=$_POST['fcontact'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    $passwd=password_hash($pass,PASSWORD_DEFAULT); //encrypting password

    $key=bin2hex(random_bytes(12)); //generating random code

    // echo $key;

    // die();




    $sql="select * from signuptable where email='$email'";

    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){
        echo '<script>
        alert("mail already exists")
        </script>';
    }else{

       if($pass===$cpass){
        $sql1="insert into signuptable(name,email,mobile,password,uniquekey,status)values('$name','$email','$contact','$passwd','$key','inactive')";

        $res1=mysqli_query($conn,$sql1);

        if($res1){
            $to=$email;
            $subject="activation mail";
            $body="hello $name click here to activate your account http://localhost/email/activate.php?id=$key";
            $sender="From: nishanksharma34@gmail.com";

            if(mail($to,$subject,$body,$sender)){
                $_SESSION['alert']="check your email to activate account";
                header("location: login.php");
            }else{
                echo "nahi gaya";
            }

        }
       }else{
        echo "password not same";
       }



    }

   




}







?>