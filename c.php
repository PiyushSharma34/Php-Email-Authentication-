<?php
include 'connection.php';
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// if (Password==CPassword) {
//    echo "data insert";
// }
// else{
//     echo "password not match";
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="feedback-form" action="" method="POST">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required><br><br>
        
        <label for="Email">Email:</label>
        <input type="Email" id="Email" name="Email" required><br><br>
        
        <label for="Password">Password:</label>
        <input for="Password" id="Password" name="Password" required><br><br>
        
        <label for="CPassword">Confirm Password:</label>
        <input for="CPassword" id="CPassword" name="CPassword" required><br><br>
        
        <button type="submit" name="onclick">Submit</button>
      </form>





</body>
</html>