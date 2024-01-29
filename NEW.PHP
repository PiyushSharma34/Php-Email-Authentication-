<?php  include 'view1.php'; ?>

<table border="1px solid black">
    <tr>
<th>name</th>
<th>email</th>
<th>password</th>
<th>father name</th>
<th>mother name</th>
</tr>

</table>
<?php
$select ="select * from studentdata";

$data =mysqli_query($conn,$select);
$result = mysqli_num_rows($data);


while ($res =mysql_fetch_array($data)) {
    echo $res['name']."<br>";
}









?>