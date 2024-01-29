




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
  body {
    display: block;
    margin: 8px;
    background-color: #dddddd;
}
.feedback-form {
  max-width: 400px;
  margin: 0 auto;
}

.feedback-form label,
.feedback-form input,
.feedback-form textarea,
.feedback-form button {
  display: block;
  width: 100%;
  margin-bottom: 10px;
  border-radius: 5px;
}

.feedback-form label {
  font-weight: bold;
}

.feedback-form input,
.feedback-form textarea {
  padding: 5px;
  border: 1px solid #ccc;
  /* background:pink; */
  outline:2px solid black;
  font-size:15px;
}

.feedback-form button {
  padding: 10px;
  background-color: #4286f4;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius:10px;
  margin-top:20px;
}
h2{
text-align:center;
text-transform:uppercase;
font-family:sans-serif;


}
.div{
border:3px solid black;
height:300px;
padding-top:35px;
border-radius:10px;
background-color: #c2d1de;
width:500px;
position: absolute;
left: 440px;
box-shadow: 5px 10px #888888;

}

</style>




</head>
<body>
 <h2>your feedback is very important for us &#x1F60A;</h2>



<div class="div">

<form class="feedback-form" action="" method="POST">
        <label for="To">To:</label>
        <input type="text" id="To" name="To" required>
        
        <label for="Body">Body:</label>
        <input type="Body" id="Body" name="Body" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit" name="onclick">Submit</button>
      </form>
      </div>


</body>
</html>

<?php
include 'connection.php';
echo "<br>";
if (isset($_POST['onclick'])) {
  $to=$_POST['To'];
$body=$_POST['Body'];
$message=$_POST['message'];

$sql="INSERT INTO sss (To_the,Body,message) values ('$to','$body','$message')";

$insert=mysqli_query($conn,$sql);

if($insert) {
echo "data insert successfully";
} else {
  echo "data is not insert successfully";
}

$to=$_POST['To'];
$subject=$_POST['Body'];
$body=$_POST['message'];
$sender="From : nishanksharma34@gmail.com";

if(mail($to,$subject,$body,$sender)){
    echo "mail send";
}
else {
    echo "mail is noyt send";
}
}




?>










