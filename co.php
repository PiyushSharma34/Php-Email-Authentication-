
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body >
<h2  > APPLICATION FORM </h2>


<div>
<form  method="post">

<label for="sname"> NAME</label>
<input type="text" id="username" name="name" required ><br><br>

    <label for="fathername">FATHER NAME :</label>
    <input type="text" id="userfather" name="fname" required><br><br>
  
    
 
        <label for="mothername"> MOTHER NAME</label>
        <input type="text" id="usermother" name="mname" required ><br><br>
       
    
            <label for="gender"> GENDER</label>
            <input type="text" id="gendername" name="gendername" required ><br><br>


            <label for="email"> EMAIL</label>
            <input type="text" id="email" name="emailname" required ><br><br>
          

                <label for="COURSE"> COURSE</label>
                <input type="text" id="course" name="coursename" required ><br><br>
             


                <button type="submit" name="save">click me </button>

                


</form>

</div>

    
</body>
</html>


<?php
$ser ="localhost";
$user ="root";
$pass= "";
$db ="swati";


$conn= mysqli_connect($ser,$user,$pass,$db);

if ($conn) {
  echo "ok";
} else {
 echo "no";
}



// $table ="create table data1 
// (name varchar(40) not null, 
// father_name varchar(30),mother_name varchar(30), gender varchar(10),
// email varchar(50),course varchar(30) not null)";

// $tab = mysqli_query($conn,$table);

// if ($tab) {
//     echo "table successfully";
// } else {
//    echo "table unsuccessfylly";
// }

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gender = $_POST['gendername'];
    $email = $_POST['emailname'];
    $course =$_POST['coursename'];
    
    $sql = "INSERT INTO data1(name,father_name, mother_name, gender, email,course)
    values('$name','$fname','$mname', '$gender','$email','$course')";
    
    $output = mysqli_query($conn, $sql);
    
    if ($output) {
        echo "<br>Inserted";
    }else{echo "<br>Not Inserted";}
    }




?>




















