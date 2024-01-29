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
<h1 class="text-danger text-center">Fetch Data From Database</h1>
  </header>
<table class="table table-hover table-bordered m-2  text-center">
<tr class="bg-danger">
    <th class="text-warning">Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>DoB</th>
    <th>Father</th>
    <th>City</th>
    <th>Gender</th>
    <th>File</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","form");
$query="select * from application";

$query_fun=mysqli_query($conn,$query);

if (mysqli_num_rows($query_fun)>0)
{
foreach ($query_fun as $rows) {
?>

<tr>
<td class="bg-warning"><?=$rows['Id']; ?></td>
<td><?=$rows['Name']; ?></td>
<td><?=$rows['Email']; ?></td>
<td><?=$rows['Password']; ?></td>
<td><?=$rows['dob']; ?></td>
<td><?=$rows['father']; ?></td>
<td><?=$rows['city']; ?></td>
<td><?=$rows['gender']; ?></td>
<td><?=$rows['file']; ?></td>
</tr>
<?php

  }
}
else {
    echo "Data Is Not Found";
}?>




</table>
</body>

</html>