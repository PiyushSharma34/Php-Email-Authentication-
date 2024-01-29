<?php
session_start();
include "connection.php";

if(isset($_POST['submit'])){


    $email=$_POST['fmail'];
    $pass=$_POST['pass'];



    $sql="select * from signuptable where email='$email' and status='active'";

    $res=mysqli_query($conn,$sql);

    // $out=mysqli_num_rows($res);

    // echo $out;

    // die();


    if(mysqli_num_rows($res)>0){

    $row=mysqli_fetch_assoc($res);

    // print_r($row) ."<br>";

     $passwd=$row['password'];

    //  echo $passwd;

    // die();

     $decrypt=password_verify($pass,$passwd);

    //  var_dump($dum);

     if($decrypt){

      if(isset($_POST['remember'])){

        setcookie('emailcookie',$email);
        setcookie('passcookie',$pass);

        $_SESSION['username']=$row['name'];
        header("location: home.php");


      }else{

        $_SESSION['username']=$row['name'];
        header("location: home.php");

      }
      }
     else{
        echo "error";
     }

    
    }else{
        echo "not a valid credentials";
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
  <div class="container">
    <div class="row">
        <div class="col-6">
            <form method="post" action="">
<p>

<?php

    if(isset($_SESSION['alert'])){
        echo $_SESSION['alert'];
    }else{
        echo $_SESSION['message']="you are logged out";
    }

?>


</p>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"   placeholder="Enter email" name="fmail"   value="<?php if(isset($_COOKIE['emailcookie'])){
      echo $_COOKIE['emailcookie'];
    }  ?>">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" value="<?php if(isset($_COOKIE['passcookie'])) {
      echo $_COOKIE['passcookie'];
    }   ?>">
  </div>
</br>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="remember" id="id1">
    <label class="form-check-label" for="id1" >Remember Me</label>
  </div></br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form></br>

<button class="btn btn-danger">forget password<a href="forget.php">Click here</a></button>
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