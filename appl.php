<!-- <?php
if (isset($_FILES["image"])) {
echo "<pre>";
print_r($_FILES);
echo "</pre>";
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
<input type="file" name="image" id="file">
<input type="submit">
</form>
</body>
</html> -->

<?php
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$host ="localhost";
$user="root";
$pass="";
$db="sunar";
$conn =mysqli_connect($host,$user,$pass,$db);

if ($conn) {
 echo "connection is ready";
} else {
    echo "connection is not  ready";
}


// $alter = "alter table try add column course varchar(255) not null";
// $aa=mysqli_query($conn,$alter);

// if ($aa) {
//     echo "yess";
// } else {
//  echo "noooo";
// }



if (isset($_POST["oncilik"])) {
    $name=$_POST["name"];
    $father=$_POST["fathername"];
    $mother=$_POST["mothername"];
    $course=$_POST["course"];
   
    $query ="INSERT INTO try (name,fathername,mothername,course) VALUES ('$name','$father','$mother','$course')";
    
    $data =mysqli_query($conn,$query);
    
    if ($data) {
      echo "data is inserted";
    }
    else {
      echo "data is not inserted";
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

<form action="" method="post">
NAME:<input type="name" name="name"><br>  
FATHER NAME: <input type="text" name="fathername"><br><br>
MOTHER NAME: <input type="text" name="mothername"><br>
COURSE: <input type="text" name="course">
<button name="oncilik">save</button>
<button><a href="view.php">view</a></button>

</form>
</body>
</html>
