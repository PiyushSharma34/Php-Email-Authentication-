<?php
include 'connection.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crude opration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
a{
    text-decoration:none;
}

</style>
</head>
<body>
  <?php
  $sql = "select * from crude";

  $result = mysqli_query($conn,$sql);
  ?>
    <div class="container">
<button class="btn btn-info my-4"> <a href="user.php">Add user</a>

</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPRATIONS</th>
    

    </tr>
  </thead>
  <tbody>
    <?php


// if($result) {
while($row= mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile =$row['mobile'];
    $pass=$row['password'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$mobile.'</td>
    <td>'.$pass.'</td>
    <td>
    <button class="btn btn-warning text-danger"><a href="update.php">Update</a></button>
    <button class="btn btn-danger text-dark"><a href="delete.php? deleteid='.$id.'">Delete</a></button>


</td> 
  </tr>';
}






?>

  </tbody>
</table>
    </div>

</body>
</html>