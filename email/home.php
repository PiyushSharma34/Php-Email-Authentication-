<?php
session_start();


if(isset($_SESSION['username'])){

}else{
    header("location: login.php");
}

?>

<button class="btn btn-danger"><a href="logout.php">Logout</a></button>

<?php echo $_SESSION['username'];  ?>