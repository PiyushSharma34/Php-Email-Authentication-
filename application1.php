<?php

$server ="localhost";
$user = "root";
$pass ="";
$db ="swati";

$con = mysqli_connect($server,$user,$pass,$db);

if ($con) {
echo "ok";
}
else {
    echo "no";
}




if(isset($_POST['oncilik'])){
    $fname=$_POST['FNAME'];
    $lastname=$_POST['LNAME'];
    $AGE=$_POST['AGE'];
    $mobile =$_POST['mobile'];
    
    
    
    
    // create a table
    // $sql = "CREATE TABLE adit1(
    //    FNAME varchar(100)not null,
    //  LNAME varchar(50) not null,
    //    AGE int not null,
    //     MOBILE INT not null
    //     )";
    // $output = mysqli_query($con, $sql);
    
    // if (!$output) {
    //     echo "<br>Table not created";
    // }else{echo "<br>Table created";}
    
    
    
    $query ="INSERT INTO adit1 (FNAME,LNAME,AGE,MOBILE) VALUES ('$fname','$lastname','$AGE','$mobile')";
    
    $data =mysqli_query($con,$query);
    
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
 
 NAME:<input type="text" id="fname" name="FNAME" ><br><br>

 LAST NAME :<input type="text" id="lname" name="LNAME" ><br><br>

 AGE:<input type="number" name="AGE" ><br><br>

 mobile :<input type="number"name="mobile" ><br><br>
<button name="oncilik">save</button>

</form>  



</body>
</html>

