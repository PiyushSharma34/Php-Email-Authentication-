

<?php

if (isset($_FILES['file'])) {
    
    
  echo "</pre>";
    print_r($_FILES);
    echo "</pre>";




$temp =$_FILES['file']['name'];
$type =$_FILES['file']['type'];
$tem_name =$_FILES['file']['tmp_name'];


if (move_uploaded_file($tem_name,'aa.php'.$temp)) {
  echo "hfhgfhgf";
}

}






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file">

<button type="submit">click </button>





    </form>



</body>
</html>