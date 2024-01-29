<?php

if(isset($_POST['submit'])){
$to=$_POST['to'];    
$subject=$_POST['sub'];  
$body=$_POST['msg'];
$sender="From: nishanksharma34@gmail.com.com";


if(mail($to,$subject,$body,$sender)){
    echo '<script>
    alert("mail sent successfully")
    </script>';
}else{
    echo '<script>
    alert("mail not sent")
    </script>';
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
<div class="container py-3">
    <div class="row">
        <div class="col-6">
            <h3 class="text-center">Send Free Email</h3>
        <form action="" method="post">

<div class="form-group">
    <label for="">To</label>
    <input type="text" class="form-control"  name="to">
</div>

<div class="form-group">
    <label for="">Subject</label>
    <input type="text" class="form-control" name="sub">
</div>

<div class="form-group">
    <label for="">Message</label>
    <input type="text" class="form-control" name="msg">
</div></br>

<button type="submit" class="btn btn-warning" name="submit">Send</button>
        </div>
    </div>
</div>





</form>
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