<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records of Allahabad students!</h2>
    <?php
    $conn = mysqli_connect("localhost","root","","allahabad-nsti")or die("connection failed");
    $sql="select * from student";
    $result = mysqli_query($conn,$sql)or die("query unsuccesful.");
    if(mysqli_num_rows($result) > 0) {
    ?> 

    <table cellpadding="10px">
        <thead>
        <th>S_NAME</th>
        <th>S_ID</th>
        <th>S_CONTACT</th>
        <th>S_ADDRESS</th>
        <th>Action</th>
        </thead>
        <tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
?>

            <tr>
                <td><?php echo $row['S_NAME']; ?></td>
                <td><?php echo $row['S_ID']; ?></td>
                <td><?php echo $row['S_CONTACT']; ?></td>
                <td><?php  echo$row['S_ADDRESS']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['S_ID']; ?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
   
    <?php }else{
       echo "<h2>No Record found</h2>";
    } 
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
