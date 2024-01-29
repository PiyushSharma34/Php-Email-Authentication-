<?php
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
?>
<table border=4 cellpadding="3">
<tr>
    <th>NAME</th>
    <th>FATHER NAME</th>
    <th>MOTHER NAME</th>
    <th>COURSE</th>
</tr>

<?php
$query ="select * from try";
 $data =mysqli_query($conn,$query);
$result =mysqli_num_rows($data);
if($result){
    while ($row=mysqli_fetch_array($data)) {
       ?>
       <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["fathername"]; ?></td>
        <td><?php echo $row["mothername"]; ?></td>
        <td><?php echo $row["course"]; ?></td>
    
    
    </tr>
       <?php
    }
}
else {
    ?>

    <tr>
<td>no record found</td>

    </tr>
    <?php

}

?>
</table>

<button><a href="appl.php">HOME PAGE</a></button>
