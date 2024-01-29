<?php

include "connection.php";

$id=$_GET['id'];

$sql="select * from signuptable where sno='{$id}'";

$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){

    While($row=mysqli_fetch_assoc($res)){


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
            <form method="post" action="update.php">

 <div class="form-group">
    <!-- <label>SNo</label> -->
    <input type="text" class="form-control"  placeholder="Enter your name" name="sno" value="<?php echo $row['sno'];   ?>" hidden>
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="name" value="<?php echo $row['name'];   ?>">
  </div>


  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="fmail" value="<?php echo $row['email'];   ?>">
    
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile no" name="fcontact" value="<?php echo $row['mobile'];   ?>">
    
  </div>
 
</br>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php }
} ?>
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