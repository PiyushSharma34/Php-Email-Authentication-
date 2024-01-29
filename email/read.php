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
    <?php 
    
    include "connection.php";

    $sql="select * from signuptable";

    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){

     

    
    ?>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Key</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
   
  </thead>
  <tbody>
  <?php
    while($row=mysqli_fetch_assoc($res)){
?>
    <tr>
      <td><?php echo $row['sno'];  ?></td>
      <td><?php echo $row['name'];  ?></td>
      <td><?php echo $row['email'];  ?></td>
      <td><?php echo $row['mobile'];  ?></td>
      <td><?php echo $row['uniquekey'];  ?></td>
      <td><a href="edit.php?id=<?php echo $row['sno'];  ?>">edit</a> </td>
      <td><a href="delete.php?id=<?php echo $row['sno'];  ?>">delete</a></td>
    </tr>
    <?php } ?>
  </tbody> echo
</table>
<?php  } ?>
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