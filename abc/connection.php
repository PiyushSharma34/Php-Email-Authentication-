<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "swati";

$sql = mysqli_connect($host, $user, $password, $db);

if ($sql === false) {
    die("Connection error: " . mysqli_connect_error());
}



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];


    $check="select email from confirm where email = '$email'";
    $mail=mysqli_query($sql,$check);
    if (mysqli_num_rows($mail)>0) {
        echo "<script>alert('email already have');</script>";
        $data = "INSERT INTO confirm (name, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($sql, $data);
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);
        
        $insert = mysqli_stmt_execute($stmt);
        
        if ($insert) {
            echo "<script>alert('Data inserted');</script>";
            // header("location:piyush.php");
        } 
    }



// Basic password validation
if ($password !== $confirmPassword) {
    echo "<script>alert('Password is not the same');</script>";
    exit;
}

else {
    echo "<script>alert('Error: " . mysqli_error($sql) . "');</script>";
    // header("location:Applicato.php");

}

}

?>
