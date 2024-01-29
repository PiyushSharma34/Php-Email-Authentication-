<?php

include 'connection.php';

if (isset($_GET['deletid'])) {
   $id=$_GET['delete'];

   $sql="delete  from `crude` where id =$id";
   $result =mysqli_query($conn,$sql);
   if ($result) {
echo "deleted successfully";
   }
}








?>